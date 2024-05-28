<?php
   session_start();
   if($_SESSION['level']==""){
    header("location:auth-login-petugas.php?pesan=gagal");
   }
 ?>
 
 <?php require('../template/header.php'); ?>

 <?php require('../template/nav.php'); ?>

 <?php require('../template/sidebar.php'); ?>

 <!-- Main Content -->
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Kelas</h1>
      </div>
      <form method="POST" action="action-create.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id Kelas</label>
    <input type="number" class="form-control" name="id_kelas">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Kelas</label>
    <input type="text" class="form-control" name="nama_kelas">
  </div>
  <div class="mb-3">
  <label  for="exampleCheck1">Komptensi keahlian</label>
    <select class="form-control" name="kompetensi_keahlian">
<option>RPL</option>
<option>DPIB</option>
<option>TKR</option>
<option>TBSM</option>
<option>TKR</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    </section>
</div>

<?php require('../template/footer.php'); ?>