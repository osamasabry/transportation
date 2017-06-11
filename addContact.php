<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require_once 'connection.php';
session_start();

$name=$_POST["nam"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$address=$_POST["address"];

$from_date=$_POST["from_date"];
$to_date=$_POST["to_date"];
$from_palce=$_POST["from_palce"];
$to_palce=$_POST["to_palce"];
$message=$_POST["message"];

// var_dump($_SESSION['user_id']);die();

if(isset($_POST['driver']) && isset($_POST['truck'])){
	$sql=mysqli_query($link, "UPDATE `orders` SET `driver_id`=".$_POST['driver']." , `truck_id`=".$_POST['truck']." , `emp_id`=".$_SESSION['user_id']." where id = ". $_POST['order_id']);
	mysqli_close($link);
	header('Location: index.php');
}elseif (isset($_POST['driver'])) {
	$sql=mysqli_query($link, "UPDATE `orders` SET `driver_id`=".$_POST['driver']." , `emp_id`=".$_SESSION['user_id']." where id = ". $_POST['order_id']);
	mysqli_close($link);
	header('Location: index.php');	
}elseif (isset($_POST['truck'])) {
	$sql=mysqli_query($link, "UPDATE `orders` SET `truck_id`=".$_POST['truck']." , `emp_id`=".$_SESSION['user_id']." where id = ". $_POST['order_id']);
	mysqli_close($link);
	header('Location: index.php');
}else{
	$sql=mysqli_query($link, "INSERT INTO  orders  ( `customer_name`, `from_place`,`to_place`, `from_date`,`to_date`,`email`,`phone`,`Note`,`address`)VALUES ('$name',$from_palce,'$to_palce','$from_date','$to_date','$email','$phone','$message','$address')");

	mysqli_close($link);

	header('Location: index.php');
}

	exit;
?>
