<html>
<div class="table mt-5 p-5">
    <table border ="5">
        <h2>
            LIST NASABAH
        </h2>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>NOMOR HP</th>
        <th>TOTAL TABUNGAN</th>
        <?php 
            include('connectdb.php');

            $sql = "SELECT * FROM nasabah";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()){

        ?>
        <tr>
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
</html>