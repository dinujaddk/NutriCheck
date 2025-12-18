<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cart </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <!-- CSS-link -->
    <link rel="stylesheet" href="CSS/cartstyle.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

</head>

<body>

    <!--Center text-->
    <div class="center-text">
        <h2>CART</h2>
    </div>

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Package</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <!-- Cart items will be inserted here by JavaScript -->
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="subtotal">
            <h3>Cart Total</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>Rs. 0.00</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>Rs. 0.00</strong></td>
                </tr>
            </table>
            <button class="normal">Proceed To Checkout</button>
        </div>
    </section>

    <!-- JS-link -->
    <script src="JS/cart.js"></script>
</body>

</html>
