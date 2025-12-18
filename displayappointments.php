<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Table</title>
    <link rel="stylesheet" href="CSS/displayappointment.css">
</head>
<body>

    <!-- Form to display Appointments button -->
    <form method="POST" action="">
        <button type="submit" name="appointment_button">Appointments</button>
    </form>

    <!-- Table to display appointment details -->
    <?php
    // Database connection
    $conn = mysqli_connect("localhost", "root", "", "healthcheckup");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Fetch appointment details when the button is clicked
    if (isset($_POST['appointment_button'])) {
        $query = "SELECT appointment_id, time, date, Type, hospital,  appointed_medical_staff, type FROM appointment";
        $result = mysqli_query($conn, $query);

        // Check if the query was successful
        if ($result === false) {
            // Output the error message
            echo "Error: " . mysqli_error($conn);
        } else {
            // Check if there are rows returned
            if (mysqli_num_rows($result) > 0) {
                echo "<table border='1'>
                        <thead>
                            <tr>
                                <th>Appointment ID</th>
                                <th>Time</th>
                                <th>Date</th>
                                <th>Hospital</th>
                                <th>Type</th> 
                                <th>Appointed Medical Staff</th>
                                <!-- New column for Type -->
                            </tr>
                        </thead>
                        <tbody>";

                // Output data for each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>{$row['appointment_id']}</td>
                            <td>{$row['time']}</td>
                            <td>{$row['date']}</td>
                            <td>{$row['hospital']}</td>
                            
                            <td>{$row['type']}</td> 
                            <td>{$row['appointed_medical_staff']}</td>
                          </tr>";
                }

                echo "</tbody></table>";
            } else {
                echo "No appointments found.";
            }
        }
    }

    // Close the database connection
    mysqli_close($conn);
    ?>

</body>
</html>
