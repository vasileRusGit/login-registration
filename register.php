<?php
session_start();

//connect to database
$connectDB = mysqli_connect("localhost", "root", "", "test");

if (isset($_POST['register_btn'])) {
    $username = mysqli_real_escape_string($connectDB, $_POST['username']);
    $email = mysqli_real_escape_string($connectDB, $_POST['email']);
    $password = mysqli_real_escape_string($connectDB, $_POST['password']);
    $repeat_password = mysqli_real_escape_string($connectDB, $_POST['repeat_password']);

    if ($password == $repeat_password) {
        //create user
        $password = md5($password); //hass password before storing for security pupuese
        $sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
        mysqli_query($connectDB, $sql);
        $_SESION['message'] = "You are logged in";
        $_SESSION['username'] = $username;
        header('location: welcome_page.php');
    } else {
        //failed creating user
        $_SESION['message'] = "The two passwords do not match";
    }
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Animated Form Switching with jQuery</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Expand, contract, animate forms with jQuery wihtout leaving the page" />
        <meta name="keywords" content="expand, form, css3, jquery, animate, width, height, adapt, unobtrusive javascript"/>
        <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <script src="../js/cufon-yui.js" type="text/javascript"></script>
        <script src="../js/ChunkFive_400.font.js" type="text/javascript"></script>
        <script type="text/javascript">
            Cufon.replace('h1', {textShadow: '1px 1px #fff'});
            Cufon.replace('h2', {textShadow: '1px 1px #fff'});
            Cufon.replace('h3', {textShadow: '1px 1px #000'});
            Cufon.replace('.back');
        </script>
    </head>
    <body>
        <div class="wrapper">
            <div class="content">
                <div id="form_wrapper" class="form_wrapper">

                    <?php
                    if (isset($_SESSION['message'])) {
                        echo "<div id=error_msg>" . $_SESSION['message'] . "<?div>";
                        unset($_SESSION['message']);
                    }
                    ?>

                    <form id="fadeOnLoad" class="register active" method="post" action="register.php">
                        <h3>Register</h3>
                        <div class="column">
                            <div>
                                <label>Username:</label>
                                <input name="username" type="text" />
                                <span class="error">This is an error</span>
                            </div>
                            <div>
                                <label>Email:</label>
                                <input name="email" type="text" />
                                <span class="error">This is an error</span>
                            </div>
                            <div>
                                <label>Password:</label>
                                <input type="password" name="password" />
                                <span class="error">This is an error</span>
                            </div>
                            <div>
                                <label>Repeat Password:</label>
                                <input type="password" name="repeat_password" />
                                <span class="error">This is an error</span>
                            </div>
                        </div>
                        <div class="bottom">
                            <input name="register_btn" type="submit" value="Register" />
                            <a href="login.php" rel="login.php">Log in here</a>
                        </div>
                    </form>
                </div>
                <div class="clear"></div>
            </div>
        </div>


        <!-- The JavaScript -->
        <script type="text/javascript" src="../js/jquery-3.js"></script>
    </body>
</html>