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
         <!-- <th>Nama</th> -->
         <th>Kategori</th>
         <th>UpdateBY</th>
         <th>Update Time</th>
         <th>Deskripsi</th>
         <th width="280px;">Aksi</th>
      </tr>
   </thead>
   <tbody>

   <?php
      $query = mysqli_query($con, "SELECT * FROM potensi_desa ");
      $no = 0;
      while($data = mysqli_fetch_array($query)){
         $no++;
   ?>
         <tr class="text-center">
            <td><?= $no ?></td>
            <td width="250" class="text-center"><img src="images/<?= $data['image'] ?>" width="200" class=" rounded "></td>
            <td><?= $data['kategori'] ?></td>
            <td><?= $data['updateby'] ?></td>
            <td><?= $data['date'] ?></td>
            <td><?=  substr ($data['uraian'],0, 100) ?></td>
            <td  width="30px" style="align:center">
               <a class=" btn btn-primary mt-2 btn-sm "  href="?hal=kabardesa_edit&id=<?= $data['id'] ?>"><i class="fas fa-eye" ></i> View</a>
               <a class=" btn btn-success btn-sm  mt-2 "  href="?hal=kabardesa_edit&id=<?= $data['id'] ?>"><i class="fas fa-edit" ></i> Edit</a>
               <a class=" btn btn-danger btn-sm mt-2 " href="?hal=kabardesa_hapus&id=<?= $data['id'] ?>&foto=<?= $data['foto'] ?>"><i class="fas fa-trash-alt"></i> Delete </a>
            </td>
      </tr>
   <?php
      }
   ?>
   </tbody>
</table>
</div>
