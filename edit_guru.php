<?php

include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query(
    $koneksi,
    "SELECT * FROM guru WHERE id_guru='$id'"
);

$data = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Guru</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Edit Data Guru</h1>

    <form action="update_guru.php" method="POST">

        <input type="hidden"
               name="id_guru"
               value="<?= $data['id_guru']; ?>">

        <label>NIP</label>

        <input type="text"
               name="nip"
               value="<?= htmlspecialchars($data['nip']); ?>"
               required>


        <label>Nama Guru</label>

        <input type="text"
               name="nama_guru"
               value="<?= htmlspecialchars($data['nama_guru']); ?>"
               required>


        <label>Mata Pelajaran</label>

        <input type="text"
               name="mata_pelajaran"
               value="<?= htmlspecialchars($data['mata_pelajaran']); ?>"
               required>


        <label>No HP</label>

        <input type="text"
               name="no_hp"
               value="<?= htmlspecialchars($data['no_hp']); ?>"
               required>


        <button type="submit">
            Update
        </button>

        <a href="guru.php">
            Kembali
        </a>

    </form>

</div>

</body>

</html>