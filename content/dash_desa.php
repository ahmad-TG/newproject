<?php
   if(!defined('INDEX')) die("");
?>
<div class="row" id="box-search">
   <div class="thumbnail">
   <img src="statics/layananbanner.jpg" style="height:500px; width:100%">
      <div class="caption text-left">
         <h4><b><u>Profil Desa</u></b></h4>
         <div style="height:20px"></div>

         <p>Desa Kudukeras merupakan desa yang beredar di Kecamatan Babakan,</p>
         <p> Kabupaten Cirebon. Informasi lebih dalam mengenai desa kudukeras dapat</p>
         <p>anda lihat dengan klik tombol selengkapnya.</p>
      
         <div class="row q-gutter-lg">
            <div class="col-auto">
               <a href="#down" class="btn btn-success btn-lg" role="button"><b>Selengkapnye</b> </a>
            </div>
            
            <div class="col-auto">
               <button type="button" class="btn btn-success btn-lg"><b>Data Desa</b> </button>
            </div>
         </div>
      </div>
   </div>
</div>
<div style="height:90px"></div>
<div id="down" class="row justify-content-center q-gutter-lg" href="down">
   <div class="col-auto">
      <a href="?hal=dash_sejarah" role="button" class="btn btn-outline-success btn-xl"><i class="fa fa-book" aria-hidden="true"></i><b>Sejarah</b> </a>
   </div>
   <div class="col-auto">
      <a href="?hal=dash_geografis" role="button" class="btn btn-outline-success btn-xl"><b>Geografis</b> </a>
   </div>
   <div class="col-auto">
      <a href="?hal=dash_pemerintahdesa" role="button" class="btn btn-outline-success btn-xl"><b>Pemerintah Desas</b> </a>
   </div>
</div>

<div style="margin-bottom:5%;"></div>

<style>
.thumbnail {
    position: relative;
    color: white;
}

.caption {
    position: absolute;
    top: 200px;
    left: 50px;
}

.btn-xl {
    padding: 20px 70px;
    font-size: 20px;
    border-radius: 10px;
}
</style>