<?php
   if(!defined('INDEX')) die("");
?>
<div class="row" id="box-search">
   <div class="thumbnail">
   <img src="statics/layananbanner.jpg" style="height:500px; width:100%">
      <div class="caption text-left">
         <h4><b><u>Layanan Administrasi</u></b></h4>
         <div style="height:20px"></div>

         <p>Temukan berbagai informasi administrasi kependudukan di laman ini.</p>
      
      </div>
   </div>
</div>
<div style="margin-left:10%;margin-right:10%;">
   <div class="row py-lg-5 justify-content-center">
      <?php
         $query = mysqli_query($con, "SELECT * FROM layanan_publik ");
         while($data = mysqli_fetch_array($query)){
      ?>
         <div class="d-inline-block" tabindex="0" data-toggle="tooltip" title="download">
            <div class="col-auto px-lg-5 ">
                  <div class="row " id="box-search">
                  <a href="documents/<?= $data['file'] ?>"> 
                     <div class="thumbnail ">    
                        <img src="statics/back.jpeg" style="max-height:150px; max-widht:300px">
                        <div class="box text-left">
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

     <!--  <div class="col-auto px-lg-5">
      <div class="row" id="box-search">
         <div class="thumbnail">
            <img src="statics/back.jpeg" style="max-height:150px; max-widht:300px">
            <div class="box text-left">
               <div class="h5">Surat Keterangan Harga Tanah</div>
            </div>
         </div>
      </div>
      </div>
       
      <div class="col-auto px-lg-5">
      <div class="row" id="box-search">
         <div class="thumbnail">
            <img src="statics/back.jpeg" style="max-height:150px; max-widht:300px">
            <div class="box text-left">
               <div class="h5">Surat Keterangan Beda Nama</div>
            </div>
         </div>
      </div>
      </div>

      <div class="col-auto px-lg-5">
      <div class="row" id="box-search">
         <div class="thumbnail">
            <img src="statics/back.jpeg" style="max-height:150px; max-widht:300px">
            <div class="box text-left">
               <div class="h5">Surat Keterangan Kematian</div>
            </div>
         </div>
      </div>
      </div>

      <div class="col-auto px-lg-5">
      <div class="row" id="box-search">
         <div class="thumbnail">
            <img src="statics/back.jpeg" style="max-height:150px; max-widht:300px">
            <div class="box text-left">
               <div class="h5">Surat Keterangan Kelahiran</div>
            </div>
         </div>
      </div>
      </div> -->
   </div>

</div>


<style>
.thumbnail {
    position: relative;
    color: white;
}

.box {
    position: absolute;
    top: 10%;
    left: 10%;
}

.caption {
    position: absolute;
    top: 200px;
    left: 50px;
}



</style>