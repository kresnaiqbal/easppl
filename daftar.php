<?php 

    include('connectdb.php');
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomor_hp = $_POST['nomor_hp'];
    $foto = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];

    move_uploaded_file($file_tmp, 'image/'.$foto);

    if($id==!null){
        $sql = "INSERT INTO nasabah VALUES ('".$id."','".$nama."','".$alamat."', '".$nomor_hp."','".$foto."');";

        $conn->query($sql);
        header("location:Admin.php?daftar_berhasil");
    }
    else{
        header("location:Admin.php?daftar_error");
    }

    
?>