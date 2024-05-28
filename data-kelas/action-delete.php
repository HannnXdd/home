<?php
    
    include("../koneksi.php");
    $IdKelas = $_GET['id_kelas'];
    $result = mysqli_query($koneksi, "DELETE FROM kelas WHERE id_kelas=$IdKelas");

    if ($result) {
        echo "<script>alert('Data Kelas berhasil dihapus'); window.location.href='read.php'</script>";
    }else{ 
        echo "<script>alert('Data Kelas gagal dihapus'); window.location.href='read.php'</script>";
    }
?>