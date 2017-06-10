
<?php

require_once 'connection.php';

$type=$_POST["type"];
$id=$_POST["id"];
$name=$_POST["name"];
$address=$_POST["address"];
$user_name=$_POST["user_name"];
$phone=$_POST["phone"];
$password=$_POST["password"];

// var_dump($_POST);die;
$sql=("SELECT * FROM users WHERE id like '$id'");
$result=mysqli_query($link,$sql);

$n=mysqli_num_rows($result);
if($n==0){
        $sql=mysqli_query($link, "INSERT INTO  users  VALUES ('$id','$name','$user_name','$password','$phone','$address',$type)");
            mysqli_close($link);
			header('location:home.php');
    }elseif($n== 1){
 		$sql=mysqli_query($link, "UPDATE `users` SET `name`='$name',`user_name`='$user_name',`password`='$password',`phone`='$phone',`address`='$address',`user_type`= '$type' WHERE id = ".$id);
       	mysqli_close($link);
		header('location:home.php');
   	}else{ 
   		include("errorEmp.html");    
    }

?>





               



          