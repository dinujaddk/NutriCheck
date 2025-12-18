<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "staff";

    $conn = new mysqli($hostname , $username , $password , $dbname);

    if ($conn->connect_error) {
    
        die($conn."error 404");
    }else{

        echo "connection successful";
    }
?>