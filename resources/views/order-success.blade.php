<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    ```
    <title>Order Confirmed - Ali Africa</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7f5;
            color: #17221d;
        }

        a {
            color: inherit;
        }

        .page {
            min-height: 100vh;
        }

        /* =========================
           HEADER
        ========================== */

        .topbar {
            background: #ffffff;
            border-bottom: 1px solid #e2e8e4;
            padding: 18px 5%;
        }

        .topbar-inner {
            max-width: 1100px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            text-decoration: none;
            font-size: 24px;
            font-weight: 800;
            color: #176b4d;
            letter-spacing: -0.5px;
        }

        .shop-link {
            text-decoration: none;
            color: #176b4d;
            font-size: 14px;
            font-weight: 700;
        }

        .shop-link:hover {
            text-decoration: underline;
        }

        /* =========================
           MAIN
        ========================== */

        .container {
            width: min(1100px, 92%);
            margin: 0 auto;
            padding: 50px 0 70px;
        }

        /* =========================
           SUCCESS HEADER
        ========================== */

        .success-header {
            text-align: center;
            max-width: 650px;
            margin: 0 auto 35px;
        }

        .success-icon {
            width: 76px;
            height: 76px;
            margin: 0 auto 22px;
            border-radius: 50%;
            background: #176b4d;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 38px;
            font-weight: 700;
            box-shadow: 0 12px 30px rgba(23, 107, 77, 0.18);
        }

        .success-header h1 {
            margin: 0 0 10px;
            font-size: 36px;
            letter-spacing: -1px;
        }

        .success-header p {
            margin: 0;
            color: #6d7772;
            font-size: 16px;
            line-height: 1.6;
        }

        /* =========================
           ORDER REFERENCE
        ========================== */

        .reference-card {
            background: #176b4d;
            color: #ffffff;
            border-radius: 18px;
            padding: 24px 28px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .reference-label {
            margin: 0 0 6px;
            font-size: 13px;
            opacity: 0.8;
        }

        .reference-number {
            margin: 0;
            font-size: 24px;
            font-weight: 800;
            letter-spacing: 0.5px;
        }

        .status {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 9px 13px;
            border-radius: 30px;
            background: rgba(255, 255, 255, 0.14);
            font-size: 13px;
            font-weight: 700;
        }

        .status-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #ffffff;
        }

        /* =========================
           LAYOUT
        ========================== */

        .content-grid {
            display: grid;
            grid-template-columns: minmax(0, 1.4fr) minmax(300px, 0.8fr);
            gap: 25px;
            align-items: start;
        }

        .card {
            background: #ffffff;
            border: 1px solid #e2e8e4;
            border-radius: 18px;
            padding: 27px;
            box-shadow: 0 8px 25px rgba(23, 34, 29, 0.04);
        }

        .card + .card {
            margin-top: 20px;
        }

        .card-title {
            margin: 0 0 20px;
            font-size: 20px;
        }

        /* =========================
           ITEMS
        ========================== */

        .order-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 16px 0;
            border-bottom: 1px solid #e2e8e4;
        }

        .order-item:first-child {
            padding-top: 0;
        }

        .order-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .product-image {
            width: 72px;
            height: 72px;
            flex-shrink: 0;
            object-fit: contain;
            border: 1px solid #e2e8e4;
            border-radius: 12px;
            background: #f8faf8;
        }

        .item-details {
            flex: 1;
            min-width: 0;
        }

        .item-name {
            margin: 0 0 7px;
            font-size: 15px;
            font-weight: 700;
        }

        .item-meta {
            margin: 0;
            color: #6d7772;
            font-size: 13px;
        }

        .item-total {
            white-space: nowrap;
            font-size: 14px;
            font-weight: 700;
        }

        /* =========================
           CUSTOMER INFORMATION
        ========================== */

        .info-group {
            padding: 14px 0;
            border-bottom: 1px solid #e2e8e4;
        }

        .info-group:first-child {
            padding-top: 0;
        }

        .info-group:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .info-label {
            margin: 0 0 6px;
            color: #6d7772;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .info-value {
            margin: 0;
            font-size: 15px;
            line-height: 1.5;
        }

        /* =========================
           SUMMARY
        ========================== */

        .summary-row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 11px 0;
            color: #6d7772;
            font-size: 14px;
        }

        .summary-row strong {
            color: #17221d;
        }

        .total-row {
            border-top: 1px solid #e2e8e4;
            margin-top: 10px;
            padding-top: 20px;
            color: #17221d;
            font-size: 20px;
            font-weight: 800;
        }

        .total-row strong {
            font-size: 20px;
        }

        /* =========================
           NEXT STEPS
        ========================== */

        .next-step {
            display: flex;
            gap: 13px;
            padding: 15px;
            margin-top: 22px;
            border-radius: 12px;
            background: #f2f8f5;
            color: #0f5138;
            font-size: 13px;
            line-height: 1.5;
        }

        .next-step-icon {
            width: 28px;
            height: 28px;
            flex-shrink: 0;
            border-radius: 50%;
            background: #176b4d;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            font-weight: 700;
        }

        /* =========================
           BUTTONS
        ========================== */

        .actions {
            margin-top: 25px;
            display: flex;
            gap: 12px;
        }

        .button {
            flex: 1;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            min-height: 48px;
            padding: 12px 18px;
            border-radius: 11px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 700;
            transition: 0.2s ease;
        }

        .primary-button {
            background: #176b4d;
            color: #ffffff;
        }

        .primary-button:hover {
            background: #0f5138;
            transform: translateY(-1px);
        }

        .secondary-button {
            background: #ffffff;
            color: #176b4d;
            border: 1px solid #cdd8d2;
        }

        .secondary-button:hover {
            background: #f2f8f5;
        }

        /* =========================
           FOOTER MESSAGE
        ========================== */

        .thank-you {
            text-align: center;
            margin-top: 35px;
            color: #6d7772;
            font-size: 13px;
        }

        /* =========================
           RESPONSIVE
        ========================== */

        @media (max-width: 850px) {

            .content-grid {
                grid-template-columns: 1fr;
            }

        }

        @media (max-width: 600px) {

            .topbar {
                padding: 16px 4%;
            }

            .shop-link {
                display: none;
            }

            .container {
                width: 92%;
                padding: 35px 0 50px;
            }

            .success-header h1 {
                font-size: 29px;
            }

            .success-header p {
                font-size: 14px;
            }

            .success-icon {
                width: 68px;
                height: 68px;
                font-size: 32px;
            }

            .reference-card {
                padding: 20px;
                align-items: flex-start;
                flex-direction: column;
            }

            .reference-number {
                font-size: 20px;
            }

            .card {
                padding: 20px;
                border-radius: 15px;
            }

            .order-item {
                align-items: flex-start;
            }

            .product-image {
                width: 60px;
                height: 60px;
            }

            .item-total {
                font-size: 13px;
            }

            .actions {
                flex-direction: column;
            }

        }
    </style>
    ```

