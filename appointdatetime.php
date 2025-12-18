<?php
session_start();

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Store appointment details in session
    $_SESSION['doctor'] = $_POST['doctor'] ?? '';
    $_SESSION['specialization'] = $_POST['specialization'] ?? '';
    $_SESSION['appointment_date'] = $_POST['appointment_date'] ?? '';
}

// Retrieve appointment details from session
$doctor = $_SESSION['doctor'] ?? 'Unknown Doctor';
$specialization = $_SESSION['specialization'] ?? 'Unknown Specialization';
$appointment_date = $_SESSION['appointment_date'] ?? 'Unknown Date';

// Map doctor names to hospitals
$hospitalNames = [
    "Dr. Amal Silva" => "Kandy General Hospital",
    "Dr. Viraj Perera" => "Colombo General Hospital",
    "Dr. Vishal Karunarathne" => "Durdans Kandy Hospital",
    "Dr. Faizer Khalid" => "Asiri Kandy Hospital",
    "Dr. Gamini Jayasinghe" => "Durdans Colombo Hospital",
    "Dr. Pasindu Perera" => "Nawaloka Colombo Hospital"
];

// Get the hospital name for the selected doctor
$hospital_name = $hospitalNames[$doctor] ?? "Unknown Hospital";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Confirmation</title>
    <link rel="stylesheet" href="CSS/appointmentdatetime.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <script src="JS/Appointconfirm.js"></script>
</head>
<body>
    <div class="apphead">
        <h1 class="appheader">Appointment Details</h1>
        <p class="backbutton"><a href="appointment.html" class="backbtn">Back to Appointment Selection</a></p>
    </div>
    <table>
        <tr>
            <th>Doctor's Name</th>
            <th>Specialization</th>
            <th>Hospital</th>
            <th>Date</th>
            <th>Available Time</th>
            <th>Book Now</th>
        </tr>
        <tr>
            <td id="doctor-name"><?php echo htmlspecialchars($doctor); ?></td>
            <td id="specialization"><?php echo htmlspecialchars($specialization); ?></td>
            <td id="hospital-name"><?php echo htmlspecialchars($hospital_name); ?></td>
            <td id="appointment-date"><?php echo htmlspecialchars($appointment_date); ?></td>
            <td>
                <select id="time-select">
                    <option value="">Select time</option>
                    <option value="6:30 AM - 8:30 AM">6:30 AM - 8:30 AM</option>
                    <option value="6:30 PM - 8:30 PM">6:30 PM - 8:30 PM</option>
                </select>
            </td>
            <td><input type="button" value="Book Now" onclick="bookAppointment()"></td>
        </tr>
    </table>
</body>
</html>
