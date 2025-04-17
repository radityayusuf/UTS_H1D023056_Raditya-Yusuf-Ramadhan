<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Inventaris Barang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            flex: 1;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">Inventaris</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="<?= base_url('index.php/barang') ?>">Barang</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('index.php/kategori') ?>">Kategori</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('index.php/peminjaman') ?>">Peminjaman</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Konten Utama -->
<div class="container mt-4 content">
    <div class="alert alert-info shadow-sm p-4 mb-4 rounded text-center">
        <h4 class="alert-heading">📦 Sistem Inventaris & Peminjaman Barang</h4>
        <p>
            Aplikasi ini dirancang untuk membantu pengelolaan barang inventaris di lingkungan institusi seperti sekolah, kantor, atau organisasi.
            Sistem ini mempermudah proses pendataan barang, peminjaman, pengembalian, serta pelaporan barang yang sedang digunakan.
        </p>
        <hr>
        <p class="mb-0">
            Dengan fitur-fitur seperti validasi stok otomatis dan laporan real-time, pengguna dapat memantau ketersediaan barang dan menghindari peminjaman berlebih. Hal ini membuat proses manajemen inventaris menjadi lebih efisien, transparan, dan mudah diakses.
        </p>
    </div>
</div>

<!-- Footer -->
<footer class="text-center text-muted py-3 bg-light">
    <p>&copy; <?= date('Y') ?> - Inventaris Barang App By Raditya</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
