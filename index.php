
<?php 
  //  database connection
  include "dbconnect.php";

  //Store appointment table data
  if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $date= $_POST['date'];
    $department= $_POST['department'];
    $choosedoctor=$_POST['cdoctor'];
    $phone= $_POST['phone'];
    $message= $_POST['message'];
    $sql="INSERT INTO tblappointment( name, email, appDate, department, cdoctor, phone, appMessage) VALUES ('$name', '$email', '$date', '$department', '$choosedoctor', '$phone','$message')";

    if(mysqli_query($link,$sql)){
      header("location:index.php");
    }
    else{
        ?>
        <script>
            alert("Recorded is not added Successfully");
        </script>
        <?php
    }
  mysqli_close($link);
  }

//Store contacts table data
if(isset($_POST['send'])){
  $name= $_POST['name'];
  $phone= $_POST['phone'];
  $email= $_POST['email'];
  $message= $_POST['message'];
  $sql="INSERT INTO contacts( name, phone, email, message) VALUES ('$name','$phone', '$email','$message')";
  if(mysqli_query($link,$sql)){
    header("location:index.php");
  }
  else{
      ?>
      <script>
          alert("Recorded is not added Successfully");
      </script>
      <?php
  }
  mysqli_close($link);
}


  // data select for show Doctors
  include "dbconnect.php";
  $select_sql = "SELECT * FROM ourdoctor";
  $allData=mysqli_query($link,$select_sql);

  $select_dept="SELECT DISTINCT department FROM ourdoctor";
  $allDept=mysqli_query($link,$select_dept);

  $select_doc="SELECT * FROM ourdoctor";
  $allDoc=mysqli_query($link,$select_doc);

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
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link" href="#about">About us</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link" href="#doctor">Doctors</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item px-2 pe-5">
              <a class="nav-link" href="#appointment" id="make-appoint">Make an appointment</a>
            </li>
          </ul>
        </div>

      </div>
    </nav>
    

    <!-- Carousel  -->
    <section id="home">

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
  
<!-- About Us-->
    <section id="about">
      <div class="container py-5">
          <div class="row">

              <div class="col-md-6 col-sm-6">
                  <div class="about-info">
                      <h2>Welcome to 
                        <i class="fas fa-plus-square"></i>Medicare</h2>
                      <div>
                          <p>We're here when you need us. For everyday care or life-changing care, you can count on us
                              to keep you and your loved ones safe and healthy.</p>
                          <p>Our friendly and knowledgeable staff teams provide support throughout our many specialty
                              departments and centers, from primary visits to emergency care.</p>
                      </div>
                  </div>
              </div>

          </div>
      </div>
    </section>

    <!-- Doctors -->
    <div class="container mt-5" id="doctor">
      <div class="row">

        <div class="col-md-12 col-sm-12">     
          <h2 class="text-center border-bottom">Our Doctors</h2>    
        </div>
        
        <?php 
        if( mysqli_num_rows($allData)>0){ 
        while($fetchData=mysqli_fetch_assoc($allData)) {?>

          <div class="col-md-4 col-sm-6 my-3">
            <div class="card shadow">
              <img src="<?php echo $fetchData['image'];?>" class="card-img-top" alt="image" id="image">
              <div class="card-body">
                <h2><?php echo $fetchData['name'];?></h2>
                <h6 class="lead"><?php echo $fetchData['department'];?></h6>
                <p><i class="fas fa-phone"></i> <?php echo $fetchData['phone'];?></p>
                <p><i class="far fa-envelope"></i> <a href="mailto:<?php echo $fetchData['email'];?>" id="docemail"><?php echo $fetchData['email'];?></a></p>
              </div>
            </div>
          </div>

        <?php 
          }//while finish
          }else{
        ?>
        <div class="col-lg-12">No Doctor to show</div>
        <?php }?>

      </div>
    </div>


    <!-- Make an appointment start  -->

    <div class="container"id="appointment">
      <div class="card-body">
        <h2 class="card-title border-bottom">Make an Appointment</h2>
        <form id="appointment-form" method="post" action="">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Full Name"
                  required>
            </div>

            <div class="col-md-6 col-sm-12">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email"
                  placeholder="Your Email" required>
            </div>

            <div class="col-md-6 col-sm-12">
              <label for="date">Select Date</label>
              <input type="date" name="date" value="" class="form-control" required>
          </div>

        
          <div class="col-md-6 col-sm-12">
            <label for="select">Select Department</label>
            <select class="form-control" name="department">
              <?php 
                if( mysqli_num_rows($allDept)>0){ 
                while($fetchData=mysqli_fetch_assoc($allDept)) {?>
                  <option value="<?php echo $fetchData['department'];?>"><?php echo $fetchData['department'];?></option>
              <?php 
                }
                }
              ?>
            </select>
          </div>

          <div class="col-md-12 col-sm-12">
            <label for="select">Choose Doctor</label>
            <select class="form-control" name="cdoctor">
            <?php 
              if( mysqli_num_rows($allDoc)>0){ 
              while($fetchData=mysqli_fetch_assoc($allDoc)) {?>
                <option value="<?php echo $fetchData['name'].', '.$fetchData['department'];?>"><?php echo $fetchData['name'].', '.$fetchData['department'];?>
                </option>
            <?php 
              }
              }
            ?>
            </select>
          </div>

          <div class="col-md-12 col-sm-12">
              <label for="phone">Phone Number</label>
              <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" required>
              <label for="message">Additional Message</label>
              <textarea class="form-control" rows="5" id="message" name="message"
                  placeholder="Message" required></textarea>
              <button type="submit" class="form-control" id="cf-submit" name="submit">Submit
              </button>
              
          </div>

          </div>
        </form>
                           
      </div>
    </div>
    
    <!-- Contact -->
    <div class="container"id="contact">
      <div class="card-body">
        <h2 class="card-title border-bottom">Contact Us</h2>
        <form id="contact-form" method="post" action="">
          <div class="row">
            <div class="col-md-12 col-sm-12">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                <label for="message">Additional Message</label>
                <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message" required></textarea>
                <button type="submit" class="form-control" id="cf-submit" name="send">Send
                </button>    
            </div>
          </div>
        </form>                
      </div>
    </div>

    <!-- Footer section Start  -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 col-sm-12 border-top">   
              <div class="copyright-text">
                  <p>Copyright &copy; 2021 Our Company | Design: Akram & Tariqul</p>
              </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>