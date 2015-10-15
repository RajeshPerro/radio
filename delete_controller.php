<?php
/**
 * Created by PhpStorm.
 * User: rajesh
 * Date: 10/8/15
 * Time: 2:31 PM
 */
include('rajesh_model.php');
include('database_config.php');
$id=$_GET['id'];
$db_user =$DataBaseUser;
$db_pass =$DataBasePassword;
$db_name=$DataBaseName;
$table = 'registration';

//echo $id;
$raj_modelobject->DeleteData($db_user,$db_pass,$db_name,$table,$id);
echo("<script>alert('Deleted.!!')</script>");
echo("<script>location.href='admin_view_user.php'</script>");

//echo('<script>
//var r = confirm("Are You Sure?");
//if (r == true) {
//    alert("Deleted.!!");
//    location.href="link_upload.php"
//
//} else {
//    location.href="link_upload.php"
//}
//</script>');
?>

