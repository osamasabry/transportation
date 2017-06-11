
<?php

require_once 'connection.php';

$id=$_GET["id"];

$sql=mysqli_query($link, "UPDATE `orders` SET `accepted`= 1 WHERE id = ".$id);
mysqli_close($link);
header('location:home.php');
   

?>
