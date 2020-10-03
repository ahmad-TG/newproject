<?php
   if(!defined('INDEX')) die("");
   $query = mysqli_query($con, "SELECT * FROM profile WHERE id='1'");
   $data = mysqli_fetch_array($query);
?>
 
   <!-- Modal Sejarah desa-->
   <!-- <div class="modal fade" id="sejarahdesa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sejarah Desa Kudukeras</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body float-center ">
            <form method="post" action="?hal=profile_sejarah" enctype="multipart/form-data">
               <div class="form-group row">
                  <div class="col-sm-10">
                     <textarea class="form-control" style="min-height:300px;" id="sejarah" name="sejarah" ></textarea>
                  </div>
               </div>
               <div class="form-group row justify-content-center mt-4">
                  <div></div>
                  <div class="col ">
                     <input type="submit" value="Simpan" class="btn btn-outline-primary mb-3 form-control">
                  </div>
                  <div class="col ">
                     <a type="reset"  data-dismiss="modal" class="btn btn-outline-primary form-control">Batal</a>
                  </div>
               </div>
            </form>
            </div>
         </div>
      </div>
   </div> -->
<!-- modal -->

 <!-- Modal visi-->
 <!-- <div class="modal fade" id="visi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="visi">Visi Desa Kudukeras</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body float-center ">
            <form method="post" action="?hal=profile_visi" enctype="multipart/form-data">
               <div class="form-group row">
                  <div class="col-sm-10">
                     <textarea class="form-control" style="min-height:300px;" id="visi" name="visi" ></textarea>
                  </div>
               </div>
               <div class="form-group row justify-content-center mt-4">
                  <div></div>
                  <div class="col ">
                     <input type="submit" value="Simpan" class="btn btn-outline-primary mb-3 form-control">
                  </div>
                  <div class="col ">
                     <a type="reset"  data-dismiss="modal" class="btn btn-outline-primary form-control">Batal</a>
                  </div>
               </div>
            </form>
            </div>
         </div>
      </div>
   </div> -->
<!-- modal visi-->

<!-- Modal misi-->
<!-- <div class="modal fade" id="misi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="misi">Misi Desa Kudukeras</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body float-center ">
            <form method="post" action="?hal=profile_misi" enctype="multipart/form-data">
               <div class="form-group row">
                  <div class="col-sm-10">
                     <textarea class="form-control" style="min-height:300px;" id="misi" name="misi" ></textarea>
                  </div>
               </div>
               <div class="form-group row justify-content-center mt-4">
                  <div></div>
                  <div class="col ">
                     <input type="submit" value="Simpan" class="btn btn-outline-primary mb-3 form-control">
                  </div>
                  <div class="col ">
                     <a type="reset"  data-dismiss="modal" class="btn btn-outline-primary form-control">Batal</a>
                  </div>
               </div>
            </form>
            </div>
         </div>
      </div>
   </div> -->
<!-- modal misi-->

<!-- Modal sms-->
<div class="modal fade" id="sms" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="sms">No Contact SMS</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body float-center ">
            <form method="post" action="?hal=profile_sms" enctype="multipart/form-data">
               <div class="form-group row">
                  <div class="col-sm-10">
                  <input type="number" class="form-control" id="sms" name="sms" >
                  </div>
               </div>
               <div class="form-group row justify-content-center mt-4">
                  <div></div>
                  <div class="col ">
                     <input type="submit" value="Simpan" class="btn btn-outline-primary mb-3 form-control">
                  </div>
                  <div class="col ">
                     <a type="reset"  data-dismiss="modal" class="btn btn-outline-primary form-control">Batal</a>
                  </div>
               </div>
            </form>
            </div>
         </div>
      </div>
   </div>
<!-- modal sms-->

<!-- Modal whatsapp-->
<div class="modal fade" id="whatsapp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="whatsapp">No Contact Whatsapp</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body float-center ">
            <form method="post" action="?hal=profile_whatsapp" enctype="multipart/form-data">
               <div class="form-group row">
                  <div class="col-sm-10">
                     <input type="number" class="form-control" id="whatsapp" name="whatsapp" >
                  </div>
               </div>
               <div class="form-group row justify-content-center mt-4">
                  <div></div>
                  <div class="col ">
                     <input type="submit" value="Simpan" class="btn btn-outline-primary mb-3 form-control">
                  </div>
                  <div class="col ">
                     <a type="reset"  data-dismiss="modal" class="btn btn-outline-primary form-control">Batal</a>
                  </div>
               </div>
            </form>
            </div>
         </div>
      </div>
   </div>
<!-- modal whatsapp-->

<!-- Modal email-->
<div class="modal fade" id="email" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="email">Alamat E-mail</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body float-center ">
            <form method="post" action="?hal=profile_email" enctype="multipart/form-data">
               <div class="form-group row">
                  <div class="col-sm-10">
                     <input type="text" class="form-control" id="email" name="email" >  
                  </div>
               </div>
               <div class="form-group row justify-content-center mt-4">
                  <div></div>
                  <div class="col ">
                     <input type="submit" value="Simpan" class="btn btn-outline-primary mb-3 form-control">
                  </div>
                  <div class="col ">
                     <a type="reset"  data-dismiss="modal" class="btn btn-outline-primary form-control">Batal</a>
                  </div>
               </div>
            </form>
            </div>
         </div>
      </div>
   </div>
<!-- modal email-->

<h2 class="judul">Profile</h2>
<!-- <div class="card text-center">
   <div class="card-header">
      SEJARAH DESA
   </div>
   <div class="card-body">
      <h5 class="card-title">Sejarah Desa Kudukeras</h5>
      <p class="card-text"> <?= $data['sejarah'] ?></p>
      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#sejarahdesa"  role="button">Edit</a>
   </div>
   <div class="card-footer text-muted">
      2 days ago
   </div>
</div> -->

<!-- <div class="card text-center mt-3" style="overflow-x: hidden;">
  <div class="card-header">
   VISI DAN MISI
  </div>
  <div class="row " style="background:#f8f9fa;"  >
      <div class="col mb-2" style="min-width:250px;">
         <div class="card-body bg-white " >
            <h5 class="card-title ">VISI</h5>
            <p class="card-text"> <?= $data['visi'] ?></p>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#visi"  role="button">Edit</a>
         </div>
      </div>
      <div class="col " style="min-width:250px">
         <div class="card-body bg-white">
            <h5 class="card-title ">MISI</h5>
            <p class="card-text"> <?= $data['misi'] ?></p>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#misi"  role="button">Edit</a>
         </div>
      </div>
   </div>
   <div class="card-footer text-muted">
      2 days ago
   </div>
</div> -->

<div class="card text-center mt-3" style="overflow-x: hidden;">
  <div class="card-header">
   CONTACT BANTUAN
  </div>
  <div class="row " style="background:#f8f9fa;"  >

      <div class="col mb-2" style="min-width:250px;">
         <div class="card-body bg-white " >
            <h5 class="card-title ">SMS</h5>
            <p class="card-text"> <?= $data['sms'] ?></p>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#sms"  role="button">Edit</a>
         </div>
      </div>

      <div class="col " style="min-width:250px">
         <div class="card-body bg-white">
            <h5 class="card-title ">Whatsapp</h5>
            <p class="card-text"> <?= $data['whatsapp'] ?></p>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#whatsapp"  role="button">Edit</a>
         </div>
      </div>

      <div class="col " style="min-width:250px">
         <div class="card-body bg-white">
            <h5 class="card-title ">E-mail</h5>
            <p class="card-text"> <?= $data['email'] ?></p>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#email"  role="button">Edit</a>
         </div>
      </div>

   </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>







