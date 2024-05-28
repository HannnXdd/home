<?php
    include("../koneksi.php");
$ik = $_POST['id_kelas'];
$nk = $_POST['nama_kelas'];
$kk = $_POST['kompetensi_keahlian'];


    $result = mysqli_query($koneksi, "UPDATE kelas SET nama_kelas='$nk', kompetensi_keahlian='$kk' WHERE id_kelas='$ik' ");

    if ($result) {
        echo "<script>alert('Data Kelas berhasil ditambahkan'); window.location.href='read.php'</script>";
    }else{ 
        echo "<script>alert('Data Kelas gagal ditambahkan'); window.location.href='read.php'</script>";
    }

?>