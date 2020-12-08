<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau belum?
if (isset($_POST['update'])) {

    // ambil data dari formulir
    $nomor_induk = $_POST['nomor_induk'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $birth_date = $_POST['birth_date'];
    $birth_place = $_POST['birth_place'];
    $gender = $_POST['gender'];
    $religion = $_POST['religion'];
    $address = $_POST['address'];
    $telp = $_POST['telp'];
    $class = $_POST['class'];

    // buat query update
    $sql = "UPDATE user SET nomor_induk='$nomor_induk', name='$name', email='$email', birth_date='$birth_date', birth_place='$birth_place', gender='$gender', religion='$religion', address='$address', telp='$telp', class='$class' WHERE nomor_induk=$nomor_induk";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman index.php
        header('Location: index.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
