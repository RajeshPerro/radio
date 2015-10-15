<?php
$Email=$_GET['email'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>User Registration | Radio Foorti RJ Hunt Campaign </title>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link href="css/style1.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/text.js"></script>

        <script src="js/recorder.js"></script>
        <script src="js/Fr.voice.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/record.js"></script>
        <script src="js/mp3Worker.js"></script>

        <style>
            .button{
                display: inline-block;
                vertical-align: middle;
                margin: 0px 5px;
                padding: 5px 12px;
                cursor: pointer;
                outline: none;
                font-size: 13px;
                text-decoration: none !important;
                text-align: center;
                color:#fff;
                background-color: #4D90FE;
                background-image: linear-gradient(top,#4D90FE, #4787ED);
                background-image: -ms-linear-gradient(top,#4D90FE, #4787ED);
                background-image: -o-linear-gradient(top,#4D90FE, #4787ED);
                background-image: linear-gradient(top,#4D90FE, #4787ED);
                border: 1px solid #4787ED;
                box-shadow: 0 1px 3px #BFBFBF;
            }
            a.button{
                color: #fff;
            }
            .button:hover{
                box-shadow: inset 0px 1px 1px #8C8C8C;
            }
            .button.disabled{
                box-shadow:none;
                opacity:0.7;
            }
            .off
            {
                visibility:hidden;
            }
            </style
    </head>
    <body>
        <!--WRAPPER-->
        <div id="wrapper">
            <div class="container">
                <!--LOGIN FORM-->
                <form name="admin_login" class="login-form" action="audio_upload.php" method="post" enctype="multipart/form-data">

                    <!--HEADER-->
                    <div class="header">
                        <!--TITLE--><h1><img class="img-responsive" src="images/logo.png" alt="Radio Foorti"></h1><!--END TITLE-->
                        <!--DESCRIPTION--><h2>Welcome to Radio Foorti <b>Rj Hunt</b> Campaign</h2><!--END DESCRIPTION-->
                        <!--DESCRIPTION--><h5>Those who are interested to participate in our Radio Foorti Rj Hunt Campaign, please fill out the following information. </h5><!--END DESCRIPTION-->
                    </div>
                    <!--END HEADER-->

                    <!--CONTENT-->




                    <div class="content">
                        
                        <div class="col-xs-12 col-sm-7">
                            <div class="col-xs-12 col-sm-12">
                            
                                <h3 class="bg-danger text-center">Record the following lines</h3>
                                <pre class="bg-warning">
                                
" Radio Foorti 88.0 FM - The Biggest & Hippest Radio Station in Bangladesh.Tune into Bangladesh’s Favorite Radio Station Online, Radio Foorti 88.0 FM. Listen to Hit Music, Movie Reviews, Celebrity Interviews, RJ shows & more!"
                            </pre>
                              
                        </div>
                            <div class="col-xs-12 col-sm-12">
                                <audio controls src="" id="audio"></audio>
                                <a class="button" id="record">Record</a>
                                <a class="button disabled one" id="download"> Stop and Download</a>
                                <a class="button disabled one off" id="stop">Reset</a>
                                <a class="button disabled one off" id="play">Play</a>

                                <a class="button disabled one off" id="base64">Base64 URL</a>
                                <a class="button disabled one off" id="mp3">MP3 URL</a>

                            </div>

                            <div class="col-xs-12 col-sm-12">
                                <h5>Upload your recorded audio file</h5>

                                <input type="email" id="user_email" readonly name="emailAddress" class="form-control" value="<?php echo $Email?>">
                                <input name="image[]" type="file" class="form-control" /><!--END USERNAME-->
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-offset-1 col-sm-4">
                            <blockquote>
                                
                                <h6 class="bg-info text-center">Condition</h6>
                                <div class="bg-success">
                                <p class=" pre1">
                                    &blacktriangleright; you have only 30 seconds time to record your voice
                                </p>
                                <p class=" pre1">
                                &blacktriangleright; you have only 30 seconds time to record your voice
                                </p>
                                <p class=" pre1">
                                &blacktriangleright; you have only 30 seconds time to record your voice
                                </p>
                                <p class=" pre1">
                                    &blacktriangleright; you have only 30 seconds time to record your voice
                                </p>
                                <p class=" pre1">
                                &blacktriangleright; you have only 30 seconds time to record your voice
                                </p>
                                <p class=" pre1">
                                &blacktriangleright; you have only 30 seconds time to record your voice
                                </p>
                                <p class=" pre1">
                                &blacktriangleright; you have only 30 seconds time to record your voice
                                </p>
                                <p class=" pre1">
                                &blacktriangleright; you have only 30 seconds time to record your voice
                                </p>
                        </div>
                                
                        </div>
                    
                    </div>

                    
                    <div class="clearfix"></div>
                    <div class="footer">
                        <div class="content">

                            <input type="submit"  value="Finish" class="btn button1 " /><!--END LOGIN BUTTON-->
                        </div>
                </form>
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