</head>

<body>

<div class="page">

    ```
    <header class="topbar">

        <div class="topbar-inner">

            <a
                href="{{ route('home') }}"
                class="brand"
            >
                Ali Africa
            </a>

            <a
                href="{{ route('home') }}"
                class="shop-link"
            >
                Continue Shopping
            </a>

        </div>

    </header>


    <main class="container">

        <!-- SUCCESS MESSAGE -->

        <section class="success-header">

            <div class="success-icon">
                ✓
            </div>

            <h1>
                Order placed successfully!
            </h1>

            <p>
                Thank you for shopping with Ali Africa.
                We've received your order and will review it shortly.
            </p>

        </section>


        <!-- ORDER REFERENCE -->

        <section class="reference-card">

            <div>

                <p class="reference-label">
                    ORDER REFERENCE
                </p>

                <p class="reference-number">
                    {{ $order->order_reference }}
                </p>

            </div>

            <div class="status">

                <span class="status-dot"></span>

                {{ $order->status }}

            </div>

        </section>


        <div class="content-grid">

            <!-- LEFT COLUMN -->

            <div>

                <!-- ORDER ITEMS -->

                <section class="card">

                    <h2 class="card-title">
                        Your order
                    </h2>

                    @foreach ($order->items as $item)

                        <div class="order-item">

                            @if ($item->product)

                                <img
                                    src="{{ asset('storage/' . $item->product->image) }}"
                                    alt="{{ $item->product_name }}"
                                    class="product-image"
                                >

                            @else

                                <div class="product-image"></div>

                            @endif


                            <div class="item-details">

                                <p class="item-name">
                                    {{ $item->product_name }}
                                </p>

                                <p class="item-meta">

                                    {{ $item->quantity }}
                                    ×
                                    TZS {{ number_format($item->unit_price, 2) }}

                                </p>

                            </div>


                            <div class="item-total">

                                TZS
                                {{ number_format($item->subtotal, 2) }}

                            </div>

                        </div>

                    @endforeach

                </section>


                <!-- DELIVERY INFORMATION -->

                <section class="card">

                    <h2 class="card-title">
                        Delivery information
                    </h2>


                    <div class="info-group">

                        <p class="info-label">
                            Customer
                        </p>

                        <p class="info-value">
                            {{ $order->customer_name }}
                        </p>

                    </div>


                    <div class="info-group">

                        <p class="info-label">
                            Phone
                        </p>

                        <p class="info-value">
                            {{ $order->customer_phone }}
                        </p>

                    </div>


                    <div class="info-group">

                        <p class="info-label">
                            Delivery address
                        </p>

                        <p class="info-value">
                            {{ $order->delivery_address }}
                        </p>

                    </div>


                    @if ($order->additional_info)

                        <div class="info-group">

                            <p class="info-label">
                                Additional information
                            </p>

                            <p class="info-value">
                                {{ $order->additional_info }}
                            </p>

                        </div>

                    @endif

                </section>

            </div>


            <!-- RIGHT COLUMN -->

            <aside>

                <section class="card">

                    <h2 class="card-title">
                        Order summary
                    </h2>


                    <div class="summary-row">

                    <span>
                        Products
                    </span>

                        <strong>
                            TZS {{ number_format($order->product_total, 2) }}
                        </strong>

                    </div>


                    <div class="summary-row">

                    <span>
                        Delivery
                    </span>

                        <strong>
                            TZS {{ number_format($order->delivery_fee, 2) }}
                        </strong>

                    </div>


                    <div class="summary-row total-row">

                    <span>
                        Total
                    </span>

                        <strong>
                            TZS {{ number_format($order->final_total, 2) }}
                        </strong>

                    </div>


                    <div class="next-step">

                        <div class="next-step-icon">
                            ✓
                        </div>

                        <div>

                            <strong>
                                What happens next?
                            </strong>

                            <br>

                            Your order is currently
                            <strong>{{ $order->status }}</strong>.
                            Ali Africa will review and confirm your order
                            before delivery.

                        </div>

                    </div>

                </section>


                <div class="actions">

                    <a
                        href="{{ route('home') }}"
                        class="button primary-button"
                    >
                        Continue Shopping
                    </a>

                    <a
                        href="{{ route('cart.index') }}"
                        class="button secondary-button"
                    >
                        View Cart
                    </a>

                </div>

            </aside>

        </div>


        <p class="thank-you">
            Thank you for choosing Ali Africa.
        </p>

    </main>
    ```

</div>

</body>

</html>
