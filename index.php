
<?php 
  //  database
  include "dbconnect.php";

  // data select
  $select_sql = "SELECT * FROM ourdoctor";
  $allData=mysqli_query($link,$select_sql);
  //print_r($allData);

?>





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
              <a class="nav-link" href="#" id="make-appoint">Make an appointment</a>
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

    <!-- Make an appointment start  -->
    <section id="appointment" data-stellar-background-ratio="3">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6 appimage">
                    <img src="images/appointment-image.jpg" class="img-responsive" alt="">
                </div>

                <div class="col-md-6 col-sm-6">
                    <!-- CONTACT FORM HERE -->
                    <form id="appointment-form" role="form" method="post" action="">

                        <!-- SECTION TITLE -->
                        <div class="section-title">
                            <h2>Make an appointment</h2>
                        </div>

                        <div class="row">
                        <div class="col-md-6 col-sm-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name"
                                    required>
                             </div>

                             <div class="col-md-6 col-sm-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Your Email" required>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="date">Select Date</label>
                                <input type="date" name="date" value="" class="form-control" required>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="select">Select Department</label>
                                <select class="form-control" name="department">
                                    <option value="General Health">General Health</option>
                                    <option value="Cardiology">Cardiology</option>
                                    <option value="Neurology">Neurology</option>
                                    <option value="Orthopaedics">Orthopaedics</option>
                                    <option value="Dental">Dental</option>
                                </select>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <label for="select">Choose Doctor</label>
                                <select class="form-control" name="cdoctor">
                                    <option value="Dr. Timmothy Johnson, Cardiology">Dr. Tariqul Islam, Cardiology
                                    </option>
                                    <option value="Dr. Amanda Rusco, Neurology">Dr. Akram Hossain, Neurology</option>
                                    <option value="Dr. Akram Hossain, Dental">Dr.  Tariqul Islam, Dental</option>
                                    <option value="Dr. Sayma Ikra, Cardiology">Dr. Osman Gani, Cardiology</option>
                                    
                                </select>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <label for="telephone">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone"
                                    required>
                                <label for="Message">Additional Message</label>
                                <textarea class="form-control" rows="5" id="message" name="message"
                                    placeholder="Message" required></textarea>
                                <button type="submit" class="form-control" id="cf-submit" name="submit">Submit
                                </button>
                                
                            </div>
                        </div>

                            
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- appointment end -->



  <div class="container mt-4">
    <div class="row">

      <div class="col-md-12 col-sm-12">     
        <h2 class="text-center">Our Doctors</h2>    
      </div>
      

      <?php 
      
      if( mysqli_num_rows($allData)>0){ 
      while($fetchData=mysqli_fetch_assoc($allData)) {?>

        <div class="col-md-4 col-sm-6 my-3">
          <div class="card shadow">
            <img src="<?php echo $fetchData['image'];?>" class="card-img-top" alt="this" id="image">
            <div class="card-body">
              <h2><?php echo $fetchData['name'];?></h2>
              <h6 class="lead"><?php echo $fetchData['department'];?></h6>
              <p><i class="fas fa-phone"></i> <?php echo $fetchData['phone'];?></p>
              <p><i class="far fa-envelope"></i> <a href="mailto:<?php echo $fetchData['email'];?>" id="docemail"><?php echo $fetchData['email'];?></a></p>
            </div>
          </div>
        </div>

      <?php 
         }
        }else{
      ?>
      <div class="col-lg-12">No Doctor to show</div>
      <?php }?>

    </div>
  </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>