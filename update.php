<?php

include "koneksi.php";

$id = $_POST['id_siswa'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

$query = "UPDATE siswa SET
            nis='$nis',
            nama='$nama',
            jenis_kelamin='$jenis_kelamin',
            kelas='$kelas',
            jurusan='$jurusan',
            alamat='$alamat',
            no_hp='$no_hp'
          WHERE id_siswa='$id'";

mysqli_query($koneksi, $query);

header("Location: index.php");

?>
