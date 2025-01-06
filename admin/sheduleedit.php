<?php 


session_start();
require 'inc/connect.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shedule Edit</title>
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
                <h4>Sehedule Add
                  <a href="sheduletable.php" class="btn btn-success float-end">view</a>         
                </h4>
          <div class="card-body">

          <?php
            if(isset($_GET['Shedule_ID']))
          {
            $SH_ID = mysqli_real_escape_string($con, $_GET['Shedule_ID']);
            $query="SELECT * FROM shedule WHERE Shedule_ID='$SH_ID' ";
            $query_run = mysqli_query($con, $query);

            if(mysqli_num_rows($query_run)>0)
            {
                $sh = mysqli_fetch_array($query_run);
                ?>
             
                <form action="inc/shedulecode.php"  method="POST">
                    <input type="hidden" name="SH_ID" value="<?=$sh['Shedule_ID']; ?>" >
                  
                    <div class="row">
                    <div class="mb-4 col-md-6">
                        <label>Patient ID </label>
                        <input type="text" name="P_ID"  value="<?=$sh['Patient_ID']; ?>" class="form-control">
                    </div>
                    <div class="mb-4 col-md-6">
                        <label>Staff ID</label>
                        <input type="text" name="S_ID"  value="<?=$sh['Staff_ID']; ?>" class="form-control">
                    </div>
                    <div>

                    <div class="row">
                    
                    <div class="col-md-6 mb-4">
                        <label>Room Number</label>
                        <input type="text" name="R_NO"  value="<?=$sh['Room_No']; ?>" class="form-control">
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <label>Date</label>
                        <input type="text" name="DATES"  value="<?=$sh['Dates']; ?>" class="form-control">
                    </div>
                    </div>

                    <div class="row">

                    <div class="col-md-6 mb-4">
                        <label>Time</label>
                        <input type="text" name="TIMES"  value="<?=$sh['Timess']; ?>" class="form-control">
                    </div>
                    <div class="col-md-6 mb-4">
                        <label>Comment</label>
                        <textarea type="text" name="COMMENTS"  value="<?=$sh['Comments']; ?>" class="form-control "></textarea>
                    </div>
                    </div>

                    <div>
                      <button name="update_shedule" type="submit" class="btn btn-primary btn-md ms-2">Update form</button>
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

