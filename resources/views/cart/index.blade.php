<!DOCTYPE html>

<html lang="en">

<head>

    ```
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>My Cart - Ali Africa</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f6f8f7;
            color: #1f2933;
        }

        a {
            text-decoration: none;
        }

        /* =========================
           HEADER
        ========================= */

        .header {
            background: #ffffff;
            border-bottom: 1px solid #e5e7eb;
            padding: 18px 0;
        }

        .header-inner {
            max-width: 1180px;
            margin: auto;
            padding: 0 24px;

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand {
            font-size: 24px;
            font-weight: 800;
            color: #198754;
            letter-spacing: -0.5px;
        }

        .brand span {
            color: #1f2933;
        }

        .continue-shopping {
            color: #198754;
            font-weight: 600;
            font-size: 14px;

            transition: 0.2s;
        }

        .continue-shopping:hover {
            color: #146c43;
        }

        /* =========================
           PAGE
        ========================= */

        .page {
            max-width: 1180px;
            margin: auto;
            padding: 40px 24px 70px;
        }

        .page-heading {
            margin-bottom: 30px;
        }

        .page-heading h1 {
            margin: 0 0 8px;
            font-size: 32px;
            color: #111827;
        }

        .page-heading p {
            margin: 0;
            color: #6b7280;
        }

        /* =========================
           CART LAYOUT
        ========================= */

        .cart-layout {
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: 28px;
            align-items: start;
        }

        /* =========================
           CART ITEMS
        ========================= */

        .cart-items {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .cart-item {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 16px;
            padding: 20px;

            display: grid;
            grid-template-columns: 120px 1fr auto;
            gap: 20px;
            align-items: center;

            transition: transform 0.2s, box-shadow 0.2s;
        }

        .cart-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
        }

        .cart-item.unavailable {
            border: 1px solid #f1aeb5;
            background: #fff8f8;
        }

        .product-image-wrapper {
            width: 120px;
            height: 120px;

            border-radius: 12px;
            background: #f8faf9;

            display: flex;
            align-items: center;
            justify-content: center;

            overflow: hidden;
        }

        .product-image {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .product-info {
            min-width: 0;
        }

        .product-name {
            margin: 0 0 8px;

            font-size: 18px;
            color: #111827;
        }

        .product-category {
            margin: 0 0 8px;

            color: #6b7280;
            font-size: 13px;
        }

        .product-price {
            margin: 0;

            color: #198754;
            font-weight: 700;
        }

        .product-size {
            margin-top: 7px;

            color: #6b7280;
            font-size: 13px;
        }

        /* =========================
           UNAVAILABLE
        ========================= */

        .unavailable-label {
            display: inline-block;

            margin-top: 10px;

            padding: 5px 9px;

            border-radius: 20px;

            background: #dc3545;
            color: white;

            font-size: 11px;
            font-weight: 700;

            text-transform: uppercase;
        }

        .unavailable-message {
            margin-top: 8px;

            color: #842029;
            font-size: 13px;
            line-height: 1.5;
        }

        /* =========================
           CART ACTIONS
        ========================= */

        .cart-actions {
            min-width: 130px;
            text-align: right;
        }

        .quantity {
            display: inline-flex;
            align-items: center;

            border: 1px solid #d1d5db;
            border-radius: 9px;

            overflow: hidden;
            background: white;
        }

        .quantity button {
            width: 34px;
            height: 34px;

            border: 0;
            background: #f8faf9;

            font-size: 18px;
            color: #374151;

            cursor: pointer;

            transition: 0.2s;
        }

        .quantity button:hover {
            background: #e8f5ee;
            color: #198754;
        }

        .quantity-value {
            min-width: 34px;

            text-align: center;

            font-size: 14px;
            font-weight: 700;
        }

        .subtotal {
            margin: 12px 0 8px;

            font-size: 15px;
            font-weight: 700;
            color: #111827;
        }

        .remove-button {
            border: 0;
            background: transparent;

            color: #dc3545;

            font-size: 12px;
            font-weight: 600;

            cursor: pointer;

            padding: 4px 0;
        }

        .remove-button:hover {
            text-decoration: underline;
        }

        /* =========================
           SUMMARY
        ========================= */

        .summary {
            background: #ffffff;

            border: 1px solid #e5e7eb;
            border-radius: 16px;

            padding: 24px;

            position: sticky;
            top: 20px;
        }

        .summary h2 {
            margin: 0 0 20px;

            font-size: 20px;
            color: #111827;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;

            margin-bottom: 14px;

            color: #6b7280;
            font-size: 14px;
        }

        .summary-divider {
            border: 0;
            border-top: 1px solid #e5e7eb;
            margin: 18px 0;
        }

        .summary-total {
            display: flex;
            justify-content: space-between;
            align-items: center;

            margin-bottom: 22px;
        }

        .summary-total span:first-child {
            font-size: 16px;
            font-weight: 700;
        }

        .summary-total span:last-child {
            color: #198754;
            font-size: 22px;
            font-weight: 800;
        }

        .checkout-button {
            display: block;

            width: 100%;

            padding: 14px;

            border-radius: 10px;

            background: #198754;
            color: white;

            text-align: center;

            font-weight: 700;

            transition: 0.2s;
        }

        .checkout-button:hover {
            background: #146c43;
            transform: translateY(-1px);
        }

        .checkout-disabled {
            display: block;

            width: 100%;

            padding: 14px;

            border-radius: 10px;

            background: #d1d5db;
            color: #6b7280;

            text-align: center;

            font-weight: 700;

            cursor: not-allowed;
        }

        /* =========================
           WARNING
        ========================= */

        .warning {
            margin-bottom: 20px;

            padding: 16px;

            border-radius: 12px;

            background: #fff3cd;
            border: 1px solid #ffecb5;

            color: #664d03;
        }

        .warning-title {
            margin-bottom: 6px;

            font-weight: 800;
        }

        .warning p {
            margin: 0;

            font-size: 13px;
            line-height: 1.5;
        }

        /* =========================
           EMPTY CART
        ========================= */

        .empty-cart {
            max-width: 600px;

            margin: 60px auto;

            background: white;

            border: 1px solid #e5e7eb;
            border-radius: 18px;

            padding: 50px 30px;

            text-align: center;
        }

        .empty-icon {
            width: 70px;
            height: 70px;

            margin: 0 auto 20px;

            border-radius: 50%;

            background: #e8f5ee;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 32px;
        }

        .empty-cart h2 {
            margin: 0 0 10px;

            color: #111827;
        }

        .empty-cart p {
            margin-bottom: 25px;

            color: #6b7280;
        }

        .shop-button {
            display: inline-block;

            padding: 12px 20px;

            border-radius: 9px;

            background: #198754;
            color: white;

            font-weight: 700;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 850px) {

            .cart-layout {
                grid-template-columns: 1fr;
            }

            .summary {
                position: static;
            }

        }

        @media (max-width: 600px) {

            .page {
                padding: 25px 16px 50px;
            }

            .header-inner {
                padding: 0 16px;
            }

            .page-heading h1 {
                font-size: 27px;
            }

            .cart-item {
                grid-template-columns: 85px 1fr;
                gap: 15px;
            }

            .product-image-wrapper {
                width: 85px;
                height: 85px;
            }

            .cart-actions {
                grid-column: 1 / -1;

                display: flex;
                justify-content: space-between;
                align-items: center;

                border-top: 1px solid #eee;

                padding-top: 14px;

                text-align: left;
            }

            .subtotal {
                margin: 0;
            }

            .brand {
                font-size: 21px;
            }

            .continue-shopping {
                font-size: 13px;
            }

        }

    </style>
    ```

