<?php
   if(!defined('INDEX')) die("");
?>

<div classs="container">
   <h4 > Layanan Administrasi Publik</h4>
<div class="row1 py-lg-1 justify-content-center " style="margin-top: 1px;">
<div class="row justify-content-center" >
         <div class="col-auto pt-lg-1" style="margin-top: 2rem; ">
            <div class="layananDesa cards  justify-content-center text-center" style="max-width: 100px;">
               <img src="statics/akta-perkawinan.png" class=" card-img-top" alt="...">
               </div>    
            </div>
   <div class="cards2-body">
     <h4 style="margin-top:35px; margin-left:20px">Akta-Kawin</h4> 
       <div class="card-body">
          <p class="cards-text" style="margin-top:-10px;">Penerbitan Akta Perkawinan</p>
       </div>
   </div>
</div>  


   <div class="row justify-content-center" >
      <div class="col-auto pt-lg-1" style="margin-top: 2rem; ">
         <div class="layananDesa cards  justify-content-center text-center" style="max-width: 100px;">
            <img src="statics/akta-kematian.png" class=" card-img-top" alt="...">
         </div>    
      </div>
   <div class="cards-body">
      <h4 style="margin-top:25px; margin-left:30px">Akta Kematian</h4>   
         <div class="card-body">
            <p class="card-text ">Penerbitan Akta Kematian</p>
         </div>
      </div>
   </div>  


   <div class="row justify-content-center" >
      <div class="col-auto pt-lg-1" style="margin-top: 2rem; ">
         <div class="layananDesa cards  justify-content-center text-center" style="max-width: 100px;">
            <img src="statics/akta-perceraian.png" class=" card-img-top" alt="...">
         </div>    
      </div>
   <div class="cards-body">
      <h4 style="margin-top:25px; margin-left:30px">Akta Perceraian</h4> 
        <div class="cards-body">
          <p class="card-text ">Penerbitan Akta Perceraian</p>
       </div>
      </div>
   </div> 
</div>

   <div class="row1 py-lg-1 justify-content-center " style="margin-top: 1px;">   
      <div class="row justify-content-center" >
         <div class="col-auto pt-lg-1" style="margin-top: 2rem; ">
            <div class="layananDesa cards  justify-content-center text-center" style="max-width: 100px;">
               <img src="statics/icon-ktp.png" class=" card-img-top" alt="...">
               </div>    
            </div>
   <div class="card-body">
      <h4 style="margin-top:25px; margin-left:30px">KTP</h4> 
         <div class="card-body">
            <p class="card-text ">Penerbitan Akta KTP</p>
         </div>
      </div>
   </div>  

   <div class="row justify-content-center" >
      <div class="col-auto pt-lg-1" style="margin-top: 2rem; ">
         <div class="layananDesa cards  justify-content-center text-center" style="max-width: 100px;">
            <img src="statics/kartu-keluarga.png" class=" card-img-top" alt="...">
         </div>    
      </div>
   <div class="cards-body">
      <h4 style="margin-top:25px; margin-left:30px">Kartu Keluarga</h4> 
         <div class="card-body">
            <p class="card-text " style="maxlength:7px">Penerbitan Kartu Keluarga nhnnnnnnnnnnnnnnnnn</p>
            </div>
         </div>
      </div>  
   
      <div class="row justify-content-center" >
      <div class="col-auto pt-lg-1" style="margin-top: 2rem; ">
         <div class="layananDesa cards  justify-content-center text-center" style="max-width: 100px;">
            <img src="statics/kepindahan.png" class=" card-img-top" alt="...">
         </div>    
      </div>
   <div class="cards-body">
      <h4 style="margin-top:25px; margin-left:30px">Kepindahan</h4> 
         <div class="card-body">
            <p class="card-text ">Penerbitan Kartu pindah</p>
            </div>
         </div>
      </div>  
   </div>
</div>

<div classs="container">
   <h4> Informasi Publik</h4>
   <div class="row1 py-lg-1 justify-content-center " style="margin-top: 1px;">
<div class="row justify-content-center" >
         <div class="col-auto pt-lg-1" style="margin-top: 2rem; ">
            <div class="layananDesa cards  justify-content-center text-center" style="max-width: 100px;">
               <img src="statics/layanan.png" class=" card-img-top" alt="...">
               </div>    
            </div>
   <div class="cards2-body">
     <h4 style="margin-top:35px; margin-left:20px">Layanan</h4> 
       <div class="card-body">
          <p class="cards-text" style="margin-top:-10px;">layanan publik</p>
       </div>
   </div>
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
.h4 {
   position: absolute;
   margin-left:100px;
}
.row1{
   display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
  margin-bottom:-300px;
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
            height:200px;
         }
         .ress{
            width:200px;
            height:150px;
         }
         .icon{
       
            display:none;
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