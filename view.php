<?php

    include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/view.css">
</head>
<body>

    <div class="container">
        <div class="content">

            <table>
                <thead>
                    <tr>
                        <th>First_name</th>
                        <th>Last_name</th>
                        <th>Medical_staff_type</th>
                        <th>Specialization</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>phone_number</th>
                        <th>Gender</th>
                        <th>Email</th>
                    </tr>
                </thead>

                <?php

                        $sql = "SELECT * FROM request";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            
                            echo "
                        
                            <tbody>
                                <tr>
                                    <td>$row[First_name]</td>
                                    <td>$row[Last_name]</td>
                                    <td>$row[Medical_staff_type]</td>
                                    <td>$row[Specialization]</td>
                                    <td>$row[Age]</td>
                                    <td>$row[Address]</td>
                                    <td>$row[Phone_number]</td>
                                    <td>$row[Gender]</td>
                                    <td>$row[Email]</td>

                                  
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