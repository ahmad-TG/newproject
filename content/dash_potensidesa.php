<?php
   if(!defined('INDEX')) die("");
?>

<div class="row" id="box-search" style="margin-top:-30px;">
   <!-- <div class="thumbnail"> -->
   <img src="statics/layananbanner.jpg" class="imgs" style="width:100%;height:400px;z-index:-2">
         <div class="caption text-left text-white responsives" >
         <div class="text-white"><h2><u>Potensi Desa</u></h2></div>
          <div style="height:20px"></div>
            <div class="fonts">
               <p>Temukan berbagai informasi administrasi kependudukan di laman ini.</p>
            </div>
         </div>
      
      <!-- </div> -->
   <!-- </div> -->
</div>

<div class="album py-5 ">
   <!-- <div class="text-success"><h2><u>Potensi Desa</u></h2></div>
          <div style="height:20px"></div>
    <div class="row" style="padding-top:20px">      -->
  
       <!-- </div> -->
        
            
         
                
                     <div class="row no-gutters bg-light position-relative">
                        <div class="col-md-6 mb-md-0 p-md-4">
                           <img src="images/1.png" class="w-100" alt="...">
                        </div>
                        <div class="col-md-6 position-static p-4 pl-md-0">
                           <h5 class="mt-0"><?= $data['title'] ?></h5>
                           <p><?= substr($data['uraian'],0, 50); ?></p>
                           <a href="#" class="stretched-link">Baca Selengkapnya...</a>
                        </div>
                     </div>

                    
                     <p style="clear:right"/>
                     </div>
         
         
         </div>
         <div style="height:50px"></div>
         
         <div class=" row justify-content-center py-3 ">
            <div class="separator"></div>
         </div>
            <div style="height:50px"></div>
      </div>
   </div>
      

   <div style="margin-bottom:5%;"></div>


 <style>
.thumbnail {
    position: relative;
    color: white;
}
.clearfix {
  overflow: auto;
}

.img2 {
  float: left;
}

.textpotret{
   position: absolute;
   top: 10%;
   left: 10%;
}

.caption {
    position: absolute;
    top: 220px;
    left: 50px;
}

.btn-xl {
    padding: 20px 70px;
    font-size: 20px;
    border-radius: 10px;
}
@media screen and (max-width: 480px){
            .kabarberita{ 
               background: red; 
               max-width:10rem;
               
               }
               .img2{
                  width:350px;
                  height:250px;
               }
               .judul{
                  font-size:30px;
               }
               .titles{
                  font-size:15px;
               }
               .banner{
                  height:200px;
               }
               .kabarberitautama{
                  display:none;
               }
               .resjudul{
                  margin-top:250px;
               }
               .subkabar{
                  text-align:left;
               }
         }
         @media screen and (min-width: 481px) {
           
            /* .kabarberitautama{
                  display:none;
               } */
               .img2{
                  width:280px;
                  height:180px;
                  
               }
               .resjudul{
                  display:none;
               }
               .judul{
                  font-size:50px;
               }
               .titles{
                  font-size:30px;
               }
         }
         /* @media screen and (min-width: 960px){
            
            .img2{
                  width:280px;
                  height:180px;
               }
               .resjudul{
                  display:none;
               }
         } */
</style>     


      
   
     