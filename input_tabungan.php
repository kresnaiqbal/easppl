<?php 
    include('connectdb.php');
    
    $nomor_rekening;
    $jumlah_tabungan;


    $sql = "UPDATE tabungan SET saldo= (saldo+$jumlah_tabungan) WHERE nomor_rekening=$nomor_rekening;";
    $result = $conn->query($sql);


    header("location:template.php")
?>