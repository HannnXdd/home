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
            <h1>Data SPP</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="create.php" class="btn btn-success">Tambah Data SPP</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tr>
                                        <th>#</th>
                                        <th>ID Spp</th>
                                        <th>Nominal</th>
                                        <th>Tahun</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    <?php
                                    include "../koneksi.php";
                                    $query_mysql = mysqli_query($koneksi, "SELECT * FROM spp ");
                                    $nomor = 1;
                                    while ($data = mysqli_fetch_array($query_mysql)) { ?>
                                        <tr>
                                            <td><?php echo $nomor++; ?></td>
                                            <td><?php echo $data['id_spp']; ?></td>
                                            <td><?php echo $data['nominal']; ?></td>
                                            <td><?php echo $data['tahun']; ?></td>
                                            <td><?php echo $data['keterangan']; ?></td>
                                            <td style="width: 30%;">
                                                <a href="update.php?id_spp=<?php echo $data['id_spp']; ?>"
                                                 class="btn btn-warning my-1">Update</a>
                                                <a href="action-delete.php?id_spp=<?php echo $data['id_spp']; ?>"
                                                 class="btn btn-danger my-1">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>



                        <?php require('../template/footer.php'); ?>