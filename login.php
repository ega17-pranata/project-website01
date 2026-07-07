<?php
session_start();
include "../config/config.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username'");

if(mysqli_num_rows($query) > 0){

    $data = mysqli_fetch_assoc($query);

    if(password_verify($password, $data['password'])){

        $_SESSION['admin'] = $data['username'];
        $_SESSION['nama_lengkap'] = $data['nama_lengkap'];

        header("Location: ../admin/dashboard.php");
        exit;

    }else{

        header("Location: ../index.php?login=gagal");
        exit;

    }

}else{

    header("Location: ../index.php?login=gagal");
    exit;

}
?>