<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
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
                <a class="nav-link text-dark " href="#">About</a>
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
            <h1 class="display-4">PENJADWALAN MATA KULIAH POLTEKPOS <br> <span class="font-weight-bold">FORM HAPUS DATA </span></h1>
            <hr class="my-4">
            <p class="lead"><b>Data Kelas </b></p>
            <a class="btn btn-secondary" href="dashboard-admin.php" role="button">Home Page</a>
            </nav>
        </div><br>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Kelas</th>
      <th scope="col">Mata Kuliah</th>
      <th scope="col">Prodi</th>
      <th scope="col">Kelas</th>
      <th scope="col">Hari</th>
      <th scope="col">Waktu</th>
      <th scope="col">Dosen Pengampu</th>
      <th scope="col" colspan="2">Aksi</th>
    </tr>
  </thead>
    <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"SELECT * FROM jadwal_kelas1");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
        <td>$no</td>
        <td>$tampil[kode_kelas]</td>
        <td>$tampil[matkul]</td>
        <td>$tampil[prodi]</td>
        <td>$tampil[kelas]</td>
        <td>$tampil[hari]</td>
        <td>$tampil[jam]</td>
        <td>$tampil[nama_dsn]</td>
        <td><a href='?kode=$tampil[kode_kelas]'> Hapus </a></td>
        <td><a href='update-data.php?kode=$tampil[kode_kelas]'> Ubah </a></td>
        <tr>";
        $no++;
    }
    ?>
    </table>

    <?php
    include "koneksi.php";

    if(isset($_GET['kode'])){
    mysqli_query($koneksi,"DELETE  FROM jadwal_kelas1 where kode_kelas='$_GET[kode]'");
    
    echo "Data berhasil dihapus";
    echo "<meta http-equiv=refresh content=2;URL='tampilan-data.php'>";
    }
    ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
    </html>