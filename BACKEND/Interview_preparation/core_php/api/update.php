<?php include 'db.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    mysqli_query($conn, "UPDATE users SET name='$name', email='$email' WHERE id=$id");
    header("Location: read.php");
}
?>

<form method="POST">
    <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br><br>
    <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
    <button type="submit" name="update">Update</button>
</form>