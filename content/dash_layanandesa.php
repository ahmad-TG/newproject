<?php
   if(!defined('INDEX')) die("");
?>
<div class="row" id="box-search" style="margin-top:-30px;">
   <!-- <div class="thumbnail"> -->
   <img src="statics/layananbanner.jpg" class="imgs" style="width:100%;z-index:-2">
         <div class="caption text-left text-white responsives" >
            <h2><b><u>Layanan Administrasi</u></b></h2>
            <div style="height:20px"></div>
            <div class="fonts">
               <p>Temukan berbagai informasi administrasi kependudukan di laman ini.</p>
            </div>
         </div>
      
      <!-- </div> -->
   <!-- </div> -->
</div>
<div style="margin-left:10%;margin-right:10%;">
   <div class="row pt-5 justify-content-center">
      <?php
         $query = mysqli_query($con, "SELECT * FROM layanan_publik ");
         while($data = mysqli_fetch_array($query)){
      ?>
      <!-- desktop -->
         <div class="d-inline-block px-3 py-3 " tabindex="0" data-toggle="tooltip" title="download">
            <div class="col-auto px-lg-5 ">
               <a href="documents/<?= $data['file'] ?>">
                  <div class="row " id="box-search">
                   
                     <div class="gallery" style="margin-right:5px;background:#E6E6E6;margin-top:5px;">
                          <a href="?hal=dash_galeri_bykategori&kategori=<?= $data['kategori'] ?>">
                              <img  src="images/<?= $data['icon'] ?>" style="width: 150px;" alt="Cinque Terre" >
                          </a>
                          <div class="desc" style="width: 150px;height:80px;text-align:center"><?= $data['nama_surat'] ?></div>
                        </div>
                   
                  </div>
               </a>
            </div>
         </div>
        
      <?php
         }
      ?>
   </div>

</div>

<!-- <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-3 ">
      <img src="statics/kartu-keluarga.png" class=" card-img-top" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div> -->


<style>
.thumbnail {
    position: relative;
    color: white;
}

.box {
    position: absolute;
    top: 30%;
    margin-left:5%;
    margin-right:5%;
    /* left: 10%; */
}

.caption {
    position: absolute;
    top: 200px;
}
@media screen and (max-width: 480px){
         .fonts{
            font-size:17px;
         }
         .responsives{
            margin-top:-80px
         }
         .desktop{
            display:none;
         }
         .caption {
            margin-left:15px;
            margin-right:15px;
            float:center;
         }
         .imgs{
            height:300px;
         }
         .ress{
            width:200px;
            height:150px;
         }
         
   }
   @media screen and (min-width: 481px) {
         .imgs{
            height:500px; 
         }
         .caption {
            left: 50px;
         }
         .fonts{
            font-size:20px;
         }
         .mobile{
            display:none;
         }
   }
   @media screen and (min-width: 960px){
      .imgs{
            height:500px; 
         }
      .mobile{
            display:none;
         }
         .caption {
            left: 50px;
         }
   }


</style>