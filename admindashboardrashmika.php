<?php

include 'connect.php';


$sql = "SELECT * FROM Schedules";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>ReceptionistAdmin Dashboard</title>
        <link rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Receptionist Dashboard - Schedule List</h1>

        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>Schedule ID</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Appointed Medical Staff</th>
                    <th>Actions</th> 
                </tr>
            </thead>
            <tbody>
                <?php
              
                if ($result->num_rows > 0) {
                    
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['Schedule_id'] . "</td>";
                        echo "<td>" . $row['Date'] . "</td>";
                        echo "<td>" . $row['Time'] . "</td>";
                        echo "<td>" . $row['Appointed_medical_staff'] . "</td>";
                        echo "<td>";
                        
                        echo "<a href='Editrashmika.php?id=" . $row['Schedule_id'] . "'>Update</a> | ";
                        echo "<a href='deleterashmika.php?id=" . $row['Schedule_id'] . "' onclick=\"return confirm('Are you sure you want to delete this schedule?');\">Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No schedules found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </body>
</html>

<?php

$conn->close();
?>
