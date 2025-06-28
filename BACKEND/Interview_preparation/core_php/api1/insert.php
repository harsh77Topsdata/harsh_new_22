<?php

include('db.php');

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];

    $conn->query("INSERT INTO users (name, email) VALUES ('$name', '$email')");
    header("Location: read.php");

}
?>

<form method="post">
    <input type="text" name="name" placeholder="Enter your name" required>
    <br>
    <input type="mail" name="email" placeholder="Enter your email"required>
    <br>
    <button type="submit" name="submit">Submit</button>

</form>