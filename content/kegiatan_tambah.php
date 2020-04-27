<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul">Tambah Pegawai</h2>
<form method="post" action="?hal=kegiatan_insert" enctype="multipart/form-data">
  
   <div class="form-group">
      <label for="foto">Foto</label>   
      <div class="input">
         <input type="file" id="foto" name="foto">
      </div>
   </div>

   <div class="form-group">
      <label for="nama">Title</label>   
      <div class="input">
         <input type="text" id="title" name="title">
      </div> 
   </div>

   <div class="form-group">
      <label for="nama">Update By</label>   
      <div class="input">
         <input type="text" id="updateby" name="updateby" >
      </div> 
   </div>

   <div class="form-group">
      <label for="nama">Update Time</label>   
      <div class="input">
         <input type="text" id="updatetime" name="updatetime" >
      </div> 
   </div>


   <div class="form-group">
      <label for="keterangan">Uraian Kegiatan</label>   
      <div class="input">
         <textarea style="width: 100%" rows="5" id="uraian" name="uraian"></textarea>
      </div>
   </div>

   <div class="form-group">
      <input type="submit" value="Simpan" class="tombol simpan">
      <input type="reset" value="Batal" class="tombol reset">
   </div>
</form>