<div class="row" id="box-search" style="margin-top:-30px;">
   <!-- <div class="thumbnail"> -->
   <img src="statics/layananbanner.jpg" class="imgs" style="width:100%;height:400px;z-index:-2">
         <div class="caption text-left text-white responsives" >
         <div class="text-white"><h2><u>Potensi Desa Bidang <?php echo $_GET['kategori'];?></u></h2></div>
          <div style="height:20px"></div>
            <div class="fonts">
               <p>Temukan berbagai informasi potensi desa bidang <?php echo $_GET['kategori'];?> di laman ini.</p>
            </div>
         </div>
      
      <!-- </div> -->
   <!-- </div> -->
</div>

<div class=" row  "  >
    <div class="col" >
        <div class="row justify-content-center  mx-2" id="box-search">
            <?php
                $query = mysqli_query($con, "SELECT * FROM potensi_desa where kategori ='$_GET[kategori]' ");
                while($data = mysqli_fetch_array($query)){
            ?>
                <div class="gallery" style="margin-right:1%;background:#E6E6E6;margin-top:1%;">
                     
                        <a target="_blank" href="images/<?= $data['image'];?>">
                           <img src="images/<?= $data['image'];?>" alt="Cinque Terre" width="600" height="400">
                        </a>
                    <div class="desc"><?= $data['title'];?></div>
                </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>

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