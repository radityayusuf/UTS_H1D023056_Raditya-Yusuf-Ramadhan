<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="text-primary">📋 Daftar Peminjaman</h3>
        <a href="<?= base_url('index.php/peminjaman/tambah') ?>" class="btn btn-success">➕ Tambah Peminjaman</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Nama Peminjam</th>
                    <th>Barang</th>
                    <th>Jumlah</th>
                    <th>Tanggal Pinjam</th>
                    <th>Status</th>
                    <th>Opsi</th>
                    <th>Tanggal Kembali</th> <!-- Tambahan kolom -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($peminjaman as $p): ?>
                    <tr>
                        <td><?= $p->nama_peminjam ?></td>
                        <td><?= $p->nama_barang ?></td>
                        <td><?= $p->jumlah ?></td>
                        <td><?= date('d-m-Y H:i', strtotime($p->tanggal_pinjam)) ?></td>
                        <td>
                            <span class="badge <?= $p->status == 'dipinjam' ? 'bg-warning text-dark' : 'bg-success' ?>">
                                <?= ucfirst($p->status) ?>
                            </span>
                        </td>
                        <td>
                            <?php if ($p->status == 'dipinjam'): ?>
                                <a href="<?= base_url('index.php/peminjaman/kembalikan/'.$p->id_pinjam) ?>" class="btn btn-sm btn-primary">
                                    🔄 Kembalikan
                                </a>
                            <?php else: ?>
                                <span class="text-muted">✓ Selesai</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($p->tanggal_kembali): ?>
                                <?= date('d-m-Y H:i', strtotime($p->tanggal_kembali)) ?>
                            <?php else: ?>
                                <span class="text-muted">-</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
