<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Product - Ali Africa Admin</title>
</head>

<body>

<h1>Add New Product</h1>

<form
    action="{{ route('admin.products.store') }}"
    method="POST"
    enctype="multipart/form-data"
>

    @csrf

    <div>
        <label for="name">
            Product Name
        </label>

        <br>

        <input
            type="text"
            id="name"
            name="name"
            value="{{ old('name') }}"
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
                    {{ old('category_id') == $category->id ? 'selected' : '' }}
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
        >{{ old('description') }}</textarea>
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
            value="{{ old('price') }}"
            min="0"
            placeholder="Enter Price"
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
            value="{{ old('size_volume') }}"
            placeholder="e.g. 500ml, 1kg, 2L"
        >
    </div>

    <br>

    <div>
        <label for="image">
            Product Image
        </label>

        <br>

        <input
            type="file"
            id="image"
            name="image"
            accept="image/*"
            required
        >
    </div>

    <br>

    <div>
        <label>
            <input
                type="checkbox"
                name="is_available"
                value="1"
                {{ old('is_available', true) ? 'checked' : '' }}
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
                {{ old('is_active', true) ? 'checked' : '' }}
            >

            Active product
        </label>
    </div>

    <br>

    <button type="submit">
        Create Product
    </button>

</form>

</body>

</html>
