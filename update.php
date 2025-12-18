<?php

include 'connect.php';

if (isset($_GET['ID'])) {
    $id = $_GET['ID'];

    // Prepare a statement for selecting the medical staff
    $stmt = $conn->prepare("SELECT * FROM medicalstaff WHERE staff_id = ?");
    $stmt->bind_param("i", $id); // Bind parameters
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch data of the selected staff member
        $row = $result->fetch_assoc();
    } else {
        echo "0 results";
    }

    // Update logic after selecting
    if (isset($_POST['update'])) {
        $fname = $_POST['First_name'];
        $lname = $_POST['Last_name'];
        $mstype = $_POST['Medical_staff_type'];
        $specialization = $_POST['Specialization'];
        $age = $_POST['Age'];
        $address = $_POST['Address'];
        $gender = $_POST['Gender'];
        $email = $_POST['Email'];

        // Prepare the update statement
        $update_stmt = $conn->prepare("UPDATE medicalstaff SET fname = ?, lname = ?, staff_type = ?, specialization = ?, age = ?, address = ?, gender = ?, email = ? WHERE staff_id = ?");
        $update_stmt->bind_param("ssssiissi", $fname, $lname, $mstype, $specialization, $age, $address, $gender, $email, $id); // Bind parameters

        if ($update_stmt->execute()) {
            header('Location: index.php');
            exit; // Ensure no further code is executed
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    $stmt->close();
}

$conn->close(); // Close connection outside of the if statements
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Medical Staff</title>
    <link rel="stylesheet" href="CSS/update.css">
</head>
<body>
    <center>
        <h1 id="Registrationform"><img src="Images/IWT LOGO.jpg" id="img1">Update Form</h1>
        <form method="post">
            <fieldset id="fieldset">
                <table>
                    <tr>
                        <td><b class="r1names">First Name</b><br>
                            <input name="First_name" type="text" class="fname" placeholder="Enter First Name" value="<?php echo htmlspecialchars($row['fname']); ?>"></td>

                        <td><b class="r2names">Last Name</b><br>
                            <input name="Last_name" type="text" class="lname" placeholder="Enter Last Name" value="<?php echo htmlspecialchars($row['lname']); ?>"></td>
                    </tr>

                    <tr>
                        <td><b class="r1names">Enter Medical Staff Type</b><br>
                            <input name="Medical_staff_type" type="text" id="specialization" placeholder="Enter Medical Staff Type" value="<?php echo htmlspecialchars($row['staff_type']); ?>"></td>
                    </tr>

                    <tr>
                        <td><b class="r1names">Enter your specialization</b><br>
                            <input name="Specialization" type="text" id="specialization" placeholder="Enter your specialization" value="<?php echo htmlspecialchars($row['specialization']); ?>"></td>
                    </tr>

                    <tr>
                        <td><b class="r1names">Age</b><br>
                            <input name="Age" type="number" class="fname" placeholder="Enter your age" value="<?php echo htmlspecialchars($row['age']); ?>"></td>

                        <td><b class="r1names">Gender</b><br>
                            <input name="Gender" type="text" class="fname" placeholder="Enter your gender" value="<?php echo htmlspecialchars($row['gender']); ?>"></td>
                    </tr>

                    <tr>
                        <td><b class="r1names">Address</b><br>
                            <input name="Address" type="text" class="fname" placeholder="Enter your Address" value="<?php echo htmlspecialchars($row['address']); ?>"></td>
                    </tr>

                    <tr>
                        <td><b class="r1names">Email</b><br>
                            <input name="Email" type="email" class="fname" placeholder="Enter your email" value="<?php echo htmlspecialchars($row['email']); ?>"></td>
                    </tr>
                </table>
            </fieldset>
            <div class="item reg_btn">
                <button name="update">UPDATE</button>
            </div>
        </form>
    </center>
</body>
</html>
