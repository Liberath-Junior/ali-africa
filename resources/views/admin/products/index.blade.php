
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Products - Ali Africa Admin</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 1100px;
            margin: auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .add-button {
            display: inline-block;
            padding: 10px 15px;
            background: #198754;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        .card {
            background: white;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 10px;
            border: 1px solid #ddd;
        }

        .product {
            display: flex;
            gap: 20px;
            align-items: flex-start;
        }

        .product-image {
            width: 160px;
            height: 160px;
            object-fit: contain;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: #fafafa;
        }

        .product-details {
            flex: 1;
        }

        .product-details h3 {
            margin-top: 0;
        }

        .available {
            color: green;
            font-weight: bold;
        }

        .unavailable {
            color: #999;
            font-weight: bold;
        }

        .active {
            color: green;
        }

        .inactive {
            color: #c00;
        }

        .success {
            background: #d4edda;
            color: #155724;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .empty {
            background: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px;
        }

        .edit-button {
            display: inline-block;
            margin-top: 10px;
            padding: 9px 14px;
            background: #0d6efd;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        .toggle-button {
            margin-top: 10px;
            padding: 9px 14px;
            border: none;
            border-radius: 6px;
            color: white;
            cursor: pointer;
            font-size: 14px;
        }

        .deactivate-button {
            background: #dc3545;
        }

        .activate-button {
            background: #198754;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">

        <div>
            <h1>Ali Africa</h1>
            <h2>Products</h2>
        </div>

        <a
            href="{{ route('admin.products.create') }}"
            class="add-button"
        >
            + Add New Product
        </a>

    </div>

    @if(session('success'))

        <div class="success">
            {{ session('success') }}
        </div>

    @endif

    @forelse($products as $product)

        <div class="card">

            <div class="product">

                <img
                    src="{{ asset('storage/' . $product->image) }}"
                    alt="{{ $product->name }}"
                    class="product-image"
                >

                <div class="product-details">

                    <h3>
                        {{ $product->name }}
                    </h3>

                    <p>
                        <strong>Category:</strong>
                        {{ $product->category->name }}
                    </p>

                    <p>
                        <strong>Description:</strong>
                        {{ $product->description }}
                    </p>

                    <p>
                        <strong>Price:</strong>
                        TZS {{ number_format($product->price, 2) }}
                    </p>

                    <p>
                        <strong>Size:</strong>
                        {{ $product->size_volume ?? 'Not specified' }}
                    </p>

                    <p>
                        <strong>Availability:</strong>

                        @if($product->is_available)

                            <span class="available">
                                Available
                            </span>

                        @else

                            <span class="unavailable">
                                Unavailable
                            </span>

                        @endif

                    </p>

                    <p>
                        <strong>Status:</strong>

                        @if($product->is_active)

                            <span class="active">
                                Active
                            </span>

                        @else

                            <span class="inactive">
                                Inactive
                            </span>

                        @endif

                    </p>

                    <a
                        href="{{ route('admin.products.edit', $product) }}"
                        class="edit-button"
                    >
                        Edit Product
                    </a>

                    <form
                        action="{{ route('admin.products.toggle-active', $product) }}"
                        method="POST"
                    >
                        @csrf
                        @method('PATCH')

                        <button
                            type="submit"
                            class="toggle-button {{ $product->is_active ? 'deactivate-button' : 'activate-button' }}"
                        >
                            {{ $product->is_active ? 'Deactivate Product' : 'Activate Product' }}
                        </button>
                    </form>

                </div>

            </div>

        </div>

    @empty

        <div class="empty">

            <h2>No Products</h2>

            <p>
                There are currently no products.
            </p>

        </div>

    @endforelse

</div>

</body>

</html>
```
