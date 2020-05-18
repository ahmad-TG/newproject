<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul">Tambah</h2>
<form method="post" action="?hal=galeri_insert" enctype="multipart/form-data">
   
   <div class="form-group">
      <label for="foto">Foto</label>   
      <div class="input"><input type="file" id="foto" name="foto"></div>
   </div>

   <div class="form-group">
      <label for="nama">Title</label>   
      <div class="input"><textarea style="width: 100%" rows="5" id="title" name="title"></textarea></div> 
   </div>

   <div class="form-group">
      <label for="nama">Update By</label>   
      <div class="input"><input style="width: 100%" rows="5" id="updateby" name="updateby"></input></div> 
   </div>

   <!-- <div class="form-group">
      <label for="nama">Update time</label>   
      <div class="input"><input style="width: 100%" rows="5" id="updatetime" name="updatetime"></input></div> 
   </div> -->

   <div class="form-group">
      <input type="submit" value="Simpan" class="tombol simpan">
      <input type="reset" value="Batal" class="tombol reset">
   </div>
</form>