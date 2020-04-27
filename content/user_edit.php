<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "SELECT * FROM user WHERE id_user='$_GET[id]'");
   $data = mysqli_fetch_array($query);
?>

<h2 class="judul">Edit User</h2>
<form method="post" action="?hal=user_update">
   <input type="hidden" name="id" value="<?= $data['id_user'] ?>">

   <div class="form-group">
      <label for="nama">Nama Lengkap</label>   
      <div class="input">
         <input type="text" id="nama_lengkap" name="nama_lengkap" value="<?= $data['nama_lengkap'] ?>">
      </div> 
   </div>

   <div class="form-group">
      <label for="nama">Username</label>   
      <div class="input">
         <input type="text" id="username" name="username" value="<?= $data['username'] ?>">
      </div> 
   </div>

   <div class="form-group">
      <label for="nama">Password</label>   
      <div class="input">
         <input type="password" id="password" name="password" value="<?= $data['password'] ?>">
      </div> 
   </div>
   <div class="form-group">
      <input type="submit" value="Simpan" class="tombol simpan">
      <input type="reset" value="Batal" class="tombol reset">
   </div>
</form>