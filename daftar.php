<?php 

    include('connectdb.php');
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomor_hp = $_POST['nomor_hp'];
    $foto = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];

    move_uploaded_file($file_tmp, 'image/'.$foto);

    $sql = "INSERT INTO nasabah VALUES (null,'".$nama."','".$alamat."', '".$nomor_hp."','".$foto."');";

    
    if($conn->query($sql)){
        $sql = "SELECT max(id_nasabah) FROM nasabah";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_row($result);
        $id_nasabah = $row[0];

        $sql = "INSERT INTO tabungan VALUES (null,0,'".$id_nasabah."');";

        if($conn->query($sql)){
            header("location:template.php?content=view_nasabah_baru.php&id_nasabah=$id_nasabah");
        }
              
    }
    else{
        header("location:template.php?daftar_error");
    }

    
?>