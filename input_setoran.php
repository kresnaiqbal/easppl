<?php 
    include('connectdb.php');

    $id_nasabah = $_POST['id_nasabah'];
    $jumlah_setoran = $_POST['jumlah_setoran'];
    
    $sql = "INSERT INTO setoran VALUES (null, NOW(), '".$jumlah_setoran."', '".$id_nasabah."');";
    $result = $conn->query($sql);


    header("location:template.php")
?>