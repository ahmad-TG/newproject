      <div class="album py-5 ">
       
        <div class="container" style="margin-top:-20px">

          <!-- <div style="height:20px"></div> -->
          <div class="text-success"><h2><u>Galeri Desa</u></h2></div>
          <div style="height:20px"></div>

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
        </div>
      </div>