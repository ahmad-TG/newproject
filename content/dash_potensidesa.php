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
               <p>Temukan berbagai informasi mengenai semua potensi desa di laman ini.</p>
            </div>
         </div>
      
      <!-- </div> -->
   <!-- </div> -->
</div>

<!-- <div class="album py-5 ">
<div class="row" style="padding-top:20px">
          <?php
            $query = mysqli_query($con, "SELECT * FROM galeri ORDER BY galeri.id DESC");
            while($data = mysqli_fetch_array($query)){
                          
         ?>
            <div class="col-md-4" >
              <div class="card mb-3 box-shadow"  style="background-color:#1EAB41"  >
                <img class="card-img-top"
                 src="images/<?= $data['foto'] ?>" width="300px" height="400px"
                  alt="Card image cap"
                  style="padding-left:3px;padding-right:5px;padding-top:3px">
                <div class="card-body" style="background-color:#1EAB41">
                <div class="d-flex justify-content-between align-items-center">
                  <p class="card-text text-white"><?= $data['title'] ?></p>
                  <small  style="color:white ;font-size:12px">By <?= $data['updateby'] ?></small>
                </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group " style="margin-right:10px">
                      <button type="button" class="btn btn-sm text-white btn-outline-dark">View</button>
                      <button type="button" class="btn btn-sm text-white btn-outline-dark">Edit</button>
                    </div>
                    <small  style="color:white;font-size:12px "><?= $data['updatetime'] ?></small>
                  </div>
                </div>
              </div>
            </div>
            <?php
               }
            ?>
          </div>
   </div> -->

      <div class=" row  mt-3"  >
         <div class="col" >
            <div class="row justify-content-center  mx-2" id="box-search">
               <?php
                  $ids = mysqli_query($con, "SELECT kategori FROM potensi_desa GROUP BY kategori ");
                  while($datas = mysqli_fetch_array($ids)){
                     $kategory=array($datas['kategori']);
                     for ($x = 0; $x < count($kategory); $x++) {
                        $query = mysqli_query($con, "SELECT * FROM potensi_desa where kategori ='$kategory[$x]' limit 1 ");
                        while($data = mysqli_fetch_array($query)){

               ?>
                  <div class="gallery" style="margin-right:1%;background:#E6E6E6;margin-top:1%;">
                     <a href="?hal=dash_potensi_bykategori&kategori=<?= $data['kategori'] ?>">
                        <img  src="images/<?= $data['image'] ?>" alt="Cinque Terre" width="600" height="400">
                     </a>
                     <div class="desc"><?= $data['kategori'] ?></div>
                  </div>
               <?php
                        }
                     }
                  }
               ?>
            </div>
         </div>
    </div>

   
      

   <div style="margin-bottom:5%;"></div>


 <style>
 div.gallery {
  margin: 5px;
  border: 1px solid #777;
  float: left;
  width: 200px;
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


      
   
     