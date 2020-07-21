<?php 
    $nomor_rekening = $_POST['nomor_rekening'];
    $jumlah_setoran = $_POST['jumlah_setoran'];

    include('connectdb.php');

    $sql = "SELECT * FROM tabungan where nomor_rekening = '$nomor_rekening'";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
        $saldo = $row['saldo'];
    }
    $hasil = $saldo + $jumlah_setoran;
    $sql = "UPDATE tabungan SET saldo = '$hasil' where nomor_rekening = '$nomor_rekening'";
    $conn->query($sql);

    header("location:template.php");
?>