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
                        <div class="col-xs-12 col-sm-12" >
                        <div class="col-xs-12 col-sm-4">
                            <input name="firstName" type="text" class="form-control input" placeholder="your first name"  /><!--END USERNAME-->
                        <div class="clearfix"></div>
                        </div>
                            
                        <div class="col-xs-12 col-sm-4">
                            <input name="lastName" type="text" class="form-control input" placeholder="your last name"  /><!--END USERNAME-->
                        <div class="clearfix"></div>
                        </div>
                            
                        <div class="col-xs-12 col-sm-4">
                            <input name="emailAddress" type="email" class="form-control input" placeholder="your email address"  /><!--END USERNAME-->
                        <div class="clearfix"></div>
                        </div>
                           </div>
                         <div class="col-xs-12 col-sm-12" >
                        <div class="col-xs-12 col-sm-4">
                            <input name="contact" type="text" class="form-control input" placeholder="your contact number"  /><!--END USERNAME-->
                        <div class="clearfix"></div>
                        </div>
                            
                        <div class="col-xs-12 col-sm-4">
                            <select class="form-control" name="gender">
                                <option>select your gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        <div class="clearfix"></div>
                        </div>
                           
                        <div class="col-xs-12 col-sm-4">
                            <input name="dbirth" id="dob"  type="text" class="form-control input" placeholder="your date of birth"  /><!--END USERNAME-->
                        </div> 
                            </div> 
                    </div> 


                    <div class="content">
                        <div class="col-xs-12 col-sm-12">
                            <textarea name="address" placeholder="your address" style="font-size: 11px; font-weight: bold;" class="form-control" rows="3" ></textarea>
                        </div>
                    </div>
                    <div class="content">
                        <div class="col-xs-12 col-sm-12">
                            <h5>Upload your resume</h5>
                            <input id="input_file" name="image[]" type="file" class="form-control" /><!--END USERNAME-->
                        </div>
                    </div>
                    <div class="content">
                        <div class="col-xs-12 col-sm-12"> 
                            <h5>Q1. This is question 1</h5>
                            <textarea name="question1" placeholder="your answer" maxlength="200" style="font-size: 11px; font-weight: bold;" class="form-control minus1" rows="3" ></textarea>
                            <h4 class="character_remaining1"></h4>
                        </div>
                    </div>
                    <div class="content">
                        <div class="col-xs-12 col-sm-12"> 
                            <h5>Q1. This is question 2</h5>
                            <textarea name="question2" placeholder="your answer" maxlength="200" style="font-size: 11px; font-weight: bold;" class="form-control minus2" rows="3" ></textarea>
                            <h4 class="character_remaining2"></h4>
                        </div>
                    </div>
                    <div class="content">
                        <div class="col-xs-12 col-sm-12"> 
                            <h5>Q1. This is question 3</h5>
                            <textarea name="question3" placeholder="your answer" maxlength="200" style="font-size: 11px; font-weight: bold;" class="form-control minus3" rows="3" ></textarea>
                            <h4 class="character_remaining3"></h4>
                        </div>
                    </div>
                    <div class="content">
                        <div class="col-xs-12 col-sm-12"> 
                            <h5>Q1. This is question 4</h5>
                            <textarea name="question4" placeholder="your answer" maxlength="200" style="font-size: 11px; font-weight: bold;" class="form-control minus4" rows="3" ></textarea>
                            <h4 class="character_remaining4"></h4>
                        </div>
                    </div>
                    <div class="content">
                        <div class="col-xs-12 col-sm-12"> 
                            <h5>Q1. This is question 5</h5>
                            <textarea name="question5" placeholder="your answer" maxlength="200" style="font-size: 11px; font-weight: bold;" class="form-control minus5" rows="3" ></textarea>
                            <h4 class="character_remaining5"></h4>
                        </div>
                    </div>
                        
                    <div class="clearfix"></div>
                    <div class="footer">
                        <div class="content">

                            <input type="submit" value="Next Step" class="btn button1 " id="uploadButton"/><!--END LOGIN BUTTON-->
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



        <script>
            $(document).ready(function(){


                console.log("wtf");
                $('#uploadButton').attr('disabled', true);
                $('#input_file').change(function () {
                    var ext = this.value.match(/\.(.+)$/)[1];

                    switch (ext) {
                        case 'pdf':
                        case 'PDF':
                        case 'doc':
                        case 'docx':
                            $('#uploadButton').attr('disabled', false);
                            break;
                        default:
                            alert('Please Select only pdf or doc file');
                            this.value = '';
                    }
                });
            });
        </script>

    </body>
</html>