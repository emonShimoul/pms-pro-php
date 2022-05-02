<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="styles/login.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <div id="content">
        <div id="header">
            <h1>Pharmacy Management System</h1>
        </div>
        <div id="main">
            <section class="container">
                <div class="login">
                    <img src="images/ulg.png">
                    <form class="form" method="post" name="login" align="center">
                        <h1 class="login-title">Login</h1>
                        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
                        <input type="password" class="login-input" name="password" placeholder="Password"/>
                        <input type="submit" value="Login" name="submit" class="login-button"/>
                        <p class="link"><a href="registration.php">New Registration</a></p>
                    </form>
                </div>
            </section>
        </div>
        <div id="footer" align="center"> </div>
    </div>
<?php
    }
?>
</body>
</html>