<?php

include 'connect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  
    $schedule_id = $_POST['schedule_id'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $appointed_medical_staff = $_POST['appointed_medical_staff'];

 
    if (empty($schedule_id) || empty($date) || empty($time) || empty($appointed_medical_staff)) {
        die("All fields are required!"); 
    }

    
    $stmt = $conn->prepare("INSERT INTO Schedules (Schedule_id, Date, Time, Appointed_medical_staff) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $schedule_id, $date, $time, $appointed_medical_staff); 

  
    if ($stmt->execute()) {
        echo "Schedule added successfully!";
    } else {
        echo "Error: " . $stmt->error;  
    }


    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet"  href="CSS/Schedule.css">
    </head>
    <body>
        <center>
        <div class=Admindash>
            <a href="admindashboardrashmika.php" >Go to Admin Dashboard</a>
        </div>
        </center>
        </body>
</html>