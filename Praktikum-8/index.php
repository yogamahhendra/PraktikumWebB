<!doctype html>
<html lang="en">

<head>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fef9209b86.js" crossorigin="anonymous"></script>

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="dashboard.css">

    <!-- Type JS -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Koneksi Database -->
    <?php include("config.php"); ?>

    <title>Dashboard</title>
</head>

<body>
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent border-bottom" data-aos="fade-right" data-aos-duration="2000">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-book-reader"></i>&nbsp;Good Choice</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data_insert.php">Tambah Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-block btn-outline-danger" href="index.php">KELUAR</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid search-wrapper bg-dark">
        <h1 class="display-4 text-center text-white" data-aos="fade-down" data-aos-duration="2000">Selamat Datang<br>Di Sistem Informasi Good Choice</h1>
    </div>
    <!-- End Navbar -->


    <!-- Start Table -->
    <div class="container" data-aos="fade-up" data-aos-duration="2000">
        <div class="page-header clearfix">
            <a href="data_insert.php" class="btn btn-outline-primary mb-3">Tambah Data</a>
        </div>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">No Induk</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Kelas</th>
                    <th scope="col" colspan="2">Pengaturan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM user";
                $query = mysqli_query($db, $sql);

                while ($siswa = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>" . $siswa['nomor_induk'] . "</td>";
                    echo "<td>" . $siswa['name'] . "</td>";
                    echo "<td>" . $siswa['email'] . "</td>";
                    echo "<td>" . $siswa['birth_date'] . "</td>";
                    echo "<td>" . $siswa['birth_place'] . "</td>";
                    echo "<td>" . $siswa['gender'] . "</td>";
                    echo "<td>" . $siswa['religion'] . "</td>";
                    echo "<td>" . $siswa['address'] . "</td>";
                    echo "<td>" . $siswa['telp'] . "</td>";
                    echo "<td>" . $siswa['class'] . "</td>";
                    echo "<td><a class='badge badge-warning' href='data_update.php?nomor_induk=" . $siswa['nomor_induk'] . "'>Edit</a></td>";
                    echo "<td><a class='badge badge-danger' href='hapus.php?nomor_induk=" . $siswa['nomor_induk'] . "'>Hapus</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <p>Jumlah Siswa adalah <?php echo mysqli_num_rows($query) ?></p>

        <!-- Start Status Insert Data -->
        <?php if (isset($_GET['status'])) : ?>
            <p>
                <?php
                if ($_GET['status'] == 'sukses') {
                    echo "<h5 class='text-info'>Data Berhasil Ditambahkan</h5>";
                } else {
                    echo "<h5 class='text-danger'>Data Gagal Ditambahkan</h5>";
                }
                ?>
            </p>
        <?php endif; ?>
        <!-- End Status Insert Data -->
    </div>
    <!-- End Table -->


    <!-- Start Footer -->
    <div class="footer">
        <p class="text-secondary">&copy; 2020 - All Rights Reserved by Good Choice Team</p>
    </div>
    <!-- End Footer -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>