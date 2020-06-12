<?php
   if(!defined('INDEX')) die("");
?>
 
<h2 class="judul ml-sm-3">Galeri</h2>
<a class="btn mb-4 btn-primary  ml-2" href="?hal=galeri_tambah"> <i class="fas fa-plus mr-sm-2" ></i>Tambah</a>
<div class="table-responsive-lg">
<table class="table table-striped table-bordered compact hover " style="width:100%">
<caption>List of users</caption>
   <thead style="background:#379538;">
      <tr class="text-white">
         <th>No</th>
         <th>Foto</th>
         <th>Title</th>
         <th>Update By</th>
         <th>Update Time</th>
         <th width="280px;">Aksi</th>
      </tr>
   </thead>
   <tbody>
<?php
   $query = mysqli_query($con, "SELECT * FROM galeri order BY galeri.updatetime ");
   $no = 0;
   while($data = mysqli_fetch_array($query)){
      $no++;
?>
      <tr class="text-center">
         <td><?= $no ?></td>
         <td width="250" class="text-center"><img src="images/<?= $data['foto'] ?>" width="200" class=" rounded "></td>
         <td><?= $data['title'] ?></td>
         <td><?= $data['updateby'] ?></td>
         <td><?= $data['updatetime'] ?></td>
         <td>
            <a class="btn btn-primary mb-2" href="?hal=galeri_viewt&id=<?= $data['id'] ?>"> <i class="fas fa-eye"></i>View </a>
            <a class="btn btn-success mb-2" href="?hal=galeri_edit&id=<?= $data['id'] ?>"> <i class="fas fa-edit"></i>Edit </a>
            <a class="btn btn-danger mb-2" href="?hal=galeri_hapus&id=<?= $data['id'] ?>&foto=<?= $data['foto'] ?>"><i class="fas fa-trash-alt"></i> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>
</div>

