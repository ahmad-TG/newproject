<?php
   if(!defined('INDEX')) die("");

   if(file_exists("documents/$_GET[file]")) unlink("documents/$_GET[file]");
   $query = mysqli_query($con, "DELETE FROM layanan_publik WHERE id='$_GET[id]'");

   if($query){
      echo "Data berhasil dihapus!";
      echo "<meta http-equiv='refresh' content='1; url=?hal=layanan_publik'>";
   }else{
      echo "Tidak dapat menyimpan data!<br>";
      echo mysqli_error();
   }
?>