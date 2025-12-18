<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Profile</title>
        <link rel="stylesheet" href="CSS/project1.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer"/>
    </head>

    <body>
            <header>
                <h1>User Profile</h1>
            </header>

            <h2 class=" details">User Account Detalis</h2>
        
        <div class="container">

            <div class="grid-container">
                
                <aside class="sidebar">
                    
                    <div class="picture">
                        <img src="Images/user.jpg">
                    </div>
                    
                    <div class="userdetails">
                        <p class="p1">Name: User's Name</p>
                        <p class="p2">User ID: User's ID</p>
                    </div>
                    

                    <div class="menu">
                        <ul>
                            <li class="submit"><a href="project1.php">Account</a></li>
                            <li class="submit"><a href="p1password.php">Change Password</a></li>
                        </ul>
                    </div>

                    <section>
                        <h3>Special Medical Conditions</h3>
                        <textarea name="" id="special" ></textarea>
                    </section>

                    <button>Save Changes</button>
                    
                </aside>

                
                <main class="form-container">
                    <form>

                        <div class = "Personal">
                            <fieldset> 
                                <legend>Personal Information</legend>
                                <label class="ageabove" for="age-above-18">Are you 18 or above?</label>

                                <div class="radio">
                                    <input type="radio" id="yes" name="age-above-18" value="yes" checked> Yes
                                    <input type="radio" id="no" name="age-above-18" value="no"> No
                                </div>
                                
                                <label for="full-name">Full Name</label>
                                <input type="text" id="full-name" name="full-name" placeholder="User's full name" required>

                                <label for="first-name">First Name</label>
                                <input type="text" id="first-name" name="first-name" placeholder="User's first name" required>

                                <label for="last-name">Last Name</label>
                                <input type="text" id="last-name" name="last-name" placeholder="User's last name" required>

                                <label for="age">Age</label>
                                <input type="number" id="age" name="age" required>

                                <label for="dob">Date of Birth</label>
                                <input type="date" id="dob" name="dob" required>

                                <label for="gender">Gender</label>
                                <div class="select">
                                    <select id="gender" name="gender" required>
                            
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                
                                    </select>
                                </div>

                                <label for="civil-status">Civil Status</label>
                                <div class="select">
                                    <select id="civil-status" name="civil-status" required>
                            
                                        <option value="single">Single</option>
                                        <option value="married">Married</option>
                                
                                    </select>
                                </div>

                                <label for="nic">NIC (National Identity Card Number)</label>
                                <input type="text" id="nic" name="nic" required>

                                <label for="contact-number">Contact Number</label>
                                <input type="number" id="contact-number" name="contact-number">

                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email">

                                <label for="profile-pic">Upload Profile Picture</label>
                                <input type="file" id="profile-pic" name="profile-pic">
                                    
                                <div class="apply">
                                    <button type="submit">Apply Changes</button>
                                </div>
                            </fieldset>
                        </div>

                    </form>

                    <form>

                        <div class = "Guardian">
                            <fieldset>
                                <legend>Guardian Information</legend>
                                <label for="guardian-name">Full Name</label>
                                <input type="text" id="guardian-name" name="guardian-name" placeholder="User's full name" required>

                                <label for="guardian-first-name">First Name</label>
                                <input type="text" id="guardian-first-name" name="guardian-first-name" placeholder="User's first name" required>

                                <label for="guardian-last-name">Last Name</label>
                                <input type="text" id="guardian-last-name" name="guardian-last-name" placeholder="User's last name" required>

                                <label for="guardian-age">Age</label>
                                <input type="number" id="guardian-age" name="guardian-age" required>

                                <label for="guardian-dob">Date of Birth</label>
                                <input type="date" id="guardian-dob" name="guardian-dob" required>

                                <label for="guardian-nic">NIC (National Identity Card Number)</label>
                                <input type="text" id="guardian-nic" name="guardian-nic" required>

                                <label for="guardian-contact">Contact Number</label>
                                <input type="number" id="guardian-contact" name="guardian-contact">

                                <label for="guardian-address">Home Address</label>
                                <input type="text" id="guardian-address" name="guardian-address">

                                <label for="guardian-pic">Upload Profile Picture</label>
                                <input type="file" id="guardian-pic" name="guardian-pic">
                            
                                <div class="apply">
                                    <button type="submit">Apply Changes</button>
                                </div>
                            </fieldset>
                        </div>

                    </form>

                </main>
            </div>
        </div>

        <script src="JS/project1.js"></script>
        
    </body>

</html>
