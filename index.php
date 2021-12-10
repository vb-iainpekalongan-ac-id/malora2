<?php
require_once './Controller/koneksi.php';
session_start()

?>
<!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- custom link css -->
    <link rel="stylesheet" href="./Styling/main.css">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/23594fc448.js" crossorigin="anonymous"></script>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Berita Bola Terikini, Jadwal Klasmen, Skor Liga - Malora</title>
  </head>

  <body>
    <section class="container">
      <!-- navbar header top wrapper -->
      <div class="navbar-top-wrapper">
        <!-- navbar logo -->
        <div class="navbar-top-logo">
          <a href="index.php"> <img src="./Img/logo-malora.png" alt="logo-malora"> </a>
        </div>
        <div class="information-data">
          <?php if (isset($_SESSION["username"])): ?>
            <span href="#" class="information-data-masuk"><?php echo $_SESSION['username'] ?></span>
            <a href="#" onclick="lgo.logout();" class="information-data-logout">Logout</a>
          <?php else: ?>
            <a href="#" class="information-data-masuk">Login</a>
            <a href="#" class="information-data-daftar">Daftar</a>
          <?php endif ?>
        </div>
      </div>

      <div class="navbar-menu">
        <nav>
          <ul class="nav-links">
            <li> <a href="" class="nav-link-inggris">LIGA INGGRIS</a> </li>
            <li> <a href="" class="nav-link-spanyol">LIGA SPANYOL</a> </li>
            <li> <a href="" class="nav-link-jerman">LIGA JERMAN</a> </li>
            <li> <a href="" class="nav-link-prancis">LIGA PRANCIS</a> </li>
            <li> <a href="" class="nav-link-italy">LIGA ITALY</a> </li>
            <li> <a href="" class="nav-link-indonesia">LIGA INDONESIA</a> </li>
            <li> <a href="" class="nav-link-amerika">LIGA AMERIKA</a> </li>
          </ul>
        </nav>
      </div>
      <!-- side login bar  -->
      <div class="side-login">
        <!-- cancel login btn -->
        <a href="index.php" class="login-cancel-btn">
          <i class="fas fa-times"></i>
        </a>
        <!-- heading -->
        <strong>Masuk</strong>
        <!-- form -->
        <form action="./Controller/cek_login.php" method="POST">
          <label for="">Username:</label>
          <div class="username">
            <input type="text" name="username" placeholder="Masukan Username Anda" required>
          </div>
          <label for="">Password:</label>
          <div class="password">
            <input type="password" name="password" placeholder="Masukan Password Anda" required>
          </div>
          <!-- login btn -->
          <input type="submit" value="Masuk" name="login" class="login">
        </form>
        <!-- relative bottom text -->
        <div class="relative-text">
          <span>Selamat datang di Malora</span>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque minus dolorum cumque veritatis dolor aut pariatur iusto eum dignissimos, delectus culpa ab iure mollitia consequuntur officiis vitae temporibus molestiae suscipit!</p>
        </div>
      </div>

      <!-- side register bar  -->
      <div class="side-register">
        <!-- cancel login btn -->
        <a href="index.php" class="register-cancel-btn">
          <i class="fas fa-times"></i>
        </a>
        <!-- heading -->
        <strong>Daftar</strong>
        <!-- form -->
        <form action="./Controller/cek_register.php" method="POST">
          <label for="">Username</label>
          <div class="username">
            <input type="text" name="username" placeholder="Masukan Username Anda" required>
          </div>
          <label for="">Email:</label>
          <div class="email">
            <input type="email" name="email" placeholder="Masukan Email Anda" required>
          </div>
          <label for="">Password:</label>
          <div class="password">
            <input type="password" name="password" placeholder="Masukan Password Anda" required>
          </div>
          <label for="">Re-Password:</label>
          <div class="repassword">
            <input type="password" name="repassword" placeholder="Masukan Ulang Password Anda" required>
          </div>
          <!-- login btn -->
          <input type="submit" value="Daftar" name="daftar" class="register">
        </form>
        <!-- relative bottom text -->
        <div class="relative-text">
          <span>Selamat datang di Malora</span>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque minus dolorum cumque veritatis dolor aut pariatur iusto eum dignissimos, delectus culpa ab iure mollitia consequuntur officiis vitae temporibus molestiae suscipit!</p>
        </div>
      </div>



      <div class="main ct">
        <div class="main-col-4">
          <h1>Berita Populer</h1>
          <div class="line"></div>
        </div>
        <?php if (isset($_SESSION["username"])): ?>
          <div>
           <iframe width="560" height="315" src="https://www.youtube.com/embed/SH3KlDlqu_k?rel=0&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         </div>
       <?php else: ?>
        <div class="main-col-8">
        </div>
      <?php endif ?>
    </div>
  </section>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script type="text/javascript" src="./js/jquery.js"></script>

  <!-- script -->
  <script type="text/javascript">
    $(document).on('click', '.information-data-masuk,.information-data-daftar', function() {
      $('.container').addClass('container-active')
    });

    $(document).on('click', '.information-data-masuk', function() {
      $('.side-login').addClass('side-login-active')
    });

    $(document).on('click', '.information-data-daftar', function() {
      $('.side-register').addClass('side-register-active')
    });
  </script>
  <script>
    let lgo = {
      logout(){
          // alert('test');
          window.location.href='./controller/logout.php'
        }
      }
    </script>
  </body>

  </html>
