<?php
/**
 * Created by PhpStorm.
 * User: rajesh
 * Date: 10/1/15
 * Time: 9:56 AM
 */
include('rajesh_model.php');
include('database_config.php');
session_start();

//Registration Page Data Insert


if(isset($_POST['id']))//Mandatory field name
{   $post=$_POST;
    //echo $_POST['admin_username'].$_POST['admin_password'];
    //$file = $_FILES;
    $id=$_POST['id'];
    //echo $id;
    $db_user =$DataBaseUser;
    $db_pass =$DataBasePassword;
    $table = 'user';
    $db_name=$DataBaseName;
    $raj_modelobject->Data_Update($post,$id,$table,$db_user,$db_pass,$db_name);
    echo("<script>alert('Successfully Updated!')</script>");
    echo("<script>location.href='admin_login.php'</script>");

}
?>