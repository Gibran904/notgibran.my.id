<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
  header("Location: login.php");
  exit;
}

$data = file_exists("pendaftar.txt") ? file_get_contents("pendaftar.txt") : "Belum ada pendaftar.";
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Pendaftar</title>
</head>
<body>
  <h2>🧾 Daftar Pendaftar Bot WA</h2>
  <pre><?= htmlspecialchars($data) ?></pre>
  <br>
  <a href="logout.php">Logout</a>
</body>
</html>