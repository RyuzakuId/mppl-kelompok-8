@extends('website.template.master')

@section('content')


<!-- Portofolio -->
{{-- https://codepen.io/paulobrien/pen/QagweB --}}


<!-- Page Header -->
<div class="portofolio_bg">
  <div class="wrapper">
    <header>
      <div class="header">
        
        <div class="inner inner_header">
          
          <div class="logo">
            <img style="max-height:5rem; vertical-align: top" src={{ asset('website/img/navbar-logo.jpg') }}>
          </div>

          <nav class="navbar navbar-expand-lg navbar navbar-dark" style="background-color: #2D2D2D;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Portofolio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Info Order</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Tentang Kami</a>
                </li>
                
              </ul>
            </div>
          </nav>

          <div class="header_contact">
            <span>Ikuti kami di:</span>
            <img style=”margin: 3px 3px 3px 3px;” src={{ asset('website/img/Icon_Whatsapp.svg') }}>
            <img style=”margin: 3px 3px 3px 3px;” src={{ asset('website/img/Icon_Instagram.svg') }}>
            &nbsp;
          </div>

        </div>

      </div>
    </div>
    
  </header>
  
</div>


<div class="portofolio">
  <nav class="container navbar navbar-expand-lg navbar navbar-dark" style="background-color: #1c1c1c;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav navbar-center">
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="#">Semua </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="#">Sablon</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="#">Konveksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="#">Jersey</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="#">Merchandise</a>
        </li>
        
      </ul>
    </div>
  </nav>
  <hr>

  <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <img style="margin: 3px 3px 3px 3px; width:300px;" src={{ asset('website/img/home-merchandise.png') }}>
            </li>
            <li class="list-inline-item">
              <img style="margin: 3px 3px 3px 3px; width:300px;" src={{ asset('website/img/home-merchandise.png') }}>
            </li>
            <li class="list-inline-item">
              <img style="margin: 3px 3px 3px 3px; width:300px;" src={{ asset('website/img/home-merchandise.png') }}>
            </li>
          </ul>
        </div>
        <div class="carousel-item">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <img style="margin: 3px 3px 3px 3px; width:300px;" src={{ asset('website/img/home-sablon.png') }}>
            </li>
            <li class="list-inline-item">
              <img style="margin: 3px 3px 3px 3px; width:300px;" src={{ asset('website/img/home-sablon.png') }}>
            </li>
            <li class="list-inline-item">
              <img style="margin: 3px 3px 3px 3px; width:300px;" src={{ asset('website/img/home-sablon.png') }}>
            </li>
          </ul>
        </div>
        <div class="carousel-item">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <img style="margin: 3px 3px 3px 3px; width:300px;" src={{ asset('website/img/home-jersey.png') }}>
            </li>
            <li class="list-inline-item">
              <img style="margin: 3px 3px 3px 3px; width:300px;" src={{ asset('website/img/home-jersey.png') }}>
            </li>
            <li class="list-inline-item">
              <img style="margin: 3px 3px 3px 3px; width:300px;" src={{ asset('website/img/home-jersey.png') }}>
            </li>
          </ul>
        </div>
      </div>
      
      <hr>
      <hr>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  
      
</div>
      

<hr>

@endsection
