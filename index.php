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
      <link rel="stylesheet" href="css/dash_style.css" type="text/css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
      <Style>
         .separator{
            margin-top:5px;
            margin-bottom:5px;
            height:1px;
            width:75%;
            border-top:1px solid #BDBDBD;
         }
         .imgs{
           width:220px;
           height:150px;
         }
         .pd-top{
            margin-top: 90px;
         }
      </Style>
     
   </head>
   <body class="bgr">
      <header class="bg-success fixed-top" >
      <div class="row justify-content-between align-items-center">
         <div class="col-1">
            <img src="statics/logo.png" width="150" >
         </div>
         <div class="col-sm d-flex flex-row-reverse">
            <ul class="nav heads">
		      <li class="nav-item ">
                  <a class="nav-link  text-white active" href="?hal=first_dashboard">HOME</a>
               </li>
               <li class="nav-item ">
                  <a class="nav-link  text-white active" href="?hal=dash_desa">DESA</a>
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
         
         <section class="main">
            <?php include "konten.php"; ?>
         </section>
       
      </div>
      <footer class="bg-success">
         <div style="margin-left:10%; margin-right:10%; ">
            <div class="row align-items-center text-white">
               <div class="col-auto">
               <a class="nav-link  text-white active" href="?hal=dash_desa">Desa</a>
               </div>

               <div class="col-auto">
               <a class="nav-link text-white"href="?hal=dash_statistik">Data</a>
               </div>
               
               <div class="col-auto">
                  <div class="h6">Laporan</div>
               </div>

               <div class="col"></div>

               <div class="col-auto">
                  <img src="statics/logo.png" width="150" >
               </div>
            </div>   
      
            <div class="row justify-content-center py-1 ">
               <div class="separator" style="width:100%"></div>
            </div>   

            <div class="row align-items-center text-white">
               <div class="col-auto">
                  <div class="h6">©  2019 - Pemerintah Desa Kudukeras </div>
               </div>
               <div class="col"></div>
               <div class="col-auto">
                  <div class="h6">Email : pemdes@kudukeras.desa.id | Cirebon 
               </div>
            </div>
         </div>
      </footer>


      <script src="js/jquery-3.5.0.min.js"></script>
      <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
   </body>
</html>

