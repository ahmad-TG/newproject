<?php
   if(!defined('INDEX')) die("");

   $halaman = array("dashboard", 
      "pegawai", 
      "galeri","kabar_desa",
      "kegiatan","layanan_publik", "struktur","user",

      "user_tambah", "user_insert","user_hapus","user_update","user_edit",
      "galeri_tambah", "galeri_insert","galeri_hapus","galeri_update","galeri_edit",
      "kabardesa_tambah", "kabardesa_insert","kabardesa_hapus","kabardesa_update","kabardesa_edit",
      "struktur_tambah", "struktur_insert","struktur_hapus","struktur_update","struktur_edit",
      "kegiatan_tambah", "kegiatan_insert","kegiatan_hapus","kegiatan_update","kegiatan_edit",
      "layananpublik_tambah", "layananpublik_insert","layananpublik_hapus","layananpublik_update","layananpublik_edit",

      "pegawai_tambah", "pegawai_insert",
      "pegawai_edit", "pegawai_update", "pegawai_hapus",
      "jabatan", "jabatan_tambah", "jabatan_insert", 
      "jabatan_edit", "jabatan_update", "jabatan_hapus");

   if(isset($_GET['hal'])) $hal = $_GET['hal'];
   else $hal = "dashboard";

   foreach($halaman as $h){
      if($hal == $h){
         include "content/$h.php";
         break;
      }
   }
?>