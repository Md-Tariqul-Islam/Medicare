
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
            <div class="row ">

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


    <section class="header-section">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">
            <a class="navbar-brand" href="index.html">
              <i class="fas fa-plus-square"></i>Medicare
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Doctors</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>
              <form class="d-flex">
                <button class="btn btn-primary" type="submit">Make a appointment</button>
              </form>
            </div>
          </div>
        </nav>
    </section>
    <!-- header-section end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>