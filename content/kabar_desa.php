<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul ml-2 mb-4">Kabar Desa</h2>
<a class="btn mb-4 btn-primary  ml-2" href="?hal=kabardesa_tambah"><i class="fas fa-plus   mr-2"></i>Tambah</a>
<div class="table-responsive-lg">
   <table class="table table-striped  compact hover table-bordered ">
      <thead  style="background:#379538;text-color:white">
         <tr class="text-white text-center">
            <th>No</th>
            <th>Foto</th>
            <th>Title</th>
            <th>Update BY</th>
            <th>Update Time</th>
            <!-- <th>Uraian</th> -->
            <th width="200px">Aksi</th>
         </tr>
      </thead>
      <tbody>
   <?php
      $query = mysqli_query($con, "SELECT * FROM kabar_desa ");
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
            <!-- <td><?=  substr ($data['uraian'],0, 20) ?></td> -->
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
