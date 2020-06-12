<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "SELECT * FROM struktur WHERE id='$_GET[id]'");
   $data = mysqli_fetch_array($query);
?>

<h2 class="judul">Edit Struktur</h2>
<form method="post" action="?hal=struktur_update" enctype="multipart/form-data">
   <input type="hidden" name="id" value="<?= $data['id'] ?>">
   <input type="hidden" name="sort" value="<?= $data['sort'] ?>">
   
   <!-- <div class="form-group">
      <label for="foto">Foto</label>   
      <div class="input">
         <input type="file" id="foto" name="foto">
         <img src="images/<?= $data['foto'] ?>" width="150">
      </div>
   </div> -->

   <div class="form-group row">
      <label for="foto"  class="col-sm-2 col-form-label">Foto</label>   
      <div class="col-sm-10">
         <input type="file" class="form-control" id="foto" name="foto" >
         <img src="images/<?= $data['foto'] ?>" class="my-2 rounded" width="150">
      </div>
   </div>

   <div class="form-group row">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama'] ?>">
      </div>
   </div>

   <div class="form-group row">
      <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $data['jabatan'] ?>" >
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