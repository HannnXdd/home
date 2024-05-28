<?php
    
    include("../koneksi.php");
    $is = $_GET['id_spp'];
    $result = mysqli_query($koneksi, "DELETE FROM spp WHERE id_spp=$is");

    if ($result) {
        echo "<script>alert('Data spp berhasil dihapus'); window.location.href='read.php'</script>";
    }else{ 
        echo "<script>alert('Data SPP Petugas dihapus'); window.location.href='read.php'</script>";
    }
?>