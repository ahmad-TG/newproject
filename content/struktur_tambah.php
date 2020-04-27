<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul">Add Jabatan</h2>
<form method="post" action="?hal=struktur_insert" enctype="multipart/form-data">
   
   <div class="form-group">
      <label for="foto">Foto</label>   
      <div class="input"><input type="file" id="foto" name="foto"></div>
   </div>

   <div class="form-group">
      <label for="nama">Nama</label>   
      <div class="input"><input type="text" id="nama" name="nama"></div> 
   </div>

   <div class="form-group">
      <label for="nama">Jabatan</label>   
      <div class="input"><input type="text" id="jabatan" name="jabatan"></div> 
   </div>

   <div class="form-group">
      <label for="nama">Sort</label>   
      <div class="input"><input type="text" id="sort" name="sort"></div> 
   </div>

   <div class="form-group">
      <input type="submit" value="Simpan" class="tombol simpan">
      <input type="reset" value="Batal" class="tombol reset">
   </div>
</form>