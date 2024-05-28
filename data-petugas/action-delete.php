<?php
    
    include("../koneksi.php");
    $IdPetugas = $_GET['id_petugas'];
    $result = mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas=$IdPetugas");

    if ($result) {
        echo "<script>alert('Data Petugas berhasil dihapus'); window.location.href='read.php'</script>";
    }else{ 
        echo "<script>alert('Data SPP Petugas dihapus'); window.location.href='read.php'</script>";
    }
?>