<!DOCTYPE html>
<html>

<head>
    <title>Tambah Guru</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Tambah Data Guru</h1>

    <form action="simpan_guru.php" method="POST">

        <label>NIP</label>
        <input type="text" name="nip" required>

        <label>Nama Guru</label>
        <input type="text" name="nama_guru" required>

        <label>Mata Pelajaran</label>
        <input type="text" name="mata_pelajaran" required>

        <label>No HP</label>
        <input type="text" name="no_hp" required>

        <button type="submit">
            Simpan
        </button>

        <a href="guru.php">
            Kembali
        </a>

    </form>

</div>

</body>

</html>