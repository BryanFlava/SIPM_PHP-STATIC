<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styleindex.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" integrity="sha384-9/D4ECZvKMVEJ9Bhr3ZnUAF+Ahlagp1cyPC7h5yDlZdXs4DQ/vRftzfd+2uFUuqS" crossorigin="anonymous"></script>
    <title>jadwal</title>
  </head>
  <body>
    <body class="bkg">

      <!--overlay-->
      <div class="overlay"></div>
  
          <!--Navbar-->
        <header>
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
                                  <li><a class="dropdown-item" href="landing-page.php">HOME</a></li>
                                  <li><a class="dropdown-item" href="#">SIAP</a></li>
                                  <li><a class="dropdown-item" href="#">Virtual Learning</a></li>
                              </ul>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link text-dark " href="https://www.poltekpos.ac.id/" target="_blank">About</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link text-dark " href="#">Contact</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>
      
          <!-- ./End of Navbar -->
          </header>
        
     <!--container-->
       <main>
        <div class="content">  
        <h1 style="font-family: 'Acme', sans-serif; font-size:50px; text-align: center; margin-top: 10px; padding: 20px; margin-bottom: 30px;"> jadwal kuliah  </h1>    
       <div class="col-md-10 col-lg-10 col-16 mx-auto my-auto">
          <table class="table table-dark table-responsive">
            <thead>
              <tr>
              <th scope="col">No</th>
              <th scope="col">Hari</th>
              <th scope="col">Mata Kuliah</th>
              <th scope="col">Kode</th>
              <th scope="col">Dosen Pengampu</th>
              <th scope="col">Jam Kuliah</th>
              <th scope="col">Kelas</th>
              </tr>
              </thead>
       
             <?php
              include "koneksi.php";

              $no=1;
              $ambildata = mysqli_query($koneksi,"SELECT * FROM jadwal_kelas1 where kelas='".$_GET['kelas']."'");
              while($tampil = mysqli_fetch_array($ambildata)){
                  echo "
                  <tr>
                  <td>$no</td>
                  <td>$tampil[hari]</td>
                  <td>$tampil[matkul]</td>
                  <td>$tampil[kode_kelas]</td>
                  <td>$tampil[nama_dsn]</td>
                  <td>$tampil[jam]</td>
                  <td>$tampil[kelas]</td>
                  <tr>";
                  $no++;
              }
        ?>
        </div>
    </main>
       </div>
      <!-- ./End of container -->
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>