<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    
    $sql = "INSERT INTO students (name, email, phone) VALUES ('$name', '$email', '$phone')";
    $conn->query($sql);
    header("Location: view_students.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    <link rel="stylesheet" href="style_addstd.css">
</head>
<body>
    <div class="background"></div>
    <div class="form-container">
        <h2>Add Student</h2>
        <form method="POST">
            <label>Name</label>
            <input type="text" name="name" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Phone</label>
            <input type="text" name="phone" required>

            <button type="submit">Add Student</button>
            <button type="view">View Student</button>           
        </form>
    </div>
</body>
</html>