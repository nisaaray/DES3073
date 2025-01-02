<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger Menu</title>
</head>
<body>
    <h1>Burger Menu</h1>
    @foreach ($burgers as $burger)
        <div>
            <h2>{{ $burger->name }}</h2>
            <p>{{ $burger->description }}</p>
            <p>${{ $burger->price }}</p>
            <form action="/order" method="POST">
                @csrf
                <input type="hidden" name="burger_id" value="{{ $burger->id }}">
                <label>Quantity:</label>
                <input type="number" name="quantity" min="1" required>
                <label>Name:</label>
                <input type="text" name="customer_name" required>
                <label>Email:</label>
                <input type="email" name="customer_email" required>
                <button type="submit">Order</button>
            </form>
        </div>
    @endforeach
</body>
</html>
