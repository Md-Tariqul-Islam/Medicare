
<?php
    session_start();
    $error=null;
    //check validity
    if(isset($_POST['logbtn'])){
        $email= strtolower($_POST['lemail']);
        $pass=md5(strtolower($_POST['lpass']));
        include "dbconnect.php";
        $sql="SELECT * FROM myadmin WHERE email='$email' AND pass='$pass'";
        $result=mysqli_query($link,$sql);
        $checkresult=mysqli_num_rows($result);
        if($checkresult>0){
            while($row=mysqli_fetch_assoc($result)){
                $name=$row['name'];
            }
            $_SESSION['name']=$name;
            header("location:admin.php");
        }
        else{
            $error="Invalid email or password!";
        }     
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/custom.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login | Page</title>
  </head>
  <body>


    <div class="container mt-5">
        <div class="row justify-content-center">

            <div class="col-xl-8 col-lg-8 col-md-9" style="background:transparent;">

                <div class="card o-hidden border-0 shadow-lg my-5" style="background:transparent;">
                    <div class="card-body p-0" style="background:transparent;">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="p-5 lpage">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome!!</h1>
                                    </div>
                                    <form action="" method="post">
                                        <div class="form-group m-4">
                                            <input type="email" name="lemail" class="form-control rounded-pill p-3" placeholder="Enter Email Address..." required>
                                        </div>

                                        <div class="form-group m-4">
                                            <input type="password" name="lpass" class="form-control rounded-pill p-3" placeholder="Password" required>
                                        </div>
                                        
                                        <div class="d-grid m-4">
                                        <button class="btn btn-primary rounded-pill" name="logbtn" type="submit">Sign-in</button>
                                        </div>
                                        
                                    </form>
                                    <!-- Show Error massage -->
                                    <?php 
                                    if($error!=null){
                                        echo "<div class='alert alert-danger mx-4 p-2' role='alert'>
                                        $error                                
                                        </div>";
                                    }       
                                    ?>
                                    <hr>
                                    <!-- Return Home -->
                                    <div class="text-center">
                                        <a class="text-decoration-none" href="index.php">Back to Home</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- Register -->
        </div>
        <div class="text-center">
            <p>Don't have an account? <a href="register.php" class="text-decoration-none fw-bold">Register Here</a>.</p>
        </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>