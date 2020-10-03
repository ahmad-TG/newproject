<?php
   if(!defined('INDEX')) die("");

   $halaman = array(
      // url admin
      "dashboard","profile","pengaturan",
      "user","user_tambah", "user_insert","user_hapus","user_update","user_edit",
      "galeri","galeri_tambah", "galeri_insert","galeri_hapus","galeri_update","galeri_edit",
      "kabar_desa","kabardesa_tambah", "kabardesa_insert","kabardesa_hapus","kabardesa_update","kabardesa_edit",
      "struktur","struktur_tambah", "struktur_insert","struktur_hapus","struktur_update","struktur_edit",
      "kegiatan","kegiatan_tambah", "kegiatan_insert","kegiatan_hapus","kegiatan_update","kegiatan_edit",
      "layanan_publik","layananpublik_tambah", "layananpublik_insert","layananpublik_hapus","layananpublik_update","layananpublik_edit",

      "kabar_berita","kabarberita_tambah", "kabarberita_insert","kabarberita_hapus","kabarberita_update","kabarberita_edit",
      "potensi_desa","potensi_tambah", "potensi_insert","potensi_hapus","potensi_update","potensi_edit",
      
      "profile_sejarah","profile_visi","profile_misi","profile_sms","profile_whatsapp","profile_email"

      // url dashboards
      // "dash_desa","dash_statistik","dash_layanandesa","dash_potensidesa","dash_kabardesa","dash_sejarah","dash_geografis","dash_pemerindahdesa",
      // "dash_galeridesa","dash_profile","dash_layananpublik","dash_kabarberita","dash_potretberita","first_dashboard"
     );

   if(isset($_GET['hal'])) $hal = $_GET['hal'];
   else $hal = "dashboard";

   foreach($halaman as $h){
      if($hal == $h){
         include "content/$h.php";
         break;
      }
   }
?>