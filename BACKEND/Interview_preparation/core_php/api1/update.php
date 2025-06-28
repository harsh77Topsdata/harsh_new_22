<?php

include('db.php');

$id=$_GET['id'];
$result=$conn->query("SELECT * FROM USERS WHERE id=$id");
$row=$result->fetch_assoc();

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];

    $conn->query("UPDATE USERS SET name ='$name',email='$email' WHERE id=$id");
    header('location : read.php');

}
?>


<form method="post">
    <input type="text" name="name" value="<?= $row['name'] ?>" placeholder="enetr name" required><br>
    <input type="email" name="email" value="<?= $row['email'] ?>" placeholder="enter email" required><br>
    <input type="submit" name="update" value="Update User">
</form>