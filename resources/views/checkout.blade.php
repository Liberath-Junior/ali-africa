<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    ```
    <title>Checkout - Ali Africa</title>

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
            background: #f4f7f5;
            color: #17221d;
        }

        a {
            color: inherit;
        }

        button,
        input,
        textarea {
            font-family: inherit;
        }

        /* ========================================
           PAGE
        ======================================== */

        .page {
            min-height: 100vh;
        }

        /* ========================================
           HEADER
        ======================================== */

        .topbar {
            background: #ffffff;
            border-bottom: 1px solid #e2e8e4;
            padding: 18px 5%;
        }

        .topbar-inner {
            max-width: 1200px;
            margin: 0 auto;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 20px;
        }

        .brand {
            text-decoration: none;
            font-size: 24px;
            font-weight: 800;
            color: #176b4d;
            letter-spacing: -0.5px;
        }

        .secure-label {
            color: #6d7772;
            font-size: 14px;
        }

        /* ========================================
           MAIN CONTAINER
        ======================================== */

        .container {
            width: min(1200px, 92%);
            margin: 0 auto;
            padding: 40px 0 70px;
        }

        .back-link {
            display: inline-flex;
            align-items: center;

            gap: 8px;

            color: #6d7772;
            text-decoration: none;

            font-size: 14px;
            font-weight: 600;

            margin-bottom: 25px;

            transition: color 0.2s ease;
        }

        .back-link:hover {
            color: #176b4d;
        }

        /* ========================================
           PAGE HEADING
        ======================================== */

        .heading {
            margin-bottom: 30px;
        }

        .heading h1 {
            margin: 0 0 8px;

            font-size: 36px;
            line-height: 1.2;

            letter-spacing: -1px;
        }

        .heading p {
            margin: 0;

            color: #6d7772;
            font-size: 15px;
            line-height: 1.6;
        }

        /* ========================================
           CHECKOUT LAYOUT
        ======================================== */

        .checkout-layout {
            display: grid;

            grid-template-columns:
            minmax(0, 1.5fr)
            minmax(320px, 0.9fr);

            gap: 25px;

            align-items: start;
        }

        /* ========================================
           CARDS
        ======================================== */

        .card {
            background: #ffffff;

            border: 1px solid #e2e8e4;
            border-radius: 18px;

            padding: 28px;

            box-shadow:
                0 8px 25px rgba(23, 34, 29, 0.04);
        }

        .card + .card {
            margin-top: 20px;
        }

        .card-title {
            margin: 0 0 6px;

            font-size: 21px;
            line-height: 1.3;
        }

        .card-description {
            margin: 0 0 25px;

            color: #6d7772;

            font-size: 14px;
            line-height: 1.6;
        }

        /* ========================================
           ERROR SUMMARY
        ======================================== */

        .error-summary {
            background: #fff1ef;

            border: 1px solid #f0c8c3;
            border-radius: 12px;

            color: #c0392b;

            padding: 15px 18px;
            margin-bottom: 25px;
        }

        .error-summary strong {
            display: block;
            margin-bottom: 8px;
        }

        .error-summary ul {
            margin: 0;
            padding-left: 20px;
        }

        .error-summary li {
            margin-bottom: 4px;
        }

        .field-error {
            color: #c0392b;

            font-size: 13px;

            margin-top: 7px;
        }

        /* ========================================
           FORM
        ======================================== */

        .field {
            margin-bottom: 20px;
        }

        label {
            display: block;

            margin-bottom: 8px;

            font-size: 14px;
            font-weight: 700;
        }

        .required {
            color: #c0392b;
        }

        input,
        textarea {
            width: 100%;

            border: 1px solid #e2e8e4;
            border-radius: 11px;

            background: #fbfcfb;
            color: #17221d;

            padding: 13px 14px;

            font-size: 15px;

            outline: none;

            transition:
                border-color 0.2s ease,
                box-shadow 0.2s ease,
                background 0.2s ease;
        }

        input {
            height: 48px;
        }

        textarea {
            min-height: 110px;

            resize: vertical;

            line-height: 1.5;
        }

        input::placeholder,
        textarea::placeholder {
            color: #9aa39f;
        }

        input:focus,
        textarea:focus {
            background: #ffffff;

            border-color: #176b4d;

            box-shadow:
                0 0 0 3px rgba(23, 107, 77, 0.10);
        }

        .field-hint {
            color: #6d7772;

            font-size: 12px;

            line-height: 1.5;

            margin-top: 6px;
        }

        /* ========================================
           ORDER ITEMS
        ======================================== */

        .order-items {
            margin-top: 10px;
        }

        .order-item {
            display: flex;

            align-items: center;

            gap: 14px;

            padding: 16px 0;

            border-bottom: 1px solid #e2e8e4;
        }

        .order-item:last-child {
            border-bottom: none;
        }

        .product-image {
            width: 68px;
            height: 68px;

            border-radius: 12px;

            border: 1px solid #e2e8e4;

            background: #f8faf8;

            object-fit: contain;

            flex-shrink: 0;
        }

        .item-details {
            flex: 1;

            min-width: 0;
        }

        .item-name {
            margin: 0 0 6px;

            font-size: 15px;
            font-weight: 700;

            line-height: 1.4;
        }

        .item-meta {
            margin: 0;

            color: #6d7772;

            font-size: 13px;
            line-height: 1.5;
        }

        .item-price {
            text-align: right;

            white-space: nowrap;

            font-size: 14px;
            font-weight: 700;
        }

        /* ========================================
           SUMMARY CARD
        ======================================== */

        .summary-card {
            position: sticky;
            top: 25px;
        }

        .summary-row {
            display: flex;

            justify-content: space-between;

            gap: 20px;

            padding: 12px 0;

            color: #6d7772;

            font-size: 14px;
        }

        .summary-row strong {
            color: #17221d;
        }

        .summary-row.total-row {
            border-top: 1px solid #e2e8e4;

            margin-top: 10px;

            padding-top: 20px;

            color: #17221d;

            font-size: 20px;
            font-weight: 800;
        }

        .summary-row.total-row strong {
            color: #176b4d;
        }

        /* ========================================
           DELIVERY INFORMATION
        ======================================== */

        .delivery-note {
            display: flex;

            gap: 10px;

            margin-top: 20px;

            padding: 14px;

            background: #f2f8f5;

            border-radius: 11px;

            color: #0f5138;

            font-size: 13px;

            line-height: 1.5;
        }

        .delivery-note-icon {
            width: 22px;
            height: 22px;

            display: flex;

            align-items: center;
            justify-content: center;

            flex-shrink: 0;

            background: #176b4d;

            color: #ffffff;

            border-radius: 50%;

            font-size: 12px;
            font-weight: 700;
        }

        /* ========================================
           PLACE ORDER BUTTON
        ======================================== */

        .place-order-button {
            width: 100%;

            border: none;
            border-radius: 12px;

            padding: 15px 20px;

            margin-top: 22px;

            background: #176b4d;
            color: #ffffff;

            font-size: 16px;
            font-weight: 700;

            cursor: pointer;

            transition:
                background 0.2s ease,
                transform 0.2s ease,
                box-shadow 0.2s ease;
        }

        .place-order-button:hover {
            background: #0f5138;

            transform: translateY(-1px);

            box-shadow:
                0 7px 18px rgba(23, 107, 77, 0.20);
        }

        .place-order-button:active {
            transform: translateY(0);
        }

        .place-order-button:focus-visible {
            outline: 3px solid rgba(23, 107, 77, 0.25);
            outline-offset: 2px;
        }

        .checkout-note {
            margin: 13px 0 0;

            text-align: center;

            color: #6d7772;

            font-size: 12px;

            line-height: 1.5;
        }

        /* ========================================
           EMPTY STATE
        ======================================== */

        .empty-message {
            padding: 30px;

            background: #ffffff;

            border: 1px solid #e2e8e4;

            border-radius: 15px;

            text-align: center;
        }

        /* ========================================
           MOBILE
        ======================================== */

        @media (max-width: 850px) {

            .checkout-layout {
                grid-template-columns: 1fr;
            }

            .summary-card {
                position: static;
            }
        }

        @media (max-width: 600px) {

            .topbar {
                padding: 16px 4%;
            }

            .container {
                width: 92%;

                padding-top: 25px;
                padding-bottom: 50px;
            }

            .brand {
                font-size: 21px;
            }

            .secure-label {
                display: none;
            }

            .heading {
                margin-bottom: 22px;
            }

            .heading h1 {
                font-size: 29px;
            }

            .heading p {
                font-size: 14px;
            }

            .card {
                padding: 20px;

                border-radius: 15px;
            }

            .order-item {
                align-items: flex-start;
            }

            .product-image {
                width: 58px;
                height: 58px;
            }

            .item-price {
                font-size: 13px;
            }

            .summary-row.total-row {
                font-size: 18px;
            }
        }

        @media (max-width: 420px) {

            .container {
                width: 94%;
            }

            .card {
                padding: 17px;
            }

            .heading h1 {
                font-size: 26px;
            }

            .order-item {
                gap: 10px;
            }

            .product-image {
                width: 52px;
                height: 52px;
            }

            .item-name {
                font-size: 14px;
            }

            .item-meta {
                font-size: 12px;
            }

            .item-price {
                font-size: 12px;
            }
        }
    </style>
    ```

