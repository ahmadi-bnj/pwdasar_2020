<?php
session_start();



if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  //periksa login
  if ($username == $username && $password = $password) {
    //menciptakan session
    $_SESSION['login'] = true;
    // cek remember me
    if (isset($_POST['remember'])) {
      // buat cookie
      // setcookie('login', 'true', time() + 60);
      setcookie('key', hash('sha256', $username), time() + 60);
    }
?>
    <script language="JavaScript">
      alert('Anda berhasil login');
      document.location = 'halaman1.php'
    </script>
<?php }
} ?>