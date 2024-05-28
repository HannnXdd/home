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
            <h1>Dashboard</h1>
      </div>
      <div class="row">
        <div class="col">
    <p class="display-1">Selamat Datang <?php echo $_SESSION['nama']; ?></p>
</div>
    </section>
</div>

<?php require('../template/footer.php'); ?>