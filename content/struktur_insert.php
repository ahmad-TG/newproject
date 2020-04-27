<?php
   if(!defined('INDEX')) die("");

   $foto = $_FILES['foto']['name'];
   $lokasi = $_FILES['foto']['tmp_name'];
   $tipefile = $_FILES['foto']['type'];
   $ukuranfile = $_FILES['foto']['size'];

   $error = "";
   if($foto == ""){
      $query = mysqli_query($con, "INSERT INTO struktur SET
         nama = '$_POST[nama]',
         jabatan = '$_POST[jabatan]',
         sort = '$_POST[sort]'
      ");
   }else{
      if($tipefile != "image/jpeg" and $tipefile != "image/jpg" and $tipefile != "image/png"){
         $error = "Tipe file tidak didukung!";
      }elseif($ukuranfile >= 5000000){
         echo $ukuranfile;
         $error = "Ukuran file terlalu besar (lebih dari 5MB)!";
      }else{
         move_uploaded_file($lokasi, "images/".$foto);
         $query = mysqli_query($con, "INSERT INTO struktur SET
            foto = '$foto',
            nama = '$_POST[nama]',
            jabatan = '$_POST[jabatan]',
            sort = '$_POST[sort]'
         ");
      }
   }

   if($error != ""){
      echo $error;
      echo "<meta http-equiv='refresh' content='2; url=?hal=struktur_tambah'>";
   }elseif($query){
      echo "Data berhasil disimpan!";
      echo "<meta http-equiv='refresh' content='1; url=?hal=struktur'>";
   }else{
      echo "Tidak dapat menyimpan data!<br>";
      echo mysqli_error();
   }
?>