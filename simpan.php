<?php
include "koneksi.php";

$nis = trim($_POST['nis']);
$nama = trim($_POST['nama']);
$jenis_kelamin = $_POST['jenis_kelamin'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$alamat = trim($_POST['alamat']);
$no_hp = trim($_POST['no_hp']);
$email = trim($_POST['email']);

if ($nis == '') {
    echo "<script>
        alert('NIS tidak boleh kosong!');
        window.history.back();
    </script>";
    exit;
}

if ($nama == '') {
    echo "<script>
        alert('Nama tidak boleh kosong!');
        window.history.back();
    </script>";
    exit;
}

if ($kelas == '') {
    echo "<script>
        alert('Kelas harus dipilih!');
        window.history.back();
    </script>";
    exit;
}

if ($jurusan == '') {
    echo "<script>
        alert('Jurusan harus dipilih!');
        window.history.back();
    </script>";
    exit;
}

if ($no_hp != '' && !ctype_digit($no_hp)) {
    echo "<script>
        alert('Nomor HP hanya boleh berisi angka!');
        window.history.back();
    </script>";
    exit;
}

$query = "INSERT INTO siswa
( nis, nama, jenis_kelamin, kelas, jurusan, alamat, no_hp, email )
VALUES
( '$nis', '$nama', '$jenis_kelamin', '$kelas', '$jurusan', '$alamat', '$no_hp', '$email' )";

mysqli_query($koneksi, $query);

echo "<script>
    alert('Data siswa berhasil ditambahkan!');
    window.location='index.php';
</script>";
?>