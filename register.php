<?php 
    $error=null;
    $error1=null;
    if(isset($_POST['logbtn'])){
        include "dbconnect.php";
        $name= $_POST['lName'];
        $email= $_POST['lemail'];
        $pass=md5($_POST['lpass']);
        $pass1=md5($_POST['lpass1']);

        $emailquery="SELECT * FROM myadmin WHERE email='$email'";
        $query=mysqli_query($link,$emailquery);
        $emailcount=mysqli_num_rows($query);

        if($emailcount>0){
            $error="* Email already exist";
        }else{
            if($pass===$pass1){
                $sql = "INSERT INTO myadmin (name,email,pass,pass1) VALUES ('$name','$email','$pass','$pass1')";
                if(mysqli_query($link,$sql)){
                    ?>
                    <script>
                        alert("Recorded Successfully");
                    </script>
                    <?php
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
            else{
                $error1="* Password Is Not Match"; 
            }
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Register | Page</title>
  </head>
  <body>

    <div class="container pt-4">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-8 col-lg-8 col-md-9" style="background:transparent;">

            <div class="card o-hidden border-0 shadow-lg my-5" style="background:transparent;">
                <div class="card-body p-0" style="background:transparent;">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12 ">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-3">Welcome!!</h1>
                                </div>
                                <form action="register.php" method="post">

                                    <div class="form-group m-4">
                                        <input type="text" name="lName" class="form-control rounded-pill p-2"
                                            id="exampleInputPassword" placeholder="Enter Username..." required>
                                    </div>

                                    <div class="form-group m-4">
                                        <input type="email" name="lemail" class="form-control rounded-pill p-2 "
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address..." required>
                                            <?php 
                                              if($error!=null){
                                                echo "<p class='text-danger mx-3'>$error</p>";
                                              }
                                            ?>
                                    </div>

                                    <div class="form-group m-4">
                                        <input type="password" name="lpass" class="form-control rounded-pill p-2"
                                            id="exampleInputPassword" placeholder="Password" required>
                                    </div>

                                    <div class="form-group m-4">
                                        <input type="password" name="lpass1" class="form-control rounded-pill p-2"
                                            id="exampleInputPassword" placeholder="Confirm Password" required>
                                            <?php 
                                              if($error1!=null){
                                                echo "<p class='text-danger mx-3'>$error1</p>";
                                              }
                                            ?>
                                    </div>
                                    
                                    <div class="d-grid m-4">
                                        <button class="btn btn-primary rounded-pill" name="logbtn" type="submit">Sign-in</button>
                                    </div>
                                    
                                </form>
                                <hr>
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

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>





