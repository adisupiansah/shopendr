<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}


require "function.php";

$komen = query("SELECT * FROM tbkomentar");



if (isset($_POST['kirimKomentar'])) {
    // cek apkah komentar berhasil ditambahkan atw tidak ?
    if (komentar($_POST) > 0) {
        echo "
                <script>
                    alert('komentar gagal !');
                    document.location.href = 'index.php';
                </script>
            ";
    } else {
        echo "
            <script>
                alert('komentar berhasil !');
                document.location.href = 'index.php';
            </script>
        ";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/ndr-logo.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Ndrshop</title>
</head>

<body>

    <!-- navbar -->

    <nav class="fuck navbar shadow-lg mb-3 rounded" style="background-color: #974EC3;">
        <div class="container-fluid">
            <a class="navbar-brand text-light"><img src="img/ndr-logo.png" alt="" width="45">ndrshoop</a>
            <form class="d-flex" action="" method="">
                <a class="btn mx-1 text-light " type="submit" href="logout.php" style="margin-top: -5px;"><i class="bi bi-box-arrow-left" style="font-size: 20px; margin-right: -13px;"></i></a>
                <p class="text-light mt-1 mx-1"><?= $_SESSION['username']; ?></p>

                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
            </form>
        </div>
    </nav>

    <!-- menubar -->
    <nav class="navbar respon">
        <div class="container justify-content-center align-items-center text-center">
            <ul class="nav justify-content-center ">
                <li class="nav-item">
                    <a class="nav-link active text-dark" aria-current="page" href="kontak.php"><i class="icon bi bi-people"></i><br>Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="lokasi.php"><i class="icon bi bi-geo-alt"></i><br>Lokasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#toko"><i class="icon bi bi-cart2"></i><br>Toko</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#nama"><i class="icon bi bi-chat-dots"></i><br>Komentar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="help.php"><i class="icon bi bi-question-circle"></i><br>Help</a>
                </li>
            </ul>
        </div>
    </nav>


    <!-- carousel, promisi produk -->
    <div class="container text-center d-flex justify-content-center mt-4">
        <div id="myCarousel" class="carousel slide mt-2" data-bs-ride="carousel" style="width: 40%; height:20%;">
            <!-- Tombol Navigasi Kiri/Kanan -->
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

            <!-- Gambar Carousel -->
            <div class="carousel-inner">
                <!-- gambar 1 -->
                <div class="carousel-item active">
                    <img src="img/carousel-1.jpeg" alt="Gambar 1" class="d-block w-100">
                </div>

                <!-- gambar 2 -->
                <div class="carousel-item">
                    <img src="img/carousel-2.jpeg" alt="Gambar 2" class="d-block w-100">
                </div>

                <!-- gambar 3 -->
                <div class="carousel-item">
                    <img src="img/carousel-3.jpeg" alt="Gambar 3" class="d-block w-100">
                </div>

                <!-- gambar 4 -->
                <div class="carousel-item">
                    <img src="img/carousel-4.jpeg" alt="Gambar 3" class="d-block w-100">
                </div>

                <!-- gambar 5 -->
                <div class="carousel-item">
                    <img src="img/carousel-5.jpeg" alt="Gambar 3" class="d-block w-100">
                </div>

                <!-- gambar 6 -->
                <div class="carousel-item">
                    <img src="img/carousel-6.jpeg" alt="Gambar 3" class="d-block w-100">
                </div>

                <!-- gambar 7 -->
                <div class="carousel-item">
                    <img src="img/carousel-7.jpeg" alt="Gambar 3" class="d-block w-100">
                </div>

            </div>
        </div>
    </div>

    <!-- tombol pencarian -->
    <div class="container ">
        <div class="row">
            <div class="col-md-12 text-center">
                <form class="d-flex mt-5" role="search">
                    <input class="form-control me-2" type="search" placeholder="Mohon maaf...fitur pencarian dalam masa perbaikan." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>

    <!-- card-produk -->
    <div class="container">

        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3" id="toko">
            <div class="col">
                <div class="card h-100 shadow-lg mb-3 rounded">
                    <!-- produk 1 -->
                    <img src="img/produk1.jpeg" class="card-img-top" alt="..." s>
                    <div class="card-body">
                        <h5 class="card-title">Pastel Serunding</h5>
                        <p class="card-text"> Harga : Rp. 13.000</p>
                        <a href="detailproduk/produk1.php" class="btn btn-success text-light" style="background-color: #974EC3;">
                        CheckOut <i class="bi bi-cart2"></i></a>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-lg mb-3 rounded">
                    <!-- produk 2 -->
                    <img src="img/produk-2.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Semprong Goreng</h5>
                        <p class="card-text"> Harga : Rp. 13.000</p>
                        <a href="detailproduk/produk2.php" class="btn btn-success text-light" style="background-color: #974EC3;">
                        CheckOut <i class="bi bi-cart2"></i>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-lg mb-3 rounded">
                    <!-- produk 3 -->
                    <img src="img/produk3.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dodol Ketan</h5>
                        <p class="card-text"> Harga : Rp. 13.000</p>
                        <a href="detailproduk/produk3.php" class="btn btn-success text-light" style="background-color: #974EC3;">
                        CheckOut <i class="bi bi-cart2"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
            <div class="col">
                <div class="card h-100 shadow-lg mb-3 rounded">
                    <!-- produk 4 -->
                    <img src="img/produk-4.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kue bangkit</h5>
                        <p class="card-text"> Harga : Rp 13.000</p>
                        <a href="detailproduk/produk4.php" class="btn btn-success text-light" style="background-color: #974EC3;">
                        CheckOut <i class="bi bi-cart2"></i>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-lg mb-3 rounded">
                    <!-- produk 5 -->
                    <img src="img/produk55.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bahulu Lembut</h5>
                        <p class="card-text"> Harga : Rp. 13.000</p>
                        <a href="detailproduk/produk5.php" class="btn btn-success text-light" style="background-color: #974EC3;">
                        CheckOut <i class="bi bi-cart2"></i>
                        </a>
                    </div>

                </div>
            </div>


        </div>
    </div>

    <!-- komentar pelanggan-->
    <div class="container mt-5">
        <h1>Komentar Pelanggan</h1>
        <form action="" method="post">
            <div class="row">
                <div class="col-lg-8">
                
                        <label for="nama" style="font-weight: 600;">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control mt-2" placeholder="isi nama" required>

              
              
                        <label for="komentar" style="font-weight: 600;">Komentar :</label>
                        <textarea class="form-control mt-2" placeholder="Komentar anda..." id="komentar" name="komentar" style="height: 200px" required></textarea>
                
                  
                        <button class="btn btn-primary text-light mt-2 shadow-lg mb-3 rounded " type="submit" name="kirimKomentar">Kirim Komentar</button>
                

                </div>
            </div>

        </form>
    </div>


    <!-- hasil komentar -->
    <div class="container">
        <table class="table table-striped">
            <?php $nomr = 1; ?>
            <?php foreach ($komen as $row) : ?>

                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama :</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?= $nomr; ?></th>
                        <td><?= $row["nama"]; ?></td>


                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <th>Komentar :</th>

                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td><?= $row["komentar"]; ?></td>

                    </tr>

                </tbody>

                <?php $nomr++; ?>
            <?php endforeach; ?>
        </table>

    </div>





    <!-- footer -->
    <footer class="text-light text-center mt-5" style="height: 40%; background-color:#272829;">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <h5>Alamat</h5>
                    <p>Kepulauan Riau, Kabupaten Karimun, Kecamatan Meral, Kelurahan Baran Timur, Baran 1, Jln. Pantai Pak Imam RT03/RW03</p>
                </div>
                <div class="col-md-6">
                    <h5>Kontak Kami</h5>
                    <a class="text-light fw-normal" href="#" style="text-decoration: none;"><img src="img/logo-wa.png" alt="" width="30">WhatsApp : 0858-3429-2838</a><br>
                    <a class="text-light fw-normal" href="#" style="text-decoration: none;"><img src="img/logo-ig.png" alt="" width="30">Instagram : @foodies_ndr</a>
                </div>
                <section>
                    <div class="container">
                        <div class="col-12">
                            <p class="text-light mt-5"><span class="developer" onclick="redirIg()">Developer by Teh botol</span></p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </footer>

    <script>
        function redirIg() {
            window.location.href = "https://www.instagram.com/adi.spiansyh/";
        }
    </script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>