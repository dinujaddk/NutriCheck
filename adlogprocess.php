<?php
session_start(); 

include 'connect.php'; 

if(isset($_POST['login'])){ 
    echo "success"; 
    
    $email = $_POST['email'];
    $pw = $_POST['password'];
    

    $query = "SELECT * FROM adlogin WHERE email = '$email' AND password = '$pw'";
    $res = mysqli_query($conn, $query);

    if(mysqli_num_rows($res) > 0){ 
        $_SESSION['user_login'] = $email;  
        header('Location: Addminacess.php'); 
        exit(); 
    } else {
        echo "wrong password";  
    }
}
?>
