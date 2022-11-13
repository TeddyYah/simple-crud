<div class="container-fluid px-4">
    <h1 class="mt-4">Mahasiswa</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">Mahasiswa</li>
        <li class="breadcrumb-item active">Index</li>
    </ol>

    <div class="row">
        <div class="col-lg-6 col-md-12">
            <?= $this->session->flashdata('msg') ?>
            <div class="card shadow">
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?= $mahasiswa['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label>NIM</label>
                            <input type="number" name="nim" class="form-control" value="<?= $mahasiswa['nim']; ?>">
                            <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            <input type="text" name="kelas" class="form-control" value="<?= $mahasiswa['kelas']; ?>">
                            <small class="form-text text-danger"><?= form_error('kelas'); ?></small>
                        </div>
                        <div class="form-group">
                            <label>Tugas</label>
                            <textarea type="text" name="tugas" cols="30" rows="3"
                                class="form-control"><?= $mahasiswa['tugas']; ?></textarea>
                            <small class="form-text text-danger"><?= form_error('tugas'); ?></small>
                        </div>
                        <button class="btn btn-primary mt-3" name="ubah" type="submit">Simpan</button>
                        <a href="<?= base_url('mahasiswa/index') ?>" class="btn btn-secondary mt-3">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>