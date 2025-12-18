<?php

    include 'connect.php';

?>

<!DOCTYPE html> 
<html>
    <head>
    <link rel="Stylesheet" href="CSS/a1.css">
    <script src="JS/requeststaff.js"></script>

        <title>Request</title>
    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <form action="staffprocess.php" method="post">
                <center><h1 id="Registrationform"><img src="Images/IWT LOGO.jpg"  id="img1">Registration Form</h1>
                    <fieldset id="fieldset">
                    
                        <table>

                            <tr>
                                <td><b class="r1names">First Name</b><br>
                                    <input name="First_name" type="text" class="fname" id="fname" placeholder="Enter First Name" required></td>

                                <td><b class="r2names">Last Name</b><br>
                                    <input name="Last_name" type="text" class="lname" id="lname" placeholder="Enter Last Name" required></td>
                            </tr>

                            <tr>
                                <td><b class="r1names">Enter Medical Staff Type</b><br>
                                <input name="Medical_staff_type" type="text" id="specialization" placeholder="Enter Medical Staff Type" required></td>

                            </tr>

                            <tr>
                                <td><b class="r1names">Enter your specialization</b><br>
                                <input name="Specialization" type="text" id="specialization" placeholder="Enter your specialization" required></td>

                            </tr>

                            <tr>
                                <td><b class="r1names">Age</b><br>
                                <input name="Age" type="number" class="fname" id="age" placeholder="Enter your age" required></td>
                                
                                <td><b class="r1names">Gender</b><br>
                                <input name="Gender" type="text" class="fname" id="gender" placeholder="Enter your gender" required></td>
                            </tr>

                            <tr>
                                <td><b class="r1names">Address</b><br>
                                <input name="Address" type="text" class="fname" id="address" placeholder="Enter your Address" required></td>

                                <td><b class="r1names">Phone Number</b><br>
                                <input name="Phone_number" type="number" class="lname" id="phone1" placeholder="Enter your Phone Number" required></td>
                            </tr>

                            <tr>
                                <td><b class="r1names">Email</b><br>
                                    <input name="Email" type="email" class="fname" id="email" placeholder="Enter your email" required></td>
                            </tr>
                            
                        </table>
                        <button type="submit" name="submit1" id="bsub" onclick="validateForm()">Submit</button> 
                    </fieldset>
            </center> 
        </form>
    </body>
</html>