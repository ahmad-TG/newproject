<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul ml-2 mb-4">Data Kegiatan</h2>
<a class="btn mb-4 btn-primary  ml-2" href="?hal=kegiatan_tambah"><i class="fas fa-plus mr-2"></i>Tambah</a>
<div class="table-responsive-lg">
<table class="table  table-striped table-bordered compact hover ">
   <thead style="background:#379538;text-color:white">
      <tr class="text-white text-center">
         <th>No</th>
         <th>Foto</th>
         <th>Title</th>
         <th>Update By</th>
         <th>Update Time</th>
         <th>uraian</th>
         <th width="280px;">Aksi</th>
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
         <td width="250" class="text-center"><img src="images/<?= $data['foto'] ?>" width="200" class=" rounded "></td>
         <td><?= $data['title'] ?></td>
         <td><?= $data['updateby'] ?></td>
         <td><?= $data['updatetime'] ?></td>
         <td><?= $data['uraian'] ?></td>
         <td>
            <a class="btn mb-2 btn-primary" href="?hal=kegiatan_view&id=<?= $data['id'] ?>"><i class="fas fa-eye"></i> View </a>
            <a class="btn mb-2 btn-success" href="?hal=kegiatan_edit&id=<?= $data['id'] ?>"><i class="fas fa-edit"></i> Edit </a>
            <a class="btn mb-2 btn-danger" href="?hal=kegiatan_hapus&id=<?= $data['id'] ?>&foto=<?= $data['foto'] ?>"><i class="fas fa-trash-alt"></i> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>
</div>