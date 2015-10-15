<?php

    $User_id=$_GET['id'];
    $User_name=$_GET['name'];
    $User_pass= $_GET['pass'];


?>

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
            <form name="admin_login" class="login-form" action="update_controller.php" method="post">

                <!--HEADER-->
                <div class="header">
                    <!--TITLE--><h1><img class="img-responsive" src="images/logo.png" alt="Radio Foorti"></h1><!--END TITLE-->

                </div>
                <div class="content">
                    <div class="col-xs-12 col-sm-12">
                        <h4 class="text-center"><a href="" class="text">Change Admin Information</a> | <a href="admin_view_user.php" class="text" >User Information</a></h4>
                        <hr>
                    </div>
                </div>
                
                <!--END HEADER-->

                <!--CONTENT-->
                <input type="text" name="id" value="<?php echo trim($User_id)?>">
                <div class="content">
                    <input name="admin_username" type="text" class="input" value="<?php echo trim($User_name)?>" /><!--END USERNAME-->
                </div>
                <div class="content">
                    <input name="admin_password" type="text" class="input" value="<?php echo trim($User_pass)?>" /><!--END USERNAME-->
                </div>
                <!--END CONTENT-->

                <!--FOOTER-->
                <div class="footer">

                    <input type="submit" value="Update" class="button1" /><!--END LOGIN BUTTON-->
                </div>
                <!--END FOOTER-->

            </form>
            <!--END LOGIN FORM-->

        </div>
        <!--END WRAPPER-->


       <script src="js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>


    </body>
</html>