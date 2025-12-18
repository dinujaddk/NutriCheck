<?php
session_start(); // Start session

// Define the diet plans
$dietPlans = [
    [
        'name' => 'The Mediterranean diet',
        'price' => 10450,
        'image' => 'Images/all diet/mediteren.jpg',
    ],
    [
        'name' => 'The DASH diet',
        'price' => 8000,
        'image' => 'Images/all diet/dash.jpg',
    ],
    [
        'name' => 'Plant-based and flexitarian diets',
        'price' => 7000,
        'image' => 'Images/all diet/plant.jpg',
    ],
    [
        'name' => 'The MIND diet',
        'price' => 6500,
        'image' => 'Images/all diet/mind.jpg',
    ],
    [
        'name' => 'Over Weight',
        'price' => 6700,
        'image' => 'Images/all diet/over.jpg',
    ],
    [
        'name' => 'Under Weight',
        'price' => 9800,
        'image' => 'Images/all diet/under.jpg',
    ],
    [
        'name' => 'Normal',
        'price' => 7200,
        'image' => 'Images/all diet/normal.jpg',
    ],
    [
        'name' => 'Obesity',
        'price' => 10700,
        'image' => 'Images/all diet/obacity.jpg',
    ],
    [
        'name' => 'Low carb diets',
        'price' => 6000,
        'image' => 'Images/all diet/low car.jpg',
    ],
    [
        'name' => 'High Protein Diet',
        'price' => 12700,
        'image' => 'Images/all diet/high p.jpg',
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diet Plans</title>
    <link rel="stylesheet" href="CSS/dstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <!-- Center text -->
    <div class="center-text">
        <h2>DIET<span> PLANS</span></h2>
    </div>

    <!-- Products -->
    <div class="products">
        <?php foreach ($dietPlans as $index => $plan): ?>
            <div class="row">
                <img src="<?php echo $plan['image']; ?>" alt="<?php echo $plan['name']; ?>">

                <!-- Image in front text part -->
                <div class="product-text-pp">
                    <h5>HOT</h5>
                </div>

                <!-- Pricing -->
                <div class="price">
                    <h4><?php echo $plan['name']; ?></h4>
                    <p>Rs. <?php echo number_format($plan['price'], 2); ?></p>
                    <br>

                    <div class="cart">
                        <center>
                            <form method="POST" action="dietplandetails.php">
                                <input type="hidden" name="plan_name" value="<?php echo $plan['name']; ?>">
                                <input type="hidden" name="plan_price" value="<?php echo $plan['price']; ?>">
                                <input type="hidden" name="plan_image" value="<?php echo $plan['image']; ?>">
                                <button type="submit">Add to cart</button>
                            </form>
                        </center>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
