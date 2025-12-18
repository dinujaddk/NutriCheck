<?php

include 'connect.php';


if (isset($_GET['id'])) {
    $schedule_id = $_GET['id'];

    
    $sql = "SELECT * FROM Schedules WHERE Schedule_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $schedule_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); 
    } else {
        echo "No schedule found.";
        exit();
    }
} else {
    echo "Invalid schedule ID.";
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Schedule Time</title>
    </head>
    <body>
        <h1>Edit Schedule Time</h1>

        <form action="Updaterashmika.php" method="POST">
            <input type="hidden" name="schedule_id" value="<?php echo $schedule_id; ?>">
            <label for="time">Schedule Time:</label>
            <input type="time" name="time" value="<?php echo $row['Time']; ?>" required><br><br>

            <button type="submit">Update Time</button>
        </form>
    </body>
</html>
