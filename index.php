<?php

include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/index_style.css">
</head>
<body>

    <div class="container">
        <div class="content">

        <div class="add_btn">
            <a href="signup.php">Add Users</a>
            <a href="view.php">Request Form</a>
        </div>
            <table>
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Staff Type</th>
                        <th>Specialization</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Actions</th> <!-- Added header for actions -->
                    </tr>
                </thead>

                <?php

                // Modified SQL query to match the new fields
                $sql = "SELECT fname, lname, staff_type, specialization, age, address, gender, email, staff_id FROM medicalstaff"; // Change Add_staff_id to staff_id
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        
                        echo "
                        
                        <tbody>
                            <tr>
                                <td>$row[fname]</td>
                                <td>$row[lname]</td>
                                <td>$row[staff_type]</td>
                                <td>$row[specialization]</td>
                                <td>$row[age]</td>
                                <td>$row[address]</td>
                                <td>$row[gender]</td>
                                <td>$row[email]</td>

                                <td>
                                    <a href='deleteProcess.php?ID=$row[staff_id]' class='del_btn'>Delete</a> <!-- Change Add_staff_id to staff_id -->
                                    <a href='update.php?ID=$row[staff_id]' class='update_btn'>Update</a> <!-- Change Add_staff_id to staff_id -->
                                </td>
                            </tr>
                        </tbody>
                        
                        ";

                    }
                }
                $conn->close();

                ?>

            </table>
        </div>
    </div>
    
</body>
</html>
