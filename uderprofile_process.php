<?php
session_start();
include 'connect.php';

// Check if the user is logged in
if (!isset($_SESSION['user_login'])) {
    header('Location: project1.php');
    exit();
}

// Initialize variables
$fname = $lname = $age = $dob = $gender = $civil_status = $nic = '';
$gfullname = $gfname = $glname = $gage = $gdob = $gnic = '';
$gcontact = $gaddress = $gemail = '';

// Retrieve user email from session
$email = $_SESSION['user_email'];

// Fetch user data from the database
$sql = "SELECT * FROM registered_user WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    // Assign user data to variables
    $fname = $row['First_name'];
    $lname = $row['Last_name'];
    $age = $row['age'];
    $dob = $row['Dob'];
    $gender = $row['gender'];
    $civil_status = $row['civil_status'];
    $nic = $row['NIC'];
    
    // Guardian details
    $gfullname = $row['Gfullname'];
    $gfname = $row['Gfname'];
    $glname = $row['Glname'];
    $gage = $row['Gage'];
    $gdob = $row['GDoB'];
    $gnic = $row['Gnic'];
    $gcontact = $row['Gcontactnumber'];
    $gaddress = $row['Ghomeaddress'];
    $gemail = $row['Gemailaddress'];
} else {
    echo "No user found.";
}

// Include buttons for updating and deleting the account
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="CSS/project1.css">
</head>
<body>
    <header>
        <h1>User Profile</h1>
    </header>
    <h2 class="details">User Account Details</h2>
    
    <div class="container">
        <div class="grid-container">
            <aside class="sidebar">
                <div class="picture">
                    <img src="user.jpg" alt="User Profile Picture">
                </div>
                <div class="userdetails">
                    <p class="p1">Name: <?php echo htmlspecialchars($fname . " " . $lname); ?></p>
                    <p class="p2">NIC: <?php echo htmlspecialchars($nic); ?></p>
                </div>
            </aside>
            
            <main class="form-container">
                <form>
                    <fieldset>
                        <legend>Personal Information</legend>
                        <label for="full-name">Full Name</label>
                        <input type="text" id="full-name" value="<?php echo htmlspecialchars($fname . ' ' . $lname); ?>" readonly>
                        <label for="age">Age</label>
                        <input type="number" id="age" value="<?php echo htmlspecialchars($age); ?>" readonly>
                        <label for="dob">Date of Birth</label>
                        <input type="date" id="dob" value="<?php echo htmlspecialchars($dob); ?>" readonly>
                        <label for="gender">Gender</label>
                        <input type="text" id="gender" value="<?php echo htmlspecialchars($gender); ?>" readonly>
                        <label for="civil-status">Civil Status</label>
                        <input type="text" id="civil-status" value="<?php echo htmlspecialchars($civil_status); ?>" readonly>
                        <label for="nic">NIC</label>
                        <input type="text" id="nic" value="<?php echo htmlspecialchars($nic); ?>" readonly>
                    </fieldset>

                    <fieldset>
                        <legend>Guardian Information</legend>
                        <label for="gfullname">Full Name</label>
                        <input type="text" id="gfullname" value="<?php echo htmlspecialchars($gfullname); ?>" readonly>
                        <label for="gfname">First Name</label>
                        <input type="text" id="gfname" value="<?php echo htmlspecialchars($gfname); ?>" readonly>
                        <label for="glname">Last Name</label>
                        <input type="text" id="glname" value="<?php echo htmlspecialchars($glname); ?>" readonly>
                        <label for="gage">Age</label>
                        <input type="number" id="gage" value="<?php echo htmlspecialchars($gage); ?>" readonly>
                        <label for="gdob">Date of Birth</label>
                        <input type="date" id="gdob" value="<?php echo htmlspecialchars($gdob); ?>" readonly>
                        <label for="gnic">NIC</label>
                        <input type="text" id="gnic" value="<?php echo htmlspecialchars($gnic); ?>" readonly>
                        <label for="gcontact">Contact Number</label>
                        <input type="text" id="gcontact" value="<?php echo htmlspecialchars($gcontact); ?>" readonly>
                        <label for="gaddress">Home Address</label>
                        <input type="text" id="gaddress" value="<?php echo htmlspecialchars($gaddress); ?>" readonly>
                        <label for="gemail">Email Address</label>
                        <input type="email" id="gemail" value="<?php echo htmlspecialchars($gemail); ?>" readonly>
                    </fieldset>
                </form>
                <form method="post" action="update.php">
                    <button type="submit" name="update">Update Account</button>
                </form>
                <form method="post" action="delete.php">
                    <button type="submit" name="delete">Delete Account</button>
                </form>
            </main>
        </div>
    </div>

    <script src="JS/project1.js"></script>
</body>
</html>
