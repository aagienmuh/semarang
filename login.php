<?php
session_start();
session_destroy();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <style media="screen">
      * {
        padding: 0;
        margin: 0;
      }
      body{
      }
      div{
        margin: auto;
        width: 600px;
        background: white;
        height: 400px!important;
      }
      form{
        width: 100%!important;
      }
      input{
        width: 50%!important;
        margin: 30px auto!important;
      }
    </style>
    <title>Login</title>

  </head>
  <body style="background: url('bale.jpg');background-size: cover">
    <div class="centerY">
    <form class="centerY" action="index.php?login=true" method="post" style="background:white;">
        <h1 align="center" style="font-weight:normal">Masuk <span style="color:white;background:rgb(70, 210, 168);padding:5px;width:100px;height:100px;"> <i class="fa fa-arrow-right"></i></span></h1>
        <input type="text" placeholder="Username" name="username" value="">
        <input type="text" placeholder="Password" style="margin-bottom:0!important" name="password" value="">
        <p style="text-align:center;padding:20px;font-size:8pt;opacity:0.6">*untuk percobaan silahkan isi username = admin & password = admin</p>
        <button type="submit" name="button" style="background:rgb(70, 210, 168);padding:10px">Login</button>

    </form>
  </div>
  </body>
</html>
