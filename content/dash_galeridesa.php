      <div class="album py-5 bg-light">
       
        <div class="container" style="padding-top:70px">

          <div style="height:50px"></div>
          <div class="text-success"><h2><u>Galeri Desa</u></h2></div>
          <div style="height:30px"></div>

          <div class="row" style="padding-top:10px">
          <?php
            $query = mysqli_query($con, "SELECT * FROM galeri ORDER BY galeri.id DESC");
            while($data = mysqli_fetch_array($query)){
                          
         ?>
            <div class="col-md-4">
              <div class="card mb-3 box-shadow">
                <img class="card-img-top" src="images/<?= $data['foto'] ?>" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><?= $data['title'] ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
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