<?php
$name=$_POST["nam"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$message=$_POST["message"];




    require_once 'connection.php';

$sql=mysqli_query($link, "INSERT INTO  contact  ( `name`, `phone`, `email`, `message`)VALUES ('$name','$phone','$email','$message')");

mysqli_close($link);

include("services2.html");

?>
