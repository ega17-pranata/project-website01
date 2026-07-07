<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin | AMD Indonesia</title>
    <style>
        :root {
            --bg-page: #000000;
            --bg-panel: #0a1e38;
            --red: #a10707;
            --red-light: #dc2626;
            --text-main: #ffffff;
            --text-dim: #d9e0e6;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background:
                radial-gradient(circle at top left, rgba(161, 7, 7, 0.35), transparent 35%),
                radial-gradient(circle at bottom right, rgba(0, 80, 140, 0.2), transparent 40%),
                #000000;
            color: var(--text-main);
            min-height: 100vh;
        }

        .admin-wrapper {
            max-width: 1100px;
            margin: 30px auto;
            border: 1px solid #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(161, 7, 7, 0.5);
            background: #050505;
            
        }

        .admin-header {
            background: linear-gradient(120deg, #a10707 0%, #020608 45%, #a10707 100%);
            padding: 30px;
            border-bottom: 1px solid #a10707;
        }

        .admin-header h1 {
            font-size: 30px;
            margin-bottom: 8px;
        }

        .admin-header p {
            color: var(--text-dim);
        }

        .admin-content {
            padding: 30px;


            
        }

        .card {
            background: linear-gradient(145deg, #0a1e38, #050505);
            border: 1px solid #232323;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 20px;
        }

        .card h2 {
            margin-bottom: 10px;
            color: #ffffff;
        }

        .card p {
            color: var(--text-dim);
            margin-bottom: 20px;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 15px;
        }

        .menu-card {
            display: block;
            text-decoration: none;
            background: #111827;
            border: 1px solid #333;
            padding: 20px;
            border-radius: 10px;
            color: white;
            transition: 0.2s;
        }

        .menu-card:hover {
            background: #a10707;
            transform: translateY(-3px);
        }

        .menu-card strong {
            display: block;
            font-size: 18px;
            margin-bottom: 6px;
        }

        .menu-card span {
            font-size: 13px;
            color: #d9e0e6;
        }

        .top-actions {
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            background: #dc2626;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            margin-right: 8px;
        }

        .btn-dark {
            background: #374151;
        }

        .btn:hover {
            opacity: 0.85;
        }
    </style>
</head>
<body>

<div class="admin-wrapper">

    <div class="admin-header">
        <h1>Dashboard Admin AMD Indonesia</h1>
        <p>Selamat datang, <?= $_SESSION['nama_lengkap']; ?>. Silakan kelola data website melalui menu berikut.</p>
    </div>

    <div class="admin-content">

        <div class="card">
            <h2>Menu Pengelolaan Website</h2>

            <div class="menu-grid">
                <a href="berita.php" class="menu-card">
                    <strong>Kelola Berita</strong>
                    <span>Tambah, tampilkan, edit, dan hapus berita AMD.</span>
                </a>

                <a href="galeri.php" class="menu-card">
                    <strong>Kelola Galeri</strong>
                    <span>Mengelola data gambar pada halaman galeri.</span>
                </a>

                <a href="buku_tamu.php" class="menu-card">
                    <strong>Buku Tamu</strong>
                    <span>Melihat pesan dari pengunjung website.</span>
                </a>
            </div>

            <div class="top-actions">
                <a href="../index.php" class="btn">Lihat Website</a>
                <a href="logout.php" class="btn btn-dark">Logout</a>
            </div>
        </div>

    </div>

</div>

</body>
</html>