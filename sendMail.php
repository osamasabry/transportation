<?php 

 require_once 'connection.php';
 
 // 	ini_set('display_errors', 1);
	// ini_set('display_startup_errors', 1);
	// error_reporting(E_ALL);
 	$id=$_GET['id'];
	$result= mysqli_query($link,"select email ,customer_name  from orders where id= '$id' ");
	$res=mysqli_fetch_array($result);
	

date_default_timezone_set('Etc/UTC');
require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;

$mail->Username = "mona.elmenshawy11@gmail.com";
$mail->Password = "";

$mail->setFrom('mona.elmenshawy11@gmail.com', 'First Last');
$mail->addAddress($res['email'],$res['customer_name']);
$mail->Subject = 'Confirm Service';
$mail->msgHTML('Confirm Service');
$mail->AltBody = 'This is a plain-text message body';

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
	
	$sql=mysqli_query($link, "UPDATE `orders` SET `mailed`= true where id = ". $_GET['id']);
	mysqli_close($link);
    header('location:home.php');
}
	

?>