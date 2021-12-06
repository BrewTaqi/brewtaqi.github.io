<!doctype html>
<html lang="en" id="home">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <title>Muntok White Pepper</title>
  </head>

  {{-- Navbar --}}
  <body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        
        <a class="navbar-brand page-scroll" href="#home">Muntok White Pepper</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="nav navbar-nav">
            <li class="nav-item">
              <a class="nav-link active page-scroll" aria-current="page" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active page-scroll" href="#product">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active page-scroll" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active page-scroll" href="#footer">Contact</a>

            </li>    
          </ul>
        </div>
    </div>
</nav>
{{-- Navbar end --}}

{{-- Corousel --}}
<section class="home" id="home">
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="gambar/pepper1.jpg" class="d-block w-100" alt="...">
      <div class="card-img-overlay col-none col-sm-block text-center ">
        <h1 class="display-3">Bangka White Pepper</h1>
        <div class="text" id="text">
        <h3>Authentic Muntok White Papper to Worldwide</h3>
      </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="gambar/pepper2.jpg" class="d-block w-100" alt="...">
      <div class="card-img-overlay col-none col-sm-block">
            <h1>We supplied the authentic Muntok white pepper from Bangka Belitung - Indonesians with the highest quality from around the world</h1>
              <div class="text1" id="text1">
                <h3 class="display-5">And we committed to the authenticity and flavor of spices of the finest quality</h3>
              </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="gambar/pepper1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption col-none col-sm-block">
            <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
  </div>
</section>
{{-- Corousel end --}}

{{-- Featur --}}
<section class="featur" id="feature">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <img src="gambar/comitmen.png" alt="" class="card-img-top">
        <h5 class="card-title text-center">Commitment</h5>
            <p class="card-text">Commitment is important where we will continue to provide the best to our customers and investors all the time. Our opportunity to serve should be viewed as a privilege that is not to be taken for granted.</p>
      </div>
    
      <div class="col-sm-3">
        <img src="gambar/love.png" alt="" class="card-img-top">
        <h5 class="card-title text-center">Integrity</h5>
            <p class="card-text">Integrity means telling the truth, keeping our word and treating others with fairness and respect. Integrity is one of our most cherished assets. It must not be compromised.</p>
     </div>
      <div class="col-sm-3">
        <img src="gambar/inovaton.png" alt="" class="card-img-top">
        <h5 class="card-title text-center">Inovation</h5>
            <p class="card-text">Quality is exhibited in many ways by selling and supporting products and services that delight customers, establishing a work environment , delivering financial results that meet investor expectations.</p>
      </div>
    
      <div class="col-sm-3">
        <img src="gambar/quality.png" alt="" class="card-img-top">
        <h5 class="card-title text-center">Quality</h5>
            <p class="card-text">Quality is exhibited in many ways by selling and supporting products and services that delight customers, establishing a work environment , delivering financial results that meet investor expectations.</p>
      </div>
    </div>
  </div>
</section>
{{-- Featur end --}}


{{-- About --}}
<section class="about" id="about">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2>About Us</h2>
        <hr>
      </div>
    </div>
  
  <div class="row">
    <div class="col-sm-6">
      <h5>We process more than 1,500 hectares of coconut plantations, spread across several islands in Eastern Indonesia.</h5>
      <p>In the beginning, our company was engaged in manufacturing where we processed coconut derivative products, 
        namely coconut shells into coconut shell charcoal.And after that our company expanded and expanded into coconut plantations, 
        to process more derivative products</p>
    </div>
    <div class="col-sm-6 text-center">
      <img src="gambar/{{ $img; }}" alt="">
    </div>
  </div>
</div>
</section>
{{-- About End --}}

{{-- Product --}}
<section class="product" id="product">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1>Product</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-5">
        <h3>White Pepper</h3>
        <p>Coconut fiber, is a natural fiber extracted from the husk of coconut[1] and used in products such as floor mats, doormats, brushes and mattresses. Coir is the fibrous material found between the hard, internal shell and the outer coat of a coconut. Other uses of brown coir (made from ripe coconut) are in upholstery padding, sacking and horticulture. White coir, harvested from unripe coconuts, is used for making finer brushes, string, rope and fishing net</p>
      </div>
      <div class="col-sm-7 text-center">
        <img src="gambar/pepper1.jpg" alt="">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-2 col-sm-offsite-10 text-center">
        <button type="button" class="btn btn-outline-secondary">Contact Us <img src=""></button>
      </div>
    </div>
  </div>
</section>
{{-- Product End --}}

{{-- Team --}}
<section class="team" id="team">
  <div class="container">
     <div class="row">
       <div class="col-sm-12 text-end">
         <h1>Our Team</h1>
       </div>
     </div>
     <div class="row">
       <div class="col-sm-3 text-center">
         <img src="gambar/inul.png" alt="" class="card-img-top">
         <h4>Inul</h4>
         <h5>Founder</h5>
         <p>Our faith is the substance of our future. There is no big success without big sacrifice.</p>
       </div>
       <div class="col-sm-3 text-center">
        <img src="gambar/pep.png" alt="" class="card-img-top">
        <h4>Pep</h4>
        <h5>Co-Founder</h5>
        <p>Our faith is the substance of our future. There is no big success without big sacrifice.</p>
      </div>
      <div class="col-sm-3 text-center" >
        <img src="gambar/lanza.png" alt="" class="card-img-top">
        <h4>Lanza</h4>
        <h5>Marketing</h5>
        <p>Our faith is the substance of our future. There is no big success without big sacrifice.</p>
      </div>
      <div class="col-sm-3 text-center">
        <img src="gambar/brew.png" alt="" class="card-img-top">
        <h4>BrewTaqi</h4>
        <h5>Development</h5>
        <p>Our faith is the substance of our future. There is no big success without big sacrifice.</p>
      </div>
     </div>
  </div>
</section>
{{-- Team And --}}

{{-- Footer --}}
<section class="footer" id="footer">
  <div class="container-fluid">
    <div class="footerbg">
    <div class="row">
      <div class="col-sm-12">
        <h1>Contact</h1>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-8 col-sm-offset-4 text-center">
      <h1>Saran</h1>
    </div>
  </div>
    <div class="row">
      <div class="col-sm-6" >
        <div class="footertext" id="footertext">
        <h1>Muntok White Pepper</h1>
        <h5>PT</h5>
      </div>
    </div>
    <div class="col-sm-6">
      <script src="http://maps.googleapis.com/maps/api/js"></script>
      <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-8.5830695,116.3202515),
            zoom:15,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- Elemen yang akan menjadi kontainer peta -->
    <div class="googleMap" id="googleMap" style="width:100%;height:450px;"></div>
    </div>
    </div>
  </div>
  <section class="footerdown">
    <div class="container">
      <div class="row">
        <div class="col-sm-2 text-center">
          <h1>Belanje</h1>
            <p>Lada</p>
        </div>
        <div class="col-sm-6 text-center">
          <h1>IG</h1>
          <h2>Faceebook</h2>
        </div>
        <div class="col-sm-4 text-center">
          <h5>Gg Denpasar XII No 190</>
          <h5>abdullahtaqimahfuz@gmail.com</h5>
          <h5>+62 813 9552 2636</h5>
        </div>
    </div>
    </div>
  </section>
</section>
{{-- Footer End --}}

    
<script src="js/jquery-3.6.0.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scritp.js"></script>

  </body>
</html>