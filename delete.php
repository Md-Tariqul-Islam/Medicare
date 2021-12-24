<?php 
// db connect
include "dbconnect.php";
// data delete
if(isset($_GET['docID'])){
    $delete_id=$_GET['docID'];
    $delete_sql="DELETE FROM ourdoctor WHERE id=$delete_id";
    if(mysqli_query($link,$delete_sql)){
        header("location:doctor.php");
      }
      else{
          ?>
          <script>
              alert("Operation Unsuccessfully");
          </script>
          <?php
      }
    mysqli_close($link);
}
?>