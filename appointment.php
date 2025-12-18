<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link rel="stylesheet" href="CSS/appointment.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <script src="JS/Appointment.js"></script>
</head>
<body>
    <div class="apphead">
        <input type="button" onclick="history.back()" value="Go Back">
        <h1>Appointments</h1>
    </div>
    <form id="appointment-form" method="post" action="appointdatetime.php">
        <fieldset>
            <legend>Book an appointment</legend>
            <br>
            <label for="doctor-select">Please select a medical professional</label><br>
            <select id="doctor-select" name="doctor" onchange="updateSpecialization()">
                <option value="">Select a medical professional</option>
                <!-- Options will be dynamically shown here -->
            </select>
            <br><br>
            <label for="specialization-select">Please select a specialization</label><br>
            <select id="specialization-select" name="specialization" onchange="updateDoctors()">
                <option value="">Select a specialization</option>
                <option value="General Practitioner">General Practitioner</option>
                <option value="Dentist">Dentist</option>
                <option value="Registered Dietitian Nutritionist">Registered Dietitian Nutritionist</option>
            </select>

            <br><br>
            <label for="appointment-date">Select a date</label><br>
            <input type="date" id="appointment-date" name="appointment_date" required>
            <br><br>
            <div class="center-container">
                <input type="submit" value="Search">
            </div>
        </fieldset>
    </form>
    
</body>
</html>
