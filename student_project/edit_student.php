<?php
include 'db.php';
$id = $_GET["id"];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $conn->query("UPDATE students SET name='$name', email='$email', phone='$phone' WHERE id=$id");
    header("Location: view_students.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link rel="stylesheet" href="style_edit.css">
</head>
<body>
    <form method="POST">
        <h2>Edit Student</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?= $row['name'] ?>" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= $row['email'] ?>" required><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="<?= $row['phone'] ?>" required><br>

        <button type="submit">Update Student</button>
    </form>
</body>
</html>

