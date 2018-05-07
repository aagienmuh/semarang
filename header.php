<?php require 'function.php'; ?>
<?php
session_start();
if (isset($_GET['logout'])) {
  header('location: login.php');
}
if (isset($_GET['login'])) {
  if (!isset($_POST['username'],$_POST['password'])) {
    header('location: login.php');
  }
  if ($_POST['username'] == "admin" && $_POST['password'] == "admin") {
    $_SESSION['akses'] = true;
  }
}
if (!isset($_SESSION['akses'])) {
  header('location: login.php');
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webdesa</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <script type="text/javascript" src="jquery.js">

    </script>

  </head>
  <body style="background: url('bale.jpg')">
    <div class="penampung">
      <header style="position:relative">
        <div class="search">
          <input placeholder="Search..." type="text" name="" value="">
        </div>
        <div style="position:absolute;right:10px;height:60px">
          <a href="#" class="centerY bell" style="text-decoration:none;float:left;">
            <i class="fa fa-bell-o"></i>
          </a>

          <a href="#" class="centerY user" style="text-decoration:none;float:left;">
            <i class="fa fa-comments-o"></i>
          </a>
          <a href="index.php?logout=true" class="centerY logout" style="text-decoration:none;float:left;">
            <i class="fa fa-power-off"></i>
          </a>
          <!-- <a href="#" class="centerY masuk" style="text-decoration:none;float:left;">
            Masuk
          </a>
          <a href="#" class="centerY daftar" style="text-decoration:none;float:left;">
            Daftar
          </a> -->
          <div class="clear" style="clear:both">

          </div>
        </div>
      </header>
