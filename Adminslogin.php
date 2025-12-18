<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="CSS/adminLog.css">
    <script src="js/log.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <center>
        <h2 id="h2">Login For Admins</h2>
    </center>
    <br>
    <center>
        <form action="./adlogprocess.php" method="post" autocomplete="off">
            <fieldset id="fieldset">
                <table>
                    <tr>
                        <td><img src="Images/logo.jpeg" alt="Logo" id="lofimg"></td>
                        <td>
                            <p id="p">Username</p>
                            <input type="email" id="data1" name="email" placeholder="Enter your email" required><br><br>

                            <p id="p">Password</p>
                            <input type="password" id="data" name="password" placeholder="Enter Password" required><br>

                            <p id="p1">
                                <input type="checkbox" onclick="Password()" id="checkbox">Show password
                                <a href="#" class="forgot">Forgot Password?</a>
                            </p><br>

                            <center><button type="submit" class="login" name="login">Log in</button></center><br>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </center>
</body>
</html>
