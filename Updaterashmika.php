<?php
include 'connect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $schedule_id = $_POST['schedule_id'];
    $new_time = $_POST['time'];

    $sql = "UPDATE Schedules SET Time = ? WHERE Schedule_id = ?";
    

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("si", $new_time, $schedule_id);


        if ($stmt->execute()) {
            echo "Schedule time updated successfully!";
        
            header('Location: admindashboardrashmika.php');
        } else {
            echo "Error updating schedule: " . $conn->error;
        }
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
