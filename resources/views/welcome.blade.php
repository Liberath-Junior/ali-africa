<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Ali Africa — Quality Products, Made Simple</title>

    <style>

        /* =========================================================
           RESET
        ========================================================= */

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family:
                Inter,
                -apple-system,
                BlinkMacSystemFont,
                "Segoe UI",
                Arial,
                sans-serif;

            background: #f7f8f6;
            color: #17201a;
            line-height: 1.5;
        }

        a {
            text-decoration: none;
        }


        /* =========================================================
           HEADER
        ========================================================= */

        .header {
            position: sticky;
            top: 0;
            z-index: 1000;

            background: rgba(255, 255, 255, 0.95);

            backdrop-filter: blur(12px);

            border-bottom: 1px solid #e7ebe8;
        }

        .header-container {
            max-width: 1200px;

            margin: auto;

            padding: 17px 25px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 30px;
        }

        .logo {
            display: flex;
            align-items: center;

            color: #17201a;

            font-size: 25px;
            font-weight: 800;

            letter-spacing: -0.5px;
        }

        .logo-mark {
            width: 38px;
            height: 38px;

            margin-right: 10px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #198754;

            color: white;

            border-radius: 11px;

            font-size: 17px;
            font-weight: 800;
        }

        .logo span {
            color: #198754;
        }

        .navigation {
            display: flex;
            align-items: center;

            gap: 25px;
        }

        .nav-link {
            color: #4b5563;

            font-size: 15px;
            font-weight: 600;

            transition: color 0.2s ease;
        }

        .nav-link:hover {
            color: #198754;
        }

        .cart-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            padding: 10px 17px;

            background: #198754;
            color: white;

            border-radius: 9px;

            font-size: 14px;
            font-weight: 700;

            transition:
                transform 0.2s ease,
                background 0.2s ease;
        }

        .cart-button:hover {
            background: #157347;
            transform: translateY(-1px);
        }


        /* =========================================================
           HERO
        ========================================================= */

        .hero {
            max-width: 1200px;

            margin: 35px auto 70px;

            padding: 75px 60px;

            position: relative;
            overflow: hidden;

            border-radius: 28px;

            background:
                linear-gradient(
                    135deg,
                    #102d1e 0%,
                    #176b42 55%,
                    #198754 100%
                );

            color: white;
        }

        .hero::before {
            content: "";

            position: absolute;

            width: 350px;
            height: 350px;

            right: -120px;
            top: -150px;

            border: 70px solid rgba(255, 255, 255, 0.06);

            border-radius: 50%;
        }

        .hero::after {
            content: "";

            position: absolute;

            width: 220px;
            height: 220px;

            right: 80px;
            bottom: -150px;

            background: rgba(255, 255, 255, 0.05);

            border-radius: 50%;
        }

        .hero-content {
            max-width: 680px;

            position: relative;

            z-index: 2;
        }

        .hero-label {
            display: inline-block;

            margin-bottom: 18px;

            padding: 7px 12px;

            background: rgba(255, 255, 255, 0.12);

            border: 1px solid rgba(255, 255, 255, 0.15);

            border-radius: 100px;

            color: #d9f5e5;

            font-size: 12px;
            font-weight: 700;

            letter-spacing: 1.5px;
        }

        .hero h1 {
            margin-bottom: 20px;

            font-size: clamp(40px, 6vw, 64px);

            line-height: 1.05;

            letter-spacing: -2px;
        }

        .hero h1 span {
            color: #b9f2ce;
        }

        .hero-description {
            max-width: 580px;

            margin-bottom: 32px;

            color: #dceee3;

            font-size: 18px;

            line-height: 1.7;
        }

        .hero-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;

            padding: 14px 21px;

            background: white;

            color: #176b42;

            border-radius: 10px;

            font-weight: 700;

            transition:
                transform 0.2s ease,
                box-shadow 0.2s ease;
        }

        .hero-button:hover {
            transform: translateY(-2px);

            box-shadow:
                0 8px 20px rgba(0, 0, 0, 0.18);
        }


        /* =========================================================
           MAIN CONTAINER
        ========================================================= */

        .container {
            max-width: 1200px;

            margin: auto;

            padding: 0 25px 70px;
        }


        /* =========================================================
           SECTION HEADERS
        ========================================================= */

        .section-header {
            display: flex;

            align-items: flex-end;

            justify-content: space-between;

            gap: 20px;

            margin-bottom: 22px;
        }

        .section-label {
            margin-bottom: 6px;

            color: #198754;

            font-size: 12px;
            font-weight: 800;

            letter-spacing: 1.2px;

            text-transform: uppercase;
        }

        .section-header h2 {
            color: #17201a;

            font-size: 30px;

            letter-spacing: -0.7px;
        }

        .section-description {
            color: #737c76;

            font-size: 14px;
        }


        /* =========================================================
           CATEGORIES
        ========================================================= */

        .categories-wrapper {
            margin-bottom: 70px;
        }

        .categories {
            display: flex;

            gap: 12px;

            overflow-x: auto;

            padding: 5px 2px 12px;

            scrollbar-width: thin;
        }

        .category {
            flex: 0 0 auto;

            padding: 12px 19px;

            background: white;

            color: #3d4741;

            border: 1px solid #e1e7e3;

            border-radius: 100px;

            font-size: 14px;
            font-weight: 600;

            transition:
                background 0.2s ease,
                color 0.2s ease,
                border-color 0.2s ease,
                transform 0.2s ease;
        }

        .category:hover {
            background: #198754;

            color: white;

            border-color: #198754;

            transform: translateY(-1px);
        }


        /* =========================================================
           PRODUCTS
        ========================================================= */

        .products-section {
            scroll-margin-top: 100px;
        }

        .products {
            display: grid;

            grid-template-columns:
                repeat(4, minmax(0, 1fr));

            gap: 22px;
        }

        .product {
            overflow: hidden;

            background: white;

            border: 1px solid #e4e9e5;

            border-radius: 16px;

            transition:
                transform 0.25s ease,
                box-shadow 0.25s ease;
        }

        .product:hover {
            transform: translateY(-5px);

            box-shadow:
                0 15px 35px rgba(25, 135, 84, 0.10);
        }

        .product-image-wrapper {
            position: relative;

            height: 245px;

            padding: 15px;

            background: #f8faf8;

            border-bottom: 1px solid #edf0ed;
        }

        .product img {
            width: 100%;
            height: 100%;

            object-fit: contain;

            display: block;
        }

        .availability-badge {
            position: absolute;

            top: 14px;
            left: 14px;

            padding: 6px 9px;

            border-radius: 100px;

            font-size: 11px;
            font-weight: 700;
        }

        .available {
            background: #e2f5e9;
            color: #157347;
        }

        .unavailable {
            background: #f1f3f2;
            color: #7a827d;
        }

        .product-content {
            padding: 18px;
        }

        .product-category {
            margin-bottom: 6px;

            color: #198754;

            font-size: 11px;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 0.7px;
        }

        .product h3 {
            margin-bottom: 7px;

            font-size: 17px;

            line-height: 1.3;
        }

        .product h3 a {
            color: #17201a;

            transition: color 0.2s ease;
        }

        .product h3 a:hover {
            color: #198754;
        }

        .product-description {
            height: 44px;

            margin-bottom: 13px;

            overflow: hidden;

            color: #747d77;

            font-size: 13px;

            line-height: 1.6;
        }

        .product-meta {
            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 10px;

            margin-bottom: 16px;
        }

        .price {
            color: #17201a;

            font-size: 17px;

            font-weight: 800;
        }

        .size {
            color: #7b847e;

            font-size: 12px;
        }

        .product-actions {
            display: flex;

            gap: 8px;
        }

        .view-button {
            flex: 1;

            padding: 10px;

            text-align: center;

            color: #198754;

            background: #edf8f1;

            border-radius: 8px;

            font-size: 13px;

            font-weight: 700;
        }

        .cart-action {
            flex: 1;

            padding: 10px;

            border: none;

            background: #198754;

            color: white;

            border-radius: 8px;

            font-family: inherit;

            font-size: 13px;

            font-weight: 700;

            cursor: pointer;

            transition: background 0.2s ease;
        }

        .cart-action:hover {
            background: #157347;
        }

        .cart-action:disabled {
            background: #d9ddda;

            color: #858b87;

            cursor: not-allowed;
        }


        /* =========================================================
           EMPTY STATE
        ========================================================= */

        .empty-products {
            padding: 60px 20px;

            background: white;

            border: 1px solid #e4e9e5;

            border-radius: 16px;

            text-align: center;
        }

        .empty-products h3 {
            margin-bottom: 8px;

            font-size: 20px;
        }

        .empty-products p {
            color: #737c76;

            font-size: 14px;
        }


        /* =========================================================
           FOOTER
        ========================================================= */

        .footer {
            background: #102d1e;

            color: #dce9e0;

            margin-top: 30px;
        }

        .footer-container {
            max-width: 1200px;

            margin: auto;

            padding: 40px 25px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 30px;
        }

        .footer-logo {
            color: white;

            font-size: 20px;

            font-weight: 800;
        }

        .footer-logo span {
            color: #7ee6a5;
        }

        .footer p {
            color: #a9bcb0;

            font-size: 13px;
        }


        /* =========================================================
           RESPONSIVE — TABLET
        ========================================================= */

        @media (max-width: 1000px) {

            .products {
                grid-template-columns:
                    repeat(3, minmax(0, 1fr));
            }

            .hero {
                padding: 60px 45px;
            }

        }


        /* =========================================================
           RESPONSIVE — MOBILE
        ========================================================= */

        @media (max-width: 700px) {

            .header-container {
                padding: 14px 18px;
            }

            .navigation {
                gap: 12px;
            }

            .nav-link {
                display: none;
            }

            .logo {
                font-size: 21px;
            }

            .logo-mark {
                width: 34px;
                height: 34px;
            }

            .hero {
                margin: 20px 15px 50px;

                padding: 45px 25px;

                border-radius: 20px;
            }

            .hero h1 {
                font-size: 42px;

                letter-spacing: -1.5px;
            }

            .hero-description {
                font-size: 16px;
            }

            .container {
                padding: 0 15px 50px;
            }

            .section-header {
                align-items: flex-start;

                flex-direction: column;
            }

            .section-header h2 {
                font-size: 26px;
            }

            .categories-wrapper {
                margin-bottom: 50px;
            }

            .products {
                grid-template-columns:
                    repeat(2, minmax(0, 1fr));

                gap: 13px;
            }

            .product-image-wrapper {
                height: 180px;

                padding: 10px;
            }

            .product-content {
                padding: 13px;
            }

            .product h3 {
                font-size: 15px;
            }

            .product-description {
                font-size: 12px;

                height: 40px;
            }

            .price {
                font-size: 15px;
            }

            .size {
                display: none;
            }

            .product-actions {
                flex-direction: column;
            }

            .footer-container {
                flex-direction: column;

                align-items: flex-start;
            }

        }


        /* =========================================================
           VERY SMALL SCREENS
        ========================================================= */

        @media (max-width: 400px) {

            .products {
                grid-template-columns: 1fr;
            }

            .product-image-wrapper {
                height: 240px;
            }

        }

    </style>

