<?php
session_start();

include 'connect.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT * FROM registered_user WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Compare password directly if it's stored as plain text
        if ($password == $row['Password']) {
            $_SESSION['email'] = $row['email'];
            header("Location: loggedinhome.php");
            exit();
        } else {
            echo "<script>alert('Incorrect password. Please try again.');</script>";
        }
    } else {
        echo "<script>alert('No user found with that email address.');</script>";
    }
}
?>
