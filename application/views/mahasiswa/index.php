<div class="container">

<div class="row mt-3">
    <div class="col-md-8">
    <?php if( $this->session->flashdata('flash')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data mahasiswa
            <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
      </div>
    </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data mahasiswa...." name="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
            </form>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
        <h3>Data Mahasiswa</h3>
        <?php if( empty($mahasiswa) ) : ?>
            <div class="alert alert-danger" role="alert">
            Data Mahasiswa Tidak Ditemukan !!
            </div>
        <?php endif; ?>
        <ul class="list-group">
            <?php foreach ( $mahasiswa as $mhs ) : ?>
                <li class="list-group-item"><?= $mhs['nama']; ?>
                    <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id_mahasiswa']; ?>" class='badge badge-danger float-right'onclick="return confirm('Yakin hapus data ini ?');">hapus</a>
                    <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id_mahasiswa']; ?>" class='badge badge-success float-right'>edit</a>
                    <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id_mahasiswa']; ?>" class='badge badge-primary float-right' >detail</a>
                </li>
            <?php endforeach; ?>
         </ul>
        </div>
      </div>
    </div>