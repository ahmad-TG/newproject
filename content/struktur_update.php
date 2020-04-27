<?php
   if(!defined('INDEX')) die("");

   $foto = $_FILES['foto']['name'];
   $lokasi = $_FILES['foto']['tmp_name'];
   $tipefile = $_FILES['foto']['type'];
   $ukuranfile = $_FILES['foto']['size'];

   $error = "";
   if($foto == ""){
      $query = mysqli_query($con, "UPDATE struktur SET
          nama = '$_POST[nama]',
         jabatan = '$_POST[jabatan]',
         sort = '$_POST[sort]' 
         WHERE id='$_POST[id]'");
   }else{
      if($tipefile != "image/jpeg" and $tipefile != "image/jpg" and $tipefile != "image/png"){
         $error = "Tipe file tidak didukung!";
      }elseif($ukuranfile >= 5000000){
         echo $ukuranfile;
         $error = "Ukuran file terlalu besar (lebih dari 5MB)!";
      }else{
         $query = mysqli_query($con, "SELECT * FROM struktur WHERE id='$_POST[id]'");
         $data = mysqli_fetch_array($query);
         $sort=$data['sort'];
         if(file_exists("images/$data[foto]")) unlink("images/$data[foto]");

         move_uploaded_file($lokasi, "images/".$foto);
         $query = mysqli_query($con, "UPDATE struktur SET
            foto = '$foto',
            nama = '$_POST[nama]',
            jabatan = '$_POST[jabatan]',
            sort = '$_POST[sort]'
         WHERE id='$_POST[id]'");
      }
   }

   if($error != ""){
      echo $error;
      echo "<meta http-equiv='refresh' content='2; url=?hal=struktur_edit&id=$_POST[id]'>";
   }elseif($query){
      echo "Data berhasil disimpan!";
      echo "<meta http-equiv='refresh' content='1; url=?hal=struktur'>";
   }else{
      echo "Tidak dapat menyimpan data!<br>";
      echo mysqli_error();
   }
?>