<?php
    include("../koneksi.php");

    $ip = $_POST['id_petugas'];
    $un = $_POST['username'];
    $pw = md5($_POST['password']);
    $np = $_POST['nama_petugas'];
    $level = $_POST['level'];


    $result = mysqli_query($koneksi, "UPDATE petugas SET  username='$un', password='$pw', nama_petugas='$np' WHERE id_petugas='$ip'");

    if ($result) {
        echo "<script>alert('Data Petugas berhasil ditambahkan'); window.location.href='read.php'</script>";
    }else{ 
        echo "<script>alert('Data Petugas gagal ditambahkan'); window.location.href='read.php'</script>";
    }

?>