<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['tambah'])) {

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

    // buat query insert
    $sql = "INSERT INTO user (nomor_induk, name, email, birth_date, birth_place, gender, religion, address, telp, class) VALUES ('$nomor_induk','$name','$email','$birth_date','$birth_place','$gender','$religion','$address','$telp','$class')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
