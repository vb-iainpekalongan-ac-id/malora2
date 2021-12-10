<?php

/**
 * @Author: vebri
 * @Date:   2021-12-10 22:40:26
 * @Last Modified by:   vebri
 * @Last Modified time: 2021-12-10 22:43:30
 */
session_start();
session_destroy();

unset($_COOKIE['username']);
unset($_COOKIE['email']);

///header("location:./sia_login.php");
echo"<script>alert('Terima kasih');window.location.href='../index.php' ;</script>";
exit;
?>
