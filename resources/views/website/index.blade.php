@extends('website.template.master')

@section('content')

<!-- Home -->
<!-- Page Header -->
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
    <p style="text-align:center">&nbsp;&nbsp;&nbsp;<img style=”” src={{ asset('website/img/Tagline_1.svg') }}></p>
    <hr>
    <p style="text-align:center">&nbsp;&nbsp;&nbsp;<img style=”” src={{ asset('website/img/Tagline_2.svg') }}></p>
    <hr>
  </div>
</div>
<hr>



<!-- Main Content -->
<div class="home_content">
  <div class="container">
    <img src={{ asset('website/img/sablonin-title.svg') }} alt="sablon.in" style="width:300px;">
  </div>

  <hr>    
  
  <!-- Konten Sablon -->
    <div class="container home_sablon text-justify text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 mx-auto">

          <!-- Hubungi Kami -->
          <img src={{ asset('website/img/home-sablon.png') }} alt="sablon" style="width:300px;">
        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-8 mx-auto">

          <h5 class="text-uppercase header-color">sablon</h5>
          <h1>Warna yang Akurat</h1>
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempor scelerisque turpis at tempor. Vestibulum sed nisi nec odio tincidunt dapibus id ac libero. Phasellus eget massa elit. Curabitur tempor nunc tincidunt ligula rutrum, sit amet ullamcorper est mollis. Duis nunc velit, ornare nec volutpat at, congue vitae libero. Vestibulum id metus sed ipsum ultricies elementum sed in nulla. Nulla sed elit elit. Vestibulum consequat vitae risus sit amet viverra. Curabitur accumsan risus augue, vel volutpat enim eleifend eleifend. Nullam sit amet nisi fringilla, maximus neque vitae, sodales magna. Suspendisse ut lorem fringilla magna tempor tristique. Nullam ac eros lectus. </p>
          <p class="text-justify">Curabitur commodo feugiat sem, ac viverra nulla tincidunt sit amet. Nam cursus risus quis lectus placerat lacinia. Duis dapibus felis non lacus laoreet aliquam. Aliquam vel nisl est. Cras et dapibus massa. Pellentesque eu dolor vitae lorem tincidunt auctor pretium id diam. Nam sodales sapien ligula, sed tincidunt lectus euismod eu. Maecenas in eleifend eros, at placerat nunc. Nullam sodales dolor quis odio ultrices, nec semper eros vulputate. Mauris sollicitudin nisl a porttitor bibendum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed hendrerit tincidunt venenatis. In id risus accumsan, pellentesque metus commodo, euismod leo. Aenean velit sem, rhoncus nec sollicitudin at, placerat ut libero. Maecenas non velit massa. Donec nec neque sed ipsum pretium fermentum nec et libero.</p>
          {{-- <p>Sed sit amet ex vehicula, dignissim magna vel, sollicitudin massa. Vivamus iaculis felis turpis, vel luctus elit rutrum hendrerit. Nunc ac nunc tortor. Duis in purus risus. Aliquam massa magna, fermentum eu pulvinar a, rhoncus eu mi. Phasellus maximus est a nunc auctor dictum. Integer semper consequat turpis quis accumsan. Nullam et arcu lorem. Maecenas vitae sapien eget nibh cursus lacinia ac consequat orci. Sed imperdiet interdum diam, ac rutrum risus imperdiet tempus. Quisque blandit mollis arcu, ut pulvinar nibh lobortis id. Pellentesque in dignissim velit. Aliquam consectetur non nulla non rhoncus. Donec tempus eros in urna pretium, eget finibus ante iaculis. </p> --}}
        </div>
        
        
        <!-- Grid column -->

        
      </div>
    
    </div>
      <hr>
      
      

      <!-- Grid row -->
      
      <!-- Konten Konveksi -->
      
      <div class="container home_konveksi">
        <h5 class="text-uppercase header-color">konveksi</h5>
        <h1>Warna yang Akurat</h1>
        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempor scelerisque turpis at tempor. Vestibulum sed nisi nec odio tincidunt dapibus id ac libero. Phasellus eget massa elit. Curabitur tempor nunc tincidunt ligula rutrum, sit amet ullamcorper est mollis. Duis nunc velit, ornare nec volutpat at, congue vitae libero. Vestibulum id metus sed ipsum ultricies elementum sed in nulla. Nulla sed elit elit. Vestibulum consequat vitae risus sit amet viverra. Curabitur accumsan risus augue, vel volutpat enim eleifend eleifend. Nullam sit amet nisi fringilla, maximus neque vitae, sodales magna. Suspendisse ut lorem fringilla magna tempor tristique. Nullam ac eros lectus. </p>
        <p class="text-justify">Curabitur commodo feugiat sem, ac viverra nulla tincidunt sit amet. Nam cursus risus quis lectus placerat lacinia. Duis dapibus felis non lacus laoreet aliquam. Aliquam vel nisl est. Cras et dapibus massa. Pellentesque eu dolor vitae lorem tincidunt auctor pretium id diam. Nam sodales sapien ligula, sed tincidunt lectus euismod eu. Maecenas in eleifend eros, at placerat nunc. Nullam sodales dolor quis odio ultrices, nec semper eros vulputate. Mauris sollicitudin nisl a porttitor bibendum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed hendrerit tincidunt venenatis. In id risus accumsan, pellentesque metus commodo, euismod leo. Aenean velit sem, rhoncus nec sollicitudin at, placerat ut libero. Maecenas non velit massa. Donec nec neque sed ipsum pretium fermentum nec et libero.</p>
        {{-- <p>Sed sit amet ex vehicula, dignissim magna vel, sollicitudin massa. Vivamus iaculis felis turpis, vel luctus elit rutrum hendrerit. Nunc ac nunc tortor. Duis in purus risus. Aliquam massa magna, fermentum eu pulvinar a, rhoncus eu mi. Phasellus maximus est a nunc auctor dictum. Integer semper consequat turpis quis accumsan. Nullam et arcu lorem. Maecenas vitae sapien eget nibh cursus lacinia ac consequat orci. Sed imperdiet interdum diam, ac rutrum risus imperdiet tempus. Quisque blandit mollis arcu, ut pulvinar nibh lobortis id. Pellentesque in dignissim velit. Aliquam consectetur non nulla non rhoncus. Donec tempus eros in urna pretium, eget finibus ante iaculis. </p> --}}
        

        <ul class="list-inline text-center">
          <li class="list-inline-item">
            <img style="margin: 3px 3px 3px 3px; width:600px;" src={{ asset('website/img/home-konveksi.png') }}>
          </li>
        </ul>

      </div>

      <hr>

      <!-- Konten Sablon -->
      <div class="container home_jersey text-justify text-md-left">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-4 mx-auto">

            <img src={{ asset('website/img/home-jersey.png') }} alt="jersey" style="width:300px;">
          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-8 mx-auto">

            <h5 class="text-uppercase header-color">jersey</h5>
            <h1 class="text-justify">Warna yang Akurat</h1>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempor scelerisque turpis at tempor. Vestibulum sed nisi nec odio tincidunt dapibus id ac libero. Phasellus eget massa elit. Curabitur tempor nunc tincidunt ligula rutrum, sit amet ullamcorper est mollis. Duis nunc velit, ornare nec volutpat at, congue vitae libero. Vestibulum id metus sed ipsum ultricies elementum sed in nulla. Nulla sed elit elit. Vestibulum consequat vitae risus sit amet viverra. Curabitur accumsan risus augue, vel volutpat enim eleifend eleifend. Nullam sit amet nisi fringilla, maximus neque vitae, sodales magna. Suspendisse ut lorem fringilla magna tempor tristique. Nullam ac eros lectus. </p>
          </div>
          
          
          <!-- Grid column -->

          
        </div>
        
        <hr>
        
        <!-- Grid row -->
      </div>

      <!-- Konten Merchandise -->

      <div class="container home_merchandise">
        <h5 class="text-uppercase header-color">merchandise</h5>
        <h1 >Warna yang Akurat</h1>
        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempor scelerisque turpis at tempor. Vestibulum sed nisi nec odio tincidunt dapibus id ac libero. Phasellus eget massa elit. Curabitur tempor nunc tincidunt ligula rutrum, sit amet ullamcorper est mollis. Duis nunc velit, ornare nec volutpat at, congue vitae libero. Vestibulum id metus sed ipsum ultricies elementum sed in nulla. Nulla sed elit elit. Vestibulum consequat vitae risus sit amet viverra. Curabitur accumsan risus augue, vel volutpat enim eleifend eleifend. Nullam sit amet nisi fringilla, maximus neque vitae, sodales magna. Suspendisse ut lorem fringilla magna tempor tristique. Nullam ac eros lectus. </p>
        
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
        
      <hr>

