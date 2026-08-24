<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::with('items.product')
            ->where('session_token', session()->getId())
            ->first();

        return view('cart.index', compact('cart'));
    }

    public function add(Request $request, Product $product)
    {
        $request->validate([
            'quantity' => ['required', 'integer', 'min:1'],
        ]);
        $quantity = $request->quantity;
        if (!$product->is_active || !$product->is_available) {
            return back()->with(
                'error',
                'This product is currently unavailable.'
            );
        }

        $cart = Cart::firstOrCreate([
            'session_token' => session()->getId(),
        ]);

        $item = $cart->items()
            ->where('product_id', $product->id)
            ->first();

        if ($item) {
            $item->increment('quantity', $quantity);
        }else {
            $cart->items()->create([
                'product_id' => $product->id,
                'quantity' => 1,
                'unit_price' => $product->price,
            ]);
        }

        return redirect()->route('cart.index');
    }

    public function increase(CartItem $item)
    {
        $item->increment('quantity');

        return redirect()->route('cart.index');
    }

    public function decrease(CartItem $item)
    {
        if ($item->quantity > 1) {
            $item->decrement('quantity');
        } else {
            $item->delete();
        }

        return redirect()->route('cart.index');
    }

    public function remove(CartItem $item)
    {
        $item->delete();

        return redirect()->route('cart.index');
    }
}
