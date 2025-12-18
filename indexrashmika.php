<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet"  href="CSS/Schedule.css">
    </head>
    <body>
        <table class="table">
            <tr>
                <td><a href="displayappointments.php"><button id="Appointments">Appointments</button></a></td>

                <td><b id="h1">Schedule Table</b></td>
            </tr>
        </table>
        <br>
       
        <form action="submitschedulerashmika.php" method="POST">
            <fieldset>
                <b>Schedule id:</b>
                <input type="text" name="schedule_id" placeholder="Schedule id" required><br><br>
                
                <b>Date:</b>
                <input type="date" name="date" placeholder="Date" required><br><br>
                
                <b>Time:</b>
                <input type="time" name="time" placeholder="Time" required><br><br>
                
                <b>Appointed medical staff:</b>
                <input type="text" name="appointed_medical_staff" placeholder="Appointed medical staff" required><br><br>

                <button type="submit">Submit</button>
            </fieldset>
        </form>

        <center>
        <div class=Admindash>
            <a href="admindashboardrashmika.php" >Go to Admin Dashboard</a>
        </div>
        </center>
    </body>
</html>
