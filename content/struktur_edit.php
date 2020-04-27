<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "SELECT * FROM struktur WHERE id='$_GET[id]'");
   $data = mysqli_fetch_array($query);
?>

<h2 class="judul">Edit Struktur</h2>
<form method="post" action="?hal=struktur_update" enctype="multipart/form-data">
   <input type="hidden" name="id" value="<?= $data['id'] ?>">
   <input type="hidden" name="sort" value="<?= $data['sort'] ?>">
   
   <div class="form-group">
      <label for="foto">Foto</label>   
      <div class="input">
         <input type="file" id="foto" name="foto">
         <img src="images/<?= $data['foto'] ?>" width="150">
      </div>
   </div>

   <div class="form-group">
      <label for="nama">Nama</label>   
      <div class="input">
         <input type="text" id="nama" name="nama" value="<?= $data['nama'] ?>">
      </div> 
   </div>

   <div class="form-group">
      <label for="nama">Jabatan</label>   
      <div class="input">
         <input type="text" id="jabatan" name="jabatan" value="<?= $data['jabatan'] ?>">
      </div> 
   </div>

   <div class="form-group">
      <input type="submit" value="Simpan" class="tombol simpan">
      <input type="reset" value="Batal" class="tombol reset">
   </div>
</form>