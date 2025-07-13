<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Cek username dan password langsung (tanpa password_hash)
  $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
  $data = mysqli_fetch_assoc($query);

  if ($data) {
    $_SESSION['admin'] = $data['username'];
    header('Location: dashboard_admin.php');
    exit;
  } else {
    $error = "Username atau password salah!";
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f2f6fa;
    }

    .login-container {
      width: 350px;
      margin: 100px auto;
      padding: 30px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    input[type="text"], input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
    }

    button {
      width: 100%;
      background-color: #007b5e;
      color: white;
      border: none;
      padding: 10px;
      cursor: pointer;
      font-weight: bold;
    }

    .error {
      color: red;
      text-align: center;
      margin-bottom: 10px;
    }

    h2 {
      text-align: center;
      color: #002b6c;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login Admin</h2>
    <?php if (isset($error)): ?>
      <div class="error"><?= $error ?></div>
    <?php endif; ?>
    <form method="POST">
      <input type="text" name="username" placeholder="Username" required />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit" name="login">Login</button>
    </form>
  </div>
</body>
</html>
