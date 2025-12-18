<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link rel='stylesheet' type='text/css' media='screen' href='CSS/BMI.css'>    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/BMI.css">
    <script src="JS/BMI.js"></script>
</head>
<body>
    <div class="topicBox">
        <h1>BMI Calculator</h1>
    </div>
    <br>
    <div class="formbox">
        <h3>Enter Your Details</h3>
        <form id="bmiForm">
            <p class="agegap">Age: <input type="number" id="age" placeholder="Enter age" required></p>
            Gender:
            Male <input type="radio" name="gender" value="male" id="gender">
            Female <input type="radio" name="gender" value="female" id="gender">
            <br><br>
            Height (in cm): <input type="number" id="height" placeholder="Enter height in cm" required>
            <br><br>
            Weight (in kg): <input type="number" id="weight" placeholder="Enter weight in kg" required>
            <br><br>
            <input type="button" value="Generate" onclick="calculateBMI()" class="genbutton">
        </form>
    </div>

    <h3 id="result"></h3>
    <br>

    <!-- Display Diet Plan and Health Checkup based on BMI -->
    <div id="diet-plan" class="row">
        <img src="" id="category-img" alt="">
        <div class="product-text-pr">
            <h5 id="category-title"></h5>
        </div>
        <div class="price">
            <h4 id="category-checkup-title"></h4>
            <p id="category-price"></p>
            <br>
            <div class="cart">
                <button class="cart1">Add to cart</button>
            </div>
        </div>
    </div>

    <!-- Health Checkup Section -->
    <div id="health-checkup" class="row">
        <img src="" id="checkup-img" alt="">
        <div class="product-text-pr">
            <h5 id="checkup-title"></h5>
        </div>
        <div class="price">
            <h4 id="checkup-package-title"></h4>
            <p id="checkup-price"></p>
            <br>
            <div class="cart">
                <button class="cart1">Add to cart</button>
            </div>
        </div>
    </div>

</body>
</html>
