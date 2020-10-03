<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul">Tambah</h2>
<form method="post" action="?hal=layananpublik_insert" enctype="multipart/form-data">
  
  

   <!-- <div class="form-group row">
      <label for="file"  class="col-sm-2 col-form-label">File</label>   
      <div class="col-sm-10">
         <input type="file" class="form-control" id="file" name="file" >
      </div>
   </div> -->

   <div class="input-group input-group-sm mb-3">
      <div class="input-group-prepend" style="width:20%;">
      <label for="nama"  >File</label> 
      </div>
      <input type="file" class="form-control"  id="file" name="file">
   </div>

   <div class="input-group input-group-sm mb-3">
      <div class="input-group-prepend" style="width:20%;">
      <label for="nama"  >Nama File</label> 
      </div>
      <input type="text" class="form-control"  id="nama" name="nama">
   </div>

   <div class="input-group input-group-sm mb-3">
      <div class="input-group-prepend" style="width:20%;">
         <label for="title"  >Title</label> 
      </div>
      <input type="text" class="form-control"  id="title" name="title">
   </div>

   <!-- <div class="input-group input-group-sm mb-3">
      <div class="input-group-prepend" style="width:20%;">
         <label for="title"  >Icon</label> 
      </div>
      <select class="custom-select" id="title" name="title">
         <option selected>Choose...</option>
         <option value="1">One</option>
         <option value="2">Two</option>
         <option value="3">Three</option>
      </select>
      <div class="input-group-prepend">
         <a href="add_icon" class="input-group-text" id="inputGroup-sizing-sm">ADD</a>
      </div>
   </div> -->

   <div class="form-group row justify-content-center mt-4">
      <div class="col ">
         <input type="submit" value="Simpan" class="btn btn-outline-primary mb-3 form-control">
      </div>
      <div class="col ">
       <a type="reset"  href="?hal=layanan_publik" class="btn btn-outline-primary form-control">Batal</a>
      </div>
   </div>
</form>