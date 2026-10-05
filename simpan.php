<?php

include "koneksi.php";

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

$query = "INSERT INTO siswa
          (nis, nama, jenis_kelamin, kelas, jurusan, alamat, no_hp)
          VALUES
          ('$nis', '$nama', '$jenis_kelamin', '$kelas', '$jurusan', '$alamat', '$no_hp')";

mysqli_query($koneksi, $query);

header("Location: index.php");

?>
