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
                    <div class="card">
                        <div class="card-header">
                            Detail Data Mahasiswa
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Nama : <?= $mahasiswa['nama']; ?></h5>
                            <h6 class="card-text">NIM : <?= $mahasiswa['nim']; ?></h6>
                            <p class="card-text">Kelas : <?= $mahasiswa['kelas']; ?></p>
                            <p class="card-text">Tugas : <?= $mahasiswa['tugas']; ?></p>
                            <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>