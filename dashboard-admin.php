<?php
session_start();

// check apakah session email sudah ada atau belum.
// jika belum maka akan diredirect ke halaman login (login)
if (empty($_SESSION['user'])) {
    header('Location: login-form-admin.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css" type="text/css">
    <link rel="stylesheet" href="style3.css" type="text/css">
    <title>Home Page</title>
</head>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand">
                <img src="logo.png" alt="logo" style="width:175px;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav navbar-right mb-2 mb-lg-0 ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Home
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="dashboard-admin.php">Home</a></li>
                            <li><a class="dropdown-item" href="https://siap.poltekpos.ac.id/siap/besan.depan.php" target="blank">SIAP</a></li>
                            <li><a class="dropdown-item" href="https://vl.poltekpos.ac.id/" target="blank">Virtual Learning</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark " href="https://www.poltekpos.ac.id/">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark " href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ./End of Navbar -->

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">PENJADWALAN MATA KULIAH POLTEKPOS <br> <span class="font-weight-bold">SELAMAT DATANG </span></h1>
            <hr class="my-4">
            <p class="lead"><b>APA YANG KAMU INGINKAN? </b></p>
            </nav>
        </div>
        <div class="container">
            <a class="btn btn-primary" href="admin-crud.php" role="button">Hapus Data</a>
            <a class="btn btn" href="tambah-data.php" role="button">Tambah Data</a>
            <a class="btn btn" href="logout-admin.php" role="button">Logout</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>