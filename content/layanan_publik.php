<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul ml-2 mb-4">Layanan Publik</h2>
<a class="btn mb-4 btn-primary  ml-2" href="?hal=layananpublik_tambah"><i class="fas fa-plus mr-2"></i>Tambah</a>

<div class="table-responsive-lg ">
<table class="table  table-striped table-bordered compact hover ">
   <thead style="background:#379538;text-color:white">
      <tr class="text-white text-center">
         <th>No</th>
         <!-- <th>File</th> -->
         <th>Nama</th>
         <th>Title</th>
         <th width="280px;">Aksi</th>
      </tr>
   </thead>
   <tbody>
<?php
   $query = mysqli_query($con, "SELECT * FROM layanan_publik ");
   $no = 0;
   while($data = mysqli_fetch_array($query)){
      $no++;
?>
      <tr class="text-center">
         <td><?= $no ?></td>
         <!-- <td width="250"><embed width="600" height="450" src="documents/Untitled-1.pdf" type="application/pdf"></embed></embed></a></td> -->
         <td><?= $data['nama_surat'] ?></td>
         <td><?= $data['title'] ?></td>
         <td >
            <a class="btn mb-2 btn-primary" href="documents/<?= $data['file'] ?>" ><div style="font-size:15px"><i class="fas fa-download"></i>  Download</div>  </a>
            <a class="btn mb-2 btn-success" href="?hal=layananpublik_edit&id=<?= $data['id'] ?>"><i class="fas fa-edit"></i> Edit </a>
            <a class="btn mb-2 btn-danger" href="?hal=layananpublik_hapus&id=<?= $data['id'] ?>&file=<?= $data['file'] ?>"> <i class="fas fa-trash-alt"></i> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>
</div>