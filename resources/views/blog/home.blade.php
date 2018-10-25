@extends('layouts.header1')

@section('title', 'panglimasoftware')

@section('content')

<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('http://placehold.it/1900x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h3>First Slide</h3>
          <p>This is a description for the first slide.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h3>Second Slide</h3>
          <p>This is a description for the second slide.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h3>Third Slide</h3>
          <p>This is a description for the third slide.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header>

<div class="container">
  <!-- Page Content Antivirus -->
  <h1 class="my-4">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <a class="card-link text-dark" href="#">Antivirus</a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 text-right">
        <a class="card-link" href="#">Semua</a>
      </div>
    </div>
  </h1>
  <!-- Marketing Icons Section -->
  <div class="card mb-4">
    <div class="row">
@foreach( $antivirus as $antvirus )
      <div class="col-lg-2 col-md-3 col-sm-4 mb-4 text-center">
        <div class="h-100">
          <a class="card-link text-dark" href="#">
            <h6 class="card-header bg-white border-white">{{ $antvirus->nama }}</h6>
          </a>
          <div class="card-body">
            <a class="card-link text-dark" href="#">
              <p>
                <img src="{{ $antvirus->icon }}" height="120">
              </p>
            </a>
          </div>
          <div class="card-footer bg-white border-white">
            <a href="{{ $antvirus->download }}" class="btn btn-primary">Download</a>
          </div>
        </div>
      </div>
@endforeach
    </div>
  </div>
  <!-- Page Content Games -->
  <h1 class="my-4">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <a class="card-link text-dark" href="#">Games</a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 text-right">
        <a class="card-link" href="#">Semua</a>
      </div>
    </div>
  </h1>
  <!-- Marketing Icons Section -->
  <div class="card mb-4">
    <div class="row">
@foreach( $games as $game )
      <div class="col-lg-2 col-md-3 col-sm-4 mb-4 text-center">
        <div class="h-100">
          <a class="card-link text-dark" href="#">
            <h6 class="card-header bg-white border-white">{{ $game->nama }}</h6>
          </a>
          <div class="card-body">
            <a class="card-link text-dark" href="#">
              <p>
                <img src="{{ $game->icon }}" height="120">
              </p>
            </a>
          </div>
          <div class="card-footer bg-white border-white">
            <a href="#" class="btn btn-primary">Download</a>
          </div>
        </div>
      </div>
@endforeach
    </div>
  </div>


<!-- Portfolio Section -->
  <h2>TechNews</h2>
  <br>

        <!-- Features Section -->
        <div class="row">
          <div class="col-lg-6">
            <h1 class="text-center">Indonesia Darurat Programmer</h1>
            <br>
            Liputan6.com, Denpasar Ketua Yayasan Sekolah Tinggi Informatika dan Komputer (STIMIK) Primakara Denpasar, I Made Artana memaparkan data mengejutkan. Menurutnya, saat ini Indonesia tengah darurat tenaga profesional di bidang programmer. Saat ini, ia menjelaskan, semua pihak baik swasta maupun pemerintah tengah berkonsentrasi terhadap pembentukan star-up.
            <br>
            “Bagaimana agar star-up atau usaha rintisan ini bisa hidup, gitu ya. Tapi ada satu kesenjangan, kita kekurangan programmer dalam jumlah yang banyak. Kita ini darurat, kekurangan programmer. Jadi, kita dalam kondisi darurat,” kata Artana di sela seminar bertema ‘Code Your Future’, Jumat (2/3/2018).
            <br>
            Menurutnya, ada tiga bidang penting dalam membangun usaha rintisan digital yakni programmer, hustler dan hipster. Kalau programmer-nya kurang meski dua lainnya banyak, tentu usaha rintisan digital itu tidak akan bisa berjalan.
            <br>
            <div class="text-center">
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
            </div>
          <div class="col-lg-6">
            <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
          </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-lg-4 portfolio-item">
        <div class="card  text-white">
          <img class="card-img" src="http://placehold.it/700x400" alt="Card image">
          <div class="card-img-overlay">
              <a class="card-link" href="#">
                <h6 class="card-title text-primary">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt
                </h6>
              </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 portfolio-item">
        <div class="card  text-white">
          <img class="card-img" src="http://placehold.it/700x400" alt="Card image">
          <div class="card-img-overlay">
              <a class="card-link" href="#">
                <h6 class="card-title text-primary">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt
                </h6>
              </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 portfolio-item">
        <div class="card  text-white">
          <img class="card-img" src="http://placehold.it/700x400" alt="Card image">
          <div class="card-img-overlay">
              <a class="card-link" href="#">
                <h6 class="card-title text-primary">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt
                </h6>
              </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 portfolio-item">
        <div class="card  text-white">
          <img class="card-img" src="http://placehold.it/700x400" alt="Card image">
          <div cwraplass="card-img-overlay">
              <a class="card-link" href="#">
                <h6 class="card-title text-primary">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt
                </h6>
              </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 portfolio-item">
        <div class="card  text-white">
          <img class="card-img" src="http://placehold.it/700x400" alt="Card image">
          <div class="card-img-overlay">
              <a class="card-link" href="#">
                <h6 class="card-title text-primary">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt
                </h6>
              </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
