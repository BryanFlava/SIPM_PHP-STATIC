<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleindex.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" integrity="sha384-9/D4ECZvKMVEJ9Bhr3ZnUAF+Ahlagp1cyPC7h5yDlZdXs4DQ/vRftzfd+2uFUuqS" crossorigin="anonymous"></script>
    <title>schedule lecture</title>
</head>
<body class="bg">
    <!--overlay-->
    <div class="overlay"></div>
   <!--container-->
<div class="content">

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
            <li><a class="dropdown-item" href="landing-page.php">Home</a></li>
            <li><a class="dropdown-item" href="https://siap.poltekpos.ac.id/siap/besan.depan.php" target="blank">SIAP</a></li>
            <li><a class="dropdown-item" href="https://vl.poltekpos.ac.id/" target="blank">Virtual Learning</a></li>
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
     
    <!--Search Box-->
    <div class="judul">
        <p>your lecture schedule  <br> </p>
      </div>
        <div class="col-md-6 col-lg-6 col-11 mx-auto my-auto">
        <div class="search-box">
                <input class="search-txt" id="cari" type="text" name="class" placeholder="search your class">
                <a class="search-btn" id="tbl_cari" href=""> 
                <i class="fa fa-search"> </i>
                 </a>
        </div>
    </div>

    <!-- ./End of Search Box -->
  
</div>
    <!-- ./End of container -->

    <!--footer-->
      <footer class="bg-dark text-white pt-5 pb-4 footer">
        <div class="container text-center text-md-center">
            <div class="row text-center text-md-center">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">About</h5>
                      <p>Politeknik Pos Indonesia adalah institusi pendidikan tinggi yang didirikan oleh Yayasan Pendidikan Bhakti Pos Indonesia, yang bernaung secara langsung di bawah pengawasan PT. Pos Indonesia.</p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">CONTACT</h5>
                     <p>
                        <i class="fa fa-home mr-3"></i> Jalan Sariasih No. 54 Sarijadi Bandung 40151
                        Jawa Barat Indonesia
                    </p>
                    <p>
                        <i class="fa fa-envelope mr-3"></i>  humas@poltekpos.ac.id
                    </p>
                    <p>
                        <i class="fa fa-phone mr-3"></i>  +62813 1234 0362
                    </p>
                </div>
           
            </div>

                <hr class="mb-4">

            <div class="row align-items-center">
                <div class="col-md-7 co-lg-8">
                    <p>
                       copyright &copy;2020 schedule. designed by <span style="text-decoration: none; text-transform: uppercase; color: yellow;">bryanfahira</span>
                    </p>
            </div>
            <div class="col-md-5 col-lg-4 isi">
                <div class="social">
                    <a href="#"><span class="fab fa-facebook-f"></span></a>
                    <a href="#"><span class="fab fa-instagram"></span></a>
                    <a href="#"><span class="fab fa-youtube"></span></a>
                    <a href="#"><span class="fab fa-twitter"></span></a>
                  </div>
            </div>
        </div>
   </div>
     </footer> 
   
 <script>
    document.getElementById("cari").addEventListener("keyup", function() {
        var cari = document.getElementById("tbl_cari");
        cari.href = "mahasiswa.php?kelas=" + document.getElementById("cari").value;
    });
</script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body> 
</html>