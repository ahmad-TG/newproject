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
         <!-- <a class="navbar-brand" href="#">Manajemen Desa</a> -->
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         
         <nav class="collapse navbar-collapse" id="sidebar">
                     
         <ul class="navbar-nav d-sm-none">
            <li class="nav-item"> 
               <a class="nav-link text-white" href="?hal=dashboard">
                  <i class="fas fa-home mr-2" style="font-size:20px;" ></i>Dashboard
               </a> 
            </li>

            <li class="list-group-item bg-dark"> 
                  <a class="nav-link text-white" href="?hal=potensi_desa">
                  <i class="fas fa-heart mr-sm-2" style="font-size:20px;" ></i> Potensi Desa
                  </a>
               </li>
               
            <li class="nav-item"> 
               <a class="nav-link text-white" href="?hal=profile">
                  <i class="fas fa-user-cog mr-2" style="font-size:20px;"></i>Profile
               </a> 
            </li>
            <li class="nav-item"> 
               <a class="nav-link text-white" href="?hal=layanan_publik">
                  <i class="fab fa-chromecast mr-2" style="font-size:20px;"></i>  Layanan publik
               </a> 
            </li>
            <li class="nav-item"> 
               <a class="nav-link text-white" href="?hal=user">
                  <i class="fas mr-2 fa-users" style="font-size:20px;"></i>Data User
               </a> 
            </li>
            <li class="nav-item"> 
               <a class="nav-link text-white" href="?hal=galeri">
                  <i class="fas  mr-2 fa-images" style="font-size:20px;"></i>Galeri
               </a> 
            </li>
            <li class="nav-item"> 
               <a class="nav-link text-white" href="?hal=kabar_desa">
                  <i class="fas mr-2 fa-file-signature" style="font-size:20px;"></i>Kabar desa
               </a> 
            </li>
            <li class="nav-item"> 
               <a class="nav-link text-white" href="?hal=kegiatan">
                  <i class="fas mr-2 fa-life-ring" style="font-size:20px;"></i> Kegiatan
               </a> 
            </li>
            <li class="nav-item"> 
               <a class="nav-link text-white" href="?hal=struktur">
                 <i class="fas  mr-2 fa-project-diagram " style="font-size:20px;"></i>Struktur
               </a> 
            </li>
           
            <li class="nav-item"> 
               <a class="nav-link text-white" href="index.php">
                <i class="fas mr-2 fa-sign-out-alt" style="font-size:20px;"></i> Keluar
               </a> 
            </li>
            
         </ul>
         </nav>
      </nav>
   
      <div class="container-fluid h-100" style="margin-bottom:150px">
        <div class="row h-100">
         <nav class="col-md-2 col-sm-3 bg-dark h-100 p-0 position-absolute d-none d-sm-block"  >
            
            <ul class="list-group   list-group-flush" >
               <li class="list-group-item bg-dark"> 
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

        var ctx = document.getElementById('myChart').getContext('2d');
         var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
               labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
               datasets: [{
                     label: '# of Votes',
                     data: [12, 19, 3, 5, 2, 3],
                     backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                     ],
                     borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                     ],
                     borderWidth: 1
               }]
            },
            options: {
               scales: {
                     yAxes: [{
                        ticks: {
                           beginAtZero: true
                        }
                     }]
               }
            }
         });

         var ctx = document.getElementById('myChart2').getContext('2d');
         var myChart = new Chart(ctx, {
            type: 'horizontalBar',
            data: {
               labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
               datasets: [{
                   
                     // barPercentage: 0.5,
                     // barThickness: 6,
                     // maxBarThickness: 8,
                     // minBarLength: 2,
                     label: '# of Votes',
                     data: [12, 19, 3, 5, 2, 3],
                     backgroundColor: ["#FF8000","#FF8000","#FF8000","#FF8000","#FF8000","#FF8000"
                        // 'rgba(255, 99, 132, 0.2)',
                        // 'rgba(54, 162, 235, 0.2)',
                        // 'rgba(255, 206, 86, 0.2)',
                        // 'rgba(75, 192, 192, 0.2)',
                        // 'rgba(153, 102, 255, 0.2)',
                        // 'rgba(255, 159, 64, 0.2)'
                     ],
                     // borderColor: [
                     //    'rgba(255, 99, 132, 1)',
                     //    'rgba(54, 162, 235, 1)',
                     //    'rgba(255, 206, 86, 1)',
                     //    'rgba(75, 192, 192, 1)',
                     //    'rgba(153, 102, 255, 1)',
                     //    'rgba(255, 159, 64, 1)'
                     // ],
                     // borderWidth: 1
               }]
            },
            // circular:true;
            options: {
               scales: {
                     // yAxes: [{
                     //    ticks: {
                     //       beginAtZero: true
                     //    }
                     // }]

                     xAxes: [{
                           gridLines: {
                              offsetGridLines: true
                           }
                     }]

                     // xAxes: [{
                     //    stacked: true
                     // }],
                     // yAxes: [{
                     //    stacked: true
                     // }]
               }
            }
         });
     </script>
   </body>
</html>
<?php
   }
?>