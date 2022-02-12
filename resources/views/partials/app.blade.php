<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>JJKS</title>
</head>


<body class='bg-dark'>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="container-fluid">
          <a class="navbar-brand fs-2 text-light" href="/">JUJUTSU KAISEN</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item ms-5">
                <a class="nav-link active fs-5" aria-current="page" href="/">Accueil</a>
              </li>
              <li class="nav-item ms-5">
                <a class="nav-link fs-5" href="#">Infos</a>
              </li>
              <li class="nav-item dropdown ms-5">
                <a class="nav-link dropdown-toggle fs-5" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Équipes
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Front End</a></li>
                  <li><a class="dropdown-item" href="#">Back End</a></li>
                </ul>
              </li> 
              <li class="nav-item dropdown ms-5">
                <a class="nav-link dropdown-toggle fs-5" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Contact
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">SAV</a></li>
                  <li><a class="dropdown-item" href="#">Partenariats</a></li>
                  <li><a class="dropdown-item" href="#">Contactez-nous</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    @yield('homecontent')



      <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted bg-black">
    <!-- Section: Social media -->
    <section
      class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
    >
      <!-- Left -->
      <div class="me-5 d-flex d-lg-block text-center">
        <span></span>
      </div>
      <!-- Left -->
  
      <!-- Right -->

    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="text-white">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Jujutsu Kaisen
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Liens utiles
            </h6>
            <p>
              <a href="#!" class="text-reset">Services</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Paramètres</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Commande</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Aide</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Contact
            </h6>
            <p><i class="fas fa-home me-3"></i>Tokyo, Japan</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@jjks.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 90 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 90 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4 bg-danger text-black">
      © 2022 Copyright:
      <a class="text-reset fw-bold text-black">Hndrckx Design</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

<script src="{{asset('js/app.js')}}"></script>   
</body>
</html>