<?php
  session_start();
  ob_start();
  
  include "library/config.php";

  if(empty($_SESSION['username']) or empty($_SESSION['password'])){
     echo "<p align='center'> Anda harus login terlebih dahulu!</p>";
     echo "<meta http-equiv='refresh' content='2; url=login.php'>";
  }else{
    define('INDEX', true);
?>
<!DOCTYPE HTML>
<html>
   <head>
      <title>Dashboard</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/admin.css">
      <!-- <link href="plugin/DataTables/css/dataTables.bootstrap4.min.css" rel="stylesheet"> -->
      <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
      <!-- <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
   </head>
   <body>
      <header>
         Aplikasi Desa
      </header>
      <div class="container">
         <aside>
            <ul class="menu">
               <li> <a href="?hal=dashboard" class="aktif">Dashboard</a> </li>
		         <li> <a href="?hal=layanan_publik">layanan publik</a> </li>
               <li> <a href="?hal=user">Data user</a> </li>
		         <li> <a href="?hal=galeri">galeri</a> </li>
               <li> <a href="?hal=kabar_desa">kabar desa</a> </li>
		         <li> <a href="?hal=kegiatan">kegiatan</a> </li>
               <li> <a href="?hal=struktur">struktur</a> </li>
               <li> <a href="logout.php">Keluar</a> </li>
            </ul>
         </aside>
         <section class="main">
            <?php include "admin.php"; ?>
         </section>
      </div>
      <footer>
         Copyright &copy; DesaKuduKeras
      </footer>

      <!-- <script src="plugin/DataTables/js/jquery.dataTables.min.js"></script>
      <script src="plugin/DataTables/js/dataTables.bootstrap4.min.js"></script>
      <script src="js/jquery-3.5.0.min.js"></script>
      <script src="bootstrap/js/bootstrap.bundle.min.js"></script> -->

    
   </body>
</html>
<?php
   }
?>