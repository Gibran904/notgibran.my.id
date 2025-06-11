<!DOCTYPE html>
<html>
<head>
  <title>Login Admin</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #7b2cbf, #f3a683);
      font-family: 'Poppins', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      color: white;
    }
    .login-box {
      background: rgba(255, 255, 255, 0.1);
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
      text-align: center;
      width: 320px;
    }
    input[type="text"], input[type="password"] {
      width: 90%;
      padding: 12px;
      margin: 15px 0;
      border: none;
      border-radius: 8px;
    }
    button {
      background-color: #5a189a;
      border: none;
      padding: 12px 40px;
      color: white;
      font-weight: 600;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    button:hover {
      background-color: #3c096c;
    }
    h2 {
      margin-bottom: 25px;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Login Admin</h2>
    <form action="auth.php" method="POST">
      <input type="text" name="username" placeholder="Username" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>