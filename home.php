<html>
<div class="table mt-3 p-5">
    <table>
        <h2>
            LIST NASABAH
        </h2>
        <th></th>
        <th>ID</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>NOMOR HP</th>
        <th>NOMOR REKENING</th>
        <th>TOTAL TABUNGAN</th>
        <?php 
            include('connectdb.php');

            $sql = "SELECT * FROM nasabah";
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
            echo $row['id_nasabah'];
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
            <?php
            $id_nasabah = $row['id_nasabah'];
            $sql_tabungan = "SELECT * FROM tabungan where id_nasabah = '$id_nasabah'";
            $hasil = $conn->query($sql_tabungan);

            while($tabungan = $hasil->fetch_assoc()){
                echo "<td>".$tabungan['nomor_rekening']."</td>";
                echo "<td>".$tabungan['saldo']."</td>";
            }
            ?>
        </tr>
        <?php 
            }
        ?>
    </table>
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
<div class="table mt-3 p-5">
    <table>
        <h2>
            LIST PINJAMAN
        </h2>
        <th>ID</th>
        <th>PEMINJAM</th>
        <th>TANGGAL PEMINJAMAN</th>
        <th>JUMLAH PINJAMANAN</th>
        <th>SISA YANG BELUM DIBAYAR</th>
        <?php 

            $sql = "SELECT * FROM pinjaman";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()){

        ?>
        <tr>
        <td>
            <?php 
                echo $row['id_pinjaman'];
            ?>
        </td>
        <td>
            <?php 
            $id_nasabah = $row['id_nasabah'];
            $sql_nasabah = "SELECT * FROM nasabah where id_nasabah = '$id_nasabah'";
            $hasil = $conn->query($sql_nasabah);

            while($nasabah = $hasil->fetch_assoc()){
                echo $nasabah['nama_nasabah'];
            }
            ?>
        </td>
        <td>
            <?php 
            echo $row['tanggal_pinjam'];
            ?>
        </td>
        <td>
            <?php
            echo $row['jumlah_pinjaman'];
            ?>
        </td>
        <td>
            <?php
            echo $row['sisa_pinjam'];
            ?>
        </td>
        </tr>
        <?php 
            }
        ?>
    </table>
</div>
</html>