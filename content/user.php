<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul">Data User</h2>
<a class="tombol" href="?hal=user_tambah">Tambah</a>

<table class="table">
   <thead>
      <tr>
         <th>No</th>
         <th>Username</th>
         <th>nama lengkap</th>
         <th>Password</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
<?php
   $query = mysqli_query($con, "SELECT * FROM user ORDER BY id_user DESC");
   $no = 0;
   while($data = mysqli_fetch_array($query)){
      $no++;
?>
      <tr>
         <td><?= $no ?></td>
         <td><?= $data['username'] ?></td>
         <td><?= $data['nama_lengkap'] ?></td>
         <td><?= $data['password'] ?></td>
         <td>
            <a class="tombol edit" href="?hal=user_edit&id=<?= $data['id_user'] ?>"> Edit </a>
            <a class="tombol hapus" href="?hal=user_hapus&id=<?= $data['id_user'] ?>"> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>