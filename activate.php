
<?php

require_once 'connection.php';

$id=$_GET["id"];

// var_dump($id);die;
$sql=("SELECT * FROM users WHERE id like '$id'");
$result=mysqli_query($link,$sql);

$n=mysqli_num_rows($result);

$sql=mysqli_query($link, "UPDATE `users` SET `active`= false WHERE id = ".$id);
mysqli_close($link);
header('location:home.php');
   

?>





               



          