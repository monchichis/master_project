<?php
include "lib/config.php";
include "lib/koneksi.php";
//session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href='$base_url'+'index.php><b>LOGIN</b></a></center>";
}
elseif ($_SESSION['akses']==1 or $_SESSION['akses']==2 or $_SESSION['akses']==3 or $_SESSION['akses']==4){ ?>        

        <div class="right_col" role="main">
          <div class="">

            <div class="row top_tiles">
              <div class="col-md-12">
                <div class="">
                  <div class="x_content">


                    

                   

                   
                       <!--  tutup info saldo -->
                       <div class="col-md-12">
<div class="x_panel">
<div class="x_title">
<h2>Welcome to System</h2>
<div class="clearfix"></div>
</div>
<div class="x_content bs-example-popovers">
<div class="alert alert-success alert-dismissible " role="alert">

<strong><?php if($_SESSION['akses']==1){
              echo "Administrator";  
}elseif ($_SESSION['akses']==2) {
  echo "Kesiswaan";
}elseif ($_SESSION['akses']==3) {
  echo "Walikelas";
}elseif ($_SESSION['akses']==4) {
  echo "Kepala Sekolah";
}
?></strong>
</div>


</div>
</div>
</div>
</div>






                  </div><!-- Tutup class="x_content"-->
                </div>
              </div><!-- Penutup col-md-12 -->
            </div><!-- Penutup row top_tiles -->

          

          

          



          </div>
        </div>
<?php 
}
else{
  echo "Anda Harus Login Untuk Mengakses Halaman Ini";
}
 ?>