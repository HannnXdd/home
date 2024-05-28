<?php
include("../koneksi.php");
   session_start();
   if($_SESSION['level']==""){
    header("location:auth-login-petugas.php?pesan=gagal");
   }
$ik = $_GET['id_kelas'];
   $query_mysql = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_kelas= '$ik'");
   $data = mysqli_fetch_array($query_mysql);


 ?>
 
 <?php require('../template/header.php'); ?>

 <?php require('../template/nav.php'); ?>

 <?php require('../template/sidebar.php'); ?>

 <!-- Main Content -->
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Update data Kelas</h1>
      </div>
      <form method="POST" action="action-update.php">
  <div class="mb-3">
    <label>Id Kelas</label>
    <input type="number" class="form-control" name="id_kelas" value="<?php echo $data['0']?>" readonly> 
  </div>
  <div class="mb-3">
    <label>Nama Kelas</label>
    <input type="text" class="form-control" name="nama_kelas" value="<?php echo $data['1']?>"> 
  </div>
  <div class="mb-3">
  <label for="exampleCheck1">Komptensi keahlian</label>
    <select class="form-control" name="kompetensi_keahlian">
<option>RPL</option>
<option>DPIB</option>
<option>TKR</option>
<option>TBSM</option>
<option>TKR</option>
<option>TAV</option>
    </select>
   
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    </section>
</div>

<?php require('../template/footer.php'); ?>