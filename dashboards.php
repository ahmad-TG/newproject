<?php
  session_start();
  ob_start();
  
  include "library/config.php";

  if(empty($_SESSION['username']) or empty($_SESSION['password'])){
     echo "<p align='center'> Anda harus login terlebih dahulu!</p>";
     echo "<meta http-equiv='refresh' content='0; url=login.php'>";
  }else{
    define('INDEX', true);
?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <title>Dashboard</title>
   
    <!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link href="open-iconic/css/open-iconic-bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="plugin/DataTables/css/dataTables.bootstrap4.min.css" rel="stylesheet"> -->
    <link href="plugin/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <link href="plugin/summernote/summernote-bs4.css" rel="stylesheet">
    <link rel="stylesheet" href="plugin/fontawesome/css/all.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <!-- <link rel="stylesheet" href="plugin/chart/chart.css"> -->
  
    <style>
    .nav-item:hover{
      background:#01DF3A;
    }
    #menus-item:hover{
      background:red;
    }
    .bodys{
       margin-top:30px;
    }
    @media screen and (max-width: 480px){
            .bodys{
               margin-top:80px;
            }
            .menus{ 
               position: fixed;
               width:100%;
               }}
    </style>

   </head>
   <body class="h-100">
      <nav class="navbar navbar-expand-sm navbar-dark sticky-top menus bg-success">
      <img src="statics/logo.png"  style="padding-top:7px;margin-right:100px;" width="120" >
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
         </button>
       </nav>  
         <nav class="collapse navbar-collapse" style="background:#42BA40;" id="sidebar">
                     
         <ul class="navbar-nav ml-3  d-sm-none  " style="margin-right:10%">
            <li class="nav-item "> 
               <a class="nav-link ml-3 text-white" href="?hal=dashboard">
                  <i class="fas fa-home mr-2" style="font-size:20px;" ></i>Dashboard
               </a> 
            </li>

            <li class="nav-item" style="width:100%; height:1px; background: #A9F5A9;margin-right:100px;"> </li>

            <li class="nav-item"> 
               <a class="nav-link ml-3 text-white" href="?hal=potensi_desa">
                  <i class="fas fa-heart mr-2" style="font-size:20px;"></i>Potensi Desa
               </a> 
            </li>

            <li class="nav-item" style="width:100%; height:1px; background: #A9F5A9;margin-right:100px;"> </li>
               
            <li class="nav-item"> 
               <a class="nav-link ml-3 text-white" href="?hal=profile">
                  <i class="fas fa-user-cog mr-2" style="font-size:20px;"></i>Profile
               </a> 
            </li>

            <li class="nav-item" style="width:100%; height:1px; background: #A9F5A9;margin-right:100px;"> </li>
            
            <li class="nav-item"> 
               <a class="nav-link ml-3 text-white" href="?hal=layanan_publik">
                  <i class="fab fa-chromecast mr-2" style="font-size:20px;"></i>Layanan publik
               </a> 
            </li>

            <li class="nav-item" style="width:100%; height:1px; background: #A9F5A9;margin-right:100px;"> </li>
            
            <li class="nav-item"> 
               <a class="nav-link ml-3 text-white" href="?hal=user">
                  <i class="fas mr-2 fa-users" style="font-size:20px;"></i>Data User
               </a> 
            </li>

            <li class="nav-item" style="width:100%; height:1px; background: #A9F5A9;margin-right:100px;"> </li>

            <li class="nav-item"> 
               <a class="nav-link ml-3 text-white" href="?hal=galeri">
                  <i class="fas  mr-2 fa-images" style="font-size:20px;"></i>Galeri
               </a> 
            </li>

            <li class="nav-item" style="width:100%; height:1px; background: #A9F5A9;margin-right:100px;"> </li>

            <li class="nav-item"> 
               <a class="nav-link ml-3 text-white" href="?hal=kabar_desa">
                  <i class="fas mr-2 fa-file-signature" style="font-size:20px;"></i>Kabar desa
               </a> 
            </li>

            <li class="nav-item" style="width:100%; height:1px; background: #A9F5A9;margin-right:100px;"> </li>

            <li class="nav-item"> 
               <a class="nav-link ml-3 text-white" href="?hal=kegiatan">
                  <i class="fas mr-2 fa-life-ring" style="font-size:20px;"></i>Kegiatan
               </a> 
            </li>

            <li class="nav-item" style="width:100%; height:1px; background: #A9F5A9;margin-right:100px;"> </li>

            <li class="nav-item"> 
               <a class="nav-link ml-3 text-white" href="?hal=struktur">
                 <i class="fas  mr-2 fa-project-diagram " style="font-size:20px;"></i>Struktur
               </a> 
            </li>

            <li class="nav-item" style="width:100%; height:1px; background: #A9F5A9;margin-right:100px;"> </li>

            <li class="nav-item"> 
               <a class="nav-link ml-3 text-white" href="?hal=pengaturan">
                 <i class="fas  mr-2 mr-sm-2 fa-cogs " style="font-size:20px;"></i>Pengaturan
               </a> 
            </li>

            <li class="nav-item" style="width:100%; height:1px; background: #A9F5A9;margin-right:100px;"> </li>

            <li class="nav-item"> 
               <a class="nav-link ml-3 text-white" href="index.php">
                <i class="fas mr-2 fa-sign-out-alt" style="font-size:20px;"></i>Keluar
               </a> 
            </li>

         </ul>
         </nav>
      </nav>
   
      <div class="container-fluid h-100" style="margin-bottom:150px">
        <div class="row h-100">
         <nav class="col-md-2 col-sm-3 bg-dark h-100 p-0 position-absolute d-none d-sm-block"  >
            
            <ul class="list-group   list-group-flush" >
               <li class="list-group-item bg-dark" id="menus-item"> 
                  <a class="nav-link text-white" href="?hal=dashboard">
                  <i class="fas fa-home mr-sm-2" style="font-size:20px;" ></i> Dashboard
                  </a>
               </li>
               <!-- tambahan -->
               <li class="list-group-item bg-dark"> 
                  <a class="nav-link text-white" href="?hal=potensi_desa">
                  <i class="fas fa-heart mr-sm-2" style="font-size:20px;" ></i> Potensi Desa
                  </a>
               </li>
               <!-- sampai sini -->
               <li class="list-group-item bg-dark"> 
                  <a class="nav-link text-white" href="?hal=profile">
                     <i class="fas fa-user-cog mr-sm-2" style="font-size:20px;"></i> Setting
                  </a> 
               </li>
               <li class="list-group-item bg-dark"> 
                  <a class="nav-link text-white" href="?hal=layanan_publik">
                     <i class="fab fa-chromecast mr-sm-2" style="font-size:20px;"></i> layanan publik
                  </a>
               </li>
               <li class="list-group-item bg-dark"> 
                  <a class="nav-link text-white" href="?hal=user">
                     <i class="fas mr-sm-2 fa-users" style="font-size:20px;"></i> Data User
                  </a> 
               </li>
               <li class="list-group-item bg-dark"> 
                  <a class="nav-link text-white" href="?hal=galeri">
                     <i class="fas  mr-sm-2 fa-images" style="font-size:20px;"></i> Galeri
                  </a> 
               </li>
               <li class="list-group-item bg-dark"> 
                  <a class="nav-link text-white" href="?hal=kabar_desa">
                     <i class="fas mr-sm-2 fa-file-signature" style="font-size:20px;"></i> kabar desa
                  </a>  
               </li>
               <li class="list-group-item bg-dark"> 
                  <a class="nav-link text-white" href="?hal=kegiatan">
                     <i class="fas mr-sm-2 fa-life-ring" style="font-size:20px;"></i> kegiatan
                  </a> 
               </li>
               <li class="list-group-item bg-dark"> 
                  <a class="nav-link text-white" href="?hal=struktur">
                     <i class="fas  mr-sm-2 fa-project-diagram " style="font-size:20px;"></i> struktur
                  </a> 
               </li>

               <li class="list-group-item bg-dark"> 
                  <a class="nav-link text-white" href="?hal=pengaturan">
                     <i class="fas  mr-sm-2 fa-cogs " style="font-size:20px;"></i> Pengaturan
                  </a> 
               </li>

               <li class="list-group-item bg-dark" > 
                  <a class="nav-link text-white" href="index.php" >
                     <i class="fas mr-sm-2 fa-sign-out-alt" style="font-size:20px;"></i> Keluar
                  </a> 
               </li>
            </ul>
         
         </nav>

         <div  class="col-md-10 col-sm-9 offset-md-2 bodys offset-sm-3 mb-3" style="padding-bottom:100px;" >  
           <section>
            <?php include "admin.php"; ?>
           </section>
         </div>
        
        </div>
      </div>  
      
      <div class=" fixed-bottom " style="background:#42BA40;">
            <p class="m-2 text-center text-white">Copyright &copy; Kudukeras</p>
         </div>
     <!-- <div class=" fixed-bottom " style="background:#42BA40;">
      <p class="m-2 text-center text-white">Copyright &copy; Kudukeras</p>
     </div> -->
     

      <script src="js/jquerys.js"></script>
     <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
     <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
      
      <script src="plugin/DataTables/js/jquery.dataTables.min.js"></script>
     <!-- <script src="plugin/DataTables/js/dataTables.bootstrap4.min.js"></script> -->
     <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js" crossorigin="anonymous"></script>

   
     <!-- <script src="plugin/chart/chart.js"></script> -->

     <script src="plugin/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
     <script src="plugin/summernote/summernote-bs4.min.js"></script>

     <script>
        $(function(){
           $('.table').DataTable({
            responsive: true
           });
           $('#tanggal').datepicker();
           $('#keterangan').summernote();
        });

        
     </script>
   </body>
</html>
<?php
   }
?>