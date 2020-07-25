
<div>
   <div class="row" id="box-search">
      <!-- <div class="thumbnail justify-content-between"> -->
      <?php
      $id=1;
      $lokasi="statics/";
      $type='.jpg';
      $query = mysqli_query($con, "SELECT * FROM dashboards WHERE id=$id");
      $data = mysqli_fetch_array($query);
      ?>
    
         <!-- <img src="statics/banner.jpg" class="banner" style="width:100%;margin-top:-30px;"> -->
         <img src="<?= $lokasi.$data['image'].$type;?>" class="banner" style="width:100%;margin-top:-30px;" >
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
      <div class="col" >
         <div class="row justify-content-center" >
            <div class="col-8 py-3" max-width="200px">
               <div class="text-success subkabar"><h3><u>Kabar Berita</u></h3></div>
               <div style="height:30px"></div>
            </div>
         </div>
       
         <div class="row justify-content-center" >
            <div class="col-sm-4 py-3 bg-white kabarberitautama" style="margin-right:5px" >
                  <?php
                     $query = mysqli_query($con, "SELECT  * FROM kabar_desa  ORDER BY kabar_desa.id DESC LIMIT 1 ");
                     $no = 0;
                     while($data = mysqli_fetch_array($query)){
                        $no++;
                  ?>
                  <div class="clearfix py-2 " max-width="645px"  >
                        <img class=" " src="images/<?= $data['foto'] ?>" alt="Pineapple" width="99%" style="border-radius: 8px;margin-top:-8px;margin-bottom:-8px;margin-left:2px;margin-right:2px;">
                        <div class="mx-auto bg-white" style="width:90%;margin-top:-60px;position:sticky; border-radius: 8px">
                           
                         <a href="?hal=fullberita&id=<?= $data['id'] ?>" >
                               <h3 class="mt-0" style="text-align:justify; padding-left:10px;padding-right:10px;"><?= $data['title'] ?></h3>
                         </a>
                           <div class="h5" style="margin-left:10px;max-width:600px;margin-top:20px;"><?= substr ($data['uraian'],0, 200)?></div>
                           <div class="d-flex justify-content-between align-items-center" style="margin-left:10px;margin-right:10px;margin-top:20px; ">
                              <div>By <?= $data['updateby'] ?></div>
                              <div > <?= $data['updatetime'] ?></div>
                           </div>
                           <!-- <a href="?hal=fullberita&id=<?= $data['id'] ?>" class="stretched-link">Baca Selengkapnya...</a> -->
                        </div>
                     </div>
                  <?php
                     }
                  ?>
            </div>
            <div class="col pb-1 mobile " style="min-width:300px;max-width:500px;" >
                  <?php
                    
                     $limit= 3;
                     $query = mysqli_query($con, "SELECT * FROM kabar_desa  ORDER BY kabar_desa.id DESC LIMIT $limit  ");
                     $no = 3;
                     while($data = mysqli_fetch_array($query)){
                        $no++;
                  ?>
            
                     <div class="row no-gutters bg-white  position-relative">
                        <div class="col-md-6 mb-md-0 p-md-3">
                           <img src="images/<?= $data['foto'] ?>" width="100%" class="img-mb" style="border-radius: 8px;" alt="...">
                        </div>
                        <div class="col-md-6 mx-auto position-sticky mb p-4 pl-md-0" style="border-radius: 8px">
                         <a href="?hal=fullberita&id=<?= $data['id'] ?>" >
                               <h5 class="mt-0 mb-uraian" ><?= $data['title'] ?></h5>
                         </a>
                          
                           <p><?= substr($data['uraian'],0, 50); ?>...</p>
                           <div class="d-flex justify-content-between align-items-center" style="font-size:10px;margin-bottom:5px">
                              <div>By <?= $data['updateby'] ?></div>
                              <div > <?= $data['updatetime'] ?></div>
                           </div>
                           <!-- <a href="?hal=fullberita&id=<?= $data['id'] ?>" class="stretched-link">Baca Selengkapnya...</a> -->
                        </div>
                     </div>
                    
                     <p style="clear:right"/>
               
                  <?php
                     }
                  ?>
                  <!-- <a href="?hal=fullberita&id=<?= $data['id'] ?>"  >Baca Selengkapnya...</a> -->
                  <div class="h4 py-2"  style="text-align:center;cursor: pointer;" > 
                  <a href="?hal=allberita" > <u>Berita Lainnya</u></a>
                 </div>
            </div>
           
           
         </div>
         
         <!-- <div style="height:50px"></div> -->
         
         <div class=" row justify-content-center mt-5 py-2 ">
            <div class="separator"></div>
         </div>
         <div class=" row  "  >
            <div class="col" >
               <div class="row justify-content-center" >
                  <div class="col-8 py-3" max-width="200px">
                     <div class="text-success mb-2"><h3><u>Potret Desa</u></h3></div>
                     <!-- <div style="height:30px"></div> -->
                  </div>
               </div>
               <div class="row justify-content-center  mx-2" id="box-search">
           
                     <div class="gallery" style="margin-right:1%;background:#E6E6E6;margin-top:1%;">
                        <a target="_blank" href="images/1.png">
                           <img src="images/2.png" alt="Cinque Terre" width="600" height="400">
                        </a>
                        <div class="desc">Judul Potret desa</div>
                     </div>

                     
                     <div class="gallery" style="margin-right:1%;background:#E6E6E6;margin-top:1%;">
                        <a target="_blank" href="images/1.png">
                           <img src="images/2.png" alt="Cinque Terre" width="600" height="400">
                        </a>
                        <div class="desc">Judul Potret desa</div>
                     </div>

                     
                     <div class="gallery" style="margin-right:1%;background:#E6E6E6;margin-top:1%;">
                        <a target="_blank" href="images/1.png">
                           <img src="images/2.png" alt="Cinque Terre" width="600" height="400">
                        </a>
                        <div class="desc">Judul Potret desa</div>
                     </div>

                     <div class="gallery" style="margin-right:1%;background:#E6E6E6;margin-top:1%;">
                        <a target="_blank" href="images/1.png">
                           <img src="images/2.png" alt="Cinque Terre" width="600" height="400">
                        </a>
                        <div class="desc">Judul Potret desa</div>
                     </div>

                     <div class="gallery" style="margin-right:1%;background:#E6E6E6;margin-top:1%;">
                        <a target="_blank" href="images/1.png">
                           <img src="images/2.png" alt="Cinque Terre" width="600" height="400">
                        </a>
                        <div class="desc">Judul Potret desa</div>
                     </div>

                     
               </div>

            </div>
         
        
   </div>

   <div class="row">
    <div class="col-auto offset-9  rows fixed-bottom " style="margin-bottom:3%;cursor: pointer;" href="#" style="float:right" data-toggle="modal" data-target="#exampleModal"  role="button">
      <img src="statics/live.png" alt="customer" class="width-img " min-width="200px" >
    </div>
  </div>
  
   <!-- Modal -->
   <?php $no=+6285884110485;?>
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Chat Via</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
               <a class="  btn-chat " href="https://api.whatsapp.com/send?phone=<?= $no ?>&text=Hallo Admin"  role="button" >
                  <button type="button" class="btn btn-outline-primary  form-control">Whatsap</button>
               </a><p class="my-3">
               <a class="  btn-chat " href="sms:<?= $no ?>?body=Hallo Admin"  role="button">
                  <button type="button" class="btn form-control btn-outline-primary"> SMS </button>
               </a>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>

   <div style="margin-bottom:5%;"></div>


 <style>
 div.gallery {
  margin: 5px;
  border: 1px solid #777;
  float: left;
  width: 250px;
}

div.gallery:hover {
  border: 1px solid black;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
 .btn-chat{
   margin-bottom:30px
 }
 .width-img{
    width:100px;
    margin-left:60%
 }
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
   top: 0%;
   left: 0%;
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
            .rows{
               width:40%;
            }
            .width-img{
               width:100px;
               margin-left:-45%;
            }
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
         @media screen and (min-width: 481px) and (max-width:650px) {
           
           .kabarberitautama{
                 display:none;
              }
              .width-img{
               width:120px;
               margin-left:-25%;
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


      
   
     