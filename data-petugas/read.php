<?php
session_start();
if ($_SESSION['level'] == "") {
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

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="create.php" class="btn btn-success">Tambah Data Petugas</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tr>
                                        <th>#</th>
                                        <th>ID Petugas</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Nama Petugas</th>
                                        <th>Level</th>
                                    </tr>
                                    <?php
                                    include "../koneksi.php";
                                    $query_mysql = mysqli_query($koneksi, "SELECT * FROM petugas ");
                                    $nomor = 1;
                                    while ($data = mysqli_fetch_array($query_mysql)) { ?>
                                        <tr>
                                            <td><?php echo $nomor++; ?></td>
                                            <td><?php echo $data['id_petugas']; ?></td>
                                            <td><?php echo $data['username']; ?></td>
                                            <td><?php echo $data['password']; ?></td>
                                            <td><?php echo $data['nama_petugas']; ?></td>
                                            <td><?php echo $data['level']; ?></td>
                                            <td style="width: 30%;">
                                                <a href="update.php?id_petugas=<?php echo $data['id_petugas']; ?>"
                                                 class="btn btn-warning my-1">Update</a>
                                                <a href="action-delete.php?id_petugas=<?php echo $data['id_petugas']; ?>"
                                                 class="btn btn-danger my-1">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>



                        <?php require('../template/footer.php'); ?>