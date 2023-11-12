<?php




require "function.php";

if (isset($_POST['registrasi'])) {

    if (register($_POST) > 0) {
        echo "
            <script>
                alert('User baru di tambahkan');
                document.location.href = 'login.php';
            </script> ";
    } else {
        echo mysqli_error($conn);
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
    <link rel="stylesheet" type="text/css" href="css/registrasi.css">



    <title>Registrasi</title>
</head>

<body>

    <!-- card login -->
<div class="container-fluid">
<h4 class="jdul text-center mt-5"><img src="img/ndr-logo.png" alt="..." width="70">NDRSHOOP</h4>        
    <div class="container">
        <div class="card mt-5 shadow mb-3 rounded">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <h5 class="text-start">Sign Up</h5>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <p class="log text-end">or <a href="login.php">Login</a></p>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-11 ">
                        <form action="" method="post">
                            <ul>
                                
                            
                                <label for="username"></label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Masukan username" required>
                                <label for="password" class="mt-3"></label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Masukan password" required>
                                <label for="password2" class="mt-3"></label>
                                <input type="password" name="password2" id="password2" class="form-control" placeholder="Konfirmasi password" required>

                                <button class="btn btn-primary mt-3 mx-1" type="submit" name="registrasi">Register</button>
                         </ul>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>