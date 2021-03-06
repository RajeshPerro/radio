<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Radio Foorti RJ Hunt Campaign </title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--WRAPPER-->
<div id="wrapper">


    <!--LOGIN FORM-->
    <form name="email_auth" class="login-form" action="send_email.php" method="post">

        <!--HEADER-->
        <div class="header">
            <!--TITLE--><h1><img class="img-responsive" src="images/logo.png" alt="Radio Foorti"></h1><!--END TITLE-->
            <!--DESCRIPTION--><span>We'll send a verification link to the email address you used to continue to the next steps. Please check your <b>Inbox, Update section of inbox, Junk</b> or <b>Spam</b> section.</span><!--END DESCRIPTION-->
        </div>
        <!--END HEADER-->

        <!--CONTENT-->
        <div class="content">
            <input name="emailAddress" type="text" class="input" placeholder="Enter your valid email address" onfocus="this.value = ''" /><!--END USERNAME-->
        </div>
        <!--END CONTENT-->

        <!--FOOTER-->
        <div class="footer">
            <input type="submit" name="submit" value="Send Verfication Email" class="button" /><!--END LOGIN BUTTON-->
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