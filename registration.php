<?php
/**
 * Created by PhpStorm.
 * User: rajesh
 * Date: 10/14/15
 * Time: 3:37 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>User Registration | Radio Foorti RJ Hunt Campaign </title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link href="css/style1.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/text.js"></script>


    <script>
        $(document).ready(function(){
            $("#dob").datepicker({dateFormat: "yy-mm-dd"});

        });
    </script>
</head>
<body>
<!--WRAPPER-->
<div id="wrapper">
    <div class="container">
        <!--LOGIN FORM-->
        <form name="admin_login" class="login-form" action="controller.php" method="post" enctype="multipart/form-data">

            <!--HEADER-->
            <div class="header">
                <!--TITLE--><h1><img class="img-responsive" src="images/logo.png" alt="Radio Foorti"></h1><!--END TITLE-->
                <!--DESCRIPTION--><h2>Welcome to Radio Foorti <b>Rj Hunt</b> Campaign</h2><!--END DESCRIPTION-->
                <!--DESCRIPTION--><h5>Those who are interested to participate in our Radio Foorti Rj Hunt Campaign, please fill out the following information. </h5><!--END DESCRIPTION-->
            </div>
            <!--END HEADER-->

            <!--CONTENT-->

            <div class="content">

                <input name="firstName" type="text" class="input" placeholder="your first name"  /><!--END USERNAME-->
                <input name="lastName" type="text" class="input" placeholder="your last name"  /><!--END USERNAME-->
                <input name="emailAddress" type="email" class="input" placeholder="your email address"  /><!--END USERNAME-->
                <input name="contact" type="text" class="input" placeholder="your contact number"  /><!--END USERNAME-->

                <select name="gender" class="input" >
                    <option>select your gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select>
                <input name="dbirth" id="dob" type="text" class="input" placeholder="your date of birth"  /><!--END USERNAME-->
            </div>


            <div class="content">

                <textarea name="address" placeholder="your address" style="font-size: 11px; font-weight: bold;" class="form-control" rows="3" ></textarea>
            </div>
            <div class="content">
                <h5>Upload your Resume</h5>
                <input type="file" name="image[]" class="form-control"><!--END USERNAME-->
            </div>
            <div class="content1">
                <div class="box">
                    <h5>Q1. This is question 1</h5>
                    <textarea name="question1" placeholder="your answer" maxlength="200" style="font-size: 11px; font-weight: bold;" class="input minus1 question" rows="3" ></textarea>
                    <h4 class=" question_msg character_remaining1"></h4>
                </div>
                <div class="box">
                    <h5>Q2. This is question 2</h5>
                    <textarea name="question2" placeholder="your answer" maxlength="200" style="font-size: 11px; font-weight: bold;" class="input minus2 question" rows="3" ></textarea>
                    <h4 class="question_msg character_remaining2"></h4>
                </div>
                <div class="box">
                    <h5>Q3. This is question 3</h5>
                    <textarea name="question3" placeholder="your answer" maxlength="200" style="font-size: 11px; font-weight: bold;" class="input minus3 question"  rows="3" ></textarea>
                    <h4 class="question_msg character_remaining3"></h4>
                </div>
                <div class="box">
                    <h5>Q4. This is question 4</h5>
                    <textarea name="question4" placeholder="your answer" maxlength="200" style="font-size: 11px; font-weight: bold;" class="input minus4 question" rows="3" ></textarea>
                    <h4 class=" question_msg character_remaining4 "></h4>
                </div>
                <div class="box">
                    <h5>Q5. This is question 5</h5>
                    <textarea name="question5" placeholder="your answer" maxlength="200" style="font-size: 11px; font-weight: bold;" class="input minus5 question" rows="3" ></textarea>
                    <h4 class=" question_msg character_remaining5 "></h4>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="footer">
                <div class="content">

                    <input type="submit" value="Next" class="btn button1 " /><!--END LOGIN BUTTON-->
                </div>
            </div>
            <!--END FOOTER-->



            <!--END CONTENT-->

            <!--FOOTER-->

            <!--END FOOTER-->

        </form>
    </div>
    <!--END LOGIN FORM-->

</div>
<!--END WRAPPER-->




</body>
</html>
