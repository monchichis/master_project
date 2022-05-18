<?php
session_start(); //jangan lupa, ini wajib~
require "func.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login </title>
    <script language="JavaScript">
      var txt=":: Master Project";
      var kecepatan=250;var segarkan=null;function bergerak() { document.title=txt;
      txt=txt.substring(1,txt.length)+txt.charAt(0);
      segarkan=setTimeout("bergerak()",kecepatan);}bergerak();
    </script>

    <link rel="shortcut icon" href="images/logo-pgri.ico">
    <!-- izitoast -->
    <link href="assets/vendors/izitoast/dist/css/iziToast.css">
    <!-- Bootstrap -->
    <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/alertify.css">
    <link rel="stylesheet" href="assets/css/themes/semantic.css">
  </head>
  
  <style>
    .bg {
        background: url("images/depan.jpg") no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>
  <body class="login">
    
    <div>
      <div class="login_wrapper">
      	  	
        <div class="animate form login_form">
          <section class="login_content">

            <form action="login.php" method="post" >
              <h1 style="color: black;">Form Login</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" name="username"/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="password"/>
              </div>
              
               <button class="btn btn-success submit" href="login.php" >Log in</button>
               <input type="reset" name="reset" class="btn btn-warning">
              
              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
<script src="assets/jquery-1.12.3.min.js"></script> 
<script src="assets/alertify.min.js"></script>  
<script src="assets/vendors/izitoast/dist/js/iziToast.js"></script>
<script>
$(document).ready(function(){
  //KONDISI PENGECEKAN ALERTIFY AKAN DILAKUKAN DISINI
  <?php
  echo_validasi(); //<-----
  ?>
});
</script>


  </body>
</html>