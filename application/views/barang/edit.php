<div class="card shadow-sm">
    <div class="card-header bg-warning text-dark">
        <h5 class="mb-0">✏️ Edit Barang</h5>
    </div>
    <div class="card-body">
        <form method="post">
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $barang->nama_barang ?>" required>
            </div>

            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" value="<?= $barang->stok ?>" required>
            </div>

            <div class="mb-3">
                <label for="id_kategori" class="form-label">Kategori</label>
                <select name="id_kategori" id="id_kategori" class="form-select" required>
                    <?php foreach ($kategori as $k): ?>
                        <option value="<?= $k->id_kategori ?>" <?= $k->id_kategori == $barang->id_kategori ? 'selected' : '' ?>>
                            <?= $k->nama_kategori ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="d-flex justify-content-between">
                <a href="<?= base_url('index.php/barang') ?>" class="btn btn-secondary">← Kembali</a>
                <button type="submit" class="btn btn-warning">💾 Update</button>
            </div>
        </form>
    </div>
</div>
