<?php
session_start();

// Check if form data is set
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Store the selected plan details in session
    $_SESSION['selectedPlan'] = [
        'name' => $_POST['plan_name'],
        'price' => $_POST['plan_price'],
        'image' => $_POST['plan_image'],
    ];
} else {
    // Redirect to the diet plans page if no plan is selected
    header('Location: dietplans.php');
    exit();
}

// Retrieve the selected plan from the session
$selectedPlan = $_SESSION['selectedPlan'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diet Plan Details</title>
    <link rel="stylesheet" href="CSS/ddstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Center text -->
    <div class="center-text">
        <h2>HEALTH<span> CHECKUP</span></h2>
    </div>
    <div class="product-card">
        <img src="<?php echo $selectedPlan['image']; ?>" alt="<?php echo $selectedPlan['name']; ?>">

        <div class="product-details">
            <h3><?php echo $selectedPlan['name']; ?></h3>
            <p>Many diets offer benefits that go beyond weight loss. The best programs for losing weight also improve your overall health. The biggest challenge is finding the one that will work for you.</p>
            <div class="product-price">
                <h4>Rs. <?php echo number_format($selectedPlan['price'], 2); ?></h4>
            </div>
            <br>

            <input type="number" value="1" min="1">
            <button class="add-to-cart">Add to cart</button>
        </div>
    </div>

    <script>
        // Here you can add any additional functionality for the Add to cart button
    </script>
</body>
</html>
