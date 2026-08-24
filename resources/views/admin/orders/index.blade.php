<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Orders | Ali Africa Admin</title>

    <style>

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f3f6f4;
            color: #17221d;
        }

        button,
        input {
            font-family: inherit;
        }

        a {
            color: inherit;
        }

        /* =========================================
           LAYOUT
        ========================================= */

        .page {
            min-height: 100vh;
        }

        .container {
            width: min(1250px, 92%);
            margin: auto;
            padding: 35px 0 70px;
        }

        /* =========================================
           HEADER
        ========================================= */

        .topbar {
            background: #ffffff;
            border-bottom: 1px solid #e1e8e4;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .topbar-inner {
            width: min(1250px, 92%);
            min-height: 76px;
            margin: auto;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .brand-icon {
            width: 44px;
            height: 44px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 13px;

            background: #176b4d;
            color: white;

            font-size: 20px;
            font-weight: 800;
        }

        .brand-title {
            margin: 0;
            font-size: 19px;
            font-weight: 800;
            color: #176b4d;
        }

        .brand-subtitle {
            margin: 3px 0 0;
            color: #87918c;
            font-size: 11px;
        }

        .logout {
            border: 1px solid #ead4d4;
            background: #fff8f8;
            color: #b42318;

            padding: 10px 16px;

            border-radius: 10px;

            font-weight: 700;
            font-size: 13px;

            cursor: pointer;

            transition: 0.2s ease;
        }

        .logout:hover {
            background: #fdecec;
        }

        /* =========================================
           PAGE INTRO
        ========================================= */

        .page-header {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;

            gap: 25px;

            margin-bottom: 30px;
        }

        .page-header h1 {
            margin: 0 0 7px;

            font-size: 34px;
            letter-spacing: -1px;
        }

        .page-header p {
            margin: 0;

            color: #6d7772;
            font-size: 14px;
        }

        .date-label {
            color: #87918c;
            font-size: 13px;
            white-space: nowrap;
        }

        /* =========================================
           STATISTICS
        ========================================= */

        .stats {
            display: grid;

            grid-template-columns:
                repeat(4, minmax(0, 1fr));

            gap: 16px;

            margin-bottom: 30px;
        }

        .stat-card {
            background: #ffffff;

            border: 1px solid #e1e8e4;
            border-radius: 16px;

            padding: 20px;

            position: relative;
            overflow: hidden;

            box-shadow:
                0 5px 20px rgba(23, 34, 29, 0.035);
        }

        .stat-card::after {
            content: "";

            position: absolute;

            width: 65px;
            height: 65px;

            right: -20px;
            top: -20px;

            border-radius: 50%;

            background: #edf5f1;
        }

        .stat-label {
            color: #87918c;

            font-size: 11px;
            font-weight: 800;

            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .stat-value {
            margin-top: 9px;

            font-size: 27px;
            font-weight: 800;

            color: #17221d;
        }

        .stat-description {
            margin-top: 5px;

            color: #6d7772;
            font-size: 12px;
        }

        .stat-green .stat-value {
            color: #176b4d;
        }

        .stat-orange .stat-value {
            color: #b77900;
        }

        .stat-blue .stat-value {
            color: #2365ad;
        }

        /* =========================================
           TOOLBAR
        ========================================= */

        .toolbar {
            background: #ffffff;

            border: 1px solid #e1e8e4;
            border-radius: 16px;

            padding: 15px 18px;

            margin-bottom: 18px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 15px;
        }

        .toolbar-title {
            margin: 0;

            font-size: 16px;
            font-weight: 800;
        }

        .toolbar-count {
            margin-left: 7px;

            padding: 4px 8px;

            border-radius: 999px;

            background: #edf5f1;
            color: #176b4d;

            font-size: 11px;
            font-weight: 800;
        }

        .search {
            width: 240px;

            padding: 10px 13px;

            border: 1px solid #dce4df;
            border-radius: 9px;

            background: #fafcfb;

            outline: none;

            font-size: 13px;
        }

        .search:focus {
            border-color: #176b4d;
            background: white;
        }

        /* =========================================
           ALERTS
        ========================================= */

        .alert {
            padding: 14px 17px;

            border-radius: 12px;

            margin-bottom: 18px;

            font-size: 14px;
        }

        .alert-success {
            background: #edf8f2;
            border: 1px solid #c8e8d6;
            color: #176b4d;
        }

        .alert-error {
            background: #fff1ef;
            border: 1px solid #f0c8c3;
            color: #b42318;
        }

        /* =========================================
           ORDER LIST
        ========================================= */

        .orders {
            display: flex;
            flex-direction: column;
            gap: 13px;
        }

        .order-card {
            background: #ffffff;

            border: 1px solid #e1e8e4;
            border-radius: 16px;

            overflow: hidden;

            transition:
                0.2s ease;

            box-shadow:
                0 4px 18px rgba(23, 34, 29, 0.025);
        }

        .order-card:hover {
            border-color: #cbdad2;

            transform: translateY(-1px);

            box-shadow:
                0 10px 28px rgba(23, 34, 29, 0.06);
        }

        /* =========================================
           ORDER MAIN
        ========================================= */

        .order-main {
            padding: 20px;

            display: grid;

            grid-template-columns:
                1.5fr
                1fr
                1fr
                0.8fr
                auto;

            align-items: center;

            gap: 20px;
        }

        .order-reference {
            margin: 0 0 7px;

            font-size: 15px;
            font-weight: 800;
        }

        .customer {
            color: #6d7772;

            font-size: 13px;
        }

        .customer strong {
            color: #303b36;
        }

        .info-label {
            display: block;

            margin-bottom: 6px;

            color: #9aa39f;

            font-size: 10px;
            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: 0.5px;
        }

        .info-value {
            color: #303b36;

            font-size: 13px;
            line-height: 1.4;
        }

        .total {
            color: #176b4d;

            font-weight: 800;
            font-size: 14px;
        }

        /* =========================================
           STATUS
        ========================================= */

        .status {

            display: inline-flex;

            align-items: center;

            gap: 7px;

            padding: 7px 10px;

            border-radius: 999px;

            font-size: 11px;

            font-weight: 800;

            white-space: nowrap;
        }

        .dot {
            width: 7px;
            height: 7px;

            border-radius: 50%;
        }

        .pending {
            background: #fff5d9;
            color: #896300;
        }

        .pending .dot {
            background: #d99b00;
        }

        .confirmed {
            background: #e6f5f8;
            color: #126171;
        }

        .confirmed .dot {
            background: #1591aa;
        }

        .out {
            background: #e7f0ff;
            color: #1856a0;
        }

        .out .dot {
            background: #3178d4;
        }

        .delivered {
            background: #e8f7ee;
            color: #176b4d;
        }

        .delivered .dot {
            background: #239563;
        }

        .cancelled {
            background: #fdecec;
            color: #b42318;
        }

        .cancelled .dot {
            background: #d33b30;
        }

        .failed {
            background: #f1eeee;
            color: #6b3434;
        }

        .failed .dot {
            background: #914646;
        }

        /* =========================================
           VIEW BUTTON
        ========================================= */

        .view-button {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            gap: 6px;

            padding: 9px 13px;

            border-radius: 9px;

            background: #176b4d;
            color: white;

            text-decoration: none;

            font-size: 12px;
            font-weight: 700;

            white-space: nowrap;

            transition: 0.2s ease;
        }

        .view-button:hover {
            background: #0f5138;
        }

        /* =========================================
           FOOTER
        ========================================= */

        .order-footer {
            padding: 11px 20px;

            background: #fafcfb;

            border-top: 1px solid #edf1ee;

            color: #87918c;

            font-size: 11px;
        }

        /* =========================================
           EMPTY
        ========================================= */

        .empty {
            background: white;

            border: 1px solid #e1e8e4;

            border-radius: 17px;

            padding: 65px 25px;

            text-align: center;
        }

        .empty-icon {
            width: 70px;
            height: 70px;

            margin: 0 auto 17px;

            border-radius: 50%;

            background: #edf5f1;
            color: #176b4d;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 28px;
        }

        .empty h2 {
            margin: 0 0 8px;

            font-size: 20px;
        }

        .empty p {
            margin: 0;

            color: #6d7772;

            font-size: 13px;
        }

        /* =========================================
           RESPONSIVE
        ========================================= */

        @media (max-width: 1050px) {

            .stats {
                grid-template-columns:
                    repeat(2, minmax(0, 1fr));
            }

            .order-main {
                grid-template-columns:
                    1.5fr
                    1fr
                    1fr
                    auto;
            }

            .order-status {
                grid-column: 4;
                grid-row: 1;
            }

            .order-action {
                grid-column: 4;
            }

        }

        @media (max-width: 800px) {

            .order-main {
                grid-template-columns:
                    1fr 1fr;
            }

            .order-status {
                grid-column: 2;
                grid-row: 1;
                justify-self: end;
            }

            .order-action {
                grid-column: 1 / -1;
            }

            .view-button {
                width: 100%;
            }

            .toolbar {
                align-items: stretch;
                flex-direction: column;
            }

            .search {
                width: 100%;
            }

        }

        @media (max-width: 550px) {

            .container {
                width: 92%;
                padding-top: 25px;
            }

            .topbar-inner {
                width: 92%;
            }

            .brand-subtitle {
                display: none;
            }

            .brand-title {
                font-size: 17px;
            }

            .logout {
                padding: 9px 11px;
            }

            .page-header {
                align-items: flex-start;
                flex-direction: column;
                gap: 8px;
            }

            .page-header h1 {
                font-size: 28px;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .order-main {
                grid-template-columns: 1fr;
                gap: 17px;
            }

            .order-status {
                grid-column: auto;
                grid-row: auto;
                justify-self: start;
            }

            .order-action {
                grid-column: auto;
            }

        }

    </style>

</head>


<body>

<div class="page">


    <!-- =========================================
         HEADER
    ========================================== -->

    <header class="topbar">

        <div class="topbar-inner">

            <div class="brand">

                <div class="brand-icon">
                    A
                </div>

                <div>

                    <p class="brand-title">
                        Ali Africa
                    </p>

                    <p class="brand-subtitle">
                        Admin Dashboard
                    </p>

                </div>

            </div>


            <form
                action="{{ route('admin.logout') }}"
                method="POST"
            >

                @csrf

                <button
                    type="submit"
                    class="logout"
                >
                    Logout
                </button>

            </form>

        </div>

    </header>


    <!-- =========================================
         MAIN
    ========================================== -->

    <main class="container">


        <!-- PAGE HEADER -->

        <div class="page-header">

            <div>

                <h1>
                    Orders
                </h1>

                <p>
                    Track, review and manage customer orders.
                </p>

            </div>


            <div class="date-label">

                {{ now()->format('l, d F Y') }}

            </div>

        </div>


        <!-- =========================================
             STATISTICS
        ========================================== -->

        @php

            $totalOrders = $orders->count();

            $pendingOrders = $orders
                ->where('status', 'PENDING')
                ->count();

            $confirmedOrders = $orders
                ->where('status', 'CONFIRMED')
                ->count();

            $deliveredOrders = $orders
                ->where('status', 'DELIVERED')
                ->count();

        @endphp


        <section class="stats">


            <div class="stat-card">

                <div class="stat-label">
                    Total Orders
                </div>

                <div class="stat-value">
                    {{ $totalOrders }}
                </div>

                <div class="stat-description">
                    All customer orders
                </div>

            </div>


            <div class="stat-card stat-orange">

                <div class="stat-label">
                    Pending
                </div>

                <div class="stat-value">
                    {{ $pendingOrders }}
                </div>

                <div class="stat-description">
                    Awaiting confirmation
                </div>

            </div>


            <div class="stat-card stat-blue">

                <div class="stat-label">
                    Confirmed
                </div>

                <div class="stat-value">
                    {{ $confirmedOrders }}
                </div>

                <div class="stat-description">
                    Ready for delivery
                </div>

            </div>


            <div class="stat-card stat-green">

                <div class="stat-label">
                    Delivered
                </div>

                <div class="stat-value">
                    {{ $deliveredOrders }}
                </div>

                <div class="stat-description">
                    Successfully completed
                </div>

            </div>


        </section>


        <!-- =========================================
             ALERTS
        ========================================== -->

        @if(session('success'))

            <div class="alert alert-success">

                ✓

                <strong>
                    {{ session('success') }}
                </strong>

            </div>

        @endif


        @if(session('error'))

            <div class="alert alert-error">

                !

                <strong>
                    {{ session('error') }}
                </strong>

            </div>

        @endif


        <!-- =========================================
             TOOLBAR
        ========================================== -->

        <div class="toolbar">

            <div>

                <span class="toolbar-title">
                    Recent Orders
                </span>

                <span class="toolbar-count">
                    {{ $totalOrders }}
                </span>

            </div>


            <input
                type="search"
                class="search"
                placeholder="Search orders..."
            >

        </div>


        <!-- =========================================
             ORDERS
        ========================================== -->

        @if($orders->count())


            <div class="orders">


                @foreach($orders as $order)


                    @php

                        $statusClass = match ($order->status) {

                            'PENDING' => 'pending',

                            'CONFIRMED' => 'confirmed',

                            'OUT_FOR_DELIVERY' => 'out',

                            'DELIVERED' => 'delivered',

                            'CANCELLED' => 'cancelled',

                            default => 'failed',

                        };

                    @endphp


                    <article class="order-card">


                        <div class="order-main">


                            <!-- ORDER -->

                            <div>

                                <span class="info-label">
                                    Order
                                </span>

                                <h2 class="order-reference">
                                    {{ $order->order_reference }}
                                </h2>

                                <div class="customer">

                                    {{ $order->customer_name }}

                                </div>

                            </div>


                            <!-- PHONE -->

                            <div>

                                <span class="info-label">
                                    Customer Phone
                                </span>

                                <div class="info-value">

                                    {{ $order->customer_phone }}

                                </div>

                            </div>


                            <!-- TOTAL -->

                            <div>

                                <span class="info-label">
                                    Order Total
                                </span>

                                <div class="total">

                                    TZS
                                    {{ number_format($order->final_total, 2) }}

                                </div>

                            </div>


                            <!-- STATUS -->

                            <div class="order-status">

                                <span class="info-label">
                                    Status
                                </span>

                                <span class="status {{ $statusClass }}">

                                    <span class="dot"></span>

                                    {{ str_replace('_', ' ', $order->status) }}

                                </span>

                            </div>


                            <!-- ACTION -->

                            <div class="order-action">

                                <a
                                    href="{{ route('admin.orders.show', $order) }}"
                                    class="view-button"
                                >

                                    View

                                    <span>
                                        →
                                    </span>

                                </a>

                            </div>


                        </div>


                        <!-- ORDER FOOTER -->

                        <div class="order-footer">

                            Order placed on

                            {{ $order->created_at->format('d M Y, H:i') }}

                            ·

                            {{ $order->items->sum('quantity') }}
                            item(s)

                        </div>


                    </article>


                @endforeach


            </div>


        @else


            <div class="empty">

                <div class="empty-icon">
                    🛍
                </div>

                <h2>
                    No orders yet
                </h2>

                <p>
                    Customer orders will appear here once customers
                    place their first order.
                </p>

            </div>


        @endif


    </main>

</div>

</body>

</html>
```
