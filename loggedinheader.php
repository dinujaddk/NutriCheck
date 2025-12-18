<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="CSS/headre.css">
</head>
<body>
</html>
<?php
session_start();
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: homepage.php");
    exit();
}
?>


<div class="topnav">
    <a class="active" href="homepage.php">Home</a>
    <a href="Diet plans.php">Diet Plans</a>
    <a href="Health checkup.php">Health Checkups</a>
    <a href="appointment.php">Book an Appointment</a>
    <a href="BMI.php">BMI Calculator</a>
    <a href="#contactUs">Contact us</a>
    <a href="project1.php" class="logb">User profile</a>
    <form method="POST" action="logout.php">
    <button type="submit" action="userlog.process.php" name="logout" class="registerb">Log out</button>
    </form>
</div>


<h1 class="navtopic">Diet Plan & Health Check Up system</h1>


<div class="movingnav">
    <img src="Images/logo.jpeg" alt="Logo" class="logo">
    

    <div class="search-bar">
        <input type="text" placeholder="Search...">
        <button type="submit">Search</button>
    </div>

    <a href="appointment.php"><img src="Images/Appointment.jpg" alt="appointment" class="appointmentlogo"></a>
    <a href="Health checkup.php"><img src="Images/health.jpg" alt="health" class="healthimage"></a>
    <a href="Diet plans.php"><img src="Images/diet.jpg" alt="diet" class="cartimage"></a>
    <a href="cart.php"><img src="Images/cart.jpg" alt="cartimage" class="cartjpeg"></a>
</div>


</body>