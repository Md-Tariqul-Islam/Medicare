<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/custom.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login | Page</title>
  </head>
  <body>


    <h1>Log-In Page</h1>


    <div class="container">

<!-- Outer Row -->
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
                            <form action="" method="post" class="user">
                                <div class="form-group">
                                    <input type="email" name="lemail" class="form-control form-control-user rounded-pill"
                                        id="exampleInputEmail" aria-describedby="emailHelp"
                                        placeholder="Enter Email Address...">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="lpass" class="form-control form-control-user rounded-pill"
                                        id="exampleInputPassword" placeholder="Password">
                                </div>
                                
                                
                                <div class="d-grid">
                                    <button class="btn btn-primary rounded-pill" type="button">Sign-in</button>
                                </div>
                                
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="index.php">Back to Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>

    <p>Don't have an account? <a href="register.php">Register Here</a>.</p>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>