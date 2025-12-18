<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['packageName'];
    $desc = $_POST['packageDesc'];
    $price = $_POST['packagePrice'];
    $type = $_POST['packageType'];
    $staff_id = 1; 


    if (isset($_FILES['packageImage']) && $_FILES['packageImage']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['packageImage']['tmp_name'];
        $imageBlob = addslashes(file_get_contents($image));
    } else {
        echo "Error uploading image: " . $_FILES['packageImage']['error'];
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO dietplan (planname, pdescrption, price, Type, staff_id, Img) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdsis", $name, $desc, $price, $type, $staff_id, $imageBlob);


    if ($stmt->execute()) {
        header("Location: medicalstaffdashboard.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
