<div class="card shadow-sm col-md-6 mx-auto mt-4">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">➕ Tambah Kategori</h5>
    </div>
    <div class="card-body">
        <form method="post">
            <div class="mb-3">
                <label for="nama_kategori" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" required>
            </div>
            <div class="d-flex justify-content-between">
                <a href="<?= base_url('index.php/kategori') ?>" class="btn btn-secondary">← Kembali</a>
                <button type="submit" class="btn btn-success">💾 Simpan</button>
            </div>
        </form>
    </div>
</div>
