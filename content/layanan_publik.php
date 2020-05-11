<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul">Data Layanan Publik</h2>
<a class="tombol" href="?hal=layananpublik_tambah">Tambah</a>

<table class="table">
   <thead>
      <tr>
         <th>No</th>
         <th>File</th>
         <th>Nama</th>
         <th>Title</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
<?php
   $query = mysqli_query($con, "SELECT * FROM layanan_publik ");
   $no = 0;
   while($data = mysqli_fetch_array($query)){
      $no++;
?>
      <tr>
         <td><?= $no ?></td>
         <!-- <td width="250"><embed width="600" height="450" src="documents/Untitled-1.pdf" type="application/pdf"></embed></embed></a></td> -->
         <td><?= $data['nama_surat'] ?></td>
         <td><?= $data['title'] ?></td>
         <td>
            <a class="tombol edit" href="documents/<?= $data['file'] ?>"> Download </a>
            <a class="tombol edit" href="?hal=layananpublik_edit&id=<?= $data['id'] ?>"> Edit </a>
            <a class="tombol hapus" href="?hal=layananpublik_hapus&id=<?= $data['id'] ?>&file=<?= $data['file'] ?>"> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>