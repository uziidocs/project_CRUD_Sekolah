<?php

include "koneksi.php";

$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
$kelas = isset($_GET['kelas']) ? $_GET['kelas'] : '';
$jurusan = isset($_GET['jurusan']) ? $_GET['jurusan'] : '';

$sql = "SELECT * FROM siswa 
        WHERE nis LIKE '%$keyword%'
        OR nama LIKE '%$keyword%'
        OR kelas LIKE '%$keyword%'";

if ($kelas != '') {
    $sql .= " AND kelas = '$kelas'";
}

if ($jurusan != '') {
    $sql .= " AND jurusan = '$jurusan'";
}

$query = mysqli_query($koneksi, $sql);  

?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<nav class="navbar">

    <a href="index.php" class="logo">
        Siswa
    </a>

    <div class="nav-menu">

        <a href="index.php" class="active">
            Data Siswa
        </a>

        <a href="guru.php">
            Data Guru
        </a>

        <a href="tambah.php" class="nav-button">
            + Tambah Data
        </a>

    </div>

</nav>

<div class="container">

    <h1>DATA SISWA</h1>
    <p>Aplikasi CRUD Data Siswa</p>

    <form method="GET" class="search-form">

        <input 
            type="text"
            name="keyword"
            placeholder="Cari nama siswa..."
            value="<?= htmlspecialchars($keyword); ?>"
        >

        <select name="kelas">
            <option value="">Semua Kelas</option>
            <option value="XI PPLG 1" <?= $kelas == 'XI PPLG 1' ? 'selected' : ''; ?>>
                XI PPLG 1
            </option>
            <option value="XI PPLG 2" <?= $kelas == 'XI PPLG 2' ? 'selected' : ''; ?>>
                XI PPLG 2
            </option>
            <option value="XI TKJ 1" <?= $kelas == 'XI TKJ 1' ? 'selected' : ''; ?>>
                XI TKJ 1
            </option>
        </select>

        <select name="jurusan">
            <option value="">Semua Jurusan</option>
            <option value="PPLG" <?= $jurusan == 'PPLG' ? 'selected' : ''; ?>>
                PPLG
            </option>
            <option value="TKJ" <?= $jurusan == 'TKJ' ? 'selected' : ''; ?>>
                TKJ
            </option>
        </select>

        <button type="submit">Cari</button>

        <a href="index.php">Reset</a>

    </form>

    <a href="tambah.php" class="btn-tambah">
        + Tambah Data
    </a>

    <table>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Email</th> 
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;

        while ($data = mysqli_fetch_assoc($query)) {
        ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= htmlspecialchars($data['nis']); ?></td>
            <td><?= htmlspecialchars($data['nama']); ?></td>
            <td><?= htmlspecialchars($data['jenis_kelamin']); ?></td>
            <td><?= htmlspecialchars($data['kelas']); ?></td>
            <td><?= htmlspecialchars($data['jurusan']); ?></td>
            <td><?= htmlspecialchars($data['alamat']); ?></td>
            <td><?= htmlspecialchars($data['no_hp']); ?></td>
            <td><?= htmlspecialchars($data['email']); ?></td>

            <td>
                <a href="detail.php?id=<?= $data['id_siswa']; ?>">
                    Detail
                </a>
                |
                <a href="edit.php?id=<?= $data['id_siswa']; ?>">
                    Edit
                </a>
                |
                <a href="hapus.php?id=<?= $data['id_siswa']; ?>"
                onclick="return confirm('Yakin ingin menghapus data ini?')">
                    Hapus
                </a>
            </td>
        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>
