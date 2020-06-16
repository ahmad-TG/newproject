<div class="row justify-content-center" style="margin-top:-20px" >
    <div class="col-auto py-3  kabarberitautama" style="background:#F2F2F2;margin-right:10px" >
            <?php
                $id=$_GET['id'];
                $query = mysqli_query($con, "SELECT * FROM kabar_desa WHERE id='$_GET[id]'");
                $data = mysqli_fetch_array($query); 
            ?>
            <div class="clearfix py-2 " max-width="645px"  >
                <h2  class="py-3"><?= $data['title'] ?></h2>
                <img class=" img-fluid text-center rounded " src="images/<?= $data['foto'] ?>" alt="Pineapple" width="100%" style="margin-top:-8px;margin-bottom:10px;">
                <div style="margin-left:10px;font-size:14px"><p><?= $data['uraian']?></p></div>
                <div class="d-flex justify-content-between align-items-center mt-3" style="margin-left:10px;margin-right:10px;margin-top:20px ">
                    <div>By <?= $data['updateby'] ?></div>
                    <div > <?= $data['updatetime'] ?></div>
                </div>
            </div>
    </div>
           
   
</div>
<div class="row ">
<div class="col-auto  mx-auto btn-back ">
<a  class="btn btn-outline-primary  my-3 btn-back"  href="index.php"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
</div>
</div>

<style>
.btn-back{
    width:150px;
}
h2 {
  text-align: center;
  text-transform: uppercase;
  color: #4CAF50;
}
p {
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 2px;
}
@media screen and (max-width: 480px){
    p {
        text-indent: 30px;
        text-align: justify;
        letter-spacing: 2px;
    }
    .btn-back{
    width:100%;
}
}
</style>