<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function checkout()
    {
        $cart = Cart::with('items.product')
            ->where('session_token', session()->getId())
            ->first();

        if (!$cart || $cart->items->isEmpty()) {
            return redirect()->route('cart.index');
        }

        $total = $cart->items->sum(function ($item) {
            return $item->unit_price * $item->quantity;
        });

        return view('checkout', compact('cart', 'total'));
    }

    public function placeOrder(Request $request)
    {
        $request->validate([
            'customer_name' => ['required', 'string', 'max:255'],
            'customer_phone' => ['required', 'string', 'max:30'],
            'delivery_address' => ['required', 'string', 'max:1000'],
            'additional_info' => ['nullable', 'string', 'max:2000'],
        ]);

        $cart = Cart::with('items.product')
            ->where('session_token', session()->getId())
            ->first();

        if (!$cart || $cart->items->isEmpty()) {
            return redirect()->route('cart.index');
        }

        foreach ($cart->items as $item) {

            if (
                !$item->product ||
                !$item->product->is_active ||
                !$item->product->is_available
            ) {
                return redirect()
                    ->route('cart.index')
                    ->with(
                        'error',
                        'One or more products in your cart are no longer available. Please review your cart.'
                    );
            }
        }

        $order = DB::transaction(function () use ($cart, $request) {

            $productTotal = $cart->items->sum(function ($item) {
                return $item->unit_price * $item->quantity;
            });

            $order = Order::create([
                'order_reference' => 'ALI-' . strtoupper(Str::random(10)),
                'customer_name' => $request->customer_name,
                'customer_phone' => $request->customer_phone,
                'status' => 'PENDING',
                'product_total' => $productTotal,
                'delivery_fee' => 0,
                'final_total' => $productTotal,
                'pending_due_at' => now()->addMinutes(30),
                'delivery_address' => $request->delivery_address,
                'additional_info' => $request->additional_info,
            ]);

            $order->activities()->create([
                'action' => 'ORDER_PLACED',
                'description' => 'Customer placed the order.',
                'metadata' => [
                    'customer_name' => $request->customer_name,
                    'customer_phone' => $request->customer_phone,
                ],
            ]);

            foreach ($cart->items as $item) {

                $order->items()->create([
                    'product_id' => $item->product_id,
                    'product_name' => $item->product->name,
                    'quantity' => $item->quantity,
                    'unit_price' => $item->unit_price,
                    'subtotal' => $item->unit_price * $item->quantity,
                ]);
            }

            $cart->items()->delete();

            return $order;
        });

        return redirect()->route('order.success', $order);
    }

    public function success(Order $order)
    {
        $order->load('items');

        return view('order-success', compact('order'));
    }
}
