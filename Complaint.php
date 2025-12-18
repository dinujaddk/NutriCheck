<?php
include 'connect.php'; // Include database connection

// Handle form submissions for creating and updating complaints
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add_complaint'])) {
        // Insert a new complaint
        $email = $_POST['email'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $description = $_POST['description'];

        // Check if a complaint with the same email already exists
        $check_sql = "SELECT * FROM complain WHERE email = ?";
        $check_stmt = $conn->prepare($check_sql);
        $check_stmt->bind_param("s", $email);
        $check_stmt->execute();
        $check_result = $check_stmt->get_result();

        if ($check_result->num_rows > 0) {
            // Update the existing complaint
            $sql = "UPDATE complain SET date=?, time=?, description=? WHERE email=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $date, $time, $description, $email);
            $stmt->execute();
            $stmt->close();
        } else {
            // Insert new complaint
            $sql = "INSERT INTO complain (email, date, time, description) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $email, $date, $time, $description);
            $stmt->execute();
            $stmt->close();
        }
    }

    if (isset($_POST['delete_complaint'])) {
        // Delete a complaint by email
        $email = $_POST['email'];

        $sql = "DELETE FROM complain WHERE email=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->close();
    }
}

// Fetch all complaints from the database
$sql = "SELECT * FROM complain";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="CSS/Comlaint.css">
</head>
<body>
    <center><h1>Complaints</h1><center>
    <h5>Only add or delete complaint that has your gmail address as the email field<h5>

    <!-- Form for Adding and Updating Complaints -->
    <div class="cm">
        <form method="POST" action="">
            <input type="hidden" name="complaint_email" id="complaint_email" value="">
            <b>Email:</b><br>
            <input type="email" name="email" id="email" placeholder="Email:" required><br><br>

            <b>Date:</b><br>
            <input type="date" name="date" id="date" required><br><br>
            
            <b>Time:</b><br>
            <input type="time" name="time" id="time" required><br><br>

            <b>Complaint Description:</b><br>
            <textarea rows="5" name="description" id="description" placeholder="Complaint Description" required></textarea><br><br>

            <center>
                <button type="submit" name="add_complaint">Submit Complaint</button>
            </center>
        </form>
    </div>

    <!-- Display Existing Complaints -->
    <h2>Existing Complaints</h2>
    <?php
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Email</th><th>Date</th><th>Time</th><th>Description</th><th>Actions</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['date']) . "</td>";
            echo "<td>" . htmlspecialchars($row['time']) . "</td>";
            echo "<td>" . htmlspecialchars($row['description']) . "</td>";
            echo "<td>
                    <form action='' method='POST' style='display:inline;'>
                        <input type='hidden' name='email' value='" . htmlspecialchars($row['email']) . "'>
                        <button type='button' onclick='editComplaint(\"" . htmlspecialchars($row['email']) . "\")'>Edit</button>
                        <button type='submit' name='delete_complaint'>Delete</button>
                    </form>
                  </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No complaints found.";
    }

    $conn->close();
    ?>

    <script>
        function editComplaint(email) {
            // Find the row based on email and populate the form fields
            const row = Array.from(document.querySelectorAll('tr')).find(row => row.cells[0].textContent === email);
            if (row) {
                const date = row.cells[1].textContent;
                const time = row.cells[2].textContent;
                const description = row.cells[3].textContent;

                document.getElementById('complaint_email').value = email;
                document.getElementById('email').value = email;
                document.getElementById('date').value = date;
                document.getElementById('time').value = time;
                document.getElementById('description').value = description;
            }
        }
    </script>
</body>
</html>
