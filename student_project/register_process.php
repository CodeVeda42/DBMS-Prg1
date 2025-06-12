<?php
$conn = new mysqli("localhost", "root", "", "student_db");
if ($conn->connect_error) die("Connection failed");

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);

if ($stmt->execute()) {
    echo "<script>alert('Registration successful!'); window.location='login.php';</script>";
} else {
    echo "<script>alert('Username already exists.'); window.location='register.php';</script>";
}
$conn->close();
?>
