<?php
// koneksi-----
$dbserver = "localhost";
$dbuser = "root";
$dbpass = "password";
$dbdatabase = "malora2";

$koneksi = mysqli_connect("$dbserver", "$dbuser", "$dbpass", "$dbdatabase") or die("gagal koneksi");
// session_unset();
