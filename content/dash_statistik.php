<?php
   if(!defined('INDEX')) die("");
?>

<div class="row" id="box-search" style="margin-top:-20px;">
   <!-- <div class="thumbnail"> -->
   <img src="statics/layananbanner.jpg" style="height:500px; width:100%;z-index:-2">
      <div class="caption text-white text-left" style="z-index:-1">
         <div class="display-4"><b><u>Statistik</u></b></div>
         <div style="height:20px"></div>
         <div class="fonts">
            <p>Sistem kami memungkinkan dalam melakukan pendataan secara</p>
            <p> tepat, akurat dan akuntabel. Diolah oleh tim pendata Desa kami..</p>
         </div>
      </div>
   <!-- </div> -->
</div>
<div style="margin-top:8%;"></div>
<div style="margin-top:50px; margin-left:50px;">
   <div class="text-success"><h3><u>Data Kependudukan</u></h3></div>
   <div style="height:20px"></div>
   <div style="margin-left:20px">
      <div class="h5"> Text atau gambar </div>
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
    top: 150px;
    /* left: 50px; */
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