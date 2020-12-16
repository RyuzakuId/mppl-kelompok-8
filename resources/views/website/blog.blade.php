@extends('website.template.master')

@section('content')

<!-- Blog-Home -->

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
  
  </header>
  
  <hr>
  
  <div class="container">
    <!-- Search form -->
    <div class="input-group md-form form-sm form-2 pl-0">
      <input class="form-control my-0 py-1" type="text" placeholder="Cari Artikel" aria-label="Search">
      <div class="input-group-append">
        <span class="input-group-text" id="basic-text1"><i class="fa fa-search text-grey"
            aria-hidden="true"></i></span>
      </div>
    </div>
  
    <hr>
  
    
      <!-- -->
      <div class="row row-cols-1 row-cols-md-3">
        <div class="col-md-4 d-flex align-items-stretch">
          <div class="card my-2">
            <img class="card-img-top" src={{ asset('website/img/home-bg.jpg') }} alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
        <div class="col md-4 d-flex align-items-stretch">
          <div class="card my-2">
            <img class="card-img-top" src={{ asset('website/img/home-bg.jpg') }} alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex align-items-stretch">
          <div class="card my-2">
            <img class="card-img-top" src={{ asset('website/img/home-bg.jpg') }} alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex align-items-stretch">
          <div class="card my-2">
            <img class="card-img-top" src={{ asset('website/img/home-bg.jpg') }} alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
    </div>
  
  </div>
  <hr>
  
  <!-- -->

@endsection