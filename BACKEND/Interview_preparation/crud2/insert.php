<?php

include ('db.php');

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_post['email'];

    mysqli_query($conn, "INSERT INTO users(name, email) VALUES('$name', '$email')");
    header("location  : insert.php");

}
?>

<form method="POST">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    <button type="submit" name="submit">Save</button>
</form>
