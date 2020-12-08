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

    <title>Tambah Data</title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
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
        <h1 class="display-4 text-center text-white" data-aos="fade-down" data-aos-duration="2000">Tambah Data<br>Sistem Informasi Good Choice</h1>
    </div>
    <!-- End Navbar -->

    <!-- Start Form -->
    <div class="container" data-aos="fade-up" data-aos-duration="2000">
        <form action="proses_insert.php" method="POST">
            <div class="form-group">
                <label for="nomor_induk">*Nomor Induk</label>
                <input type="text" name="nomor_induk" class="form-control" id="nomor_induk">
            </div>
            <div class="form-group">
                <label for="nama">*Nama</label>
                <input type="text" name="name" class="form-control" id="nama">
            </div>
            <div class="form-group">
                <label for="email">*Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="birth_date">*Tanggal Lahir</label>
                <input type="date" class="form-control" name="birth_date">
            </div>
            <div class="form-group">
                <label for="birth_place">*Tempat Lahir</label>
                <input type="text" class="form-control" name="birth_place" id="birth_place">
            </div>
            <div class="form-group">
                <label for="gender">*Jenis kelamin</label>
                <select class="form-control" name="gender">
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="religion">*Agama</label>
                <select class="form-control" id="religion" name="religion">
                    <option value="hindu">Hindu</option>
                    <option value="islam">Islam</option>
                    <option value="buddha">Buddha</option>
                    <option value="katolik">Katolik</option>
                    <option value="protestan">Protestan</option>
                    <option value="konghucu">Konghucu</option>
                </select>
            </div>
            <div class="form-group">
                <label for="address">*Alamat</label>
                <textarea class="form-control" name="address" id="address" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="telp">*No. Telp</label>
                <input type="number" class="form-control" name="telp">
            </div>
            <div class="form-group">
                <label for="class">*Kelas</label>
                <input type="text" class="form-control" name="class" id="class">
            </div>
            <button type="submit" name="tambah" class="btn btn-outline-success">Tambah</button>
        </form>
    </div>
    <!-- End Form -->

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