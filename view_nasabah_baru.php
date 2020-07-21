<html>
<div class="table mt-3 p-5">
    <table>
        <h2>
            NASABAH BARU
        </h2>
        <th></th>
        <th>ID NASABAH</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>NOMOR HP</th>
        <?php 
            include('connectdb.php');
            
            $id_nasabah = $_GET['id_nasabah'];

            $sql = "SELECT * FROM nasabah where id_nasabah = '$id_nasabah'";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()){

        ?>
        <tr>
        <td>
            <?php $gambar = $row['foto']?>
            <img src="image/<?php echo $gambar?>" width="80" height="100">
        </td>
        <td>
        <?php 
            echo $id_nasabah;
            ?>
        </td>
        <td>
            <?php 
            echo $row['nama_nasabah'];
            ?>
        </td>
        <td>
            <?php
            echo $row['alamat'];
            ?>
        </td>
        <td>
            <?php
            echo $row['nomor_hp'];
            ?>
        </td>
        </tr>
        <?php 
            }
        ?>
    </table>
    <br>
    <h5 style='color:green'>Pendaftaran Berhasil</h5>
    <br>
    <a class="btn btn-success" href="template.php">KEMBALI</a>
</html>
