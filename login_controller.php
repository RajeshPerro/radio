<?php
/**
 * Created by PhpStorm.
 * User: rajesh
 * Date: 10/15/15
 * Time: 12:45 PM
 */
include('rajesh_model.php');
include('database_config.php');

if(isset($_POST['admin_username']) && !empty($_POST['admin_username']) && !empty($_POST['admin_password']))
{
    $post=$_POST;
    $db_user =$DataBaseUser;
    $db_pass =$DataBasePassword;
    $db_name=$DataBaseName;
    $table ='user';
    $username = trim($_POST['admin_username']);
    $password = trim($_POST['admin_password']);
    //echo $username.$password;
    $raj_modelobject->loginpage($db_user,$db_pass,$db_name,$table, $username,$password);
    echo("<script>location.href='admin_view_user.php'</script>");
}
?>