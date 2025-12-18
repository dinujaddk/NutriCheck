<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $planid = $_POST['planid'];
    $name = $_POST['packageName'];
    $desc = $_POST['packageDesc'];
    $price = $_POST['packagePrice'];
    $type = $_POST['packageType'];

    // Validate the price
    if (!is_numeric($price)) {
        echo "Error: Price must be a number.";
        exit;
    }

    // Handle file upload (optional, keep existing image if no new image uploaded)
    if (isset($_FILES['packageImage']) && $_FILES['packageImage']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['packageImage']['tmp_name'];
        $imageBlob = addslashes(file_get_contents($image));

        // Prepare SQL statement with new image
        $stmt = $conn->prepare("UPDATE dietplan SET planname = ?, pdescrption = ?, price = ?, Type = ?, Img = ? WHERE planid = ?");
        $stmt->bind_param("ssdssi", $name, $desc, $price, $type, $imageBlob, $planid);
    } else {
        // Prepare SQL statement without changing image
        $stmt = $conn->prepare("UPDATE dietplan SET planname = ?, pdescrption = ?, price = ?, Type = ? WHERE planid = ?");
        $stmt->bind_param("ssdsi", $name, $desc, $price, $type, $planid);
    }

    // Execute the query and check for errors
    if ($stmt->execute()) {
        header("Location: medicalstaffdashboard.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
