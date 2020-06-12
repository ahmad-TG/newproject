<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul ml-2 mb-4">Struktur Pemerintahan</h2>
<a class="btn mb-4 btn-primary  ml-2" href="?hal=struktur_tambah"> <i class="fas fa-plus mr-2"></i>Tambah</a>
<div class="table-responsive-sm">
<table class="table table-striped table-bordered compact hover ">
   <thead style="background:#379538;text-color:white">
      <tr class="text-white text-center">
         <th>No</th>
         <th>Foto</th>
         <th>Nama</th>
         <th>Jabatan</th>
         <th width="280px;">Aksi</th>
      </tr>
   </thead>
   <tbody>
<?php
   $query = mysqli_query($con, "SELECT * FROM struktur ORDER BY struktur.sort ASC ");
   $no = 0;
   while($data = mysqli_fetch_array($query)){
      $no++;
?>
      <tr class="text-center">
         <td><?= $no ?></td>
         <td width="250" class="text-center"><img src="images/<?= $data['foto'] ?>" width="200" class=" rounded "></td>
         <td><?= $data['nama'] ?></td>
         <td><?= $data['jabatan'] ?></td>
         <td>
         <a class="btn mb-2 btn-primary" href="?hal=struktur_view&id=<?= $data['id'] ?>"><i class="fas fa-eye"></i> View </a>
            <a class="btn mb-2 btn-success" href="?hal=struktur_edit&id=<?= $data['id'] ?>"><i class="fas fa-edit"></i> Edit </a>
            <a class="btn mb-2 btn-danger" href="?hal=struktur_hapus&id=<?= $data['id'] ?>&foto=<?= $data['foto'] ?>"><i class="fas fa-trash-alt"></i> Delete </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>
</div>
