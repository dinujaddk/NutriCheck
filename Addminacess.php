<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="CSS/Adminaccess.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer"/>

</head>

<body>
    <?php
        session_start();
        if(!isset($_SESSION['user_login'])){
            header('location:homepage.php');
        }
        ?>
<center>
    <h1>Navigate to your admin Dashboard by clicking below links....</h1>
</center>

<div class="button-container">
    <a href="index.php" class="btn">
        <button class="btn">Administrator Admin Dashboard</button>
    </a>

    <a href="medicalstaffdashboard.php" class="btn">
        <button class="btn">Medical Staff Admin Dashboard</button>
    </a>

    <a href="indexrashmika.php" class="btn">
        <button class="btn">Helpdesk Admin Dashboard</button>
    </a>
</div>


</body>
</html>



</body>



</html>

