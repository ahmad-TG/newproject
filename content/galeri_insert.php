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
      echo "<meta http-equiv='refresh' content='2; url=?hal=galeri_tambah'>";
   }else{
      if($tipefile != "image/jpeg" and $tipefile != "image/jpg" and $tipefile != "image/png"){
         $error = "Tipe file tidak didukung!";
      }else{
         
         // move_uploaded_file($lokasi, "images/".$foto);
         $tempdir = "images/";
         if (!file_exists($tempdir)) mkdir($tempdir, 0755);

         //target file
         $target_path = $tempdir . basename($foto);
         compress($lokasi, $target_path, 45);
         $dates=date("d-M-Y");
         $query = mysqli_query($con, "INSERT INTO galeri SET
            foto = '$foto',
            title = '$_POST[title]',
            updateby='$_POST[updateby]',
            updatetime='$dates'
         ");
      }
   }

   if($error != ""){
      echo $error;
      echo "<meta http-equiv='refresh' content='2; url=?hal=galeri_tambah'>";
   }elseif($query){
      echo "Data berhasil disimpan!";
      echo "<meta http-equiv='refresh' content='1; url=?hal=galeri'>";
   }else{
      echo "Tidak dapat menyimpan data!<br>";
      echo mysqli_error();
   }
?>