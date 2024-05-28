<?php
    include("../koneksi.php");

    $ip = $_POST['id_petugas'];
    $un = $_POST['username'];
    $pw = md5($_POST['password']);
    $np = $_POST['nama_petugas'];
    $level = $_POST['level'];


    $result = mysqli_query($koneksi, "INSERT INTO petugas(id_petugas, username, password, nama_petugas, level) values ('$ip','$un','$pw','$np','$level')");

    if ($result) {
        echo "<script>alert('Data petugas berhasil ditambahkan'); window.location.href='read.php'</script>";
    }else{ 
        echo "<script>alert('Data petugas gagal ditambahkan'); window.location.href='read.php'</script>";
    }

?>