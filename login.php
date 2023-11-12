<?php

session_start();
if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}


require "function.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek usernama apakah benar ?
    if (mysqli_num_rows($result) === 1) {


        // cek password
        $cek = mysqli_fetch_assoc($result);
        if (password_verify($password, $cek['password'])) {
            //untuk memangil nama berdasarkan username di halaman index di navbar
            $_SESSION['username'] = $username;

            $_SESSION['login'] = true;

            header("Location: index.php");
            exit;
            # code...
        }
    }

    $error = true;
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="shortcut icon" href="img/ndr-logo.png">

    <title>Login</title>

</head>

<body>

    <!-- navbar -->
    <!-- <nav class="navbar shadow mb-3 rounded " style="background-color: #BC7AF9;">
        <div class="container-fluid">
            <a class="navbar-brand text-light"><img src="img/ndr-logo.png" alt="" width="45">ndrshoop</a>
            <a class="btn mx-2 text-light " style="background-color: #B0578D;" type="submit" href="help.php">Help
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                </svg>
            </a>
        </div>
    </nav> -->

    <?php if (isset($error)) : ?>
        <div>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                <script>
                    swal("Password salah!", "Username / Password salah!", "error");
                </script>
        </div>

    <?php endif; ?>

    <!-- card login -->
    <div class="container mt-5">
        <div class="card shadow mb-3 rounded">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <p><img src="img/ndr-logo.png" alt="" width="30%">NDRSHOOP</p>
                    </div>
                    <div class="col-6">
                        <h4 class="text-center mt-3">Login</h4>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <form action="" method="post">
                            <label for="username">Username : </label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Masukan Username" required>
                            <label for="password">Password : </label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password" required>
                            <button class="btn btn-primary mt-3 mx-1" name="login">Login</button>
                        </form>
                        <p class="mt-3 mx-2">belum punya akun ? <a href="registrasi.php">daftar</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>