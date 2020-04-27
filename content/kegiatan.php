<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul">Data Kegiatan</h2>
<a class="tombol" href="?hal=kegiatan_tambah">Tambah</a>

<table class="table">
   <thead>
      <tr>
         <th>No</th>
         <th>Foto</th>
         <th>Title</th>
         <th>Update By</th>
         <th>Update Time</th>
         <th>uraian</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
<?php
   $query = mysqli_query($con, "SELECT * FROM kegiatan ");
   $no = 0;
   while($data = mysqli_fetch_array($query)){
      $no++;
?>
      <tr>
         <td><?= $no ?></td>
         <td width="250"><img src="images/<?= $data['foto'] ?>" width="200"></td>
         <td><?= $data['title'] ?></td>
         <td><?= $data['updateby'] ?></td>
         <td><?= $data['updatetime'] ?></td>
         <td><?= $data['uraian'] ?></td>
         <td>
            <a class="tombol edit" href="?hal=kegiatan_edit&id=<?= $data['id'] ?>"> Edit </a>
            <a class="tombol hapus" href="?hal=kegiatan_hapus&id=<?= $data['id'] ?>&foto=<?= $data['foto'] ?>"> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>