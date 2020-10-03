<?php
   if(!defined('INDEX')) die("");
  
   $query = mysqli_query($con, "UPDATE profile SET
      whatsapp = '$_POST[whatsapp]'
   WHERE id='1'");

   if($query){
      echo "Data berhasil disimpan!";
      echo "<meta http-equiv='refresh' content='1; url=?hal=profile'>";
   }else{
      echo "Tidak dapat menyimpan data!<br>";
      echo mysqli_error();
   }
?>