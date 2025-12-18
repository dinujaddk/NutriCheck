<!DOCTYPE html>
<html>
    <head>
        <link rel="Stylesheet" href="CSS/register.css">
        <script src="JS/register.js"></script>
     
        
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
                rel="stylesheet">
        
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
                integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
                crossorigin="anonymous" referrerpolicy="no-referrer"/>
    </head>
    <body>

       <h1 id="h1"><img src="images/IWT LOGO.jpg"  id="img1"> Registration</h1>
       <h2 id="h3">Enter your details to register</h2><br>
       Do you want to register as staff member?<a href="requeststaff.php">   Click Here...</a>

       <form method="post" action="./process.php">
            <fieldset id="fieldset" style="width: 98%;">
        
                <h2 id="h4">Personal Information</h2>
                *If You are under the age 18 you must enter the guardian details form below
                <b>Are you age 18 above?</b><br>
                <div class="b1">
                <input type="radio" id= "yes" value="Yes" name="hi" required>Yes
                <input type="radio" id="no" value="no" name="hi" required>No<br></div><br>
                <b>Full name*</b><br>
                <input type="text" name="fullname" id="text" placeholder="User's full name">
                <table>
                    <tr>
                    
                    <br><td><b>First Name*</b><br>
                    <input type="text" class="name" name="firstname" placeholder="User's first name" required></td>
                    <td><b class="name1">Last Name*</b><br>
                    <input type="text" class="name1" name="lastname" placeholder="User's last name" required></td> 
                    <td><b class="name2">Age*</b><br>
                    <input type="number" class="name2" name="age" placeholder="User's Age" required></td>
                    </tr>
    
                    <tr>
                        <td><b><br>Date of Birth*</b><br>
                        <input type="date"class="name" name="date" placeholder="User's Birthday" required></td>
                        <td><br><b class="name1">Gender*</b><br>
                            <input type="radio" id="ma" name="ge" value="Male"required>Male
                            <input type="radio" id="ma" name="ge" value="Female" required>Female</td>
                        <td><b class="name2">Civil status*</b><br>
                            <input type="radio" id="ma" name="civil" value="Single" required>Single
                            <input type="radio" id="ma" name="civil" value="Married" required>Married<br></td>
                    </tr>
                    <tr>
                        <td><b><br>NIC(National Identity Card Number)*</b>
                            <input type="number" class="name" placeholder="NIC" name="NIC"required></td>
                        <td><br><b class="name2">Contact Number</b><br>
                            <input type="number" class="name2" name="contact" placeholder="Contact Number" required></td>
                        <td><br><b class="name2">Contact Land Number</b><br>
                            <input type="number" class="name2" name="contactlan" placeholder="Contact Land Number" required></td>
                    </tr>
        
                    <tr>
                        <td><b><br>Email address</b><br>
                        <input type="email" class="name" name="email" placeholder="email address" required></td>                        
                        <td><div class="profile"><img src="images/download1.png" alt="profile" id="profilrimg">
                            Upload Profile Picture<br>
                            <input type="file" id="profilePicture" name="profilePicture" accept="image/*" required><br>
                            *Upload a clear image of your face</div></td><br>
                    </tr>
                </table><br>    
                
                    
                  <input type = "submit" name="register" value="Register" id="btn1">    
            </fieldset>
       </form><br>

       <form id="guardianForm" style="display: none;">
        <fieldset id="fieldset">
            <h2 id="h4">Guardian Information</h2>
            *If You are under the age 18 you must enter the guardian details.<br>
            *Starred details cannot change after the registration. So please double check your details.
            <br><br><b>Full name*</b><br>
            <input type="text" id="text" name="gfullname" placeholder="Guardian's full name" required>
            <table>
                <tr>
                
                <td><b><br>First Name</b>
                    <input type="text" class="name" name="gfname"placeholder="Guardian's first name" required></td>
                <td><br><b class="name1">Last Name</b>
                    <input type="text" class="name1" name="glname" placeholder="Guardian's last name" required></td> 
                <td><br><b class="name2">Age</b>
                    <input type="text" class="name2" name="gage" placeholder="Guardian's Age" required></td>
                </tr>

                <tr>
                    <td><b><br>Date of Birth</b>
                        <input type="date" class="name" name="gdob" placeholder="Guardian's Birthday" required></td>
                    <td><br><b class="name1">Gender</b>
                        <input type="radio" id="ma" name="ge" required>Male
                        <input type="radio" id="ma" name="ge" required>Female</td>
                    <td><br><b class="name2">Contact Number</b>
                        <input type="text" class="name2" name="gcontact" placeholder="Contact Number" required></td>
                    
                </tr>
                <tr>
                    <td><b><br>NIC(National Identity Card Number)</b>
                        <input type="number" class="name" name="gnic" placeholder="NIC" required></td>
                    <td><br><b class="name1">Home Address</b>
                        <input type="number" class="name1" name="gaddress" placeholder="Guardian's Home Address" required></td>
                        <td><input type = "submit" name="register" value="Register" id="btn2"></td>
                </tr>
                <tr>
                    <td><b><br>Email address</b><br>
                        <input type="email" class="name" name="gemail" placeholder="email address" required>
                    </td>
                    <td><br><div class="profile1"><img src="images/download1.png" alt="profile" id="profilrimg">
                        Upload Profile Picture<br>
                        <input type="file" id="profilePicture" name="profilePicture" accept="image/*" required><br>
                        *Upload a clear image of your guardian face</div></td><br>
                </tr>
         
            </table>     
        </fieldset>
   </form>


    </body>
</html>