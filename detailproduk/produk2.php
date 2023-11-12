<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="/ndrshoop/img/ndr-logo.png">
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <title>Ndrshop</title>
</head>

<body>


    <!-- navbar -->

    <nav class="navbar " style="background-color: #BC7AF9;">
        <div class="container-fluid">
            <a class="navbar-brand text-light"><img src="/ndrshoop/img/ndr-logo.png" alt="" width="45">ndrshoop</a>
            <form class="d-flex" action="" method="">
                <a class="btn mx-2 text-light " style="background-color: #B0578D;" type="submit" href="/ndrshoop/index.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                    </svg>
                    Belanja lagi</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" class="text-dark" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                </svg>
            </form>

        </div>
    </nav>

    <!-- gambar produk -->

    <div class="container mt-5">
        <div class="row">
            <!-- Bagian Kiri (6 grid) -->
            <div class="col-md-6" data-aos="fade-right" data-aos-delay="300">
                <!-- Gambar atau konten di sini -->
                <img src="/ndrshoop/img/produk-2.jpeg" alt="Gambar Anda" class="img-fluid">
            </div>

            <!-- Bagian Kanan (6 grid) -->
            <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
                <!-- Keterangan Gambar -->
                <h2>Semprong Goreng</h2>
                <p> <b> Komposisi : </b> tepung terigu, kelapa parut, cabe giling, gula merah, serai, udang kering, penyedap rasa, bawang putih, bawang merah</p>
                <p>Banyak belanja : <span id="jumlah"></span></p>
                <p>Total Harga :Rp. <span id="harga"></span></p>

                <!-- tombol kurangi produk -->
                <button class="btn text-light mt-3" style="background-color: #B0578D;" onclick="kurangiProduk()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag-dash" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M5.5 10a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z" />
                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                    </svg>
                    Kurangi keranjang
                </button>

                <!-- tombol tambah produk -->
                <button class="btn text-light mt-3" style="background-color: #B0578D;" onclick="tambahProduk('Semprong Goreng')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                    </svg>
                    tambah keranjang
                </button>
                <br>
                <button class="btn mt-5 " onclick="kirimPesanan()" style="background-color: #B0578D; color:aliceblue;">Kirim Pesanan
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="text-white" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                        <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z" />
                    </svg>
                </button>

            </div>
        </div>
    </div>




    <!-- footer -->
    <footer class="text-light text-center mt-5" style="height: 40%; background-color:#BC7AF9;">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <h5>Alamat</h5>
                    <p>Jln. Jenderal Ahmad Yani no 1<br>Kecamatan Karimun, Kel. Sei lakam</p>
                </div>
                <div class="col-md-6">
                    <h5>Kontak Kami</h5>
                    <a class="text-light fw-normal" href="#" style="text-decoration: none;"><img src="/ndrshoop/img/logo-wa.png" alt="" width="30">WhatsApp : 0858-3429-2838</a><br>
                    <a class="text-light fw-normal" href="#" style="text-decoration: none;"><img src="/ndrshoop/img/logo-ig.png" alt="" width="30">Instagram : @foodies_ndr</a>
                </div>
            </div>
        </div>
    </footer>

















    <script src="/ndrshoop/js/produk1.js"></script>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>