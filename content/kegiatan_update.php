<?php
   if(!defined('INDEX')) die("");

   $foto = $_FILES['foto']['name'];
   $lokasi = $_FILES['foto']['tmp_name'];
   $tipefile = $_FILES['foto']['type'];
   $ukuranfile = $_FILES['foto']['size'];

   $error = "";
   if($foto == ""){
      $query = mysqli_query($con, "UPDATE kegiatan SET
         title = '$_POST[title]',
         updateby = '$_POST[updateby]',
         updatetime = '$_POST[updatetime]',
         uraian = '$_POST[uraian]'
      WHERE id='$_POST[id]'");
   }else{
      if($tipefile != "image/jpeg" and $tipefile != "image/jpg" and $tipefile != "image/png"){
         $error = "Tipe file tidak didukung!";
      }elseif($ukuranfile >= 1000000){
         echo $ukuranfile;
         $error = "Ukuran file terlalu besar (lebih dari 1MB)!";
      }else{
         $query = mysqli_query($con, "SELECT * FROM kegiatan WHERE id='$_POST[id]'");
         $data = mysqli_fetch_array($query);
         if(file_exists("images/$data[foto]")) unlink("images/$data[foto]");

         move_uploaded_file($lokasi, "images/".$foto);
         $query = mysqli_query($con, "UPDATE kegiatan SET
            foto = '$foto',
            title = '$_POST[title]',
            updateby = '$_POST[updateby]',
            updatetime = '$_POST[updatetime]',
            uraian = '$_POST[uraian]'
         WHERE id='$_POST[id]'");
      }
   }

   if($error != ""){
      echo $error;
      echo "<meta http-equiv='refresh' content='2; url=?hal=kegiatan_edit&id=$_POST[id]'>";
   }elseif($query){
      echo "Data berhasil disimpan!";
      echo "<meta http-equiv='refresh' content='1; url=?hal=kegiatan'>";
   }else{
      echo "Tidak dapat menyimpan data!<br>";
      echo mysqli_error();
   }
?>