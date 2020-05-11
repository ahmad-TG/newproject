
<div>
   <div class="row" id="box-search">
      <div class="thumbnail justify-content-between">
         <img src="statics/banner.jpg" style="height:500px; width:100%;">
      </div>
   </div>

  <div style="height:50px"></div>

   <div class=" text-center mt-lg-5 font text-success">
      #MenujuDesaMaju
   </div>

   <div class="text-center titles my-lg-4 " >
      Melayani masyarakat secara cepat dan transparan adalah komitmen kami dalam<br>
      memajukan Desa Mandong. Maka website publikasi dan sistem informasi desa ini kami<br>
      hadirkan untuk mewujudkan Desa Maju & Mandiri.
   </div>
      

   <div class="row py-lg-5 justify-content-center ">
         
      <div class="col-auto ">
         <div class="card cards  justify-content-center text-center" style="width: 18rem;">
            <img src="statics/menuprofil.png" class=" card-img-top" alt="...">
            <div class="card-body">
               <h4>Profile</h4> 
               <p class="card-text ">Some quick example text to build on the card title and make up
                  the bulk of the card's content.</p>
            </div>
         </div>
      </div>

      <div class="col-auto ">
         <div class="card cards  justify-content-center text-center" style="width: 18rem;">
            <img src="statics/kabardesa.png" class=" card-img-top" alt="...">
            <div class="card-body">
               <h4>Layanan Publik</h4> 
               <p class="card-text ">Some quick example text to build on the card title and make up
                  the bulk of the card's content.</p>
            </div>
         </div>
      </div>

      <div class="col-auto ">
         <div class="card cards  justify-content-center text-center" style="width: 18rem;">
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

   <div class=" row justify-content-center py-3 ">
      <div class="col-9">
         <div class="text-success"><h3><u>Kabar Berita</u></h3></div>
         <div style="height:30px"></div>
         <div class="row" >
            <div class="col-7 ">
            <?php
               $query = mysqli_query($con, "SELECT  * FROM kabar_desa  ORDER BY kabar_desa.id DESC LIMIT 1 ");
               $no = 0;
               while($data = mysqli_fetch_array($query)){
                  $no++;
            ?>
               <div class="row" id="box-search">
                  <div class="thumbnail bg-success">
                     <img src="images/<?= $data['foto'] ?>" width="520px" height="520px" style="padding:3px">
                     <div class="caption text-primary text-left">
                        <div class="h6"><?= $data['updateby'] ?></div>
                        <div style="height:10px"></div> 
                        <div class="h4"><?= $data['title'] ?></div>
                        <div class="h5"><?= $data['uraian'] ?></div>
                     </div>
                  </div>
               </div>
               <?php
                  }
               ?>
            </div>

            <div class="col-5" >
            <?php
                     $limit= 4;
                     $query = mysqli_query($con, "SELECT * FROM kabar_desa  ORDER BY kabar_desa.id DESC LIMIT $limit  ");
                     $no = 3;
                     while($data = mysqli_fetch_array($query)){
                        $no++;
                  ?>
            
               <div class="row  row-cols-2" >
                 
                     <div class="col "  style="padding-bottom:10px">
                        <img src="images/<?= $data['foto'] ?>" width="200px" height="150px" style="padding:3px;" >
                     </div>

                     <div class="col ">
                        <div class="h5"><?= $data['title'] ?></div>
                        <div class="h6"><?= $data['uraian']?></div>
                        <div class="d-flex justify-content-between align-items-center">
                           <div class="h7">By <?= $data['updateby'] ?></div>
                           <div class="h7"> <?= $data['updatetime'] ?></div>
                        </div>
                     </div>
                 
               
               </div>
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
</style>     


      
   
     