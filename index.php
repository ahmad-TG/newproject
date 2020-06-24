<?php
  
  include "library/config.php";
  define('INDEX', true);
?>
<!DOCTYPE HTML>
<html lang="en">
   <head>
      <title>Dashboard</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="css/dash_style.css" type="text/css">
      <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="plugin/fontawesome/css/all.css">

      <!-- <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css"> -->
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

         .navs {
         position: sticky;
         top: 0;
         padding: 5px;
         background-color: #cae8ca;
         border: 2px solid #4CAF50;
         }

         .fontsize{
            font-size:13px;
         }

         @media screen and (max-width: 480px){
            .menus{ 
               position: sticky;
               width:100%;
               }
              .hide{
                 display:none;
              }
              .mb{
                 width:90%;
                 background:white;
                 margin-top:-60px
              }
              .mb-uraian{
               text-align:justify;
              }
              .img-mb{
               border: 5px solid white;
              }
              
         }
         @media screen and (min-width: 480px) and (max-width: 960px){
            
            /* .show{
               display:none;
            } */

            .mb{
                 width:90%;
                 background:white;
                 margin-top:-60px;
                 
              }
              .mb-uraian{
               text-align:justify;
              }
         } 
         @media screen and (min-width: 960px){
            
            .show{
               display:none;
            }
           
         }
      </Style>
     
   </head>
   <body class="bgr">
   
      <?php
      $id=1;
      $query = mysqli_query($con, "SELECT * FROM dashboards WHERE id=$id");
      $data = mysqli_fetch_array($query);
      ?>
     
      
      <nav class="navbar navbar-expand-lg navbar-light navs  <?= $data['warna_header'];?> menus" style="z-index:1">
         <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                  <img src="statics/logo.png"  style="padding-top:7px" width="120" >
               </li>
            </ul>
         <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarText">
            <div class="navbar-nav mr-auto"></div>
            <span class="navbar-text">
               <div class="col-sm d-flex flex-row-reverse">
                  <ul class="navbar-nav">
                     <li class="nav-item ">
                        <a class="nav-link fontsize text-white active" href="?hal=first_dashboard">HOME</a>
                     </li>
                     <li class="nav-item ">
                        <a class="nav-link  fontsize text-white " href="?hal=dash_desa">DESA</a>
                     </li>
                     <!-- <li class="nav-item">
                        <a class="nav-link fontsize text-white" href="?hal=dash_statistik">STATISTIK</a>
                     </li> -->
                     <li class="nav-item">
                        <a class="nav-link fontsize text-white" href="?hal=dash_layanandesa">LAYANAN DESA</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link fontsize text-white" href="?hal=dash_potensidesa">POTENSI DESA</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link fontsize text-white" href="?hal=dash_kabardesa">KABAR BERITA</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link fontsize text-white" href="?hal=dash_galeridesa">GALERI DESA</a><a >
                     </li>
                     <!-- <li class="nav-item">
                        <a class="nav-link fontsize text-white" href="#" data-toggle="modal" data-target="#staticBackdrop">BANTUAN</a><a >
                     </li> -->
                     <li class="nav-item">
                        <a class="nav-link fontsize text-white" href="login.php" >LOGIN</a>
                     </li>
                  </ul>
               </div>
            </span>
         
         </div>
         
      </nav>

      <div class="container-fluid  ">
         
         <section class="main">
            <?php include "konten.php"; ?>
         </section>
       
      </div>
      <footer class="bg-success">
         <!-- <div style="margin-left:10%; margin-right:10%; "> -->
         

         <div >
            <div class="row align-items-center text-white">
               <div class="col-auto">
               <!-- <a class="nav-link text-white active" style="margin-left:50px" href="?hal=dash_desa">Desa</a> -->
               <a class="fontsize  text-white" href="?hal=dash_desa" style="margin-left:50px">Desa</a>
               </div>

               <div class="col-auto">
               <!-- <a class="nav-link text-white" href="?hal=dash_statistik">Data</a> -->
               <a class="fontsize  text-white" href="?hal=dash_statistik">Data</a>
               </div>
               
               <!-- <div class="col-auto"> -->
                  <!-- <a class="nav-link text-white" href="?hal=dash_statistik">Laporan</a> -->
                  <!-- <a class="fontsize  text-white" href="?hal=dash_statistik">Laporan</a> -->
               <!-- </div> -->

               <div class="col"></div>

               <div class="col-auto hide" style="margin-right:50px">
                  <img src="statics/logo.png" width="120" >
               </div>
            </div>   
      
            <div class="row justify-content-center py-1 ">
               <div class="separator" style="width:100%"></div>
            </div>   

            <div class="row align-items-center text-white">
               <div class="col-auto">
                  <!-- <div class="fontsize" style="margin-left:50px">©  2019 - Pemerintah Desa Kudukeras </div> -->
                  <div class="fontsize " >©  2019 - Pemerintah Desa Kudukeras </div>
               </div>
               <div class="col"></div>
               <div class="col-auto">
                  <!-- <div class="fontsize hide" style="margin-right:50px;">Email : pemdes@kudukeras.desa.id | Cirebon  -->
                  <div class="fontsize " >Email : pemdes@kudukeras.desa.id | Cirebon
                 
               </div>
            </div>
         </div>

      </footer>

      

      <!-- <script src="bootstrap/js/bootstrap.bundle.min.js"></script> -->
      <!-- <script src="js/jquery-3.5.0.min.js"></script> -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   </body>
</html>
