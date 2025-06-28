<?php 

include ('db.php');
$id=$_GET['id'];
$conn->query("DELETE FROM USERS WHERE id=$id");
header('location : read.php');

?>