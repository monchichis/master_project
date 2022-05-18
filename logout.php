<link rel="stylesheet" href="assets/css/alertify.css">
<link rel="stylesheet" href="assets/css/themes/semantic.css">

<?php
  session_start();
  require "func.php";
session_destroy();
echo '<script language="javascript">';
echo 'document.addEventListener("DOMContentLoaded", function() {';
echo 'alertify.alert("sucess", "Logout Berhasil","index.php")';
echo '});';
echo '</script>';

// echo "<script>window.location = 'index.php'</script>";


?>
<meta http-equiv="refresh" content="2;url=index.php" />

<script src="assets/jquery-1.12.3.min.js"></script> 
<script src="assets/alertify.min.js"></script>  


<script>
$(document).ready(function(){
  //KONDISI PENGECEKAN ALERTIFY AKAN DILAKUKAN DISINI
  <?php
  echo_validasi(); //<-----
  ?>
});
</script>