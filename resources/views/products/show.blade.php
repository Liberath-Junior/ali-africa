<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    ```
    <title>{{ $product->name }} - Ali Africa</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f7f8fa;
            color: #1f2937;
        }

        a {
            text-decoration: none;
        }

        /* =========================
           HEADER
        ========================= */

        .header {
            background: white;
            border-bottom: 1px solid #e5e7eb;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-inner {
            max-width: 1200px;
            margin: auto;
            padding: 18px 25px;

            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .logo {
            font-size: 25px;
            font-weight: 800;
            color: #111827;
        }

        .logo span {
            color: #198754;
        }

        .cart-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            padding: 10px 16px;

            background: #f1f5f3;
            color: #198754;

            border-radius: 8px;

            font-weight: 600;
        }

        .cart-link:hover {
            background: #e4eee8;
        }

        /* =========================
           MAIN
        ========================= */

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 35px 25px 60px;
        }

        /* =========================
           BREADCRUMB
        ========================= */

        .breadcrumb {
            margin-bottom: 30px;

            display: flex;
            align-items: center;
            gap: 8px;

            font-size: 14px;
            color: #6b7280;
        }

        .breadcrumb a {
            color: #198754;
            font-weight: 600;
        }

        .breadcrumb .separator {
            color: #9ca3af;
        }

        /* =========================
           PRODUCT LAYOUT
        ========================= */

        .product-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 18px;

            padding: 30px;

            display: grid;
            grid-template-columns: minmax(0, 1.05fr) minmax(0, 0.95fr);

            gap: 55px;

            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.04);
        }

        /* =========================
           IMAGE
        ========================= */

        .image-section {
            display: flex;
            flex-direction: column;
        }

        .image-wrapper {
            width: 100%;
            min-height: 520px;

            background: #fafafa;
            border: 1px solid #eeeeee;
            border-radius: 16px;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 35px;
        }

        .image-wrapper img {
            width: 100%;
            height: 450px;

            object-fit: contain;

            display: block;
        }

        /* =========================
           PRODUCT INFORMATION
        ========================= */

        .details {
            padding: 10px 5px;
            display: flex;
            flex-direction: column;
        }

        .category {
            display: inline-block;

            width: fit-content;

            padding: 7px 12px;

            background: #eef7f1;
            color: #198754;

            border-radius: 20px;

            font-size: 13px;
            font-weight: 700;

            margin-bottom: 18px;
        }

        .product-name {
            font-size: 38px;
            line-height: 1.15;

            margin: 0 0 18px;

            color: #111827;
        }

        .description {
            font-size: 16px;
            line-height: 1.7;

            color: #6b7280;

            margin-bottom: 25px;
        }

        /* =========================
           PRICE
        ========================= */

        .price-box {
            padding: 20px 0;

            border-top: 1px solid #eeeeee;
            border-bottom: 1px solid #eeeeee;

            margin-bottom: 25px;
        }

        .price-label {
            font-size: 13px;
            color: #6b7280;

            margin-bottom: 5px;
        }

        .price {
            font-size: 32px;
            font-weight: 800;

            color: #198754;
        }

        /* =========================
           PRODUCT META
        ========================= */

        .meta {
            display: grid;
            grid-template-columns: repeat(2, 1fr);

            gap: 12px;

            margin-bottom: 25px;
        }

        .meta-item {
            background: #f8f9fa;

            padding: 15px;

            border-radius: 10px;
        }

        .meta-label {
            display: block;

            font-size: 12px;
            color: #6b7280;

            margin-bottom: 5px;
        }

        .meta-value {
            font-size: 15px;
            font-weight: 700;

            color: #1f2937;
        }

        /* =========================
           AVAILABILITY
        ========================= */

        .availability {
            display: flex;
            align-items: center;
            gap: 9px;

            margin-bottom: 25px;

            font-weight: 700;
        }

        .availability-dot {
            width: 10px;
            height: 10px;

            border-radius: 50%;

            background: #198754;
        }

        .availability.unavailable {
            color: #dc3545;
        }

        .availability.unavailable .availability-dot {
            background: #dc3545;
        }

        /* =========================
           CART FORM
        ========================= */

        .cart-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .quantity-label {
            font-size: 14px;
            font-weight: 700;
        }

        .quantity-control {
            display: flex;
            align-items: center;

            width: fit-content;

            border: 1px solid #d1d5db;
            border-radius: 9px;

            overflow: hidden;
        }

        .quantity-control button {
            width: 42px;
            height: 42px;

            border: 0;
            background: white;

            font-size: 20px;

            cursor: pointer;

            color: #374151;
        }

        .quantity-control button:hover {
            background: #f3f4f6;
        }

        .quantity-control input {
            width: 50px;
            height: 42px;

            border: 0;

            border-left: 1px solid #e5e7eb;
            border-right: 1px solid #e5e7eb;

            text-align: center;

            font-size: 16px;
            font-weight: 700;

            outline: none;
        }

        .add-button {
            width: 100%;

            padding: 15px 20px;

            border: none;
            border-radius: 9px;

            background: #198754;
            color: white;

            font-size: 16px;
            font-weight: 700;

            cursor: pointer;

            transition: 0.2s ease;
        }

        .add-button:hover {
            background: #157347;
            transform: translateY(-1px);
        }

        /* =========================
           UNAVAILABLE
        ========================= */

        .unavailable-box {
            padding: 16px;

            background: #fff4f4;
            border: 1px solid #f5c2c7;

            color: #842029;

            border-radius: 9px;

            font-weight: 600;
        }

        /* =========================
           BACK LINK
        ========================= */

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            margin-top: 25px;

            color: #198754;

            font-size: 14px;
            font-weight: 700;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 850px) {

            .product-card {
                grid-template-columns: 1fr;
                gap: 30px;
                padding: 20px;
            }

            .image-wrapper {
                min-height: 380px;
            }

            .image-wrapper img {
                height: 330px;
            }

            .product-name {
                font-size: 30px;
            }

        }

        @media (max-width: 500px) {

            .header-inner {
                padding: 15px;
            }

            .container {
                padding: 20px 15px 40px;
            }

            .logo {
                font-size: 21px;
            }

            .cart-link {
                padding: 9px 12px;
            }

            .product-card {
                border-radius: 12px;
                padding: 15px;
            }

            .image-wrapper {
                min-height: 300px;
                padding: 20px;
            }

            .image-wrapper img {
                height: 260px;
            }

            .product-name {
                font-size: 27px;
            }

            .price {
                font-size: 27px;
            }

            .meta {
                grid-template-columns: 1fr;
            }

        }
    </style>
    ```

