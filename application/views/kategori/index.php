<div class="card shadow-sm">
    <div class="card-header bg-success mt-5 text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0">📂 Data Kategori</h5>
        <a href="<?= base_url('index.php/kategori/tambah') ?>" class="btn btn-primary btn-sm">+ Tambah Kategori</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kategori as $row): ?>
                        <tr>
                            <td><?= $row->id_kategori ?></td>
                            <td><?= $row->nama_kategori ?></td>
                            <td>
                                <a href="<?= base_url('index.php/kategori/edit/'.$row->id_kategori) ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= base_url('index.php/kategori/hapus/'.$row->id_kategori) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
