<?php 
    session_start();
    //connect database
    include "dbconnect.php";
    //Updte and set 
    $edit_id=$_GET['docID'];
    if(isset($_POST['submit'])){
        $image= $_POST['dbimage'];
        $name= $_POST['dbname'];
        $department= $_POST['dbdepartment'];
        $phone= $_POST['dbphone'];
        $email=$_POST['dbemail'];
        $sql="UPDATE ourdoctor SET image='$image', name='$name', department='$department', phone='$phone', email='$email'WHERE id=$edit_id";

        if(mysqli_query($link,$sql)){
            header("location:doctor.php");
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
    include "dbconnect.php";
    //query the selected id
    if(isset($_GET['docID'])){
        $edit_id=$_GET['docID'];
        $sql="SELECT * FROM ourdoctor WHERE id=$edit_id";
        $s_query=mysqli_query($link,$sql);
        if( mysqli_num_rows($s_query)>0){ 
            while($fetchData=mysqli_fetch_assoc($s_query)) {
                
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
                <i class="fas fa-plus-square" style="color:#f14242;font-size:25px;"></i>
                <span class="px-2 d-none d-sm-inline" style="font-size:25px;">Medicare</span>
            </a>

            <a href="admin.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <i class="fas fa-comment-alt"></i>
                <span class="px-2 d-none d-sm-inline">Appointments</span>
            </a>
            <a href="doctor.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <i class="fas fa-users"></i>
                <span class="px-2 d-none d-sm-inline">Our Doctors</span>
            </a>

            <a href="contactInfo.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                   <i class="fas fa-th-list"></i>
                <span class="px-2 d-none d-sm-inline">Contacts</span>
            </a>
            </div>                         
        </aside>
        <!-- Main part -->
        <main class="col px-0">
            <!-- Header  -->
            <div class="d-flex justify-content-between border bg-light mb-4 shadow">
                <div class="p-2"><h2 class=""><?php echo "Welcome " . $_SESSION['name'];?></h2></div>
                <div class="p-2">  
                <a href="index.php" class="btn btn-info btn-lg">
                  <span ><i class="fas fa-sign-out-alt"></i> Log out </span> 
                </a>
                </div>
            </div>  
            <!-- Add updated doctor form -->
            <div class="container">
                <div class="card-body border bg-info shadow rounded">
                    <h1 class="card-title">Add doctor</h1>
                    <form action="" method="post">

                        <div class="m-4">
                            <label for="image">Image Path</label>
                            <input type="text" value="<?php echo $fetchData['image'];?>" class="form-control" id="image" name="dbimage" placeholder="Enter image path..." required>
                        </div>

                        <div class="m-4">
                            <label for="name">Name</label>
                            <input type="text" value="<?php echo $fetchData['name'];?>" class="form-control" id="name" name="dbname" placeholder="Enter name..." required>
                        </div>

                        <div class="m-4">
                            <label for="department">Department</label>
                            <input type="text" value="<?php echo $fetchData['department'];?>" class="form-control" id="department" name="dbdepartment" placeholder="Enter department..." required>
                        </div>

                        <div class="m-4">
                            <label for="phone">Phone</label>
                            <input type="text" value="<?php echo $fetchData['phone'];?>" class="form-control" id="phone" name="dbphone" placeholder="Enter phone number..." required>
                        </div>

                        <div class="m-4">
                            <label for="email">Email</label>
                            <input type="email" value="<?php echo $fetchData['email'];?>" class="form-control" id="email" name="dbemail" placeholder="Enter email..." required>
                        </div>

                        <div class="ms-4 col-3">
                            <button type="submit" class="form-control btn btn-primary" name="submit"><i class="far fa-save"></i> Submit</button>
                        </div>

                    </from>
                </div>                     
             </div>
        </main>

      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>


       <?php
       
       } //finish while
       }//finish if 
       }//finish another if
?>