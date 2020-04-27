<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul">Tambah</h2>
<form method="post" action="?hal=layananpublik_insert" enctype="multipart/form-data">
   
   <div class="form-group">
      <label for="foto">File</label>   
      <div class="input"><input type="file" id="file" name="file"></div>
   </div>

   <div class="form-group">
      <label for="nama">Nama File</label>   
      <div class="input"><input type="text" style="width: 100%"  id="nama" name="nama"></div> 
   </div>

   <div class="form-group">
      <label for="nama">Title</label>   
      <div class="input"><textarea style="width: 100%" rows="5" id="title" name="title"></textarea></div> 
   </div>

   <div class="form-group">
      <input type="submit" value="Simpan" class="tombol simpan">
      <input type="reset" value="Batal" class="tombol reset">
   </div>
</form>