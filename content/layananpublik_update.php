<?php
   if(!defined('INDEX')) die("");

   $file = $_FILES['file']['name'];
   $title=$_POST['title'];
   $lokasi = $_FILES['file']['tmp_name'];
   $tipefile = $_FILES['file']['type'];
   $ukuranfile = $_FILES['file']['size'];

   $error = "";
   if($file == ""){
      $query = mysqli_query($con, "UPDATE layanan_publik SET
            title = '$title',
            nama_surat = '$_POST[nama_surat]'
            WHERE id='$_POST[id]'");
   }else{
      if($tipefile != "application/pdf"){
         $error = "Tipe file tidak didukung!";
      }elseif($ukuranfile >= 5000000){
         echo $ukuranfile;
         $error = "Ukuran file terlalu besar (lebih dari 5MB)!";
      }else{
         $query = mysqli_query($con, "SELECT * FROM layanan_publik WHERE id='$_POST[id]'");
         $data = mysqli_fetch_array($query);
         if(file_exists("documents/$data[file]")) unlink("documents/$data[file]");

         move_uploaded_file($lokasi, "documents/".$file);
         $query = mysqli_query($con, "UPDATE layanan_publik SET
            file = '$file',
            title = '$title',
            nama_surat = '$_POST[nama_surat]'
            WHERE id='$_POST[id]'");
      }
   }

   if($error != ""){
      echo $error;
      echo "<meta http-equiv='refresh' content='2; url=?hal=layananpublik_edit&id=$_POST[id]'>";
   }elseif($query){
      echo "Data berhasil disimpan!";
      echo "<meta http-equiv='refresh' content='1; url=?hal=layanan_publik'>";
   }else{
      echo "Tidak dapat menyimpan data!<br>";
      echo mysqli_error();
   }
?>