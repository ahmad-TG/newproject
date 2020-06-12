<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "SELECT * FROM layanan_publik WHERE id='$_GET[id]'");
   $data = mysqli_fetch_array($query);
?>

<h2 class="judul">Edit Layanan Publik</h2>
<form method="post" action="?hal=layananpublik_update" enctype="multipart/form-data">
   <input type="hidden" name="id" value="<?= $data['id'] ?>">
   
   <div class="form-group row">
      <label for="file"  class="col-sm-2 col-form-label">File</label>   
      <div class="col-sm-10">
         <input type="file" class="form-control" id="file" name="file" >
         <object data="documents/<?= $data['file'] ?>" class="my-2" type="application/pdf"  width="100"></object>
      </div>
   </div>

   <div class="form-group row">
      <label for="nama_surat"  class="col-sm-2 col-form-label">Nama File</label>   
      <div class="col-sm-10">
         <input type="text" class="form-control" id="nama" name="nama_surat" value="<?= $data['nama_surat'] ?>" >
      </div>
   </div>

   <div class="form-group row">
      <label for="title"  class="col-sm-2 col-form-label">title</label>   
      <div class="col-sm-10">
         <input type="text" class="form-control" id="title" name="title" value="<?= $data['title'] ?>" >
      </div>
   </div>

   <div class="form-group row justify-content-center mt-4">
      <div class="col ">
         <input type="submit" value="Simpan" class="btn btn-outline-primary mb-3 form-control">
      </div>
      <div class="col ">
       <a type="reset"  href="?hal=layanan_publik" class="btn btn-outline-primary form-control">Batal</a>
      </div>
   </div>
</form>