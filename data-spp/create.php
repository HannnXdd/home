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
            <h1>Data spp</h1>
      </div>
      <form method="POST" action="action-create.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id SPP</label>
    <input type="number" class="form-control" name="id_spp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nominal</label>
    <input type="int" class="form-control" name="nominal">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tahun</label>
    <input type="int" class="form-control" name="tahun">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Keterangan</label>
    <input type="text" class="form-control" name="keterangan">
    <div>

  </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</form>
</div>
    </section>
</div>

<?php require('../template/footer.php'); ?>

