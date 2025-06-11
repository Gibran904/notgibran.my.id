<?php
session_start();

$valid_user = "notgibran";
$valid_pass = "4nd4w1bu";

$user = $_POST['username'];
$pass = $_POST['password'];

if ($user === $valid_user && $pass === $valid_pass) {
  $_SESSION['login'] = true;
  header("Location: messages.php");
} else {
  echo "Login gagal. <a href='login.php'>Coba lagi</a>";
}
?>
