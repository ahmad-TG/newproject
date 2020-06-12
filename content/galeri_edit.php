<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "SELECT * FROM galeri WHERE id='$_GET[id]'");
   $data = mysqli_fetch_array($query);
?>

<h2 class="judul">Edit Galeri</h2>
<form method="post" action="?hal=galeri_update" enctype="multipart/form-data">
   <input type="hidden" name="id" value="<?= $data['id'] ?>">
   
    
   <div class="form-group row">
      <label for="foto"  class="col-sm-2 col-form-label">Foto</label>   
      <div class="col-sm-10">
         <input type="file" class="form-control" id="foto" name="foto" >
         <img src="images/<?= $data['foto'] ?>" class="mt-3 mb-2" width="150">
      </div>
   </div>

   <div class="form-group row">
      <label for="title"  class="col-sm-2 col-form-label">Title</label>   
      <div class="col-sm-10">
         <input type="text" class="form-control" id="title" name="title" value="<?= $data['title'] ?>">
      </div>
   </div>

   <div class="form-group row">
      <label for="updateby"  class="col-sm-2 col-form-label">Update By</label>   
      <div class="col-sm-10">
         <input type="text" class="form-control" id="updateby" name="updateby" value="<?= $data['updateby'] ?>">
      </div>
   </div>

   <div class="form-group row justify-content-center mt-4">
      <div class="col ">
         <input type="submit" value="Simpan" class="btn btn-outline-primary mb-3 form-control">
      </div>
      <div class="col ">
         <a type="reset"  href="?hal=galeri" class="btn btn-outline-primary form-control">Batal</a>
      </div>
   </div>
</form>