</head>


<body>


<!-- =============================================================
     HEADER
============================================================= -->

<header class="header">

    <div class="header-container">

        <a
            href="{{ route('home') }}"
            class="logo"
        >

            <div class="logo-mark">
                AA
            </div>

            Ali <span>Africa</span>

        </a>


        <nav class="navigation">

            <a
                href="{{ route('home') }}"
                class="nav-link"
            >
                Home
            </a>

            <a
                href="#products"
                class="nav-link"
            >
                Products
            </a>

            <a
                href="{{ route('cart.index') }}"
                class="cart-button"
            >
                🛒 Cart
            </a>

        </nav>

    </div>

</header>


<!-- =============================================================
     HERO
============================================================= -->

<section class="hero">

    <div class="hero-content">

        <p class="hero-label">
            WELCOME TO ALI AFRICA
        </p>

        <h1>
            Quality products,
            <span>made simple.</span>
        </h1>

        <p class="hero-description">
            Discover quality products at great prices and
            order conveniently from Ali Africa.
        </p>

        <a
            href="#products"
            class="hero-button"
        >
            Shop Now
            <span>→</span>
        </a>

    </div>

</section>


<!-- =============================================================
     MAIN CONTENT
============================================================= -->

<main class="container">


    <!-- =========================================================
         CATEGORIES
    ========================================================= -->

    <section class="categories-wrapper">

        <div class="section-header">

            <div>

                <p class="section-label">
                    Explore
                </p>

                <h2>
                    Shop by Category
                </h2>

            </div>

            <p class="section-description">
                Find what you're looking for faster.
            </p>

        </div>


        <div class="categories">

            @foreach ($categories as $category)

                <a
                    href="{{ route('category', $category) }}"
                    class="category"
                >
                    {{ $category->name }}
                </a>

            @endforeach

        </div>

    </section>


    <!-- =========================================================
         PRODUCTS
    ========================================================= -->

    <section
        class="products-section"
        id="products"
    >

        <div class="section-header">

            <div>

                <p class="section-label">
                    Our Collection
                </p>

                <h2>
                    Featured Products
                </h2>

            </div>

            <p class="section-description">
                Quality products, ready to order.
            </p>

        </div>


        @if ($products->count())

            <div class="products">

                @foreach ($products as $product)

                    <article class="product">


                        <!-- PRODUCT IMAGE -->

                        <div class="product-image-wrapper">

                            <img
                                src="{{ asset('storage/' . $product->image) }}"
                                alt="{{ $product->name }}"
                                loading="lazy"
                            >


                            @if ($product->is_available)

                                <span
                                    class="availability-badge available"
                                >
                                    Available
                                </span>

                            @else

                                <span
                                    class="availability-badge unavailable"
                                >
                                    Unavailable
                                </span>

                            @endif

                        </div>


                        <!-- PRODUCT CONTENT -->

                        <div class="product-content">

                            <p class="product-category">
                                {{ $product->category->name }}
                            </p>


                            <h3>

                                <a
                                    href="{{ route('product.show', $product) }}"
                                >
                                    {{ $product->name }}
                                </a>

                            </h3>


                            <p class="product-description">

                                {{ $product->description }}

                            </p>


                            <div class="product-meta">

                                <span class="price">

                                    TZS
                                    {{ number_format($product->price, 0) }}

                                </span>


                                @if ($product->size_volume)

                                    <span class="size">

                                        {{ $product->size_volume }}

                                    </span>

                                @endif

                            </div>


                            <div class="product-actions">

                                <a
                                    href="{{ route('product.show', $product) }}"
                                    class="view-button"
                                >
                                    View Details
                                </a>


                                @if ($product->is_available)

                                    <form
                                        action="{{ route('cart.add', $product) }}"
                                        method="POST"
                                        style="flex: 1;"
                                    >

                                        @csrf

                                        <button
                                            type="submit"
                                            class="cart-action"
                                        >
                                            Add to Cart
                                        </button>

                                    </form>

                                @else

                                    <button
                                        type="button"
                                        class="cart-action"
                                        disabled
                                    >
                                        Unavailable
                                    </button>

                                @endif

                            </div>

                        </div>

                    </article>

                @endforeach

            </div>

        @else

            <div class="empty-products">

                <h3>
                    No products available
                </h3>

                <p>
                    There are currently no products available.
                    Please check back later.
                </p>

            </div>

        @endif

    </section>


</main>


<!-- =============================================================
     FOOTER
============================================================= -->

<footer class="footer">

    <div class="footer-container">

        <div>

            <div class="footer-logo">
                Ali <span>Africa</span>
            </div>

            <p>
                Quality products, made simple.
            </p>

        </div>

        <p>
            © {{ date('Y') }} Ali Africa. All rights reserved.
        </p>

    </div>

</footer>


</body>

</html>

