<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul">Tambah</h2>
<form method="post" action="?hal=kabardesa_insert" enctype="multipart/form-data">
   
   <div class="form-group">
      <label for="foto">Foto</label>   
      <div class="input"><input type="file" id="foto" name="foto"></div>
   </div>

   <div class="form-group">
      <label for="nama">Title</label>   
      <div class="input"><textarea style="width: 100%"  id="title" name="title"></textarea></div> 
   </div>

   <div class="form-group">
      <label for="nama">Update By</label>   
      <div class="input"><input style="width: 100%"  id="updateby" name="updateby"></div> 
   </div>

   <div class="form-group">
      <label for="nama">Update Date</label>   
      <div class="input"><input style="width: 100%"  id="date" name="date"></div> 
   </div>

   <div class="form-group">
      <label for="nama">Uraian</label>   
      <div class="input"><input style="width: 100%"  id="uraian" name="uraian"></div> 
   </div>

   <div class="form-group">
      <input type="submit" value="Simpan" class="tombol simpan">
      <input type="reset" value="Batal" class="tombol reset">
   </div>
</form>