<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>The Kitchen</title>
    <style>
        body {
            font-family: sans-serif;
            text-align: center;
            margin-top: 50px;
            background: #1a202c;
            color: white;
        }

        .order {
            padding: 20px;
            border: 2px solid #4a5568;
            display: inline-block;
            border-radius: 8px;
        }

        .badge {
            background: #e53e3e;
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="order">
        <h1>Order Up!</h1>
        <p>Welcome to <strong>{{ $restaurantName }}</strong></p>
        <p>Order <span class="badge">#{{ $orderNumber }}</span></p>
        <p>Your meal is: <strong>{{ $mealName }}</strong></p>

        @if ($orderNumber > 5)
            <p style="color: #48bb78;">🔥 Kitchen is busy today! Thank you for waiting.</p>
        @else
            <p style="color: #a0aec0;">Your meal is freshly prepared!</p>
        @endif
    </div>
</body>

</html>