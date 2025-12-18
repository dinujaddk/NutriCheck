<?php

    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'healthcheckup'; 

    $conn= new mysqli($hostname , $username, $password, $dbname);

    if($conn -> connect_error){
        //echo ($conn."error 404");
    }else{
        //echo "connection successful";
    }

?>