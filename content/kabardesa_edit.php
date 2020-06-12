<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "SELECT * FROM kabar_desa WHERE id='$_GET[id]'");
   $data = mysqli_fetch_array($query);
?>
<h2 class="judul">Edit Kabar Desa</h2>
<form method="post" action="?hal=kabardesa_update" enctype="multipart/form-data">
   <input type="hidden" name="id" value="<?= $data['id'] ?>">
   <div class="form-group">
      <label for="foto">Foto</label>   
      <div class="input">
         <input type="file" id="foto" name="foto" value="<?= $data['foto'] ?>">
         <img src="images/<?= $data['foto'] ?>" width="150">
      </div>
     
   </div>

   <div class="form-group">
      <label for="nama">Title</label>   
      <div class="input"><input style="width: 100%"  id="title" name="title" value="<?= $data['title'] ?>"></input></div> 
   </div>

   <div class="form-group">
      <label for="nama">Update By</label>   
      <div class="input"><input style="width: 100%"  id="updateby" name="updateby" value="<?= $data['updateby'] ?>"></div> 
   </div>
<!-- 
   <div class="form-group">
      <label for="nama">Update Date</label>   
      <div class="input"><input style="width: 100%"  id="date" name="date"></div> 
   </div> -->

   <div class="form-group">
      <label for="nama">Uraian</label>   
      <div class="input"><textarea style="width: 100%"  id="uraian" name="uraian"><?= $data['uraian'] ?></textarea></div> 
   </div>

   <div class="form-group">
      <input type="submit" value="Simpan" class="tombol simpan">
      <input type="reset" value="Batal" class="tombol reset">
   </div>
</form>