<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('items')
            ->latest()
            ->get();

        return view('admin.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $order->load([
            'items',
            'delivery',
            'payment',
            'activities.admin',
            'confirmedByAdmin',
            'cancelledByAdmin',
        ]);

        return view('admin.orders.show', compact('order'));
    }

    public function confirm(Order $order)
    {
        if ($order->status !== 'PENDING') {
            return back()->with(
                'error',
                'Only pending orders can be confirmed.'
            );
        }

        $adminId = session('admin_id');

        DB::transaction(function () use ($order, $adminId) {

            $order->update([
                'status' => 'CONFIRMED',
                'confirmed_by_admin_id' => $adminId,
                'confirmed_at' => now(),
            ]);

            OrderActivity::create([
                'order_id' => $order->id,
                'admin_id' => $adminId,
                'action' => 'ORDER_CONFIRMED',
                'description' => 'Order confirmed by admin.',
            ]);
        });

        return back()->with(
            'success',
            'Order confirmed successfully.'
        );
    }

    public function cancel(Request $request, Order $order)
    {
        $request->validate([
            'cancel_reason' => ['required', 'string', 'max:1000'],
        ]);

        if (!in_array($order->status, ['PENDING', 'CONFIRMED'])) {
            return back()->with(
                'error',
                'This order cannot be cancelled.'
            );
        }

        $adminId = session('admin_id');

        DB::transaction(function () use ($order, $adminId, $request) {

            $order->update([
                'status' => 'CANCELLED',
                'cancelled_by_admin_id' => $adminId,
                'cancelled_at' => now(),
                'cancel_reason' => $request->cancel_reason,
            ]);

            OrderActivity::create([
                'order_id' => $order->id,
                'admin_id' => $adminId,
                'action' => 'ORDER_CANCELLED',
                'description' => $request->cancel_reason,
            ]);
        });

        return back()->with(
            'success',
            'Order cancelled successfully.'
        );
    }
    public function outForDelivery(Order $order)
    {
        if ($order->status !== 'CONFIRMED') {
            return back()->with(
                'error',
                'Only confirmed orders can be sent out for delivery.'
            );
        }

        $adminId = session('admin_id');

        DB::transaction(function () use ($order, $adminId) {

            $order->update([
                'status' => 'OUT_FOR_DELIVERY',
            ]);

            OrderActivity::create([
                'order_id' => $order->id,
                'admin_id' => $adminId,
                'action' => 'OUT_FOR_DELIVERY',
                'description' => 'Order marked as out for delivery.',
            ]);
        });

        return back()->with(
            'success',
            'Order marked as out for delivery.'
        );
    }
    public function delivered(Order $order)
    {
        if ($order->status !== 'OUT_FOR_DELIVERY') {
            return back()->with(
                'error',
                'Only orders that are out for delivery can be marked as delivered.'
            );
        }

        $adminId = session('admin_id');

        DB::transaction(function () use ($order, $adminId) {

            $order->update([
                'status' => 'DELIVERED',
            ]);

            OrderActivity::create([
                'order_id' => $order->id,
                'admin_id' => $adminId,
                'action' => 'ORDER_DELIVERED',
                'description' => 'Order marked as delivered.',
            ]);
        });

        return back()->with(
            'success',
            'Order marked as delivered.'
        );
    }
}

