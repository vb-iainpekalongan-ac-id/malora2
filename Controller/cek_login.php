  <?php
  include './koneksi.php';

  if (isset($_POST['login'])) {
    $passw = md5($_POST['password']);
    $username = mysqli_escape_string($koneksi, $_POST['username']);
    $password = mysqli_escape_string($koneksi, $passw);

    $cek_username = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");
    $sql = mysqli_fetch_array($cek_username);

    if ($sql) {
      if ($password == $sql['password']) {
        session_start();
        $_SESSION['username'] = $sql['username'];
        $_SESSION['email'] = $sql['email'];
        echo "<script>alert('Login berhasil!!');document.location = '../index.php'</script>";
      } else {
        echo "<script>alert('Login gagal!! Periksa lagi username dan passwordnya');document.location = '../index.php'</script>";
      }
    }
  }

  ?>