</head>

<body>

<header class="header">

    ```
    <div class="header-inner">

        <a href="{{ route('home') }}" class="logo">
            Ali <span>Africa</span>
        </a>

        <a href="{{ route('cart.index') }}" class="cart-link">
            🛒 Cart
        </a>

    </div>
    ```

</header>

<main class="container">

    ```
    <div class="breadcrumb">

        <a href="{{ route('home') }}">
            Home
        </a>

        <span class="separator">
        /
    </span>

        <a href="{{ route('category', $product->category) }}">
            {{ $product->category->name }}
        </a>

        <span class="separator">
        /
    </span>

        <span>
        {{ $product->name }}
    </span>

    </div>


    <div class="product-card">


        <!-- PRODUCT IMAGE -->

        <div class="image-section">

            <div class="image-wrapper">

                <img
                    src="{{ asset('storage/' . $product->image) }}"
                    alt="{{ $product->name }}"
                >

            </div>

        </div>


        <!-- PRODUCT DETAILS -->

        <div class="details">

        <span class="category">
            {{ $product->category->name }}
        </span>


            <h1 class="product-name">
                {{ $product->name }}
            </h1>


            <p class="description">
                {{ $product->description }}
            </p>


            <div class="price-box">

                <div class="price-label">
                    Price
                </div>

                <div class="price">
                    TZS {{ number_format($product->price, 2) }}
                </div>

            </div>


            <div class="meta">

                <div class="meta-item">

                <span class="meta-label">
                    Size / Volume
                </span>

                    <span class="meta-value">
                    {{ $product->size_volume ?: 'Not specified' }}
                </span>

                </div>


                <div class="meta-item">

                <span class="meta-label">
                    Product Status
                </span>

                    <span class="meta-value">

                    {{ $product->is_active ? 'Active' : 'Inactive' }}

                </span>

                </div>

            </div>


            @if ($product->is_available)

                <div class="availability">

                    <span class="availability-dot"></span>

                    <span>
                    In Stock & Available
                </span>

                </div>


                <form
                    action="{{ route('cart.add', $product) }}"
                    method="POST"
                    class="cart-form"
                >

                    @csrf

                    <label
                        for="quantity"
                        class="quantity-label"
                    >
                        Quantity
                    </label>


                    <div class="quantity-control">

                        <button
                            type="button"
                            onclick="decreaseQuantity()"
                        >
                            −
                        </button>

                        <input
                            type="number"
                            id="quantity"
                            name="quantity"
                            value="1"
                            min="1"
                            readonly
                        >

                        <button
                            type="button"
                            onclick="increaseQuantity()"
                        >
                            +
                        </button>

                    </div>


                    <button
                        type="submit"
                        class="add-button"
                    >
                        Add to Cart
                    </button>

                </form>

            @else

                <div class="availability unavailable">

                    <span class="availability-dot"></span>

                    <span>
                    Currently unavailable
                </span>

                </div>


                <div class="unavailable-box">

                    This product is currently unavailable
                    for purchase.

                </div>

            @endif


            <a
                href="{{ route('home') }}"
                class="back-link"
            >
                ← Continue Shopping
            </a>

        </div>

    </div>
    ```

</main>

<script>

    function increaseQuantity() {

        const input = document.getElementById('quantity');

        input.value = parseInt(input.value) + 1;

    }


    function decreaseQuantity() {

        const input = document.getElementById('quantity');

        const current = parseInt(input.value);

        if (current > 1) {
            input.value = current - 1;
        }

    }

</script>

</body>
</html>
