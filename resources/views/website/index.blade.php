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
