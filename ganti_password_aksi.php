<?php
include '../koneksi.php';

$password_baru = $_POST['password_baru'];

$password_baru_hashed = password_hash($password_baru, PASSWORD_DEFAULT);

$stmt = mysqli_prepare($koneksi, "UPDATE admin SET password=?");
mysqli_stmt_bind_param($stmt, "s", $password_baru_hashed);
mysqli_stmt_execute($stmt);

header("location: ganti_password.php?pesan=oke");
?>