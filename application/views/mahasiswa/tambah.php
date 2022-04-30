<div class="container">

<div class="row mt-3">
    <div class="col-md-6">
        <div class="card">
        <div class="card-header">
            Form tambah data mahasiswa
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="nama">Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan nama...">
                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" name="nim" id="nim">
                    <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                </div>
                <div class="form-group">
                <label for="jurusan">Jurusan</label>
                    <select class="form-control" id="jurusan" name="jurusan">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Kimia">Teknik Kimia</option>
                        <option value="Teknik Industri">Teknik Industri</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Manajemen">Manajemen</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tempat_tinggal">Tempat Tinggal</label>
                    <input type="text" class="form-control" name="tempat_tinggal" id="tempat_tinggal">
                    <small class="form-text text-danger"><?= form_error('tempat_tinggal'); ?></small>
                </div>
                <div class="form-group">
                <label for="jenis_kelamin">Gender</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                        <option value="Laki Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <button type="submit" name="tambag" class="btn btn-primary float-right">Tambah Data</button>
            </form>
         </div>
        </div>
    </div>
</div>