</div>


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
  


<!-- Tentang Kami -->

{{-- https://stackoverflow.com/questions/1277339/different-background-color-for-left-and-right-half-of-div --}}



<!--  Admin Panel -->

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
  <div class="container">
      <a class="navbar-brand" href="#">
        <h6>Sablon.in Admin Panel</h6>
      </a>
      {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button> --}}

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <a class="nav-link" href="">Portofolio</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="">Blog</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="">Logout</a>
                    </li>

                      {{-- <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                  @csrf
                              </form>
                          </div>
                      </li>
                      @endguest --}}
          </ul>
      </div>
  </div>
</nav>

<hr>

<!-- Halaman Awal Admin Panel-->
<div class="container">
  
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">Portofolio Terbaru</div>

              <div class="card-body">
                  <table class="table table-bordered mb-0">
                      <thead>
                      <tr>
                          <th scope="col" width="60">#</th>
                          <th scope="col" width="60">Kategori</th>
                          <th scope="col" width="200">Gambar</th>
                      </tr>
                      </thead>

                      <tbody>
                      {{-- @foreach($categories as $category) --}}
                          <tr>
                            <td>1</td>
                            <td>Sablon</td>
                            <td><img src={{ asset('website/img/home-sablon.png') }} alt="sablon" style="width:300px;"></td>  
                            {{-- <td>{{ $category->id }}</td>
                              <td>{{ $category->name }}</td>
                              <td>{{ $category->user->name }}</td> --}}
                          </tr>
                      {{-- @endforeach --}}
                      </tbody>
                  </table>
              </div>
          </div>

          <div class="card mt-4">
              <div class="card-header">Postingan Blog Terbaru</div>

              <div class="card-body">
                  <table class="table table-bordered mb-0">
                      <thead>
                      <tr>
                          <th scope="col" width="60">#</th>
                          <th scope="col" width="60">Title</th>
                          <th scope="col" width="200">Created By</th>
                      </tr>
                      </thead>

                      <tbody>
                      {{-- @foreach($posts as $post) --}}
                          <tr>
                            <td>1</td>  
                            <td>Cara mencuci Baju</td>
                            <td>Arya Pramuja</td>
                            {{-- <td>{{ $post->id }}</td>
                              <td>{{ $post->title }}</td>
                              <td>{{ $post->user->name }}</td> --}}
                          </tr>
                      {{-- @endforeach --}}
                      </tbody>
                  </table>
              </div>
          </div>

          {{-- <div class="card mt-4">
              <div class="card-header">Latest Page</div>

              <div class="card-body">
                  <table class="table table-bordered mb-0">
                      <thead>
                      <tr>
                          <th scope="col" width="60">#</th>
                          <th scope="col" width="60">Title</th>
                          <th scope="col" width="200">Created By</th>
                      </tr>
                      </thead>

                      <tbody>
                      @foreach($pages as $page)
                          <tr>
                            <td>id</td>
                            <td>title</td>
                            <td>name</td>  
                            <td>{{ $page->id }}</td>
                              <td>{{ $page->title }}</td>
                              <td>{{ $page->user->name }}</td>
                          </tr>
                      @endforeach
                      </tbody>
                  </table>
              </div>
          </div> --}}
      </div>
  </div>
</div>

<!-- Portofolio Admin -->

<div class="container">
  <div class="row">
      {{-- <div class="col">
          @if(Session::has('message'))
              <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                  {{ Session('message') }}
              </div>
          @endif

          @if(Session::has('delete-message'))
              <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                  {{ Session('delete-message') }}
              </div>
          @endif
      </div> --}}
  </div>

  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  Portofolio
                  <a href="" class="btn btn-sm btn-primary float-right">Add
                      New</a>
                  {{-- <a href="{{ route('galleries.create') }}" class="btn btn-sm btn-primary float-right">Add
                      New</a> --}}
              </div>

              <div class="card-body">
                  <table class="table table-bordered mb-0">
                      <thead>
                      <tr>
                          <th scope="col" width="60">#</th>
                          <th scope="col">Url</th>
                          <th scope="col" width="200">Kategori</th>
                          <th scope="col" width="129">Action</th>
                      </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td>1</td>
                          <td></td>
                          <td>Sablon</td>
                          <td>
                              <a href="#"
                                 class="btn btn-sm btn-primary">Edit</a>
                              {{-- {!! Form::open(['route' => ['galleries.destroy', $gallery->id], 'method' => 'delete', 'style' => 'display:inline']) !!}
                              {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                              {!! Form::close() !!} --}}
                          </td>
                        </tr>

                      {{-- @foreach($galleries as $gallery)
                          <tr>
                              <td>{{ $gallery->id }}</td>
                              <td>{{ asset('storage/galleries/' . $gallery->image_url) }}</td>
                              <td>{{ $gallery->user->name }}</td>
                              <td>
                                  <a href="{{ route('galleries.edit', $gallery->id) }}"
                                     class="btn btn-sm btn-primary">Edit</a>
                                  {!! Form::open(['route' => ['galleries.destroy', $gallery->id], 'method' => 'delete', 'style' => 'display:inline']) !!}
                                  {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                                  {!! Form::close() !!}
                              </td>
                          </tr>
                      @endforeach --}}
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>

<!-- Blog Admin -->

<div class="container">
  <div class="row">
      <div class="col">
          {{-- @if(Session::has('message'))
              <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                  {{ Session('message') }}
              </div>
          @endif

          @if(Session::has('delete-message'))
              <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                  {{ Session('delete-message') }}
              </div>
          @endif --}}
      </div>
  </div>

  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  Postingan Blog
                  <a href="" class="btn btn-sm btn-primary float-right">Add
                      New</a>
                  {{-- <a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary float-right">Add
                      New</a> --}}
              </div>

              <div class="card-body">
                  <table class="table table-bordered mb-0">
                      <thead>
                      <tr>
                          <th scope="col" width="60">#</th>
                          <th scope="col">Title</th>
                          <th scope="col" width="200">Created By</th>
                          <th scope="col" width="129">Action</th>
                      </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Cara Mencuci Baju</td>
                          <td>Arya Pramuja</td>
                          <td>
                              <a href="#"
                                 class="btn btn-sm btn-primary">Edit</a>
                              
                          </td>
                      </tr>

                      {{-- @foreach($posts as $post)
                          <tr>
                              <td>{{ $post->id }}</td>
                              <td>{{ $post->title }}</td>
                              <td>{{ $post->user->name }}</td>
                              <td>
                                  <a href="{{ route('posts.edit', $post->id) }}"
                                     class="btn btn-sm btn-primary">Edit</a>
                                  {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete', 'style' => 'display:inline']) !!}
                                  {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                                  {!! Form::close() !!}
                              </td>
                          </tr>
                      @endforeach --}}
                      </tbody>
                  </table>
              </div>
          </div>
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
