    
    <div class="container">
    
    <form class="mt-3 mx-auto" action="daftar.php" method="post" enctype="multipart/form-data">
        <h4>Tambah Nasabah Baru</h4>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="nama">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="alamat" >
        </div>
        <div class="form-group">
            <label for="nomor_hp">No Hp</label>
            <input type="text" class="form-control" name="nomor_hp" placeholder="nomor_hp" >
        </div>
        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" class="form-control-file" name="file" placeholder="foto">
        </div>
        <input type="submit" value="Daftar" class="btn btn-primary mb-2">
        
    </form>
    </div>
