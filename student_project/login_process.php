<?php
session_start();
$conn = new mysqli("localhost", "root", "", "student_db");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();

$result = $stmt->get_result();
if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        header("Location: home.php"); // Renamed from home.html
        exit();
    }
}

echo "<script>alert('Invalid login'); window.location='login.php';</script>";
?>
