<div class="table mt-3 mx-auto">
<h3>NASABAH YANG MEMINJAM</h3>
    <table>
        <?php 
            $id_nasabah = $_GET['id_nasabah'];

            include('connectdb.php');

            $sql = "SELECT * FROM nasabah where id_nasabah = '$id_nasabah'";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td>ID NASABAH</td>
            <td><?php echo $id_nasabah ?></td>
        </tr>
        <tr>
            <td>NAMA PEMINJAM</td>
            <td><?php echo $row['nama_nasabah'] ?></td>
        </tr>
        <?php
            $sql_pinjaman = "SELECT * FROM pinjaman where id_nasabah = '$id_nasabah'";
            $hasil = $conn->query($sql_pinjaman);

            while($pinjaman = $hasil->fetch_assoc()){
        ?>
        <tr>
            <td>KODE PINJAMAN</td>
            <td><?php echo $pinjaman['id_pinjaman'] ?></td>
        </tr>
        <tr>
            <td>TANGGAL PINJAM</td>
            <td><?php echo $pinjaman['tanggal_pinjam'] ?></td>
        </tr>
        <tr>
            <td>JUMLAH PINJAMAN</td>
            <td><?php echo $pinjaman['jumlah_pinjaman'] ?></td>
        </tr>
        <?php
            }
        }
        ?>
    </table>

</div>
<a class="btn btn-success" href="template.php">KEMBALI</a>