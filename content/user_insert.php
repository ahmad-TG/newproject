<?php
    if(!defined('INDEX')) die("");

   $namalengkap=$_POST['nama_lengkap'];
   $username = $_POST['username'];
   $password = md5($_POST['password']);

    $query = mysqli_query($con, "INSERT INTO user SET
       nama_lengkap = '$namalengkap', username='$username', password='$password'
    ");
 
    if($query){
       echo "Data berhasil disimpan!";
       echo "<meta http-equiv='refresh' content='1; url=?hal=user'>";
    }else{
       echo "Tidak dapat menyimpan data!<br>";
       echo mysqli_error();
    }
?>