</head>

<body>

<div class="page">

    ```
    <!-- ========================================
         HEADER
    ======================================== -->

    <header class="topbar">

        <div class="topbar-inner">

            <a
                href="{{ route('home') }}"
                class="brand"
            >
                Ali Africa
            </a>

            <span class="secure-label">
            Checkout
        </span>

        </div>

    </header>


    <!-- ========================================
         MAIN CONTENT
    ======================================== -->

    <main class="container">

        <a
            href="{{ route('cart.index') }}"
            class="back-link"
        >
            ← Back to Cart
        </a>


        <!-- PAGE HEADING -->

        <div class="heading">

            <h1>
                Complete your order
            </h1>

            <p>
                Enter your delivery details and review your order
                before placing it.
            </p>

        </div>


        <!-- ========================================
             VALIDATION ERRORS
        ======================================== -->

        @if ($errors->any())

            <div class="error-summary">

                <strong>
                    Please check the information below.
                </strong>

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <!-- ========================================
         CHECKOUT FORM
    ======================================== -->

        <form
            action="{{ route('checkout.place') }}"
            method="POST"
        >

            @csrf


            <div class="checkout-layout">


                <!-- ====================================
                     LEFT COLUMN
                ===================================== -->

                <div>


                    <!-- DELIVERY DETAILS -->

                    <section class="card">

                        <h2 class="card-title">
                            Delivery details
                        </h2>

                        <p class="card-description">
                            Tell us where and how we can reach you.
                        </p>


                        <!-- NAME -->

                        <div class="field">

                            <label for="customer_name">

                                Full name

                                <span class="required">
                                *
                            </span>

                            </label>

                            <input
                                type="text"
                                id="customer_name"
                                name="customer_name"
                                value="{{ old('customer_name') }}"
                                placeholder="Enter your full name"
                                autocomplete="name"
                                required
                            >

                            @error('customer_name')

                            <div class="field-error">
                                {{ $message }}
                            </div>

                            @enderror

                        </div>


                        <!-- PHONE -->

                        <div class="field">

                            <label for="customer_phone">

                                Phone number

                                <span class="required">
                                *
                            </span>

                            </label>

                            <input
                                type="tel"
                                id="customer_phone"
                                name="customer_phone"
                                value="{{ old('customer_phone') }}"
                                placeholder="e.g. 07XX XXX XXX"
                                autocomplete="tel"
                                required
                            >

                            <div class="field-hint">

                                We may use this number to contact you
                                about your order.

                            </div>

                            @error('customer_phone')

                            <div class="field-error">
                                {{ $message }}
                            </div>

                            @enderror

                        </div>


                        <!-- DELIVERY ADDRESS -->

                        <div class="field">

                            <label for="delivery_address">

                                Delivery address

                                <span class="required">
                                *
                            </span>

                            </label>

                            <textarea
                                id="delivery_address"
                                name="delivery_address"
                                placeholder="Enter your area, street, building, landmark or other useful directions..."
                                autocomplete="street-address"
                                required
                            >{{ old('delivery_address') }}</textarea>

                            @error('delivery_address')

                            <div class="field-error">
                                {{ $message }}
                            </div>

                            @enderror

                        </div>


                        <!-- ADDITIONAL INFORMATION -->

                        <div class="field">

                            <label for="additional_info">

                                Additional information

                            </label>

                            <textarea
                                id="additional_info"
                                name="additional_info"
                                placeholder="Any special delivery instructions? This is optional."
                            >{{ old('additional_info') }}</textarea>

                            @error('additional_info')

                            <div class="field-error">
                                {{ $message }}
                            </div>

                            @enderror

                        </div>

                    </section>


                    <!-- ====================================
                         ORDER ITEMS
                    ===================================== -->

                    <section class="card">

                        <h2 class="card-title">
                            Your items
                        </h2>

                        <p class="card-description">
                            Review the products you are ordering.
                        </p>


                        <div class="order-items">

                            @foreach ($cart->items as $item)

                                <div class="order-item">


                                    <!-- PRODUCT IMAGE -->

                                    <img
                                        src="{{ asset('storage/' . $item->product->image) }}"
                                        alt="{{ $item->product->name }}"
                                        class="product-image"
                                    >


                                    <!-- PRODUCT DETAILS -->

                                    <div class="item-details">

                                        <p class="item-name">

                                            {{ $item->product->name }}

                                        </p>

                                        <p class="item-meta">

                                            {{ $item->quantity }}

                                            ×

                                            TZS
                                            {{ number_format(
                                                $item->unit_price,
                                                2
                                            ) }}

                                        </p>

                                    </div>


                                    <!-- ITEM TOTAL -->

                                    <div class="item-price">

                                        TZS
                                        {{ number_format(
                                            $item->unit_price *
                                            $item->quantity,
                                            2
                                        ) }}

                                    </div>

                                </div>

                            @endforeach

                        </div>

                    </section>

                </div>


                <!-- ====================================
                     RIGHT COLUMN
                ===================================== -->

                <aside class="card summary-card">

                    <h2 class="card-title">
                        Order summary
                    </h2>


                    <!-- PRODUCTS -->

                    <div class="summary-row">

                    <span>
                        Products
                    </span>

                        <strong>

                            TZS
                            {{ number_format($total, 2) }}

                        </strong>

                    </div>


                    <!-- DELIVERY -->

                    <div class="summary-row">

                    <span>
                        Delivery
                    </span>

                        <strong>
                            TZS 0.00
                        </strong>

                    </div>


                    <!-- TOTAL -->

                    <div class="summary-row total-row">

                    <span>
                        Total
                    </span>

                        <strong>

                            TZS
                            {{ number_format($total, 2) }}

                        </strong>

                    </div>


                    <!-- INFORMATION -->

                    <div class="delivery-note">

                    <span class="delivery-note-icon">
                        ✓
                    </span>

                        <span>

                        Your order will be reviewed and confirmed
                        by Ali Africa before delivery.

                    </span>

                    </div>


                    <!-- PLACE ORDER -->

                    <button
                        type="submit"
                        class="place-order-button"
                    >

                        Place Order

                    </button>


                    <p class="checkout-note">

                        By placing this order, you confirm that the
                        information provided is correct.

                    </p>

                </aside>

            </div>

        </form>

    </main>
    ```

</div>

</body>

</html>
