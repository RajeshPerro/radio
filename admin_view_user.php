<?php
include('rajesh_model.php');
include('database_config.php');
$db_user =$DataBaseUser;
$db_pass =$DataBasePassword;
$sql="select * FROM registration";// WHERE b_id='$Batch' AND g_id='$Group' AND entry_date='$Date' GROUP BY s_id";
$db_Name=$DataBaseName;
$sl=0;
$fetch_result=$raj_modelobject->DataView($sql,$db_user,$db_pass,$db_Name);
//print_r($fetch_result);
session_start();
$User=$_SESSION['user'];
echo $User;
?>


    <!DOCTYPE html>
    <html>
    <head>

        <title>User Registration | Radio Foorti RJ Hunt Campaign </title>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link href="css/style1.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <!--WRAPPER-->
    <div id="wrapper">
        <div class="container-fluid">
            <!--LOGIN FORM-->
            <form name="admin_login" class="login-form" action="" method="post">

                <!--HEADER-->
                <div class="header">
                    <!--TITLE--><h1><img class="img-responsive" src="images/logo.png" alt="Radio Foorti"></h1>
                    <!--END TITLE-->
                    <!--DESCRIPTION--><h2>Welcome to Radio Foorti <b>Rj Hunt</b> Campaign</h2><!--END DESCRIPTION-->
                    <!--DESCRIPTION--><h5>Those who are interested to participate in our Radio Foorti Rj Hunt Campaign,
                        please fill out the following information. </h5><!--END DESCRIPTION-->
                </div>
                <!--END HEADER-->

                <!--CONTENT-->


                <div class="content">
                    <div class="col-xs-12 col-sm-12">
                        <h4><a href="admin_change_info.html" class="text">Change Admin Information</a> | <a href="#"
                                                                                                            class="text">View
                                User Information</a></h4>
                        <hr>
                    </div>
                    <a href="logout.php">Logout</a>
                    <div class="col-xs-12 col-sm-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-condensed">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Date of Birth</th>
                                    <th>Contact</th>
                                    <th>Address</th>
                                    <th>Resume</th>
                                    <th>Q.1</th>
                                    <th>Q.2</th>
                                    <th>Q.3</th>
                                    <th>Q.4</th>
                                    <th>Q.5</th>
                                    <th>Voice</th>
                                    <th>Action</th>
                                </tr>
                                <?php
                                foreach ($fetch_result as $key => $value) {


                                    ?>
                                    <tr>
                                        <!--                                        <td>Rifat M Huq</td>-->
                                        <!--                                        <td>rifatmhuq@gmail.com</td>-->
                                        <!--                                        <td>Male</td>-->
                                        <!--                                        <td>30th June</td>-->
                                        <!--                                        <td>01674570041</td>-->
                                        <!--                                        <td>11, Segunbagicha</td>-->
                                        <!--                                        <td><a class="text1" href="#.pdf">Resume</a></td>-->
                                        <!--                                        <td>Those who are interested to participate in our Radio Foorti Rj Hunt-->
                                        <!--                                            Campaign, please fill out the following information.-->
                                        <!--                                        </td>-->
                                        <!--                                        <td>Those who are interested to participate in our Radio Foorti Rj Hunt-->
                                        <!--                                            Campaign, please fill out the following information.-->
                                        <!--                                        </td>-->
                                        <!--                                        <td>Those who are interested to participate in our Radio Foorti Rj Hunt-->
                                        <!--                                            Campaign, please fill out the following information.-->
                                        <!--                                        </td>-->
                                        <!--                                        <td>Those who are interested to participate in our Radio Foorti Rj Hunt-->
                                        <!--                                            Campaign, please fill out the following information.-->
                                        <!--                                        </td>-->
                                        <!--                                        <td>Those who are interested to participate in our Radio Foorti Rj Hunt-->
                                        <!--                                            Campaign, please fill out the following information.-->
                                        <!--                                        </td>-->
                                        <!--                                        <td><a class="text1" href="#.mp3">Voice</a></td>-->
                                        <!--                                        <td><a class="text" href="#">Delete</a></td>-->
                                        <td><?php echo $value['firstName'] . " " . $value['lastName'] ?></td>
                                        <td><?php echo $value['emailAddress'] ?></td>
                                        <td><?php echo $value['gender'] ?></td>
                                        <td><?php echo $value['dbirth'] ?></td>
                                        <td><?php echo $value['contact'] ?></td>
                                        <td><?php echo $value['address'] ?></td>
                                        <?php
                                        $Server = 'http://' . $_SERVER['HTTP_HOST'];
                                        $resume_link = $value['image'];
                                        ?>
                                        <td><a href="<?php echo $Server . '/foorti/resume/' . $resume_link ?>"
                                               target="_blank"><?php echo $value['image'] ?></a></td>
                                        <td><?php echo $value['question1'] ?></td>
                                        <td><?php echo $value['question2'] ?></td>
                                        <td><?php echo $value['question3'] ?></td>
                                        <td><?php echo $value['question4'] ?></td>
                                        <td><?php echo $value['question5'] ?></td>
                                        <?php
                                        $Email = $value['emailAddress'];
                                       // echo $Email;
                                        $sql_audio = "select * FROM audio_table WHERE emailAddress='$Email' GROUP BY emailAddress";
                                        $fetch_audio = $raj_modelobject->DataView2($sql_audio, $db_user, $db_pass, $db_Name);
                                        foreach ($fetch_audio as $key => $row)
                                        ?>
                                        <td>
                                            <a href="<?php echo $Server . '/foorti/audio/' . $row['image'] ?>"
                                               target="_blank">
                                                <?php echo $row['image'] ?>
                                            </a>
                                        </td>
                                        <td><a onclick="if (! confirm('Are you sure?')) return false;" class="text"
                                               href="delete_controller.php?id=<?php echo $value['id'] ?>">Delete</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>

                            </table>
                        </div>
                    </div>


                </div>


                <div class="clearfix"></div>
                <div class="footer">
                    <div class="content">

                        <input type="submit" name="submit" value="Update" class="btn button1 "/><!--END LOGIN BUTTON-->
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


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/text.js"></script>


    </body>
    </html>

