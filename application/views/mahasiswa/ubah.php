<div class="container">

<div class="row mt-3">
    <div class="col-md-6">
        <div class="card">
        <div class="card-header">
            Form ubah data mahasiswa
        </div>
        <div class="card-body">
            <form action="" method="post">
                <input type="hidden" name="id_mahasiswa" value=<?= $mahasiswa['id_mahasiswa']; ?>>
                <div class="form-group">
                    <label for="nama">Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan nama..." value=<?= $mahasiswa['nama']; ?>>
                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" name="nim" id="nim" value=<?= $mahasiswa['nim']; ?>>
                    <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                </div>
                <div class="form-group">
                <label for="jurusan">Jurusan</label>
                    <select class="form-control" id="jurusan" name="jurusan">
                     <?php foreach( $jurusan as $j ) : ?>
                        <?php if ( $j == $mahasiswa['jurusan'] ) : ?>
                            <option value="<?= $j; ?>" selected><?= $j; ?></option>
                        <?php else : ?>
                            <option value="<?= $j; ?>"><?= $j; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tempat_tinggal">Tempat Tinggal</label>
                    <input type="text" class="form-control" name="tempat_tinggal" id="tempat_tinggal" value=<?= $mahasiswa['tempat_tinggal']; ?>>
                    <small class="form-text text-danger"><?= form_error('tempat_tinggal'); ?></small>
                </div>
                <div class="form-group">
                <label for="jenis_kelamin">Gender</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                    <?php foreach( $jenis_kelamin as $jk ) : ?>
                        <?php if ( $jk == $mahasiswa['jenis_kelamin']) : ?>
                            <option value="<?= $jk; ?>" selected><?= $jk; ?></option>
                        <?php else : ?>
                            <option value="<?= $jk; ?>"><?= $jk; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" name="tambag" class="btn btn-primary float-right">Ubah Data</button>
            </form>
         </div>
        </div>
    </div>
</div>