<?php
$email= $_POST['email'];
echo $email;
$to = $email;
$subject = "Email Verification";
$message="Your email is verified now for apply please click on bellow link"."<br>"."<a href='http://progshops.com/voice.html' target='_blank'>Click Here!</a>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


$headers .= 'From: <info@progshops.com>' . "\r\n";

mail($to,$subject,$message,$headers);
echo("<script>alert('Sent!! Please check the Junk or Spam folder of your email.')</script>");
echo("<script>window.location='index.php'</script>");
?>