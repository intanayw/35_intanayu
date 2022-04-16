<div class="card">
    <div class="card-header">
        <a href="user.php" class="btn btn-info btn-icon-split">
            <span class="icon text-white-50">
                <i class="fa fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
    </div>
    <div class="card-body">
        <form action="simpan_catatan.php" method="post">
            <div class="form-group">
                <label>Pilih Tanggal</label>
                <input type="date" name="tanggal" required class="form-control" placeholder="Masukan Tanggal">
            </div>
            <div class="form-group">
                <label>Pilih Jam</label>
                <input type="time" name="jam" required class="form-control" placeholder="Masukan Jam">
            </div>
            <div class="form-group">
                <label>Pilih Lokasi</label>
                <input type="text" name="lokasi" required class="form-control" placeholder="Masukan Lokasi">
            </div>
            <div class="form-group">
                <label>Suhu Tubuh</label>
                <input type="number" name="suhu" required class="form-control" placeholder="Masukan Suhu Tubuh">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> SIMPAN</button>
                <button type="reset" class="btn btn-warning"><i class="fa fa-trash"></i> KOSONGKAN</button>
            </div>
        </form>
    </div>
</div>