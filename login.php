<?php
error_reporting(-1);
session_start();

//connect to database
$connectDB = mysqli_connect("localhost", "root", "", "test");

if (isset($_POST['login_btn'])) {

    $username = mysqli_real_escape_string($connectDB, $_POST['username']);
    $password = mysqli_real_escape_string($connectDB, $_POST['password']);

    $password = md5($password);
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connectDB, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['message'] = "You are now logged in";
        $_SESSION['username'] = $username;
        header("location: welcome_page.php");
    } else {
        $_SESSION['message'] = "Username or password incorrect";
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

                    <form class="login active"  method="post" action="login.php">
                        <h3>Login</h3>
                        <div>
                            <label>Username:</label>
                            <input name="username" type="text" />
                            <span class="error">This is an error</span>
                        </div>
                        <div>
                            <label>Password: <a href="forgot_pass.php" rel="forgot_password" class="forgot">Forgot your password?</a></label>
                            <input name="password" type="password" />
                            <span class="error">This is an error</span>
                        </div>
                        <div class="bottom">
                                <!--<div class="remember"><input type="checkbox" /><span>Keep me logged in</span></div>-->
                            <input type="submit" name="login_btn" value="Login"></input>
                            <a href="register.php" class="span1" rel="register">Register here</a>
                            <!--<div class="clear"></div>-->
                        </div>
                    </form>
                </div>
                <!--<div class="clear"></div>-->
            </div>
        </div>


        <!-- The JavaScript class="linkform"-->
        <script type="text/javascript" src="../js/jquery-3.js"></script>
    </body>
</html>