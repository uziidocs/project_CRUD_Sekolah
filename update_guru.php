<?php

include "koneksi.php";

$id = $_POST['id_guru'];

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

$query = "UPDATE guru SET
    nip='$nip',
    nama_guru='$nama_guru',
    mata_pelajaran='$mata_pelajaran',
    no_hp='$no_hp'
    WHERE id_guru='$id'";

mysqli_query($koneksi, $query);

header("Location: guru.php");
exit;

?>