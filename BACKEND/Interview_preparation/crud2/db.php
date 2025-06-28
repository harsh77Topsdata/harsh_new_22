<?php 

$conn=mysqli_connect('localhost','root','','crud_db');

if(!$conn){
    die("connaction failed ".mysqli_connect_error());
}
?>