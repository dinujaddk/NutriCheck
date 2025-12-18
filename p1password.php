<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Profile</title>
        <link rel="stylesheet" href="p1password.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <header>
            <h1>User Profile</h1>
        </header>

        <h2 class="change">Change Password</h2>
        
        <div class="container">
            
            <div class="grid-container">
                
                <aside class="sidebar">
                    
                    <div class="picture">
                        <img src="user.jpg">
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

                </aside>

                
                <main class="form-container">

                    <form id="passwordForm" onsubmit="return validateForm()">

                        <div class="form-section">

                            <div class="instructions">
                                <ul>
                                    <li>Password must be at least 12 characters in length</li>
                                    <li>Password must contain at least one numeric and special character</li>
                                    <li>Password must contain at least one lowercase letter or one uppercase letter</li>
                                    <li>The password cannot contain your name(s), username, or organization name</li>
                                </ul>
                            </div>

                            <div class="form-group">
                                <label for="oldPassword">Old Password</label>
                                <input type="password" id="oldPassword" required>
                            </div>

                            <div class="form-group">
                                <label for="newPassword">New Password</label>
                                <input type="password" id="newPassword" required>
                            </div>

                            <div class="form-group">
                                <label for="confirmPassword">Confirm Password</label>
                                <input type="password" id="confirmPassword" required>
                            </div>

                            <div class="actions">
                                <button type="submit">Update</button>
                                <button type="button" onclick="resetForm()">Cancel</button>
                            </div>

                        </div>

                    </form>
                </main>

            </div>
        </div>

        <script src="p1password.js"></script>
        
    </body>

</html>
