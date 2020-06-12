<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul ml-2 mb-4">Data User</h2>
<a class="btn mb-4 btn-primary  ml-2" href="?hal=user_tambah"><i class="fas fa-plus mr-2"></i>Tambah</a>
<div class="table-responsive-lg">
<table class="table  table-striped table-bordered compact hover  ">
   <thead class="text-white" style="background:#379538;">
      <tr class="text-center" >
         <th >No</th>
         <th>Username</th>
         <th>nama lengkap</th>
         <th>Password</th>
         <th >Aksi</th>
      </tr>
   </thead>
   <tbody>
<?php
   $query = mysqli_query($con, "SELECT * FROM user ORDER BY id_user DESC");
   $no = 0;
   while($data = mysqli_fetch_array($query)){
      $no++;
?>
      <tr class="text-center ">
   
         <td><?= $no ?></td>
         <td><?= $data['username'] ?></td>
         <td><?= $data['nama_lengkap'] ?></td>
         <td><?= $data['password'] ?></td>
         <td>
            <a class="btn mb-2 btn-primary" href="?hal=user_viewt&id=<?= $data['id_user'] ?>"><i class="fas fa-eye"></i> View </a>
            <a class="btn mb-2 btn-success" href="?hal=user_edit&id=<?= $data['id_user'] ?>"><i class="fas fa-edit"></i> Edit </a>
            <a class="btn mb-2 btn-danger" href="?hal=user_hapus&id=<?= $data['id_user'] ?>"><i class="fas fa-trash-alt"></i> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>
</div>
