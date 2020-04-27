<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "SELECT * FROM layanan_publik WHERE id='$_GET[id]'");
   $data = mysqli_fetch_array($query);
?>

<h2 class="judul">Edit Layanan Publik</h2>
<form method="post" action="?hal=layananpublik_update" enctype="multipart/form-data">
   <input type="hidden" name="id" value="<?= $data['id'] ?>">
   
   <div class="form-group">
      <label for="file">File</label>   
      <div class="input">
         <input type="file" id="file" name="file">
         <object data="documents/<?= $data['file'] ?>" type="application/pdf"  width="100"></object>
      </div>
   </div>

   <div class="form-group">
      <label for="nama">Title</label>   
      <div class="input"><input style="width: 100%" id="title" name="title" value="<?= $data['title'] ?>"></div> 
   </div>

   <div class="form-group">
      <label for="nama">Nama File</label>   
      <div class="input"><input style="width: 100%" id="nama_surat" name="nama_surat" value="<?= $data['nama_surat'] ?>"></div> 
   </div>

   <div class="form-group">
      <input type="submit" value="Simpan" class="tombol simpan">
      <input type="reset" value="Batal" class="tombol reset">
   </div>
</form>