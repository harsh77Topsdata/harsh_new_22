<?php include 'db.php'; ?>

<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $eail=$_POST['email'];

    $sql="insert into users ('name','email') values ('$name,$email')";
    mysqli_query($conn,$sql);

    header('location:read.php');
}
?>

<form method="POST">
    <input type="text" name="name" placeholder="Enter Name" required><br><br>
    <input type="email" name="email" placeholder="Enter Email" required><br><br>
    <button type="submit" name="submit">Submit</button>
</form>