</head>

<body>

<!-- HEADER -->

<header class="header">

    ```
    <div class="header-inner">

        <a href="{{ route('home') }}" class="brand">
            Ali <span>Africa</span>
        </a>

        <a
            href="{{ route('home') }}"
            class="continue-shopping"
        >
            ← Continue Shopping
        </a>

    </div>
    ```

</header>

<!-- PAGE -->

<main class="page">

    ```
    <div class="page-heading">

        <h1>
            Your Shopping Cart
        </h1>

        <p>
            Review your items before proceeding to checkout.
        </p>

    </div>


    @if (!$cart || $cart->items->isEmpty())

        <div class="empty-cart">

            <div class="empty-icon">
                🛒
            </div>

            <h2>
                Your cart is empty
            </h2>

            <p>
                You haven't added anything to your cart yet.
                Explore our products and find something you like.
            </p>

            <a
                href="{{ route('home') }}"
                class="shop-button"
            >
                Start Shopping
            </a>

        </div>

    @else

        @php

            $total = 0;

            $hasUnavailableProducts = false;

        @endphp


        @foreach ($cart->items as $item)

            @php

                $subtotal =
                    $item->unit_price *
                    $item->quantity;

                $isUnavailable =
                    !$item->product ||
                    !$item->product->is_active ||
                    !$item->product->is_available;

                if ($isUnavailable) {
                    $hasUnavailableProducts = true;
                }

                $total += $subtotal;

            @endphp


            @if ($loop->first)

                <div class="cart-layout">

                    <div class="cart-items">

                        @endif


                        <!-- CART ITEM -->

                        <div
                            class="cart-item
            {{ $isUnavailable ? 'unavailable' : '' }}"
                        >

                            <div class="product-image-wrapper">

                                @if ($item->product)

                                    <img
                                        src="{{ asset('storage/' . $item->product->image) }}"
                                        alt="{{ $item->product->name }}"
                                        class="product-image"
                                    >

                                @else

                                    <span>
                        📦
                    </span>

                                @endif

                            </div>


                            <div class="product-info">

                                @if ($item->product)

                                    <h2 class="product-name">
                                        {{ $item->product->name }}
                                    </h2>

                                    <p class="product-category">

                                        {{ $item->product->category->name ?? 'Product' }}

                                    </p>

                                @else

                                    <h2 class="product-name">
                                        Product No Longer Exists
                                    </h2>

                                @endif


                                <p class="product-price">

                                    TZS
                                    {{ number_format($item->unit_price, 2) }}

                                </p>


                                @if ($item->product && $item->product->size_volume)

                                    <div class="product-size">

                                        Size:
                                        {{ $item->product->size_volume }}

                                    </div>

                                @endif


                                @if ($isUnavailable)

                                    <span class="unavailable-label">
                        Unavailable
                    </span>

                                    <div class="unavailable-message">

                                        This product is no longer available.
                                        Remove it before proceeding to checkout.

                                    </div>

                                @endif

                            </div>


                            <div class="cart-actions">

                                <div class="quantity">

                                    <form
                                        action="{{ route('cart.decrease', $item) }}"
                                        method="POST"
                                    >

                                        @csrf

                                        <button type="submit">
                                            −
                                        </button>

                                    </form>


                                    <span class="quantity-value">

                        {{ $item->quantity }}

                    </span>


                                    <form
                                        action="{{ route('cart.increase', $item) }}"
                                        method="POST"
                                    >

                                        @csrf

                                        <button type="submit">
                                            +
                                        </button>

                                    </form>

                                </div>


                                <div>

                                    <div class="subtotal">

                                        TZS
                                        {{ number_format($subtotal, 2) }}

                                    </div>


                                    <form
                                        action="{{ route('cart.remove', $item) }}"
                                        method="POST"
                                    >

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="remove-button"
                                        >
                                            Remove
                                        </button>

                                    </form>

                                </div>

                            </div>

                        </div>


                        @if ($loop->last)

                    </div>


                    <!-- SUMMARY -->

                    <aside class="summary">

                        <h2>
                            Order Summary
                        </h2>


                        <div class="summary-row">

                        <span>
                            Items
                        </span>

                            <span>
                            {{ $cart->items->sum('quantity') }}
                        </span>

                        </div>


                        <div class="summary-row">

                        <span>
                            Product subtotal
                        </span>

                            <span>
                            TZS {{ number_format($total, 2) }}
                        </span>

                        </div>


                        <div class="summary-row">

                        <span>
                            Delivery
                        </span>

                            <span>
                            Calculated at checkout
                        </span>

                        </div>


                        <hr class="summary-divider">


                        <div class="summary-total">

                        <span>
                            Estimated Total
                        </span>

                            <span>
                            TZS {{ number_format($total, 2) }}
                        </span>

                        </div>


                        @if ($hasUnavailableProducts)

                            <div class="warning">

                                <div class="warning-title">

                                    Checkout unavailable

                                </div>

                                <p>

                                    Your cart contains products
                                    that are no longer available.

                                    Remove them before proceeding
                                    to checkout.

                                </p>

                            </div>


                            <span class="checkout-disabled">

                            Checkout Unavailable

                        </span>

                        @else

                            <a
                                href="{{ route('checkout') }}"
                                class="checkout-button"
                            >

                                Proceed to Checkout →

                            </a>

                        @endif

                    </aside>

                </div>

            @endif

        @endforeach

    @endif
    ```

</main>

</body>

</html>
