<?php

include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query(
    $koneksi,
    "SELECT * FROM siswa WHERE id_siswa='$id'"
);

$data = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Edit Data Siswa</h1>

    <form action="update.php" method="POST">

        <input
            type="hidden"
            name="id_siswa"
            value="<?= $data['id_siswa']; ?>"
        >

        <label>NIS</label>
        <input
            type="text"
            name="nis"
            value="<?= htmlspecialchars($data['nis']); ?>"
            required
        >

        <label>Nama Siswa</label>
        <input
            type="text"
            name="nama"
            value="<?= htmlspecialchars($data['nama']); ?>"
            required
        >

        <label>Jenis Kelamin</label>

        <select name="jenis_kelamin">

            <option
                value="L"
                <?= $data['jenis_kelamin'] == 'L' ? 'selected' : ''; ?>
            >
                Laki-laki
            </option>

            <option
                value="P"
                <?= $data['jenis_kelamin'] == 'P' ? 'selected' : ''; ?>
            >
                Perempuan
            </option>

        </select>

        <label>Kelas</label>

        <input
            type="text"
            name="kelas"
            value="<?= htmlspecialchars($data['kelas']); ?>"
            required
        >

        <label>Jurusan</label>

        <input
            type="text"
            name="jurusan"
            value="<?= htmlspecialchars($data['jurusan']); ?>"
            required
        >

        <label>Alamat</label>

        <textarea name="alamat"><?= htmlspecialchars($data['alamat']); ?></textarea>

        <label>No. HP</label>

        <input
            type="text"
            name="no_hp"
            value="<?= htmlspecialchars($data['no_hp']); ?>"
        >

        <label>Email</label>
        
        <input 
            type="email" 
            name="email"
            value="<?= $data['email']; ?>"
        >

        <button type="submit">Update</button>

        <a href="index.php">Kembali</a>

    </form>

</div>

</body>
</html>
