<?php

include 'connect.php';


if (isset($_GET['id'])) {
    $schedule_id = $_GET['id'];

   
    $sql = "DELETE FROM Schedules WHERE Schedule_id = ?";
    
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $schedule_id);

      
        if ($stmt->execute()) {
            echo "Schedule deleted successfully!";
           
            header('Location: admindashboardrashmika.php');
        } else {
            echo "Error deleting schedule: " . $conn->error;
        }
    }
} else {
    echo "Invalid schedule ID.";
}


$conn->close();
?>
