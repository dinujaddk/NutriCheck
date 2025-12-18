<?php

include 'connect.php';

    if(isset($_POST['submit1'])){

        $fname = $_POST['First_name'];
        $lname = $_POST['Last_name'];
        $mstype = $_POST['Medical_staff_type'];
        $specialization = $_POST['Specialization'];
        $age = $_POST['Age'];
        $address = $_POST['Address'];
        $phone = $_POST['Phone_number'];
        $gender = $_POST['Gender'];
        $email = $_POST['Email'];

        $sql = "INSERT INTO request (First_name, Last_name, Medical_staff_type, Specialization, Age, Address, Phone_number , Gender, Email)
                VALUES ('$fname', '$lname', '$mstype','$specialization','$age','$address','$phone','$gender',' $email')";

        if ($conn->query($sql) === TRUE) {
        // echo "New record created successfully";
        header('location:index.php');
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }    

?>