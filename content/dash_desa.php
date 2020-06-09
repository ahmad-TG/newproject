<?php
   if(!defined('INDEX')) die("");
?>
<div class="row" id="box-search" >
   <!-- <div class="thumbnail"> -->
   <img src="statics/layananbanner.jpg" style="height:500px; width:100%;margin-top:-20px;">
      <div class="caption text-left text-white responsives" >
         <h2><b><u>Profil Desa</u></b></h2>
         <div style="height:20px"></div>
         <div class="fonts">
            <p>Desa Kudukeras merupakan desa yang beredar di Kecamatan Babakan,</p>
            <p> Kabupaten Cirebon. Informasi lebih dalam mengenai desa kudukeras dapat</p>
            <p>anda lihat dengan klik tombol selengkapnya.</p>
         </div>
         <div class="row q-gutter-lg button-desktop ">
            <div class="col-auto mt-2">
               <a href="?hal=dash_selengkapnya" class="btn btn-success btn-lg" role="button"><b>Selengkapnye</b> </a>
            </div>
            
            <div class="col-auto  mt-2">
               <a href="?hal=dash_datadesa" class="btn btn-success btn-lg" role="button"><b>Data Desa</b> </a>
            </div>
         </div>

         <div class="button-mobile  mt-5" style="margin:auto;"> 
            <a class="btn btn-success btn-lg btn-block" href="?hal=dash_selengkapnya" role="button">Selengkapnye</a>
            <a class="btn btn-success btn-lg btn-block" href="?hal=dash_datadesa" role="button">Data Desa</a>
         </div>
      </div>
</div>

<div class="button-mobile" style=" margin-top:50px;margin-bottom:50px;"> 
   <a class="btn btn-outline-success  btn-xl btn-block" href="?hal=dash_sejarah" role="button">Sejarah</a>
   <a class="btn btn-outline-success  btn-xl btn-block" href="?hal=dash_geografis" role="button">Geografis</a>
   <a class="btn btn-outline-success  btn-xl btn-block" href="?hal=dash_pemerintahdesa" role="button">Pemerintah Desa</a>
</div>

<div id="down" class="row justify-content-center q-gutter-lg button-desktop" href="down" style="margin-top:90px; margin-bottom:90px;">
   <div class="col-auto" max-width="200px">
      <a href="?hal=dash_sejarah" role="button" class="btn btn-outline-success btn-xl mt-2 btn-block"><i class="fa fa-book" aria-hidden="true"></i><b>Sejarah</b> </a>
   </div>
   <div class="col-auto">
      <a href="?hal=dash_geografis" role="button" class="btn btn-outline-success btn-xl mt-2"><b>Geografis</b> </a>
   </div>
   <div class="col-auto">
      <a href="?hal=dash_pemerintahdesa" role="button" class="btn btn-outline-success btn-xl mt-2"><b>Pemerintah Desa</b> </a>
   </div>
</div>

<style>
   .thumbnail {
      position: relative;
      color: white;
   }

   .caption {
      position: absolute;
      top: 200px;
      /* left: 50px; */
   }

   .btn-xl {
      padding: 20px 70px;
      font-size: 20px;
      border-radius: 10px;
   }

   @media screen and (max-width: 480px){
         .fonts{
            font-size:17px;
         }
         .responsives{
            margin-top:-80px
         }
         .button-desktop{
            display:none;
         }
         .caption {
            margin-left:15px;
            margin-right:15px;
            float:center;
         }
         
   }
   @media screen and (min-width: 481px) {
      
         .caption {
            left: 50px;
         }
         .fonts{
            font-size:20px;
         }
         .button-mobile{
            display:none;
         }
   }
   @media screen and (min-width: 960px){
      .button-mobile{
            display:none;
         }
         .caption {
            left: 50px;
         }
      
      /* .img2{
            width:280px;
            height:180px;
         }
         .resjudul{
            display:none;
         } */
   }
</style>