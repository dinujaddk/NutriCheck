<?php
include 'connect.php'; // Include database connection

// Handle form submissions for creating and updating reviews
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add_review'])) {
        // Insert a new review
        $email = $_POST['email'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $description = $_POST['description'];

        // Check if a review with the same email already exists
        $check_sql = "SELECT * FROM reviewtab WHERE mail = ?";
        $check_stmt = $conn->prepare($check_sql);
        $check_stmt->bind_param("s", $email);
        $check_stmt->execute();
        $check_result = $check_stmt->get_result();

        if ($check_result->num_rows > 0) {
            // Update the existing review
            $sql = "UPDATE reviewtab SET date=?, time=?, descripton=? WHERE mail=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $date, $time, $description, $email);
            $stmt->execute();
            $stmt->close();
        } else {
            // Insert new review
            $sql = "INSERT INTO reviewtab (mail, date, time, descripton) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $email, $date, $time, $description);
            $stmt->execute();
            $stmt->close();
        }
    }

    if (isset($_POST['delete_review'])) {
        // Delete a review by email
        $email = $_POST['email'];

        $sql = "DELETE FROM reviewtab WHERE mail=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->close();
    }
}

// Fetch all reviews from the database
$sql = "SELECT * FROM reviewtab";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="CSS/Review.css">
    <title>Add a Review</title>
</head>
<body>
    <center><h1>Add a Review</h1></center>
    <h5>Only add or delete a review that has your email address as the email field</h5>

    <!-- Form for Adding and Updating Reviews -->
    <div class="review-form">
        <form method="POST" action="">
            <input type="hidden" name="review_email" id="review_email" value="">
            <b>Email:</b><br>
            <input type="email" name="email" id="email" placeholder="Email:" required><br><br>

            <b>Date:</b><br>
            <input type="date" name="date" id="date" required><br><br>
            
            <b>Time:</b><br>
            <input type="time" name="time" id="time" required><br><br>

            <b>Review Description:</b><br>
            <textarea rows="5" name="description" id="description" placeholder="Review Description" required></textarea><br><br>

            <center>
                <button type="submit" name="add_review">Submit Review</button>
            </center>
        </form>
    </div>

    <!-- Display Existing Reviews -->
    <h2>Existing Reviews</h2>
    <?php
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Email</th><th>Date</th><th>Time</th><th>Description</th><th>Actions</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['mail']) . "</td>";
            echo "<td>" . htmlspecialchars($row['date']) . "</td>";
            echo "<td>" . htmlspecialchars($row['time']) . "</td>";
            echo "<td>" . htmlspecialchars($row['descripton']) . "</td>";
            echo "<td>
                    <form action='' method='POST' style='display:inline;'>
                        <input type='hidden' name='email' value='" . htmlspecialchars($row['mail']) . "'>
                        <button type='button' onclick='editReview(\"" . htmlspecialchars($row['mail']) . "\")'>Edit</button>
                        <button type='submit' name='delete_review'>Delete</button>
                    </form>
                  </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No reviews found.";
    }

    $conn->close();
    ?>

    <script>
        function editReview(email) {
            // Find the row based on email and populate the form fields
            const row = Array.from(document.querySelectorAll('tr')).find(row => row.cells[0].textContent === email);
            if (row) {
                const date = row.cells[1].textContent;
                const time = row.cells[2].textContent;
                const description = row.cells[3].textContent;

                document.getElementById('review_email').value = email;
                document.getElementById('email').value = email;
                document.getElementById('date').value = date;
                document.getElementById('time').value = time;
                document.getElementById('description').value = description;
            }
        }
    </script>
</body>
</html>
