<?php 
    session_start();
    //echo "Welcome," . $_SESSION['name'];
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/styleAdmin.css?v=<?php echo time();?>">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <title>MediCare</title>

  </head>
  <body>

    
    <div class="container-fluid">
      <div class="row min-vh-100 flex-nowrap">

        <!-- Sidebar With Navbar -->
        <aside class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-info sticky-top">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white sticky-top">

            <a class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none" href="admin.php">
                <i class="fas fa-plus-square"></i>
                <span class="px-2 d-none d-sm-inline">Medicare</span>
                </a>

            <a href="admin.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <i class="fas fa-comment-alt"></i>
                <span class="px-2 d-none d-sm-inline">Appointments</span>
            </a>
            <a href="doctor.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <i class="fas fa-users"></i>
                <span class="px-2 d-none d-sm-inline">Our Doctors</span>
            </a>
            </div>                         
        </aside>
        

        <main class="col px-0"> 
            <div class="d-flex justify-content-between border bg-light">
                <div class="p-2"><h2 class=""><?php echo "Welcome " . $_SESSION['name'];?></h2></div>
                <div class="p-2">  
                <a href="index.php" class="btn btn-info btn-lg">
                  <span ><i class="fas fa-sign-out-alt"></i> Log out </span> 
                </a>
                </div>
            </div>   

            <div class="container">
                <h1>Show appoinment list</h1>
            </div>
        </main>
   

      </div>
    </div>



    <!-- Add doctor -->
    


















    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>