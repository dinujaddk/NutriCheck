<?php

include 'connect.php';

    if(isset($_GET['ID'])){

        $id = $_GET['ID'];

        $sql = "DELETE FROM medicalstaff WHERE staff_id='$id'";

        if ($conn->query($sql) === TRUE) {
            
            header('location:index.php');

        } else {
        echo "Error deleting record: " . $conn->error;
        }

        $conn->close();
            }

?>