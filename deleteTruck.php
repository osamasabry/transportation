<?php
$field=$_POST["field"];
$value=$_POST["value"];
$format=$_POST["format"];

    require_once 'connection.php';


if($format=="Equal")
    $sql=("DELETE FROM truck WHERE $field like '$value'");
elseif($format=="Begin With")
    $sql=("DELETE FROM truck WHERE $field like '$value%'");
elseif($format=="End With")
    $sql=("DELETE FROM truck WHERE $field like '%$value'");
elseif($format=="Contain")
    $sql=("DELETE FROM truck WHERE $field like '%$value%'");

$result=mysqli_query($link,$sql);
mysqli_close($link);

include("deleteTruck2.html");
    
?>