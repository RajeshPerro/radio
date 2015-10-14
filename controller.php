<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

include('rajesh_model.php');
include('database_config.php');
//Registration Page Data Insert
//echo $_POST['user_name'].$_POST['password'];

if(isset($_POST['emailAddress']))
{
    $post=$_POST;
    $db_user = $DataBaseUser;
    $db_pass = $DataBasePassword;
    $file = $_FILES;
    $table = 'registration';
    $db_name=$DataBaseName;
    $raj_modelobject->data_insert_withfile($post,$file,$table,$db_user,$db_pass,$db_name);
    echo("<script>alert('Successfully Saved!')</script>");
   echo("<script>location.href='registration.php'</script>");

}
?>