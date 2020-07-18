<?php
session_start();
$_COOKIE['key'];
// coding yang berfungsi untuk melakukan pengecekan username
if (!isset($_SESSION['login'])) { ?>
  <script language='javascript'>
    alert('Anda belum login. Please login dulu');
    document.location = 'login.php'
  </script>
<?php } else { ?>
  <?php
  echo "<p><h2>Selamat datang " . strtoupper($_SESSION['username']) . "" . $_COOKIE['true'] . " Pada Website Saya</h2></p>";
  echo "<p>Berikut ini menu navigasi Anda</p>";
  echo "<p><a href='halaman1.php'>Halaman 1</a> <a href='halaman2.php'>Halaman 2</a></p>";
  ?>
  <a href="logout.php">LogOut</a>
<?php } ?>