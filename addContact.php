<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
$name=$_POST["nam"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$address=$_POST["address"];

$from_date=$_POST["from_date"];
$to_date=$_POST["to_date"];
$from_palce=$_POST["from_palce"];
$to_palce=$_POST["to_palce"];
$message=$_POST["message"];

// var_dump($name,$phone,$email,$address,$from_date,$to_date,$from_palce,$to_palce,$message)or die;



    require_once 'connection.php';

$sql=mysqli_query($link, "INSERT INTO  orders  ( `customer_name`, `from_place`,`to_place`, `from_date`,`to_date`,`email`,`phone`,`Note`,`address`)VALUES ('$name',$from_palce,'$to_palce','$from_date','$to_date','$email','$phone','$message','$address')");


mysqli_close($link);

	header('Location: index.php');
	exit;
?>
