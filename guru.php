<?php

include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM guru");

?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Guru</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<nav class="navbar">

    <a href="index.php" class="logo">
        Guru
    </a>

    <div class="nav-menu">
        <a href="index.php">Data Siswa</a>
        <a href="guru.php" class="active">Data Guru</a>
        <a href="tambah_guru.php" class="nav-button">
            + Tambah Guru
        </a>
    </div>

</nav>

<div class="container">

    <h1>DATA GURU</h1>

    <p>Data guru sekolah</p>

    <a href="tambah_guru.php" class="btn-tambah">
        + Tambah Guru
    </a>

    <table>

        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama Guru</th>
            <th>Mata Pelajaran</th>
            <th>No HP</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;

        while ($data = mysqli_fetch_assoc($query)) {
        ?>

        <tr>

            <td><?= $no++; ?></td>

            <td><?= htmlspecialchars($data['nip']); ?></td>

            <td><?= htmlspecialchars($data['nama_guru']); ?></td>

            <td><?= htmlspecialchars($data['mata_pelajaran']); ?></td>

            <td><?= htmlspecialchars($data['no_hp']); ?></td>

            <td>

                <a href="edit_guru.php?id=<?= $data['id_guru']; ?>">
                    Edit
                </a>

                |

                <a href="hapus_guru.php?id=<?= $data['id_guru']; ?>"
                   onclick="return confirm('Yakin ingin menghapus guru ini?')">
                    Hapus
                </a>

            </td>

        </tr>

        <?php } ?>

    </table>

</div>

</body>

</html>