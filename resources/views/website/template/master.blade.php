<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>sablon.in</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  {{-- <link href="{{ asset('website/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> --}}

  <!-- Custom fonts for this template -->
  {{-- <link href="{{ asset('website/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  --}}

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet"> 
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
   
  <!-- Custom styles for this template -->
  {{-- <link href="{{ asset('website/css/clean-blog.min.css') }}" rel="stylesheet"> --}}

  <style>
        
        :root{
          --background_color_one: #fff;
          --background_color_two: #F4F4F4;
          
        }
        
        @font-face {
         font-family: "Seta Reta NF";
         src: url('/fonts/SetaRetaNF.ttf') format('ttf');
         font-style: normal;
         font-weight: normal;
         }

        html, body {
          height: 100%
        } 
        
        body {
          margin: 0;
          background-color: var(--background_color_two);
          font-family: 'Roboto', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

        }

        .wrapper {
          width: 100%;
          max-width: 85.375rem;
          margin: 0 auto;
          min-height: 10rem;
          border-left: 1px solid #D6E3F0;
          border-right: 1px solid #D6E3F0;
          box-sizing: border-box; 
        }

        .inner {
          width: 100%;
          max-width: 75.375rem;
          margin: 0 auto;
          height: inherit;
        }
        
        .header{
          height: 5rem;
        }

        .inner_header{
          display: flex;
          justify-content: space-between;
          align-items: center;
          background-color: #2D2D2D;
        }

        .home_bg{
          background-image: url({{ asset('website/img/home-bg.jpg') }});
          min-height: 629px;

           /* Center and scale the image nicely */
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }

        .portofolio_bg{
          background-image: url({{ asset('website/img/portofolio-bg.jpg') }});
          min-height: 629px;

           /* Center and scale the image nicely */
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }

        .portofolio{
          background-color: #1c1c1c;
        }

        .logo {
          font-family: "Lato";
          font-size: 2.25rem;
        }

        .navbar-nav > li{
          padding-left:30px;
          padding-right:30px;
        }

        .navbar-nav.navbar-center {
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
            height: 0em;
        }

        .header_contact{
          font-family: "Open Sans";
          font-size: 0.75rem;
          color: #fff;
        }

        footer {
          background-color: #2D2D2D;
          font-size: 0.75em;
          color: #fff;
        }

        .header-color {
          color: #AA8768;
        }

        .darkgray {
          color: darkgray;
        }

        


  </style>

</head>

<body>

  <!-- Navigation -->
  
  
  @yield('content')


  <hr>

  <!-- Footer -->

 <!-- Footer -->
  <footer class="page-footer font-small stylish-color-dark pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Hubungi Kami -->
          <h5 class="header-color font-weight-bold text-uppercase mt-3 mb-4">Hubungi Kami</h5>
          <p>
            <img style=”margin: 3px 3px 3px 3px;” src={{ asset('website/img/Icon_Phone.svg') }}>
            0878-8730-0024
          </p>
          <p>
            <img style=”margin: 3px 3px 3px 3px;” src={{ asset('website/img/Icon_Mail.svg') }}>
            sablon.in@gmail.com
          </p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-8 mx-auto">

          <!-- Social Media -->
          <h5 class="header-color font-weight-bold text-uppercase mt-3 mb-4" style="text-align:center;">Social Media</h5>

          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <img style=”margin: 3px 3px 3px 3px;” src={{ asset('website/img/Icon_Website.svg') }}>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <img style=”margin: 3px 3px 3px 3px;” src={{ asset('website/img/Icon_Instagram_White.svg') }}>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <img style=”margin: 3px 3px 3px 3px;” src={{ asset('website/img/Icon_Whatsapp_White.svg') }}>
              </a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Alamat -->
          <h5 class="header-color font-weight-bold text-uppercase mt-3 mb-4">Alamat</h5>

          <p>Sablon.in
            <br>Jalan Pitara Raya No. 58 
            <br>Pancoran Mas, Kota Depok,
            <br>16436</p>

        </div>
        <!-- Grid column -->

        
      </div>
      <!-- Grid row -->

    </div>
  <!-- Footer Links -->

  <hr>

    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <a href="#top" class="btn btn-warning btn-rounded fa fa-arrow-up"></a>
      </li>
    </ul>
    <!-- Call to action -->

    <hr>


    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="#"> sablon.in</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->


<!-- Footer -->

  {{-- <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2020</p>
        </div>
      </div>
    </div>
  </footer> --}}

  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  {{-- <script src="{{ asset('website/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('website/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> --}}

  <!-- Custom scripts for this template -->
  {{-- <script src="{{ asset('website/js/clean-blog.min.js') }}"></script> --}}

</body>

</html>
