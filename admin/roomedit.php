<?php 


session_start();
require 'inc/connect.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Room and Operating Theoter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/patientStyles.css">
  </head>
  <body>

  <div class="container mt-5">

  <?php include('inc/message.php'); ?>


    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
                <h4>Room and Operating Theoter
                  <a href="roomtable.php" class="btn btn-success float-end">view</a>         
                </h4>
          <div class="card-body">

          <?php
            if(isset($_GET['Room_No']))
          {
            $R_NUMBER = mysqli_real_escape_string($con, $_GET['Room_No']);
            $query="SELECT * FROM room WHERE Room_No='$R_NUMBER' ";
            $query_run = mysqli_query($con, $query);

            if(mysqli_num_rows($query_run)>0)
            {
                $rot = mysqli_fetch_array($query_run);
                ?>
             
                <form action="inc/roomcode.php"  method="POST">
                    
                  
                    <div class="row">
                    <div class="col-md-6 mb-4">
                        <label> Date </label>
                        <input type="text" name="DATES" value="<?=$rot['Dates']; ?>" class="form-control">
                    </div>
                    </div>

                    <div class="row">
                    
                    <div class="col-md-6 mb-4">
                        <label>Room Number</label>
                        <input type="text" name="R_NUMBER" value="<?=$rot['Room_No']; ?>" class="form-control">
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <label>Ward Number </label>
                        <input type="text" name="W_NUMBER" value="<?=$rot['Ward_No']; ?>" class="form-control">
                    </div>
                    </div>

                    <div class="row">

                    <div class="col-md-6 mb-4">
                        <label>Types</label>
                        <input type="text" name="TYPES" value="<?=$rot['Types']; ?>" class="form-control">
                    </div>
                    <div class="col-md-6 mb-4">
                        <label>Availability</label>
                        <input type="text" name="AVAILABILITY" value="<?=$rot['Available']; ?>" class="form-control">
                    </div>
                    </div>

                    <div>
                      <button name="update_room" type="submit" class="btn btn-primary btn-md ms-2">Update form</button>
                    </div>
                  

                </form>
                <?php
                
            }
            else
            {
                echo "<h4>No Such ID Found</h4>";
            }
          }
          ?>
          </div>
        </div>
      </div>
    </div>
  </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
