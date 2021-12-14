
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <title>MediCare</title>

  </head>
  <body>
     <!-- Header -->
     <header>
        <div class="container pt-3">
            <div class="row">

                <div class="col text-center">
                    <p class="text-nowrap">Welcome to a Professional Health Care Center</p>
                </div>

                <div class="col text-center text-nowrap">
                    <span class="icon"><i class="far fa-calendar-plus"></i>24/7</span>
                    <span class="icon"><i class="far fa-envelope"></i> <a href="#">medicare@gmail.com</a></span>
                    <span class="icon"> <i class="fas fa-sign-in-alt"></i><a href="login.php"> Sign-In</a></span>
                </div>

            </div>
        </div>
    </header>


     <!--Menu-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info shadow sticky-top py-3">
      <div class="container">
        <!-- Text Logo && Icon -->
        <a class="navbar-brand ps-5" href="index.php">
          <i class="fas fa-plus-square"></i>Medicare
        </a>
        <!-- NavCollapse Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColl">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColl">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item px-2">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link" href="#">About us</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link" href="#">Doctors</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link" href="#">News</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item px-2 pe-5">
              <a class="nav-link" href="#" id="appointment">Make an appointment</a>
            </li>
          </ul>
        </div>

      </div>
    </nav>
    

    <!-- Carousel  -->
    <section class="home">

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
          </div>

          <div class="carousel-inner">

              <div class="carousel-item active">
                <img src="images/s1.jpg" class="d-block w-100" alt="...">
                <div class="inner-text">
                  <h3>LET'S MAKE YOUR LIFE HAPPIER & HEALTHIER</h3>
                  <h1>Healthy & Secured Life</h1>
                </div>
              </div>

              <div class="carousel-item">
                <img src="images/s2.jpg" class="d-block w-100" alt="...">
                <div class="inner-text">
                  <h3>LET'S MAKE YOUR LIFE HAPPIER & HEALTHIER</h3>
                  <h1>Perfect Lifestyle</h1>
                </div>
              </div>

              <div class="carousel-item">
                <img src="images/s3.jpg" class="d-block w-100" alt="...">
                <div class="inner-text">
                  <h3>LET'S MAKE YOUR LIFE HAPPIER & HEALTHIER</h3>
                  <h1>Your Health Necessities</h1>
                </div>
              </div>

          </div>

      </div>

    </section>

    <!-- home end  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>