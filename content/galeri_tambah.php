<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul">Tambah</h2>
<form method="post" action="?hal=galeri_insert" enctype="multipart/form-data">
   
   <div class="form-group row">
      <label for="foto"  class="col-sm-2 col-form-label">Foto</label>   
      <div class="col-sm-10">
         <input type="file" class="form-control" id="foto" name="foto" >
      </div>
   </div>

   <div class="form-group row">
      <label for="title"  class="col-sm-2 col-form-label">Title</label>   
      <div class="col-sm-10">
         <input type="text" class="form-control" id="title" name="title" >
      </div>
   </div>

   <div class="form-group row">
      <label for="updateby"  class="col-sm-2 col-form-label">Update By</label>   
      <div class="col-sm-10">
         <input type="text" class="form-control" id="updateby" name="updateby" >
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