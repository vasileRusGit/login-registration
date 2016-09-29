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
                    <form class="forgot_password active">
                        <h3>Forgot Password</h3>
                        <div>
                            <label>Username or Email:</label>
                            <input type="text" />
                            <span class="error">This is an error</span>
                        </div>
                        <div class="bottom">
                            <input type="submit" value="Send reminder"></input>
                            <a href="login.php" rel="login">Log in here</a>
                            <!--<a href="register.php" rel="register">Register here</a>-->
<!--                            <div class="clear"></div>-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>