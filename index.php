
<!DOCTYPE HTML>
<html>
   <head>
      <title>Dashboard</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
      <style>
         .heads{
            font-size:16px;
            font-weight:500;
         }

         .bgr{
            background-color:#E8E8E8;
         }
         .cards{
            max-width:250px;
            height:450px;
         }
         
         .fonts{
            background-color:#E8E8E8;
            font-size:50px;
            font-weight:450;
         }
         .titles{
            font-size:16px;
         }
         .line-separator{
            height:1px;
            width:70%;
            background:#CACBC9;
         }
      </style>
   </head>
   <body>
      <header class="bg-success fixed-top" >
      <div class="row justify-content-between ">
         <div class="col-1">
            <img src="statics/logo.png" width="150" >
         </div>
         <div class="col-sm d-flex flex-row-reverse">
            <ul class="nav heads">
               <li class="nav-item ">
                  <a class="nav-link  text-white active" href="?hal=desa">DESA</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-white"href="?hal=statistik">STATISTIK</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-white"href="?hal=layanandesa">LAYANAN DESA</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-white"href="?hal=potensidesa">POTENSI DESA</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-white"href="?hal=kabardesa">KABAR DESA</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-white"href="?hal=galeridesa">GALERI DESA</a>
               </li>
            </ul>
         </div>
      </div>
      </header>

      <div class="container-fluid bgr">
         <div class="card mt-lg-5"></div>
         <div class="card mt-lg-5">
            <img src="statics/banner.jpg" >
         </div>

         <div class=" text-center mt-lg-5 fonts text-success">
            #MenujuDesaMaju
         </div>
         <div class="text-center titles mt-lg-4 " >
         Melayani masyarakat secara cepat dan transparan adalah komitmen kami dalam<br>
         memajukan Desa Mandong. Maka website publikasi dan sistem informasi desa ini kami<br>
         hadirkan untuk mewujudkan Desa Maju & Mandiri.
         </div>
      </div>

      <div class="row bgr py-lg-5 justify-content-center">
         
         <div class="col-auto ">
            <div class="card cards  justify-content-center text-center" style="width: 18rem;">
               <img src="statics/menuprofil.png" class=" card-img-top" alt="...">
               <div class="card-body">
                  <h4>Profile</h4> 
                  <p class="card-text ">Some quick example text to build on the card title and make up
                   the bulk of the card's content.</p>
               </div>
            </div>
         </div>

         <div class="col-auto ">
            <div class="card cards  justify-content-center text-center" style="width: 18rem;">
               <img src="statics/kabardesa.png" class=" card-img-top" alt="...">
               <div class="card-body">
                  <h4>Layanan Publik</h4> 
                  <p class="card-text ">Some quick example text to build on the card title and make up
                   the bulk of the card's content.</p>
               </div>
            </div>
         </div>

         <div class="col-auto ">
            <div class="card cards  justify-content-center text-center" style="width: 18rem;">
               <img src="statics/layanandesa.png" class=" card-img-top" alt="...">
               <div class="card-body">
                  <h4>Layanan Desa</h4> 
                  <p class="card-text ">Some quick example text to build on the card title and make up
                   the bulk of the card's content.</p>
               </div>
            </div>
         </div>

      </div>

      <footer class="bgr ">
         Copyright &copy; DesaKuduKeras
      </footer>
      <script src="js/jquery-3.5.0.min.js"></script>
      <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
   </body>
</html>
