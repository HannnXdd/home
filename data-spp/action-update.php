<?php
    include("../koneksi.php");

    $is = $_POST['id_spp'];
    $nominal = $_POST['nominal'];
    $tahun = $_POST['tahun'];
    $keterangan = $_POST['keterangan'];

    $result = mysqli_query($koneksi, "UPDATE spp SET nominal='$nominal', tahun='$tahun', keterangan='$keterangan' WHERE id_spp='$is' ");


    if ($result) {
        echo "<script>alert('Data spp berhasil ditambahkan'); window.location.href='read.php'</script>";
    }else{ 
        echo "<script>alert('Data spp gagal ditambahkan'); window.location.href='read.php'</script>";
    }

?>

