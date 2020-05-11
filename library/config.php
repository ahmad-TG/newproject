<?php
  // $host = "sql311.byetcluster.com";
  // $user = "epiz_25741493";
  // $pass = "bEbvAZoyVk";
  // $db   = "epiz_25741493_desakudukeras";

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db   = "desakudukeras";


  $con = mysqli_connect($host, $user, $pass, $db);
  if (mysqli_connect_errno()){
    echo "Koneksi gagal: " . mysqli_connect_error();
  }
?>