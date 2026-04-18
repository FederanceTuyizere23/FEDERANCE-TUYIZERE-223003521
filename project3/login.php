<?php
session_start();
include 'db.php';

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $conn->query("SELECT * FROM admin WHERE username='$username' AND password='$password'");

    if($query->num_rows > 0){
        $_SESSION['user'] = $username;
        header("Location: dashboard.php");
    } else {
        $error = "Invalid login!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Falcon Hotel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-container">
    <h2>Admin Login</h2>

    <?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button name="login">Login</button>
    </form>
</div>

</body>
</html>