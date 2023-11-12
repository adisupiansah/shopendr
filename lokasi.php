<?php
    session_start();
    if(!isset($_SESSION['login'] )) {
        header('Location: login.php');
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/ndr-logo.png">
    <title>lokasi-ndrshoop</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="css/lokasi.css">

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
                    <a class="nav-link text-dark" href="kontak.php"><i class="icon bi bi-people"></i></i><br>Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="help.php"><i class="icon bi bi-question-circle"></i><br>Help</a>
                </li>
            </ul>
        </div>
    </nav>




    <!-- minimap lokasi -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow-lg mb-3 rounded">
                    <div class="card-body">
                        <h2 class="card-title"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pin-map-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z" />
                                <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
                            </svg>Informasi Lokasi</h2>
                        <p class="card-text">Kepulauan Riau, Kabupaten Karimun, Kec. Meral, Kelurahan Baran Timur, Baran 1, Jln. Pantai pak imam RT03/RW03</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="map"></div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        // Inisialisasi peta
        var map = L.map('map').setView([51.505, -0.09], 13); // Koordinat dan zoom level awal

        // Tambahkan tile layer dari OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Tambahkan marker ke peta
        L.marker([51.5, -0.09]).addTo(map)
            .bindPopup('Lokasi ini di sini.')
            .openPopup();
    </script>

</body>

</html>