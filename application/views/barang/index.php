<div class="d-flex justify-content-between align-items-center mx-4 mt-4 mb-3">
    <h3>📦 Data Barang</h3>
    <a href="<?= base_url('index.php/barang/tambah') ?>" class="btn btn-primary">+ Tambah Barang</a>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark text-center">
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($barang as $b): ?>
            <tr>
                <td class="text-center"><?= $b->id_barang ?></td>
                <td><?= $b->nama_barang ?></td>
                <td class="text-center"><?= $b->stok ?></td>
                <td><?= $b->nama_kategori ?></td>
                <td class="text-center">
                    <a href="<?= base_url('index.php/barang/edit/'.$b->id_barang) ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="<?= base_url('index.php/barang/hapus/'.$b->id_barang) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus barang ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
