<?php
session_start();
include "../config/config.php";

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

$data = mysqli_query($conn, "SELECT * FROM buku_tamu ORDER BY tanggal DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Buku Tamu</title>
    <style>
        body { font-family: Arial, sans-serif; background:#000; color:white; padding:30px; }
        .container { max-width:1000px; margin:auto; background:#0a1e38; padding:25px; border-radius:12px; }
        table { width:100%; border-collapse:collapse; margin-top:20px; background:white; color:black; }
        th, td { padding:10px; border:1px solid #ccc; vertical-align:top; }
        th { background:#111827; color:white; }
        a { display:inline-block; background:#374151; color:white; padding:10px 14px; text-decoration:none; border-radius:5px; }
    </style>
</head>
<body>

<div class="container">
    <a href="dashboard.php">← Kembali Dashboard</a>
    <h1>Data Buku Tamu</h1>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Pesan</th>
            <th>Tanggal</th>
        </tr>

        <?php $no = 1; while ($row = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['pesan']; ?></td>
            <td><?= $row['tanggal']; ?></td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>