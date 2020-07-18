<?php
session_start();
// cek cookie
// if (isset($_COOKIE['login'])) {
//   if ($_COOKIE['login'] == 'true') {
//     $_SESSION['login'] = true;
//   }
// }

if (isset($_COOKIE['key'])) {
  $key = $_COOKIE['key'];

  if ($key === $key) {
    $_SESSION['login'] = true;
  }
}

if (isset($_SESSION["login"])) {
  header("location: halaman1.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <form action="validasi.php" method="post">
    <h3>Login :</h3>
    <ul>
      <li>
        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
      </li>
      <li>
        <label for="password">Password : </label>
        <input type="password" name="password" id="password">
      </li>
      <li>
        <label for="remember">Remember Me : </label>
        <input type="checkbox" name="remember" id="remember">
      </li>
      <li>
        <button type="submit" name="login"> Login</button>
      </li>
    </ul>
  </form>
</body>

</html>