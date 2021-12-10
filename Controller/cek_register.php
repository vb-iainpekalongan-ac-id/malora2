<?php
include './koneksi.php';


if (isset($_POST['daftar'])) {
  $passw = md5($_POST['password']);
  $username = mysqli_escape_string($koneksi, $_POST['username']);
  $email = mysqli_escape_string($koneksi, $_POST['email']);
  $password = mysqli_escape_string($koneksi, $passw);
  $repassword = mysqli_escape_string($koneksi, $passw);


  $cek_user = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username' "));

  if ($password != $repassword) {
    echo "<script>
  alert('Password tidak cocok!');
  document.location = '../index.php'
</script>";
  } else {
    echo "<script>
  alert('Daftar berhasil!');
  document.location = '../index.php'
</script>";
  }
  if ($cek_user > 0) {
    echo "<script>
  alert('Maaf registrasi gagal, username anda sudah ada!');
  document.location = '../index.php'
</script>";
  } else {
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
      $_POST['username'] = "";
      $_POST['email'] = "";
      $_POST['password'] = "";
      echo "<script>
  alert('Registrasi Berhasil');
  document.location = '../index.php'
</script>";
    } else {
      echo "<script>
  alert('Registrasi Gagal');
  document.location = '../index.php'
</script>";
    }
  }
}
