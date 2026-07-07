<?php
session_start();
include "../config/config.php";

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST['tambah'])) {
    $judul = $_POST['judul'];
    $gambar = $_POST['gambar'];

    mysqli_query($conn, "INSERT INTO galeri (judul, gambar) VALUES ('$judul', '$gambar')");
    header("Location: galeri.php");
    exit;
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    mysqli_query($conn, "DELETE FROM galeri WHERE id='$id'");
    header("Location: galeri.php");
    exit;
}

$data = mysqli_query($conn, "SELECT * FROM galeri ORDER BY tanggal DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelola Galeri</title>
    <style>
        body { font-family: Arial; background:#000; color:white; padding:30px; }
        .container { max-width:1000px; margin:auto; background:#0a1e38; padding:25px; border-radius:12px; }
        input { width:100%; padding:10px; margin-bottom:12px; }
        button, a { display:inline-block; background:#dc2626; color:white; padding:10px 14px; border:none; text-decoration:none; border-radius:5px; }
        .back { background:#374151; margin-bottom:20px; }
        table { width:100%; border-collapse:collapse; margin-top:20px; background:white; color:black; }
        th, td { padding:10px; border:1px solid #ccc; }
        th { background:#111827; color:white; }
        img { width:90px; border-radius:6px; }
    </style>
</head>
<body>

<div class="container">
    <a href="dashboard.php" class="back">← Kembali Dashboard</a>

    <h1>Kelola Galeri</h1>

    <form method="POST">
        <input type="text" name="judul" placeholder="Judul gambar" required>
        <input type="text" name="gambar" placeholder="Nama file gambar / URL gambar" required>
        <button type="submit" name="tambah">Tambah Galeri</button>
    </form>

    <table>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Gambar</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>

        <?php $no = 1; while ($row = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['judul']; ?></td>
            <td>
                <img src="../assets/foto/<?= $row['gambar']; ?>" alt="<?= $row['judul']; ?>">
                <br><?= $row['gambar']; ?>
            </td>
            <td><?= $row['tanggal']; ?></td>
            <td>
                <a href="galeri.php?hapus=<?= $row['id']; ?>" onclick="return confirm('Hapus gambar ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>