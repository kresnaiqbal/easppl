<html>
<div class="table mt-5 p-5">
    <table border ="5">
        <h2>
            LIST NASABAH
        </h2>
        <th>ID PINJAMAN</th>
        <th>TANGGAL PINJAMAN</th>
        <th>JUMLAH PINJAMAN</th>
        <th>ID NASABAH</th>
        <?php 
            include('connectdb.php');

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
            echo $row['tanggal_pinjaman'];
            ?>
        </td>
        <td>
            <?php
            echo $row['jumlah_pinjaman'];
            ?>
        </td>
        <td>
            <?php
            echo $row['id_nasabah'];
            ?>
        </td>
        </tr>
        <?php 
            }
        ?>
    </table>
</div>
</html>