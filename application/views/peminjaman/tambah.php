<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Tambah Peminjaman</h4>
                </div>
                <div class="card-body">
                    <?php if ($this->session->flashdata('error')): ?>
                        <div class="alert alert-danger text-center">
                            <?= $this->session->flashdata('error') ?>
                        </div>
                    <?php endif; ?>

                    <form method="post">
                        <div class="mb-3">
                            <label for="nama_peminjam" class="form-label">Nama Peminjam</label>
                            <input type="text" name="nama_peminjam" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="id_barang" class="form-label">Barang</label>
                            <select name="id_barang" class="form-select" required>
                                <option value="">-- Pilih Barang --</option>
                                <?php foreach ($barang as $b): ?>
                                    <option value="<?= $b->id_barang ?>">
                                        <?= $b->nama_barang ?> (Stok: <?= $b->stok ?>)
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="number" name="jumlah" class="form-control" min="1" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Pinjam</button>
                    </form>

                    <div class="text-center mt-3">
                        <a href="<?= base_url('index.php/peminjaman') ?>" class="btn btn-link">← Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
