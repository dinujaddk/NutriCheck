<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Diet plan & Health check up system</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href="CSS/home.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Table with Small Images -->
    <!-- Table with Images -->
    <h3 class="imagehead">Click below images to visit relvant pages</h3>
<div class="image-grid">
    <div class="image-container">
        <a href="Diet plans.php"><img src="Images/Diet_plan_image.jpg" alt="Diet Plan"></a>
        <a href="Health checkup.php"><img src="Images/Health_Checkups (1).jpg" alt="Health Checkup"></a>
    </div>
    <a href="appointment.php" class="full-width"><img src="Images/appointmentl.jpg" alt="Book an Appointment"></a>
</div>


    <!-- About Section -->
    <div class="homeabout">
        <h2>Welcome To Our Diet Plan and Health Check-Up System</h2>
        <table>
            <tr>
                <th>Diet Plan</th>
                <th>Health Checkup</th>
                <th>Appointment</th>
            </tr>
            <tr>
                <td>Welcome to our Diet Plan System, where we believe that healthy eating should be enjoyable and sustainable. Our personalized diet plans are designed to fit your unique lifestyle, preferences, and goals. We focus on balanced nutrition, incorporating a variety of whole foods to ensure you receive essential vitamins and minerals. Our team of experts collaborates to create flexible meal options that are easy to follow and delicious. Whether you're looking to lose weight, gain energy, or simply eat healthier, our approach empowers you to make positive changes without feeling deprived. Join us on your journey to a healthier, happier you!</td>
                <td>Our Health Checkup section is dedicated to providing comprehensive assessments to ensure your well-being. Regular checkups are essential for early detection and prevention of potential health issues. Our skilled professionals conduct thorough evaluations, including vital sign checks, blood tests, and lifestyle assessments, tailored to your individual needs. We focus on identifying risk factors and promoting a proactive approach to health. With our advanced diagnostic tools and personalized care, you’ll receive clear insights into your health status and actionable recommendations. Prioritize your health today and take the first step towards a healthier future with our reliable health checkup services!</td>
                <td>Our Appointment section is designed to make scheduling your health and wellness visits easy and convenient. Whether you need a routine checkup, specialized consultation, or follow-up care, our user-friendly system allows you to book appointments at your convenience. Choose from a range of available services and select a time that fits your busy lifestyle. Our dedicated team is committed to providing you with exceptional care and ensuring your experience is seamless from start to finish. Take control of your health today—schedule your appointment with us and let us help you achieve your wellness goals!</td>
            </tr>
        </table>
    </div>

    <!--Quality data-->
    <div class="margin1">
        <label class="l1">Our Quality Data</label>
        <div class="ourqdata">
            <div class="item">
                <h1 class="plans">250+</h1>
                <p class="plans1">Diet plans bought by Clients</p>
            </div>
            <div class="item">
                <h1 class="plans">650+</h1>
                <p  class="plans1">Health Check-Up Packages Bought by Clients</p>
            </div>
            <div class="item">
                <h1 class="plans">350</h1>
                <p class="plans1">Appointments have booked through the system</p>
            </div>
        </div>
    </div>
    <br><br><br>

    <?php include 'footer.php'; ?>
</body>
</html>
