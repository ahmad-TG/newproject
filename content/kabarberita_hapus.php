<?php
   if(!defined('INDEX')) die("");

   if(file_exists("images/$_GET[foto]")) unlink("images/$_GET[foto]");
   $query = mysqli_query($con, "DELETE FROM kabar_desa WHERE id='$_GET[id]'");

   if($query){
      echo "Data berhasil dihapus!";
      echo "<meta http-equiv='refresh' content='1; url=?hal=kabar_desa'>";
   }else{
      echo "Tidak dapat menyimpan data!<br>";
      echo mysqli_error();
   }
?>