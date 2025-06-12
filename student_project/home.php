<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management</title>
    <link rel="stylesheet" href="stylehome.css">
</head>
<body>
    <div class="container">
        <h1>Student Management System</h1>
        <div class="button-group">
            <a href="add_student.php" class="button">Add Student</a>
            <a href="view_students.php" class="button">View Students</a>
        </div>
    </div>
</body>
</html>