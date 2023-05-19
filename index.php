<?php
include_once 'app/controllers/home.controller.php';

if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
}

if (isset($_SESSION['username'])) {
  header('Location: index.php?q=home');
  exit();
}

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  if ($username == 'admin' && $password == 'secret'){
    $_SESSION['username'] = $username;
    header('Location: index.php?q=home');
    exit();
  } else {
    echo 'Invalid username or password';
  }
}
?>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <h1>Login</h1>
  <form method="post" action="index.php">
    <p>Username: <input type="text" name="username"></p>
    <p>Password: <input type="password" name="password"></p>
    <p><input type="submit" name="login" value="Login"></p>
  </form>
</body>
</html>
