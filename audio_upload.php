<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
/**
 * Created by PhpStorm.
 * User: rajesh
 * Date: 10/15/15
 * Time: 12:19 AM
 */

include('rajesh_model.php');
include('database_config.php');
if(isset($_POST['emailAddress']))
{
    $Email=$_POST['emailAddress'];
    $post=$_POST;
    $db_user = $DataBaseUser;
    $db_pass = $DataBasePassword;
    $file = $_FILES;
    //$file=$file.$Email;
    //echo $file;
    $table = 'audio_table';
    $db_name=$DataBaseName;
    $raj_modelobject->data_insert_audio($post,$file,$table,$db_user,$db_pass,$db_name,$Email);
    //echo("<script>alert('Your Registration End Successfully.!')</script>");
    echo("<script>location.href='user_registration_step2.php'</script>");

}
?>