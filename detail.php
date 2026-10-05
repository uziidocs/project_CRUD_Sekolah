<?php

include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id_siswa = '$id'");

$data = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Detail Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>DETAIL SISWA</h1>

    <p><b>NIS:</b> <?= htmlspecialchars($data['nis']); ?></p>

    <p><b>Nama:</b> <?= htmlspecialchars($data['nama']); ?></p>

    <p><b>Jenis Kelamin:</b> <?= htmlspecialchars($data['jenis_kelamin']); ?></p>

    <p><b>Kelas:</b> <?= htmlspecialchars($data['kelas']); ?></p>

    <p><b>Jurusan:</b> <?= htmlspecialchars($data['jurusan']); ?></p>

    <p><b>Alamat:</b> <?= htmlspecialchars($data['alamat']); ?></p>

    <p><b>No HP:</b> <?= htmlspecialchars($data['no_hp']); ?></p>

    <p><b>Email:</b> <?= htmlspecialchars($data['email']); ?></p>

    <br>

    <a href="index.php">← Kembali</a>

</div>

</body>

</html>