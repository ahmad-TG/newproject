<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "SELECT * FROM galeri WHERE id='$_GET[id]'");
   $data = mysqli_fetch_array($query);
?>

<h2 class="judul">Edit Galeri</h2>
<form method="post" action="?hal=galeri_update" enctype="multipart/form-data">
   <input type="hidden" name="id" value="<?= $data['id'] ?>">
   
   <div class="form-group">
      <label for="foto">Foto</label>   
      <div class="input">
         <input type="file" id="foto" name="foto">
         <img src="images/<?= $data['foto'] ?>" width="150">
      </div>
   </div>

   <div class="form-group">
      <label for="nama">Title</label>   
      <div class="input"><input style="width: 100%" rows="5" id="title" name="title" value="<?= $data['title'] ?>"></div> 
   </div>

   <div class="form-group">
      <label for="nama">Title</label>   
      <div class="input"><input style="width: 100%" rows="5" id="updateby" name="updateby" value="<?= $data['updateby'] ?>"></div> 
   </div>

   <div class="form-group">
      <label for="nama">Title</label>   
      <div class="input"><input style="width: 100%" rows="5" id="updatetime" name="updatetime" value="<?= $data['updatetime'] ?>"></div> 
   </div>

   <div class="form-group">
      <input type="submit" value="Simpan" class="tombol simpan">
      <input type="reset" value="Batal" class="tombol reset">
   </div>
</form>