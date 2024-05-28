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
            <h1>Data Petugas</h1>
      </div>
      <form method="POST" action="action-create.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id Petugas</label>
    <input type="number" class="form-control" name="id_petugas">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Username</label>
    <input type="text" class="form-control" name="username">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Petugas</label>
    <input type="text" class="form-control" name="nama_petugas">
  </div>
  <div class="mb-3">
  <label  for="exampleCheck1">Level</label>
    <select class="form-control" name="level">
<option>Admin</option>
<option>Petugas</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    </section>
</div>

<?php require('../template/footer.php'); ?>

