<?php 
    $id_pinjaman = $_POST['id_pinjaman'];
    $jumlah_angsuran = $_POST['jumlah_angsuran'];

    include('connectdb.php');

    $sql = "SELECT * FROM pinjaman where id_pinjaman = '$id_pinjaman'";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
        $sisa_pinjam = $row['sisa_pinjam'];
    }
    $hasil = $sisa_pinjam - $jumlah_angsuran;
    $sql = "UPDATE pinjaman SET sisa_pinjam = '$hasil' where id_pinjaman = '$id_pinjaman'";
    $conn->query($sql);

    $sql = "INSERT INTO angsuran VALUES (null, NOW(), '".$jumlah_angsuran."', '".$hasil."', '".$id_pinjaman."');";
    $result = $conn->query($sql);

    header("location:template.php");
?>