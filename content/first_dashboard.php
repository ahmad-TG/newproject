
<div>
   <div class="row" id="box-search">
      <!-- <div class="thumbnail justify-content-between"> -->
         <img src="statics/banner.jpg" class="banner" style=" width:100%;margin-top:-20px">
      <!-- </div> -->
   </div>

  <div style="height:50px"></div>

   <div class=" text-center mt-lg-5 judul text-success">
      #MenujuDesaMaju
   </div>

   <div class="text-center titles my-lg-4 " >
      Melayani masyarakat secara cepat dan transparan adalah komitmen kami dalam<br>
      memajukan Desa Mandong. Maka website publikasi dan sistem informasi desa ini kami<br>
      hadirkan untuk mewujudkan Desa Maju & Mandiri.
   </div>
      

   <div class="row py-lg-5 justify-content-center " style="margin-top: 2rem;">
         
      <div class="col-auto pt-lg-1" style="margin-top: 2rem; ">
         <div class="card cards  justify-content-center text-center" style="min-width: 18rem;z-index: -1;">
            <img src="statics/menuprofil.png" class=" card-img-top" alt="...">
            <div class="card-body">
               <h4>Profile</h4> 
               <p class="card-text ">Some quick example text to build on the card title and make up
                  the bulk of the card's content.</p>
            </div>
         </div>
      </div>

      <div class="col-auto pt-lg-1" style="margin-top: 2rem;">
         <div class="card cards  justify-content-center text-center" style="min-width: 18rem;z-index: -1;">
            <img src="statics/kabardesa.png" class=" card-img-top" alt="...">
            <div class="card-body">
               <h4>Layanan Publik</h4> 
               <p class="card-text ">Some quick example text to build on the card title and make up
                  the bulk of the card's content.</p>
            </div>
         </div>
      </div>

      <div class="col-auto pt-lg-1" style="margin-top: 2rem;">
         <div class="card cards  justify-content-center text-center" style="min-width: 18rem;z-index: -1;">
            <img src="statics/layanandesa.png" class=" card-img-top" alt="...">
            <div class="card-body">
               <h4>Layanan Desa</h4> 
               <p class="card-text ">Some quick example text to build on the card title and make up
                  the bulk of the card's content.</p>
            </div>
         </div>
      </div>
        
   </div>

   <div class=" row justify-content-center py-3 ">
      <div class="separator"></div>
   </div>

   <div class=" row py-3 "  >
      <div class="col" style="z-index: -1;">
         <div class="row justify-content-center" >
            <div class="col-8 py-3" max-width="200px">
               <div class="text-success subkabar"><h3><u>Kabar Berita</u></h3></div>
               <div style="height:30px"></div>
            </div>
         </div>
       
         <div class="row justify-content-center" >
            <div class="col-sm-4 py-3  kabarberitautama" style="background:#F2F2F2;margin-right:10px">
                  <?php
                     $query = mysqli_query($con, "SELECT  * FROM kabar_desa  ORDER BY kabar_desa.id DESC LIMIT 1 ");
                     $no = 0;
                     while($data = mysqli_fetch_array($query)){
                        $no++;
                  ?>
                  <div class="clearfix py-2 "  >
                        <img class=" pr-2" src="images/<?= $data['foto'] ?>" alt="Pineapple" width="645px" height="640px" style="margin-top:-8px;margin-bottom:-8px;">
                        <div class="h2" style="margin-left:10px;margin-top:20px"><?= $data['title'] ?></div>
                        <div class="h4" style="margin-left:10px"><?= $data['uraian']?></div>
                        <div class="d-flex justify-content-between align-items-center" style="margin-left:10px;margin-right:10px ">
                           <div>By <?= $data['updateby'] ?></div>
                           <div > <?= $data['updatetime'] ?></div>
                        </div>
                        
                     </div>
                  <?php
                     }
                  ?>
            </div>
            <div class="col py-3 mobile " style="min-width:300px;max-width:500px;background:#F2F2F2;" >
                  <?php
                     $limit= 4;
                     $query = mysqli_query($con, "SELECT * FROM kabar_desa  ORDER BY kabar_desa.id DESC LIMIT $limit  ");
                     $no = 3;
                     while($data = mysqli_fetch_array($query)){
                        $no++;
                  ?>
            
                     <div class="clearfix py-2" style="background:#D8D8D8;">
                        <img class="img2  pr-2" src="images/<?= $data['foto'] ?>" alt="Pineapple" style="margin-top:-8px;margin-bottom:-8px">
                        <p class="resjudul">
                        <div class="h5 " style="margin-left:10px"><?= $data['title'] ?></div>
                        <div class="h6" style="margin-left:10px;"><?= $data['uraian']?></div>
                        <div class="d-flex justify-content-between align-items-center" style="margin-left:10px;margin-right:10px">
                           <div>By <?= $data['updateby'] ?></div>
                           <div > <?= $data['updatetime'] ?></div>
                        </div>
                        <div class="h6 py-2" style="text-align:center;color:blue;">Baca Selengkapnya</div>
                     </div>
                    
                     <p style="clear:right"/>
               
                  <?php
                     }
                  ?>
            </div>
           
           
         </div>
         <div style="height:50px"></div>
         
         <div class=" row justify-content-center py-3 ">
            <div class="separator"></div>
         </div>
         
         <div style="height:50px"></div>
         <div class="text-success"><h3><u>Potret Desa</u></h3></div>
         <div style="height:30px"></div>
         
         <div class="row justify-content-center" id="box-search">
         <div class="col-3">
            <div class="thumbnail">
               <img src="" style="max-height:150px; max-width:200px">
                  <div class="textpotret text-center">
                     <div class="h6">Judul Potret desa</div>
                  </div>
            </div>
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


      
   
     