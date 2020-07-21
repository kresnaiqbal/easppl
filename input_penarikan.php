<?php 
    $nomor_rekening = $_POST['nomor_rekening'];
    $jumlah_penarikan = $_POST['jumlah_penarikan'];

    include('connectdb.php');

    $sql = "SELECT * FROM tabungan where nomor_rekening = '$nomor_rekening'";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
        $saldo = $row['saldo'];
    }
    $hasil = $saldo - $jumlah_penarikan;
    $sql = "UPDATE tabungan SET saldo = '$hasil' where nomor_rekening = '$nomor_rekening'";
    $conn->query($sql);

    $sql = "INSERT INTO penarikan VALUES (null, NOW(), '".$jumlah_penarikan."', '".$nomor_rekening."');";
    $result = $conn->query($sql);

    header("location:template.php");
?>