<?php
    include("../koneksi.php");

    $ik = $_POST['id_kelas'];
    $nk = $_POST['nama_kelas'];
    $kk = $_POST['kompetensi_keahlian'];

    $result = mysqli_query($koneksi, "INSERT INTO kelas(id_kelas, nama_kelas, kompetensi_keahlian) values ('$ik','$nk','$kk')");

    if ($result) {
        echo "<script>alert('Data Kelas berhasil ditambahkan'); window.location.href='read.php'</script>";
    }else{ 
        echo "<script>alert('Data Kelas gagal ditambahkan'); window.location.href='read.php'</script>";
    }

?>