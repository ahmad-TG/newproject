<?php
   if(!defined('INDEX')) die("");

   $foto = $_FILES['foto']['name'];
   // $foto=$filess.time();
   $lokasi = $_FILES['foto']['tmp_name'];
   $tipefile = $_FILES['foto']['type'];
   $ukuranfile = $_FILES['foto']['size'];

   function compress($source, $destination, $quality)
   {
       $info = getimagesize($source);
       if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($source);
       elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source);
       elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($source);
       imagejpeg($image, $destination, $quality);
       return $destination;
   }

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
      }else{
         $query = mysqli_query($con, "SELECT * FROM struktur WHERE id='$_POST[id]'");
         $data = mysqli_fetch_array($query);
         $sort=$data['sort'];
         if(file_exists("images/$data[foto]")) unlink("images/$data[foto]");

         $tempdir = "images/";
         // if (!file_exists($tempdir)) mkdir($tempdir, 0755);

         //target file
         $target_path = $tempdir . basename($foto);
         compress($lokasi, $target_path, 45);
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