<?php
session_start();

$USER = 'admin';
$PASS = '4nd4w1bu'; // ganti password biar lebih aman

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username === $USER && $password === $PASS) {
    $_SESSION['login'] = true;
    header('Location: dashboard.php');
    exit;
  } else {
    $error = "❌ Username atau password salah!";
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
</head>
<body>
  <h2>Login Admin</h2>
  <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
  <form method="POST">
    <label>Username</label><br>
    <input type="text" name="username" required><br><br>
    <label>Password</label><br>
    <input type="password" name="password" required><br><br>
    <button type="submit">Login</button>
  </form>
</body>
</html>