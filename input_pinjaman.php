<?php 
    include('connectdb.php');

    $id_nasabah = $_POST['id_nasabah'];
    $jumlah_pinjaman = $_POST['jumlah_pinjaman'];
    
    $sql = "INSERT INTO pinjaman VALUES (null, NOW(), '".$jumlah_pinjaman."', '".$jumlah_pinjaman."', '".$id_nasabah."');";
    $result = $conn->query($sql);


    header("location:template.php?content=view_pinjaman_baru.php&id_nasabah=$id_nasabah");
?>