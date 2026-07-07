<?php
include "../config/config.php";

$nama  = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

mysqli_query($conn, "INSERT INTO buku_tamu (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')");

header("Location: ../index.php?status=buku_tamu_sukses");
exit;
?>