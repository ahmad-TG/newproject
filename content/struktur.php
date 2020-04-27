<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul">Struktur Pemerintahan</h2>
<a class="tombol" href="?hal=struktur_tambah">Tambah</a>

<table class="table">
   <thead>
      <tr>
         <th>No</th>
         <th>Foto</th>
         <th>Nama</th>
         <th>Jabatan</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
<?php
   $query = mysqli_query($con, "SELECT * FROM struktur ORDER BY struktur.sort ASC ");
   $no = 0;
   while($data = mysqli_fetch_array($query)){
      $no++;
?>
      <tr>
         <td><?= $no ?></td>
         <td width="250"><img src="images/<?= $data['foto'] ?>" width="200"></td>
         <td><?= $data['nama'] ?></td>
         <td><?= $data['jabatan'] ?></td>
         <td>
            <a class="tombol edit" href="?hal=struktur_edit&id=<?= $data['id'] ?>"> Edit </a>
            <a class="tombol hapus" href="?hal=struktur_hapus&id=<?= $data['id'] ?>&foto=<?= $data['foto'] ?>"> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>