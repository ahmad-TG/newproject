<?php
   if(!defined('INDEX')) die("");

   $cekData = mysqli_query($con, "SELECT * FROM user WHERE id_user='$_POST[id]'");
   $data = mysqli_fetch_array($cekData);
   $password=$_POST['password'];

  if($password !=  $data['password']){
         $passwordMD5=md5($_POST['password']);
         $query = mysqli_query($con, "UPDATE user SET nama_lengkap = '$_POST[nama_lengkap]',
         username = '$_POST[username]' , password= '$passwordMD5' WHERE id_user='$_POST[id]'");
  }else {
         $query = mysqli_query($con, "UPDATE user SET nama_lengkap = '$_POST[nama_lengkap]',
         username = '$_POST[username]' , password= '$password' WHERE id_user='$_POST[id]'");
  }

   if($query){
      echo "Data berhasil disimpan!";
      echo "<meta http-equiv='refresh' content='1; url=?hal=user'>";
   }else{
      echo "Tidak dapat menyimpan data!<br>";
      echo mysqli_error();
   }
?>