<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    ```
    <title>Admin Login - Ali Africa</title>
    ```

</head>

<body>

<h1>Ali Africa Admin</h1>

<h2>Login</h2>

@if ($errors->any()) <div>
    @foreach ($errors->all() as $error) <p style="color: red;">
        {{ $error }} </p>
    @endforeach </div>
@endif

<form action="{{ route('admin.login.submit') }}" method="POST">

    ```
    @csrf

    <div>
        <label for="email">
            Email
        </label>

        <input
            type="email"
            id="email"
            name="email"
            value="{{ old('email') }}"
            required
        >
    </div>

    <br>

    <div>
        <label for="password">
            Password
        </label>

        <input
            type="password"
            id="password"
            name="password"
            required
        >
    </div>

    <br>

    <button type="submit">
        Login
    </button>
    ```

</form>

</body>
</html>
