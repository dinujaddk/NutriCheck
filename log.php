<!DOCTYPE html>
<html>
<head>
    <link rel="Stylesheet" href="CSS/Log.css">
    <script src="JS/log.js"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="tbl">
    <table> 
        <tr>
            <td><img src="Images/images/download.png" id="img"><br>
            <b><button id="btn">Back</button></td>
            <td><h2 id="h2">User Login</h2></b></td>
         </tr>
    </table>
    </div>
    <br>
    <center>
    <form action="userlog.process.php" method="POST">
        <fieldset id="fieldset">
            <table>
                <tr>
                    <td><img src="Images/images/IWT LOGO.jpg" alt="logo"  id="lofimg"></td>
                    <td><p id="p">Username</p>
                        <input type="text" name="email" id="username" placeholder="Enter your username or Gmail address" required><br><br>
                        <p id="p">Password</p>
                        <input type="password" name="password" id="password" placeholder="Enter Password" required><br>
                        <p id="p1">
                            <input type="checkbox" onclick="Password()" id="checkbox">Show password
                            <a href="#" class="forgot">Forgot Password?</a>
                        </p><br>

                        <center>
                            <button type="submit" class="login" name="login">Log in</button><br>
                            <div class="admin">
                                Don't have an account? 
                                <a href="register.php">Sign up</a>
                            </div>
                        </center>
                        <center>
                            <div class="admin">
                                Do you want to sign in as admin ? 
                                <a href="Adminslogin.php">Click here to login as admin</a>
                            </div>
                        </center>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
    </center>
</body>
</html>
