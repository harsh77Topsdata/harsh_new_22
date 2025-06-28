<?php

$host="localhost";
$user="root";
$password="";
$db="text2";

$conn=mysqli_connect("$host",$user,$password,$db);

if(!$conn){
    die("connaction failed".mysqli_connect_errno());
}

?>