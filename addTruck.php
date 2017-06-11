<?php

$Truckid=$_POST["id"];
$Trucktype=$_POST["type"];
$model=$_POST["model"];

require_once 'connection.php';

if($Truckid==""){

	$sql=mysqli_query($link,"INSERT INTO  trucks (`type`, `model`) VALUES ('$Trucktype','$model')");
    mysqli_close($link);
	header('location:home.php');

}elseif($Truckid!=""){
 	$sql=mysqli_query($link, "UPDATE `trucks` SET `type`='$Trucktype',`model`='$model'WHERE id = ".$Truckid);
   	mysqli_close($link);
	header('location:home.php');
}else{
	include("errorTruck.html");
    
}

?>
