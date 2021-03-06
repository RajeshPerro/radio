<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Administrative Panel | Radio Foorti RJ Hunt Campaign </title>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <!--WRAPPER-->
        <div id="wrapper">
            <!--LOGIN FORM-->
            <form name="admin_login" class="login-form" action="login_controller.php" method="post">

                <!--HEADER-->
                <div class="header">
                    <!--TITLE--><h1><img class="img-responsive" src="images/logo.png" alt="Radio Foorti"></h1><!--END TITLE-->
                    <!--DESCRIPTION--><h1>Administrative Panel</h1><!--END DESCRIPTION-->
                </div>
                <!--END HEADER-->

                <!--CONTENT-->
                <div class="content">
                    <input name="admin_username" type="text" class="input" placeholder="Type admin username" onfocus="this.value = ''" /><!--END USERNAME-->
                </div>
                <div class="content">
                    <input name="admin_password" type="password" class="input" placeholder="Enter password" onfocus="this.value = ''" /><!--END USERNAME-->
                </div>
                <!--END CONTENT-->

                <!--FOOTER-->
                <div class="footer">
                    
                    <input type="submit" value="Sign In" class="button1" /><!--END LOGIN BUTTON-->
                </div>
                <!--END FOOTER-->

            </form>
            <!--END LOGIN FORM-->

        </div>
        <!--END WRAPPER-->

        
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        
        
    </body>
</html>