<?php 
session_start();
echo "Welcome," . $_SESSION['name'];
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
  
    <div class="card-body">
        <h1 class="card-title">Add doctor</h1>
        <form action="" method="post">

            <div class="m-4">
                <label for="image">Image Path</label>
                <input type="text" class="form-control" id="image" name="dbimage" placeholder="Enter image path..." required>
            </div>

            <div class="m-4">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="dbname" placeholder="Enter name..." required>
            </div>

            <div class="m-4">
                <label for="department">Department</label>
                <input type="text" class="form-control" id="department" name="dbdepartment" placeholder="Enter department..." required>
            </div>

            <div class="m-4">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="dbphone" placeholder="Enter phone number..." required>
            </div>

            <div class="m-4">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="dbemail" placeholder="Enter email..." required>
            </div>
        </from>
    </div>
   
    


        





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>