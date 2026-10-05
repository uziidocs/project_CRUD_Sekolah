<?php

include "koneksi.php";

$id = $_POST['id_siswa'];

$nis = trim($_POST['nis']);
$nama = trim($_POST['nama']);
$jenis_kelamin = $_POST['jenis_kelamin'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$alamat = trim($_POST['alamat']);
$no_hp = trim($_POST['no_hp']);
$email = trim($_POST['email']);

if ($nis == '') {
    die("NIS tidak boleh kosong");
}

if ($nama == '') {
    die("Nama tidak boleh kosong");
}

if ($kelas == '') {
    die("Kelas harus dipilih");
}

if ($jurusan == '') {
    die("Jurusan harus dipilih");
}

if ($no_hp != '' && !ctype_digit($no_hp)) {
    die("Nomor HP hanya boleh berisi angka");
}

$query = "UPDATE siswa SET
            nis='$nis',
            nama='$nama',
            jenis_kelamin='$jenis_kelamin',
            kelas='$kelas',
            jurusan='$jurusan',
            alamat='$alamat',
            no_hp='$no_hp',
            email = '$email'
          WHERE id_siswa='$id'";

mysqli_query($koneksi, $query);

header("Location: index.php");
exit;

?>
