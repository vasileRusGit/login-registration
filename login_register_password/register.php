
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
                    <form id="fadeOnLoad" class="register active">
                        <h3>Register</h3>
                        <div class="column">
                            <div>
                                <label>First Name:</label>
                                <input type="text" />
                                <span class="error">This is an error</span>
                            </div>
                            <div>
                                <label>Last Name:</label>
                                <input type="text" />
                                <span class="error">This is an error</span>
                            </div>
                            <div>
                                <label>Email:</label>
                                <input type="text" />
                                <span class="error">This is an error</span>
                            </div>
                            <div>
                                <label>Password:</label>
                                <input type="password" />
                                <span class="error">This is an error</span>
                            </div>
                            <div>
                                <label>Repeat Password:</label>
                                <input type="password" />
                                <span class="error">This is an error</span>
                            </div>
                        </div>
                        <div class="bottom">
                            <!--							<div class="remember">
                                                                                            <input type="checkbox" />
                                                                                            <span>Send me updates</span>
                                                                                    </div>-->
                            <input type="submit" value="Register" />
                            <a href="login.php" rel="login.php" class="linkform">Log in here</a>
                            <div class="clear"></div>
                        </div>
                    </form>
                </div>
                <div class="clear"></div>
            </div>
        </div>


        <!-- The JavaScript -->
        <script type="text/javascript" src="js/jquery-3.js"></script>
    </body>
</html>