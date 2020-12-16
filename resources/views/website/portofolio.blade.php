@extends('website.template.master')

@section('content')


<!-- Page Header -->
  
  {{-- <header class="masthead" style="background-image: url({{ asset('website/img/home-bg.jpg') }})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading" style="text-align:left">
            <h2>Nice People with Nice Printing</h2>
            <span class="subheading">Jasa sablon dan konveksi terjangkau pilihan terbaik Anda</span>
          </div>
        </div>
      </div>
    </div>
  </header> --}}

  <!-- Main Content -->
  <div class="card-deck">
    <div class="card">
      <img class="card-img-top" src={{ asset('website/img/home-bg.jpg') }} alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Sablon</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src={{ asset('website/img/home-bg.jpg') }} alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Konveksi</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src={{ asset('website/img/home-bg.jpg') }} alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Jersey</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
  {{-- <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-4 mx-auto">
        <div class="home-title">
          <span>sablon.in</span>
        </div>
        
        <div class="home-category">
          <span>sablon</span>
        </div>
        
        <div class="post-preview">
          <a href="post.html">
            <span class="post-category">
              <a href="">sablon</a>
            </span>
            <h2 class="post-title">
              Man must explore, and this is exploration at its greatest
            </h2>
            <h3 class="post-subtitle">
              Problems look mighty small from 150 miles up
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            on September 24, 2019
          </p>
            
        </div>
        <hr> --}}
        
        <!-- Pager -->
        {{-- <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div> --}}
{{--       
      
    </div>
  </div> --}}
@endsection
