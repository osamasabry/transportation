
<?php

require_once 'connection.php';

$id=$_GET["id"];
$type=$_GET["type"];
$active=($_GET["active"] == 'Deactivate')? 0 : 1;

// var_dump($_GET);die;
if(isset($type) && $type == 'truck'){
	$sql=("SELECT * FROM trucks WHERE id like '$id'");
	$result=mysqli_query($link,$sql);

	$n=mysqli_num_rows($result);

	$sql=mysqli_query($link, "UPDATE `trucks` SET `active`= $active WHERE id = ".$id);
}else{
	$sql=("SELECT * FROM users WHERE id like '$id'");
	$result=mysqli_query($link,$sql);

	$n=mysqli_num_rows($result);

	$sql=mysqli_query($link, "UPDATE `users` SET `active`= $active WHERE id = ".$id);
}
mysqli_close($link);
header('location:home.php');
   

?>





               



          