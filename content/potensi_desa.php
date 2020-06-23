<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul ml-2 mb-4">Potensi Desa</h2>
<a class="btn mb-4 btn-primary  ml-2" href="?hal=potensi_tambah"> <i class="fas fa-plus mr-2"></i>Tambah</a>
<div class="table-responsive-sm">
<table class="table table-striped table-bordered compact hover ">
   <thead style="background:#379538;text-color:white">
      <tr class="text-white text-center">
         <th>No</th>
         <th>Foto</th>
         <th>Nama</th>
         <th>Deskripsi</th>
       
         <th width="280px;">Aksi</th>
      </tr>
   </thead>
   <tbody>

      <tr class="text-center">
         
         <a class="btn mb-2 btn-primary" href="?hal=potensi_view&id=<?= $data['id'] ?>"><i class="fas fa-eye"></i> View </a>
            <a class="btn mb-2 btn-success" href="?hal=potensi_edit&id=<?= $data['id'] ?>"><i class="fas fa-edit"></i> Edit </a>
            <a class="btn mb-2 btn-danger" href="?hal=potensi_hapus&id=<?= $data['id'] ?>&foto=<?= $data['foto'] ?>"><i class="fas fa-trash-alt"></i> Delete </a>
         </td>
     </tr>

   </tbody>
</table>
</div>
