<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JURAGANsoft</title>
    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai|Audiowide|Baloo+Bhaina|Bangers|Black+Ops+One|Boogaloo|Bungee+Inline|Cabin+Sketch|Ceviche+One|Changa+One|Chelsea+Market|Chewy|Cinzel+Decorative|Diplomata|Fascinate+Inline|Faster+One|Freckle+Face|Hanalei+Fill|Kelly+Slab|Knewave|Luckiest+Guy|Monoton|Oleo+Script|Press+Start+2P|Ranga|Righteous|Sigmar+One|Skranji" rel="stylesheet">
@yield('style')

  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top nav-tabs">
      <div class="container">
        <a class="navbar-brand" href="post.php">
          <p class="font">JURAGANsoft</p>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#"id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Software
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="portfolio-1-col.html">Antivirus</a>
                <a class="dropdown-item" href="portfolio-2-col.html">Multimedia</a>
                <a class="dropdown-item" href="portfolio-3-col.html">Internet</a>
                <a class="dropdown-item" href="portfolio-4-col.html">Office</a>
                <a class="dropdown-item" href="software/kategori.php">lebih banyak</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#"id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sistem&nbsp;Operasi</a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="portfolio-1-col.html">Windows</a>
                <a class="dropdown-item" href="portfolio-2-col.html">os x</a>
                <a class="dropdown-item" href="portfolio-3-col.html">linux</a>
                <a class="dropdown-item" href="portfolio-4-col.html">semua</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Games</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">TechNews</a>
            </li>
            <li>
          <!-- Search Widget -->
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">
@yield('cari')
                  </button>
                </span>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
          <!--<img src="1.jpg" alt="">-->

    <!-- Page Content -->
@yield('content')

    <!-- Footer -->


  </div>

    <footer class="py-5 bg-dark text-white">
      <div class="container">
        <div class="row">
           <div class="col-lg-4 text-center">
             <h4>Tetaplah terhubung</h4>
@yield('sosmed')
           </div>
           <div class="col-lg-3 text-center">
             <a class="card-link text-white" href="#">Hubungi kami</a>
             <p>JURAGANsoft.com</p>
           </div>
           <div class="col-lg-2">
           </div>
           <div class="col-lg-2">
             <b class="text-center d-block h5">Bantuan</b><br>
             <a class="card-link text-white" href="#">Kebijakan Privasi</a><br>
             <a class="card-link text-white" href="#">Syarat & Ketentuan</a><br>
             <a class="card-link text-white" href="#">Tanya Jawab</a>
           </div>
         </div>
         <!-- <hr class="bg-light">
        <p class="m-0 text-center text-white">Copyright &copy; 2018 Panglimasoftware.com</p> -->
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
