<?php
session_start();
include "../config/config.php";

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

// Tambah berita
if (isset($_POST['tambah'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    mysqli_query($conn, "INSERT INTO berita (judul, isi) VALUES ('$judul', '$isi')");
    header("Location: berita.php");
    exit;
}

// Hapus berita
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];

    mysqli_query($conn, "DELETE FROM berita WHERE id = '$id'");
    header("Location: berita.php");
    exit;
}

$data = mysqli_query($conn, "SELECT * FROM berita ORDER BY tanggal DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelola Berita</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #000;
            color: white;
            padding: 30px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: #0a1e38;
            padding: 25px;
            border-radius: 12px;
        }

        h1 {
            margin-bottom: 20px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            border: none;
            border-radius: 5px;
        }

        button, a.btn {
            display: inline-block;
            background: #dc2626;
            color: white;
            padding: 10px 14px;
            border: none;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-dark {
            background: #374151 !important;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
            background: white;
            color: black;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            vertical-align: top;
        }

        th {
            background: #111827;
            color: white;
        }

        .hapus {
            background: #991b1b;
            color: white;
            padding: 7px 10px;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="container">
    <a href="dashboard.php" class="btn btn-dark">← Kembali Dashboard</a>

    <h1>Kelola Berita</h1>

    <form method="POST">
        <input type="text" name="judul" placeholder="Judul berita" required>
        <textarea name="isi" rows="5" placeholder="Isi berita" required></textarea>
        <button type="submit" name="tambah">Tambah Berita</button>
    </form>

    <table>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($data)) {
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['judul']; ?></td>
            <td><?= $row['isi']; ?></td>
            <td><?= $row['tanggal']; ?></td>
            <td>
                <a class="hapus" href="berita.php?hapus=<?= $row['id']; ?>" onclick="return confirm('Yakin hapus berita ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>