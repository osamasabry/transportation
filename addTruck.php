<?php

$Truckid=$_POST["id"];
$Trucktype=$_POST["type"];
$model=$_POST["model"];

require_once 'connection.php';
$sql=("SELECT * FROM trucks WHERE id like '$Truckid'");
$result=mysqli_query($link,$sql);

$n=mysqli_num_rows($result);
if($n==0){

	$sql=mysqli_query($link,"INSERT INTO  trucks (`id`, `type`, `model`) VALUES ('$Truckid','$Trucktype','$model')");
    mysqli_close($link);
	header('location:home.php');

}elseif($n== 1){
 	$sql=mysqli_query($link, "UPDATE `trucks` SET `type`='$Trucktype',`model`='$model'WHERE id = ".$Truckid);
   	mysqli_close($link);
	header('location:home.php');
}else{
	include("errorTruck.html");
    
}

?>
