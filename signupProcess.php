<?php

include 'connect.php';

    if(isset($_POST['submit'])){

        $fname = $_POST['First_name'];
        $lname = $_POST['Last_name'];
        $mstype = $_POST['Medical_staff_type'];
        $specialization = $_POST['Specialization'];
        $age = $_POST['Age'];
        $address = $_POST['Address'];
        $gender = $_POST['Gender'];
        $email = $_POST['Email'];
        $pass = $_POST['Password'];

        $sql = "INSERT INTO medicalstaff (fname, lname, staff_type, specialization, age, address, gender, email, password)
        VALUES ('$fname', '$lname', '$mstype','$specialization','$age','$address', '$gender', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
        // echo "New record created successfully";
        header('location:index.php');
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }    
?>