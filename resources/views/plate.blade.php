<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Kitchen</title>
    <style>
        body { font-family: sans-serif; text-align: center; margin-top: 50px; background: #1a202c; color: white;}
        .order { padding: 20px; border: 2px solid #4a5568; display: inline-block; border-radius: 8px;}
    </style>
</head>
<body>
    <div class="order">
        <h1>Order Up!</h1>
        <p>Welcome to <strong>{{ $restaurantName }}</strong></p>
        <p>Your meal is: <strong>{{ $mealName }}</strong></p>
    </div>
</body>
</html>