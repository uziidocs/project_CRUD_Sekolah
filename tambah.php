<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Tambah Data Siswa</h1>

    <form action="simpan.php" method="POST">

        <label>NIS</label>
        <input type="text" name="nis" required>

        <label>Nama Siswa</label>
        <input type="text" name="nama" required>

        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin" required>
            <option value="">-- Pilih --</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>

        <label>Kelas</label>
        <select name="kelas" required>
            <option value="">-- Pilih Kelas --</option>
            <option value="XI PPLG 1">XI PPLG 1</option>
            <option value="XI PPLG 2">XI PPLG 2</option>
            <option value="XI TKJ 1">XI TKJ 1</option>
            <option value="XI TKJ 2">XI TKJ 2</option>
        </select>

        <label>Jurusan</label>
        <select name="jurusan" required>
            <option value="">-- Pilih Jurusan --</option>
            <option value="PPLG">PPLG</option>
            <option value="TKJ">TKJ</option>
        </select>

        <label>Alamat</label>
        <textarea name="alamat"></textarea>

        <label>No. HP</label>
        <input type="text" name="no_hp">

        <label>Email</label>
        <input type="email" name="email">

        <button type="submit">Simpan</button>

        <a href="index.php">Kembali</a>

    </form>

</div>

</body>
</html>
