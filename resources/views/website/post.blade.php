@extends('website.template.master')

@section('content')

<!-- Blog-Content -->
  
<div class="home_bg">
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
    <div class="hero_home">
      <hr>
      <p style="text-align:center">&nbsp;&nbsp;&nbsp;<img style=”” src={{ asset('website/img/Tagline_blog.svg') }}></p>
      <hr>
    </div>
  </div>
  <hr>
  
  <div class="blog_content">
    <div class="container">
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-4 mx-auto">
  
          <!-- Hubungi Kami -->
          <h5 class="text-uppercase darkgray">Diposting oleh</h5>
          <p>Arya Pramuja</p>
          <h5 class="text-uppercase darkgray">Share</h5>
          <img style=”margin: 3px 3px 3px 3px;” src={{ asset('website/img/blog_share_twitter.svg') }}>
          <img style=”margin: 3px 3px 3px 3px;” src={{ asset('website/img/blog_share_instagram.svg') }}>
          <img style=”margin: 3px 3px 3px 3px;” src={{ asset('website/img/blog_share_facebook.svg') }}>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none">
  
        <!-- Grid column -->
        <div class="col-md-8 mx-auto">
  
          <p class="post-date text-uppercase text-center header-color">18 Juni 2020</p>
          <h1 class="text-center">Yellow Nose Studio On Different Design Expressions</h1>
          <hr>
          <div class="text-justify">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempor scelerisque turpis at tempor. Vestibulum sed nisi nec odio tincidunt dapibus id ac libero. Phasellus eget massa elit. Curabitur tempor nunc tincidunt ligula rutrum, sit amet ullamcorper est mollis. Duis nunc velit, ornare nec volutpat at, congue vitae libero. Vestibulum id metus sed ipsum ultricies elementum sed in nulla. Nulla sed elit elit. Vestibulum consequat vitae risus sit amet viverra. Curabitur accumsan risus augue, vel volutpat enim eleifend eleifend. Nullam sit amet nisi fringilla, maximus neque vitae, sodales magna. Suspendisse ut lorem fringilla magna tempor tristique. Nullam ac eros lectus. </p>
            <p>Curabitur commodo feugiat sem, ac viverra nulla tincidunt sit amet. Nam cursus risus quis lectus placerat lacinia. Duis dapibus felis non lacus laoreet aliquam. Aliquam vel nisl est. Cras et dapibus massa. Pellentesque eu dolor vitae lorem tincidunt auctor pretium id diam. Nam sodales sapien ligula, sed tincidunt lectus euismod eu. Maecenas in eleifend eros, at placerat nunc. Nullam sodales dolor quis odio ultrices, nec semper eros vulputate. Mauris sollicitudin nisl a porttitor bibendum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed hendrerit tincidunt venenatis. In id risus accumsan, pellentesque metus commodo, euismod leo. Aenean velit sem, rhoncus nec sollicitudin at, placerat ut libero. Maecenas non velit massa. Donec nec neque sed ipsum pretium fermentum nec et libero.</p>
            <p>Sed sit amet ex vehicula, dignissim magna vel, sollicitudin massa. Vivamus iaculis felis turpis, vel luctus elit rutrum hendrerit. Nunc ac nunc tortor. Duis in purus risus. Aliquam massa magna, fermentum eu pulvinar a, rhoncus eu mi. Phasellus maximus est a nunc auctor dictum. Integer semper consequat turpis quis accumsan. Nullam et arcu lorem. Maecenas vitae sapien eget nibh cursus lacinia ac consequat orci. Sed imperdiet interdum diam, ac rutrum risus imperdiet tempus. Quisque blandit mollis arcu, ut pulvinar nibh lobortis id. Pellentesque in dignissim velit. Aliquam consectetur non nulla non rhoncus. Donec tempus eros in urna pretium, eget finibus ante iaculis. </p>
          </div>
        </div>
        <!-- Grid column -->
  
        <hr>
        
      </div>
  
      <h6 class="text-uppercase">Artikel Terbaru</h6>
  
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
    </div>
  
    <!-- Navigasi ke Artikel lainnya -->
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <a href="" class="btn btn-dark btn btn-outline-dark text-uppercase">Lebih Banyak Artikel</a>
      </li>
    </ul>
    
    <hr>
  
    </div>
  </div>

  @endsection
    
  
  