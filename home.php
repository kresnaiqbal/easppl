<html>
<div class="table mt-1 p-1">
    <center><font size="6">List Nasabah</font></center>
    <hr>
    <center><table border ="5">
        
        <th style="text-align: center;">FOTO</th>
        <th style="text-align: center;">NAMA</th>
        <th style="text-align: center;">ALAMAT</th>
        <th style="text-align: center;">NOMOR HP</th>
        <th style="text-align: center;">TOTAL TABUNGAN</th>
        <?php 
            include('connectdb.php');

            $sql = "SELECT * FROM nasabah";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()){

        ?>
        <tr>
        <td>
            <img src="image/<?php echo $row['foto']?>" width="80db" height="100db">
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
        <td>
            <?php
            $id_nasabah = $row['id_nasabah'];
            $sql_tabungan = "SELECT * FROM tabungan where id_nasabah = '$id_nasabah'";
            $hasil = $conn->query($sql_tabungan);

            while($tabungan = $hasil->fetch_assoc()){
                echo $tabungan['saldo'];
            }
            ?>
        </td>
        </tr>
        <?php 
            }
        ?>
    </table></center>
    <!-- <div class="dropdown mt-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Unduh
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="export.php">Excel</a>
            <a class="dropdown-item" href="export_pdf.php">PDF</a>
        </div>
    </div> -->


</div>
</html>