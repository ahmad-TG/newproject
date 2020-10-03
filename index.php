<?php
  
  include "library/config.php";
  define('INDEX', true);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dash_style.css" type="text/css">
   <link rel="stylesheet" href="plugin/fontawesome/css/all.css">
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

         /* @media screen and (max-width: 480px){
            
            .bg-mb{
               margin-left:-10px;
               margin-right:-10px;
               margin-bottom:-10px;
               background:#42BA40;
            }
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
           
            .bg-mb{
               margin-left:-10px;
               margin-right:-10px;
               margin-bottom:-10px;
               background:#42BA40;
            }
             /* .show{
               display:none;
            } */

            /* .mb{
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
           
         } */ 
      </Style>
    <title>Hello, world!</title>
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
         <div class="collapse navbar-collapse bg-mb" id="navbarText">
            <div class="navbar-nav mr-auto"></div>
            <span class="navbar-text">
               <div class="col-sm d-flex flex-row-reverse">
                  <ul class="navbar-nav">
                     <li class="nav-item ">
                        <a class="nav-link fontsize text-white active" href="?hal=first_dashboard">HOME</a>
                     </li>
                     <li class="nav-item ">
                        <!-- <a class="nav-link  fontsize text-white " href="?hal=dash_desa">DESA</a> -->
                        <div class="dropdown">
                        <a class="nav-link fontsize text-white active "  href="#"  data-toggle="dropdown" >
                        DESA
                        </a>
                        <div class="dropdown-menu " >
                           <!-- <a class="dropdown-item  " href="?hal=dash_sejarah" role="button"> Sejarah</a> -->
                           
                           <a class="dropdown-item dropdown-toggle"   data-toggle="dropdown" > Profile </a>
                              <div class="dropdown-menu position-absolute ml-1" style="left: 100%; top:0;cursor: pointer;" >
                                 <a class="dropdown-item  " href="?hal=dash_sejarah" role="button"> Sejarah</a>
                                 <a class="dropdown-item  " href="?hal=dash_profile" role="button"> Visi & Misi</a>
                                 <a class="dropdown-item  " href="?hal=dash_geografis" role="button">Letak Geografis</a>
                              </div>
                           <a class="dropdown-item  " href="?hal=dash_pemerintahdesa" role="button">Anggota Perangkat Desa</a>
                        </div>
                     </div>
                     </li>

                     <li class="nav-item">
                        <a class="nav-link fontsize text-white" href="?hal=dash_layanandesa">LAYANAN DESA</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link fontsize text-white" href="?hal=dash_potensidesa">POTENSI DESA</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link fontsize text-white" href="?hal=dash_kabardesa">KABAR DESA</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link fontsize text-white" href="?hal=dash_galeridesa" >GALERI DESA</a><a >
                        
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>