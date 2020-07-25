
      <div class="text-success mx-lg-5 mx-3">
         <h2><u>Pemerintah Desa Kudukeras</u></h2>
      </div>
      <div class=" row  mt-3"  >
         <div class="col" >
               <div class="row justify-content-center " id="box-search">
                     <?php
                        $ids = mysqli_query($con, "SELECT * FROM struktur ORDER BY struktur.sort ");
                        while($data = mysqli_fetch_array($ids)){
                     ?>
                  <div class="gallery  potret-desa justify-content-center" style="margin-right:1%;background:#E6E6E6;margin-top:1%;">
                     <a target="_blank" href="images/<?= $data['foto'] ?>">
                        <img src="images/<?= $data['foto'] ?>" alt="Cinque Terre"   >
                     </a>
                     <div class="desc"><?= $data['nama'];?></div>
                     <div style="font-size:16px;text-align:center"><?= $data['jabatan'];?></div>
                  </div>
               <?php
                  }
               ?> 
            </div>
         </div>
      </div>
    

      <style>
      .img-str{
         width:100%;
         height:60%;
      }
      .potret-desa{
       width:20%;
        
      } 
 div.gallery {
  margin: 5px;
  border: 1px solid #777;
  float: left;
  width: 15%;
}

div.gallery:hover {
  border: 1px solid black;
}

div.gallery img {
  width: 100%;
  height: 70%;
}

div.desc {
   font-size:90%;
   padding-top: 15px;
   padding-left: 15px;
   padding-right: 15px;
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
   div.gallery {
  
   width: 40%;
   }
   div.gallery img {
  width: 100%;
  height: 60%;
}

div.desc {
   font-size:100%;
   padding-top: 2px;
   padding-left: 2px;
   padding-right: 2px;
  
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
         @media screen and (min-width: 481px) {
           
            div.gallery {
  
  width: 40%;
  }
       
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
         @media screen and (min-width: 960px){
            
            div.gallery {
            width: 20%;
            }
         }
</style>