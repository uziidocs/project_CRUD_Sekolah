<?php
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>DATA SISWA</h1>
    <p>Aplikasi CRUD Data Siswa</p>

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

            <td>
                <a href="edit.php?id=<?= $data['id_siswa']; ?>">
                    Edit
                </a>

                |

                <a
                    href="hapus.php?id=<?= $data['id_siswa']; ?>"
                    onclick="return confirm('Yakin ingin menghapus data ini?')"
                >
                    Hapus
                </a>
            </td>
        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>
