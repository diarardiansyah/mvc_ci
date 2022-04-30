<div class="container">
    <div class="row-mt-3">
        <div class="col-md-6">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Detail Data Mahasiswa</h5>
                <h6 class="card-subtitle mb-2 text-muted">Nama : <?= $mahasiswa['nama']; ?></h6>
                <p class="card-text">NIM : <?= $mahasiswa['nim']; ?></p>
                <p class="card-text">Jurusan : <?= $mahasiswa['jurusan']; ?></p>
                <p class="card-text">Domisili : <?= $mahasiswa['tempat_tinggal']; ?></p>
                <p class="card-text">Jenis Kelamin : <?= $mahasiswa['jenis_kelamin']; ?></p>
                <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary float-right">Kembali</a>
            </div>
        </div>
        </div>
    </div>
</div>