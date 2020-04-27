<?php
   if(!defined('INDEX')) die("");

   $file = $_FILES['file']['name'];
   $lokasi = $_FILES['file']['tmp_name'];
   $tipefile = $_FILES['file']['type'];
   $ukuranfile = $_FILES['file']['size'];

   $error = "";
   if($file == ""){
      echo "<meta http-equiv='refresh' content='2; url=?hal=layananpublik_tambah'>";
   }else{
      // if($tipefile != "application/pdf" and $tipefile != "documents/docx"){
      //    $error = "Tipe file tidak didukung!";
      if($ukuranfile >= 5000000){
         echo $ukuranfile;
         $error = "Ukuran file terlalu besar (lebih dari 5MB)!";
      }else{
         move_uploaded_file($lokasi, "documents/".$file);
         $query = mysqli_query($con, "INSERT INTO layanan_publik SET
            file = '$file',
            title = '$_POST[title]',
            nama_surat ='$_POST[nama]'
         ");
      }
   }

   if($error != ""){
      echo $error;
      echo "<meta http-equiv='refresh' content='2; url=?hal=layananpublik_tambah'>";
   }elseif($query){
      echo "Data berhasil disimpan!";
      echo "<meta http-equiv='refresh' content='1; url=?hal=layanan_publik'>";
   }else{
      echo "Tidak dapat menyimpan data!<br>";
      echo mysqli_error();
   }
?>