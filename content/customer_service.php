<?php
    

    $dates=date("d-M-Y");
    $query = mysqli_query($con, "INSERT INTO cs SET noktp = '$_POST['no_ktp']', nama_lengkap='$_POST['nama_lengkap']', 
    pesan='$_POST['pesan']',  updatetime='$dates' ");
 
    if($query){
       echo "Data berhasil disimpan!";
       echo "<meta http-equiv='refresh' content='1; url=?hal=user'>";
    }else{
       echo "Tidak dapat menyimpan data!<br>";
       echo mysqli_error();
    }
?>