<!DOCTYPE html>
<html>
<head>
    <title>Bangla Bastra - Home</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Welcome to Bangla Bastra</h1>
    <h2>Our Products:</h2>

    <ul>
        @foreach($products as $product)
            <li>{{ $product->name }} - ৳{{ $product->price }}</li>
        @endforeach
    </ul>
</body>
</html>
