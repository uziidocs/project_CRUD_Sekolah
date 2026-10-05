<?php

include "koneksi.php";

$nip = trim($_POST['nip']);
$nama_guru = trim($_POST['nama_guru']);
$mata_pelajaran = trim($_POST['mata_pelajaran']);
$no_hp = trim($_POST['no_hp']);

if ($nip == '') {
    die("NIP tidak boleh kosong");
}

if ($nama_guru == '') {
    die("Nama guru tidak boleh kosong");
}

if ($mata_pelajaran == '') {
    die("Mata pelajaran tidak boleh kosong");
}

if ($no_hp == '') {
    die("Nomor HP tidak boleh kosong");
}

if (!ctype_digit($no_hp)) {
    die("Nomor HP hanya boleh berisi angka");
}

$query = "INSERT INTO guru
(nip, nama_guru, mata_pelajaran, no_hp)
VALUES
('$nip', '$nama_guru', '$mata_pelajaran', '$no_hp')";

mysqli_query($koneksi, $query);

header("Location: guru.php");
exit;

?>