<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul">Kabar Berita</h2>
<a class="tombol" href="?hal=kabardesa_tambah">Tambah</a>

<table class="table">
   <thead>
      <tr>
         <th>No</th>
         <th>Foto</th>
         <th>Ttitle</th>
         <th>UpdateBY</th>
         <th>Update Time</th>
         <th>berita</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
<?php
   $query = mysqli_query($con, "SELECT * FROM kabar_desa ");
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
            <a class="tombol edit" href="?hal=kabardesa_edit&id=<?= $data['id'] ?>"> Edit </a>
            <a class="tombol hapus" href="?hal=kabardesa_hapus&id=<?= $data['id'] ?>&foto=<?= $data['foto'] ?>"> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>