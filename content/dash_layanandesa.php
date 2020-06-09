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
                  <div class="row " id="box-search">
                  <a href="documents/<?= $data['file'] ?>"> 
                     <div class="thumbnail ">    
                        <img src="statics/back.jpeg" class="ress">
                        <div class="box  text-center">
                           <div class="h5"><?= $data['nama_surat'] ?></div>
                        </div>
                     </div>
                     </a>
                  </div>
            </div>
         </div>
        
      <?php
         }
      ?>
   </div>

</div>


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