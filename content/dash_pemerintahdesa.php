<?php
   if(!defined('INDEX')) die("");
?>

<div style="margin-left:50px; margin-top:100px">
   <div class="text-success"><h3><u>Pemerintahan Kudukeras</u></h3></div>
   <div style="height:20px"></div>
   <div style="margin-left:20px">
         <div class="row" style="padding-top:20px">
          <?php
            $query = mysqli_query($con, "SELECT * FROM galeri ORDER BY galeri.id DESC");
            while($data = mysqli_fetch_array($query)){
                          
         ?>
            <div class="col-md-4">
              <div class="card mb-3 box-shadow"  style="background-color:#04B404">
                <img class="card-img-top"
                 src="images/<?= $data['foto'] ?>"
                  alt="Card image cap"
                  style="padding-left:3px;padding-right:5px;padding-top:3px">
                <div class="card-body" style="background-color:#04B404">
                <div class="d-flex justify-content-between align-items-center">
                  <p class="card-text  text-white"><u><?= $data['title'] ?></u></p>
                </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group ">
                      Kepala Desa
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
               }
            ?>
      </div>
   </div>
</div>