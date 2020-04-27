<?php
  
  include "library/config.php";
  define('INDEX', true);
?>
<!DOCTYPE HTML>
<html>
   <head>
      <title>Dashboard</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/dash_style.css">
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     
   </head>
   <body class="bgr">
      <header class="bg-success fixed-top" >
      <div class="row justify-content-between ">
         <div class="col-1">
            <img src="statics/logo.png" width="150" >
         </div>
         <div class="col-sm d-flex flex-row-reverse">
            <ul class="nav heads">
               <li class="nav-item ">
                  <a class="nav-link  text-white active" href="?hal=first_dashboard">DESA</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-white"href="?hal=dash_statistik">STATISTIK</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-white"href="?hal=dash_layanandesa">LAYANAN DESA</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-white"href="?hal=dash_potensidesa">POTENSI DESA</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-white"href="?hal=dash_kabardesa">KABAR DESA</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-white"href="?hal=dash_galeridesa">GALERI DESA</a>
               </li>
            </ul>
         </div>
      </div>
      </header>
      <div class="container-fluid  ">
         <div class="sp">
            <?php include "konten.php"; ?>
         </div>
       
      </div>
      <footer class="bgr ">
         Copyright &copy; DesaKuduKeras
      </footer>
      <script src="js/jquery-3.5.0.min.js"></script>
      <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
   </body>
</html>

