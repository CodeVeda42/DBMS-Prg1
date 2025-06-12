<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style_register.css">
</head>
<body>
    <div class="register-container">
        <form action="register_process.php" method="post">
            <h2>User Registration Student Management System</h2>
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="Register">
            <p>Already registered? <a href="login.php">Login</a></p>
        </form>
    </div>
</body>
</html>
