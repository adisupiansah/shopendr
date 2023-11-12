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
    <link rel="stylesheet" type="text/css" href="css/kontak.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <title>kontak-ndrshoop</title>
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
                    <a class="nav-link active text-dark" aria-current="page" href="index.php"><i class="icon bi bi-house-door"></i><br>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="lokasi.php"><i class="icon bi bi-geo-alt"></i><br>Lokasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="help.php"><i class="icon bi bi-question-circle"></i><br>Help</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">

        <h2 class="mt-5 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
            </svg>
        Informasi Tim Ndrshoop
        </h2>
    </div>

    <!-- gambar User 1 -->
    <div class="container mt-5" >
        <div class="row">
            <div class="col-md-6 text-center text-md-left"> <!-- Diubah bagian ini -->
                <img src="img/nurul.jpeg" alt="Gambar" class="img-fluid" style="width:70%; height: 80% ; border-radius: 50%; border:5px solid #B0578D;">
            </div>
            <div class="col-md-6 text-center text-md-left"> <!-- Diubah bagian ini -->
                <h2>Nurul Safika</h2>
                <p>developer Ndrshop</p>
                <p><img src="img/logo-wa.png" alt="..." width="50">WhatsApp : 0858-3429-2838</p>
                <p><img src="img/logo-ig.png" alt="..." width="40">Instagram : @nrulsfka</p>
            </div>
        </div>
    </div>

    <!-- Gambar User 2 -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 text-center text-md-left"> <!-- Diubah bagian ini -->
                <img src="img/devy.jpeg" alt="Gambar" class="img-fluid" style="width:70%; height: 70% ; border-radius: 50%; border:5px solid #B0578D;">
            </div>
            <div class="col-md-6 text-center text-md-left mt-2"> <!-- Diubah bagian ini -->
                <h2>Devy Syafitri</h2>
                <p>Owner Ndrshoop</p>
                <p><img src="img/logo-wa.png" alt="..." width="50">WhatsApp : 0882-79671929</p>
                <p><img src="img/logo-ig.png" alt="..." width="40">Instagram : @dvysyftrii_</p>
            </div>
        </div>
    </div>

    <!-- gambar user 3 -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 text-center text-md-left"> <!-- Diubah bagian ini -->
                <img src="img/regina.jpeg" alt="Gambar" class="img-fluid" style="width:70%; height: 80% ; border-radius: 50%; border:5px solid #B0578D;">
            </div>
            <div class="col-md-6 text-center text-md-left mt-2"> <!-- Diubah bagian ini -->
                <h2>Regina</h2>
                <p>Owner Ndrshoop</p>
                <p><img src="img/logo-wa.png" alt="..." width="50">WhatsApp : 0857-6019-5519</p>
                <p><img src="img/logo-ig.png" alt="..." width="40">Instagram : @rregiina_</p>
            </div>
        </div>
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























    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>