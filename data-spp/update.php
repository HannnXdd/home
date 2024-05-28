<?php
include("../koneksi.php");
   session_start();
   if($_SESSION['level']==""){
    header("location:auth-login-petugas.php?pesan=gagal");
   }
$is = $_GET['id_spp'];
   $query_mysql = mysqli_query($koneksi, "SELECT * FROM spp WHERE id_spp= '$is'");
   $data = mysqli_fetch_array($query_mysql);


 ?>
 
 <?php require('../template/header.php'); ?>

 <?php require('../template/nav.php'); ?>

 <?php require('../template/sidebar.php'); ?>

 <!-- Main Content -->
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>data Spp</h1>
      </div>
      <form method="POST" action="action-update.php">
  <div class="mb-3">
    <label>Id Spp</label>
    <input type="number" class="form-control" name="id_spp" value="<?php echo $data['0']?>" readonly> 
  </div>
  <div class="mb-3">
    <label>Nominal</label>
    <input type="number" class="form-control" name="nominal" value="<?php echo $data['1']?>"> 
  </div>
  <div class="mb-3">
    <label>Tahun</label>
    <input type="int" class="form-control" name="tahun" value="<?php echo $data['2']?>"> 
  </div>
  <div class="mb-3">
    <label>Keterangan</label>
    <input type="text" class="form-control" name="keterangan" value="<?php echo $data['3']?>"> 
  </div>
 <div>
  <button type="submit" class="btn btn-primary">Submit</button>
 </div>
</form>
</div>
    </section>
</div>

<?php require('../template/footer.php'); ?>