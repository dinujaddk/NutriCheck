<?php
include 'connect.php';

if (isset($_POST['register'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $age = $_POST['age'];
    $dob = $_POST['date'];
    $gender = $_POST['ge'];
    $civil_status = $_POST['civil'];
    $nic = $_POST['NIC'];
    $email = $_POST['email'];

    if (isset($_POST['gfullname'])) {
        $gfullname = $_POST['gfullname'];
        $gfname = $_POST['gfname'];
        $glname = $_POST['glname'];
        $gage = $_POST['gage'];
        $gdob = $_POST['gdob'];
        $ggender = $_POST['ge']; 
        $gcontact = $_POST['gcontact'];
        $gnic = $_POST['gnic'];
        $gaddress = $_POST['gaddress'];
        $gemail = $_POST['gemail'];
    } else {
        $gfullname = null;
        $gfname = null;
        $glname = null;
        $gage = null;
        $gdob = null;
        $ggender = null;
        $gcontact = null;
        $gnic = null;
        $gaddress = null;
        $gemail = null;
    }

    $sql = "INSERT INTO registered_user 
            (email, Dob, First_name, Last_name, age, gender, civil_status, NIC, Gfullname, Gfname, Glname, Gage, GDoB, Ggender, Gcontactnumber, Gnic, Ghomeaddress, Gemailaddress)
            VALUES 
            ('$email', '$dob', '$fname', '$lname', '$age', '$gender', '$civil_status', '$nic', '$gfullname', '$gfname', '$glname', '$gage', '$gdob', '$ggender', '$gcontact', '$gnic', '$gaddress', '$gemail')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    } else {
        echo "Failed to submit the form";
    }
?>
