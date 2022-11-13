<div class="container-fluid px-4">
    <h1 class="mt-4">Mahasiswa</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">Mahasiswa</li>
        <li class="breadcrumb-item active">Index</li>
    </ol>

    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="card shadow">
                <div class="card-body">
                    <form action="<?= base_url('mahasiswa/simpanData') ?>" method="post">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>NIM</label>
                            <input type="number" name="nim" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            <input type="text" name="kelas" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Tugas</label>
                            <textarea name="tugas" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-primary mt-3" type="submit">Simpan</button>
                        <a href="<?= base_url('mahasiswa/index') ?>" class="btn btn-secondary mt-3">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>