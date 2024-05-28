<?php
include("../koneksi.php");
   session_start();
   if($_SESSION['level']==""){
    header("location:auth-login-petugas.php?pesan=gagal");
   }
$ip = $_GET['id_petugas'];
   $query_mysql = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas= '$ip'");
   $data = mysqli_fetch_array($query_mysql);
 ?>
 
 <?php require('../template/header.php'); ?>

 <?php require('../template/nav.php'); ?>

 <?php require('../template/sidebar.php'); ?>

 <!-- Main Content -->
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>data Petugas</h1>
      </div>
      <form method="POST" action="action-update.php">
  <div class="mb-3">
    <label>Id Petugas</label>
    <input type="number" class="form-control" name="id_petugas" value="<?php echo $data['0']?>" readonly> 
  </div>
  <div class="mb-3">
    <label>Username</label>
    <input type="text" class="form-control" name="username" value="<?php echo $data['1']?>"> 
  </div>
  <div class="mb-3">
    <label>Password</label>
    <input type="password" class="form-control" name="password" value="<?php echo $data['2']?>"> 
  </div>
  <div class="mb-3">
    <label>Nama Petugas</label>
    <input type="text" class="form-control" name="nama_petugas" value="<?php echo $data['3']?>"> 
  </div>
  <div class="mb-3">
  <label  for="exampleCheck1">Level</label>
    <select class="form-control" name="level">
<option>Admin</option>
<option>Petugas</option>
    </select>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    </section>
</div>

<?php require('../template/footer.php'); ?>