<?php
   if(!defined('INDEX')) die("");
?>
 
<h2 class="judul">Galeri</h2>
<a class="tombol" href="?hal=galeri_tambah">Tambah</a>

<table class="table table-striped table-bordered" style="width:100%">
   <thead class="thead-dark">
      <tr>
         <th>No</th>
         <th>Foto</th>
         <th>Title</th>
         <th>Update By</th>
         <th>Update Time</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
<?php
   $query = mysqli_query($con, "SELECT * FROM galeri ORDER BY galeri.id DESC");
   $no = 0;
   while($data = mysqli_fetch_array($query)){
      $no++;
?>
      <tr>
         <td><?= $no ?></td>
         <td width="250"><img src="images/<?= $data['foto'] ?>" width="200" class="img-thumbnail"></td>
         <td><?= $data['title'] ?></td>
         <td><?= $data['updateby'] ?></td>
         <td><?= $data['updatetime'] ?></td>
         <td>
            <a class="tombol edit" href="?hal=galeri_edit&id=<?= $data['id'] ?>"> Edit </a>
            <a class="tombol hapus" href="?hal=galeri_hapus&id=<?= $data['id'] ?>&foto=<?= $data['foto'] ?>"> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>

