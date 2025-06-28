<?php
include "db.php";
$result = $conn->query("SELECT * FROM users");
echo "<a href='create.php'>Add New</a><br><br>";
echo "<table border='1'>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
</tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>
            <a href='update.php?id={$row['id']}'>Edit</a> |
            <a href='delete.php?id={$row['id']}'>Delete</a>
        </td>
    </tr>";
}
echo "</table>";
?>

