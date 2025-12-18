<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'healthcheckup'; 

$conn= new mysqli($hostname , $username, $password, $dbname);

if($conn -> connect_error){
    echo ($conn."error 404");
}else{
    echo "connection successful";
}


// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['appointments_button'])) {
    $query = "SELECT appointment_id, time, date, hospital, appointed_medical_staff FROM appointments";
    $result = mysqli_query($conn, $query);

    $appointments = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $appointments[] = $row;
    }

    // Return data as JSON
    echo json_encode($appointments);
}

mysqli_close($conn);
?>
