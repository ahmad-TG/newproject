<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "SELECT * FROM user WHERE id_user='$_GET[id]'");
   $data = mysqli_fetch_array($query);
?>

<h2 class="judul">Edit User</h2>
<form method="post" action="?hal=user_update">
   <input type="hidden" name="id" value="<?= $data['id_user'] ?>">

   <div class="form-group row">
      <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $data['nama_lengkap'] ?>">
      </div>
   </div>

   <div class="form-group row">
      <label for="username" class="col-sm-2 col-form-label">Username</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" id="username" name="username" value="<?= $data['username'] ?>">
      </div>
   </div>

   <div class="form-group row">
      <label for="password" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" id="password" name="password" value="<?= $data['password'] ?>">
      </div>
   </div>
   
   <div class="form-group row justify-content-center mt-4">
      <div class="col ">
         <input type="submit" value="Simpan" class="btn btn-outline-primary mb-3 form-control">
      </div>
      <div class="col ">
       <a type="reset"  href="?hal=user" class="btn btn-outline-primary form-control">Batal</a>
      </div>
   </div>
</form>



  

  