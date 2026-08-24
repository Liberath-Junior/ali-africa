<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Product - Ali Africa Admin</title>
</head>

<body>

<h1>Edit Product</h1>

<form
    action="{{ route('admin.products.update', $product) }}"
    method="POST"
    enctype="multipart/form-data"
>

    @csrf
    @method('PUT')

    <div>
        <label for="name">
            Product Name
        </label>

        <br>

        <input
            type="text"
            id="name"
            name="name"
            value="{{ old('name', $product->name) }}"
            required
        >
    </div>

    <br>

    <div>
        <label for="category_id">
            Category
        </label>

        <br>

        <select
            id="category_id"
            name="category_id"
            required
        >

            <option value="">
                Select a category
            </option>

            @foreach($categories as $category)

                <option
                    value="{{ $category->id }}"
                    {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}
                >
                    {{ $category->name }}
                </option>

            @endforeach

        </select>
    </div>

    <br>

    <div>
        <label for="description">
            Description
        </label>

        <br>

        <textarea
            id="description"
            name="description"
            rows="5"
            required
        >{{ old('description', $product->description) }}</textarea>
    </div>

    <br>

    <div>
        <label for="price">
            Price
        </label>

        <br>

        <input
            type="text"
            id="price"
            name="price"
            value="{{ old('price', $product->price) }}"
            inputmode="decimal"
            required
        >
    </div>

    <br>

    <div>
        <label for="size_volume">
            Size / Volume
        </label>

        <br>

        <input
            type="text"
            id="size_volume"
            name="size_volume"
            value="{{ old('size_volume', $product->size_volume) }}"
        >
    </div>

    <br>

    <div>

        <label>
            Current Image
        </label>

        <br>

        <img
            src="{{ asset('storage/' . $product->image) }}"
            alt="{{ $product->name }}"
            width="200"
        >

    </div>

    <br>

    <div>

        <label for="image">
            Replace Image
        </label>

        <br>

        <input
            type="file"
            id="image"
            name="image"
            accept="image/*"
        >

        <p>
            Leave this empty if you want to keep the current image.
        </p>

    </div>

    <br>

    <div>

        <label>

            <input
                type="checkbox"
                name="is_available"
                value="1"
                {{ old('is_available', $product->is_available) ? 'checked' : '' }}
            >

            Available for purchase

        </label>

    </div>

    <br>

    <div>

        <label>

            <input
                type="checkbox"
                name="is_active"
                value="1"
                {{ old('is_active', $product->is_active) ? 'checked' : '' }}
            >

            Active product

        </label>

    </div>

    <br>

    <button type="submit">
        Update Product
    </button>

</form>

<br>

<a href="{{ route('admin.products.index') }}">
    ← Back to Products
</a>

</body>

</html>
