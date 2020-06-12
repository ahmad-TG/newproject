<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul">Add Jabatan</h2>
<form method="post" action="?hal=struktur_insert" enctype="multipart/form-data">
   
   <div class="form-group row">
      <label for="foto"  class="col-sm-2 col-form-label">Foto</label>   
      <div class="col-sm-10">
         <input type="file" class="form-control" id="foto" name="foto" >
      </div>
   </div>

   <div class="form-group row">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" id="nama" name="nama" >
      </div>
   </div>

   <div class="form-group row">
      <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" id="jabatan" name="jabatan" >
      </div>
   </div>

   <div class="form-group row">
      <label for="Sort" class="col-sm-2 col-form-label">Sort</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" id="Sort" name="Sort" >
      </div>
   </div>

   <div class="form-group row justify-content-center mt-4">
      <div class="col ">
         <input type="submit" value="Simpan" class="btn btn-outline-primary mb-3 form-control">
      </div>
      <div class="col ">
       <a type="reset"  href="?hal=struktur" class="btn btn-outline-primary form-control">Batal</a>
      </div>
   </div>
</form>