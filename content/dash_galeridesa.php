      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
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