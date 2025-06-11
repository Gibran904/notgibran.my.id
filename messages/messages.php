<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Pesan Masuk</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      background: #f9f5ff;
      font-family: 'Poppins', sans-serif;
      padding: 30px;
      color: #333;
    }
    h1 {
      color: #5a189a;
      text-align: center;
    }
    .pesan {
      background: white;
      margin: 20px auto;
      max-width: 500px;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .logout {
      text-align: center;
      margin-top: 30px;
    }
    .logout a {
      color: #c9184a;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <h1>Pesan Masuk</h1>
  <?php
  foreach (glob("pesan/*.txt") as $file) {
    echo "<div class='pesan'>" . nl2br(htmlspecialchars(file_get_contents($file))) . "</div>";
  }
  ?>
  <div class="logout"><a href="logout.php">Logout</a></div>
</body>
</html>