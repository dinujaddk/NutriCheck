<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $planid = $_POST['planid'];

    $sql = "DELETE FROM dietplan WHERE planid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $planid); // Use 'i' for integer binding

    if ($stmt->execute()) {
        header("Location: medicalstaffdashboard.php");
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
