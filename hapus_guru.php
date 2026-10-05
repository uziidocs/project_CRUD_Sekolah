<?php

include "koneksi.php";

$id = $_GET['id'];

mysqli_query(
    $koneksi,
    "DELETE FROM guru WHERE id_guru='$id'"
);

header("Location: guru.php");
exit;

?>