<div class="container-fluid px-4">
    <h1 class="mt-4">Mahasiswa</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">Mahasiswa</li>
        <li class="breadcrumb-item active">Index</li>
    </ol>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <?= $this->session->flashdata('msg') ?>
            <div class="card shadow">
                <div class="card-body">
                    <a href="<?= base_url('mahasiswa/tambah') ?>" class="btn btn-primary mb-3">Tambah Mahasiswa</a>
                    <table class="table table-bordered table-sm table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Kelas</th>
                                <th>Tugas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php date_default_timezone_set('Asia/Jakarta');
                            $no = 1;foreach($mahasiswa as $m) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $m['nama'] ?></td>
                                <td><?= $m['nim'] ?></td>
                                <td><?= $m['kelas'] ?></td>
                                <td><?= $m['tugas'] ?></td>
                                <td>
                                    <a href="<?= base_url('mahasiswa/detailData/' . $m['id']) ?>"
                                        class="btn btn-sm btn-info">Detail</a>
                                    <a href="<?= base_url('mahasiswa/editData/' . $m['id']) ?>"
                                        class="btn btn-sm btn-success">Edit</a>
                                    <a href="<?= base_url('mahasiswa/hapusData/' . $m['id']) ?>"
                                        onclick="return confirm('Hapus data ini?')"
                                        class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>