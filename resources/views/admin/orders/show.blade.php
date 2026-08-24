
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Order {{ $order->order_reference }} - Ali Africa
    </title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 900px;
            margin: auto;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
        }

        .status {
            display: inline-block;
            padding: 7px 12px;
            border-radius: 6px;
            font-weight: bold;
        }

        .pending {
            background: #fff3cd;
            color: #856404;
        }

        .confirmed {
            background: #d1ecf1;
            color: #0c5460;
        }

        .out {
            background: #cce5ff;
            color: #004085;
        }

        .delivered {
            background: #d4edda;
            color: #155724;
        }

        .cancelled {
            background: #f8d7da;
            color: #721c24;
        }

        .detail {
            margin-bottom: 15px;
        }

        .detail strong {
            display: block;
            margin-bottom: 5px;
        }

        .item {
            padding: 15px 0;
            border-bottom: 1px solid #ddd;
        }

        .item:last-child {
            border-bottom: none;
        }

        .total {
            font-size: 22px;
            font-weight: bold;
            margin-top: 20px;
        }

        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
        }

        button {
            border: none;
            padding: 11px 16px;
            border-radius: 6px;
            cursor: pointer;
            color: white;
            font-size: 14px;
        }

        .confirm {
            background: #198754;
        }

        .delivery {
            background: #0d6efd;
        }

        .delivered-button {
            background: #157347;
        }

        .cancel {
            background: #dc3545;
        }

        textarea {
            width: 100%;
            min-height: 80px;
            box-sizing: border-box;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        .back {
            display: inline-block;
            margin-bottom: 20px;
        }

        .message {
            padding: 12px;
            background: white;
            border-radius: 6px;
            margin-bottom: 15px;
        }

        .activity {
            padding: 15px 0;
            border-bottom: 1px solid #ddd;
        }

        .activity:last-child {
            border-bottom: none;
        }

        .activity-action {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .activity-description {
            margin: 5px 0;
        }

        .activity-meta {
            color: #777;
            font-size: 13px;
        }

        .empty {
            color: #777;
        }
    </style>
</head>

<body>

<div class="container">

    <a href="{{ route('admin.orders.index') }}" class="back">
        ← Back to Orders
    </a>

    @if(session('success'))
        <div class="message">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="message">
            {{ session('error') }}
        </div>
    @endif

    @if($errors->any())
        <div class="message">

            @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach

        </div>
    @endif


    {{-- Order Status --}}

    <div class="card">

        <h1>
            {{ $order->order_reference }}
        </h1>

        <span class="status
            @if($order->status === 'PENDING') pending
            @elseif($order->status === 'CONFIRMED') confirmed
            @elseif($order->status === 'OUT_FOR_DELIVERY') out
            @elseif($order->status === 'DELIVERED') delivered
            @else cancelled
            @endif
        ">
            {{ str_replace('_', ' ', $order->status) }}
        </span>

    </div>


    {{-- Customer Information --}}

    <div class="card">

        <h2>Customer</h2>

        <div class="detail">
            <strong>Name</strong>
            {{ $order->customer_name }}
        </div>

        <div class="detail">
            <strong>Phone</strong>
            {{ $order->customer_phone }}
        </div>

        <div class="detail">
            <strong>Delivery Address</strong>
            {{ $order->delivery_address }}
        </div>

        @if($order->additional_info)

            <div class="detail">
                <strong>Additional Information</strong>
                {{ $order->additional_info }}
            </div>

        @endif

    </div>


    {{-- Order Items --}}

    <div class="card">

        <h2>Order Items</h2>

        @foreach($order->items as $item)

            <div class="item">

                <strong>
                    {{ $item->product_name }}
                </strong>

                <p>
                    {{ $item->quantity }}
                    ×
                    TZS {{ number_format($item->unit_price, 2) }}
                </p>

                <strong>
                    Subtotal:
                    TZS {{ number_format($item->subtotal, 2) }}
                </strong>

            </div>

        @endforeach

        <div class="total">

            Product Total:
            TZS {{ number_format($order->product_total, 2) }}

            <br>

            Delivery:
            TZS {{ number_format($order->delivery_fee, 2) }}

            <br><br>

            Final Total:
            TZS {{ number_format($order->final_total, 2) }}

        </div>

    </div>


    {{-- Order Actions --}}

    <div class="card">

        <h2>Order Actions</h2>

        <div class="actions">

            @if($order->status === 'PENDING')

                <form
                    action="{{ route('admin.orders.confirm', $order) }}"
                    method="POST"
                >
                    @csrf

                    <button type="submit" class="confirm">
                        Confirm Order
                    </button>
                </form>

                <form
                    action="{{ route('admin.orders.cancel', $order) }}"
                    method="POST"
                >
                    @csrf

                    <textarea
                        name="cancel_reason"
                        placeholder="Reason for cancellation"
                        required
                    ></textarea>

                    <button type="submit" class="cancel">
                        Cancel Order
                    </button>
                </form>

            @elseif($order->status === 'CONFIRMED')

                <form
                    action="{{ route('admin.orders.out-for-delivery', $order) }}"
                    method="POST"
                >
                    @csrf

                    <button type="submit" class="delivery">
                        Out for Delivery
                    </button>
                </form>

                <form
                    action="{{ route('admin.orders.cancel', $order) }}"
                    method="POST"
                >
                    @csrf

                    <textarea
                        name="cancel_reason"
                        placeholder="Reason for cancellation"
                        required
                    ></textarea>

                    <button type="submit" class="cancel">
                        Cancel Order
                    </button>
                </form>

            @elseif($order->status === 'OUT_FOR_DELIVERY')

                <form
                    action="{{ route('admin.orders.delivered', $order) }}"
                    method="POST"
                >
                    @csrf

                    <button type="submit" class="delivered-button">
                        Mark as Delivered
                    </button>
                </form>

            @else

                <p>
                    No actions are available for this order.
                </p>

            @endif

        </div>

    </div>


    {{-- Activity History --}}

    <div class="card">

        <h2>Order Activity</h2>

        @forelse($order->activities as $activity)

            <div class="activity">

                <div class="activity-action">
                    {{ str_replace('_', ' ', $activity->action) }}
                </div>

                @if($activity->description)
                    <div class="activity-description">
                        {{ $activity->description }}
                    </div>
                @endif

                <div class="activity-meta">

                    @if($activity->admin)
                        By {{ $activity->admin->full_name }}
                    @else
                        System
                    @endif

                    ·

                    {{ $activity->created_at->format('d M Y, H:i') }}

                </div>

            </div>

        @empty

            <p class="empty">
                No activity has been recorded for this order yet.
            </p>

        @endforelse

    </div>

</div>

</body>
</html>

