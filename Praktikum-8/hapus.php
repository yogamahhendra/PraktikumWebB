<?php

include("config.php");

if (isset($_GET['nomor_induk'])) {

    // ambil id dari query string
    $nomor_induk = $_GET['nomor_induk'];

    // buat query hapus
    $sql = "DELETE FROM user WHERE nomor_induk=$nomor_induk";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if ($query) {
        header('Location: index.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
