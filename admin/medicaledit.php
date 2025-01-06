<?php 


session_start();
require 'inc/connect.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Medical Edit</title>
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
                <h4>Medical History
                  <a href="medicaltable.php" class="btn btn-success float-end">view</a>         
                </h4>
          <div class="card-body">

          <?php
            if(isset($_GET['Patient_ID']))
          {
            $P_ID = mysqli_real_escape_string($con, $_GET['Patient_ID']);
            $query="SELECT * FROM medical WHERE Patient_ID='$P_ID' ";
            $query_run = mysqli_query($con, $query);

            if(mysqli_num_rows($query_run)>0)
            {
                $medical = mysqli_fetch_array($query_run);
                ?>
             
                <form action="inc/medicalcode.php"  method="POST">
                    <input type="hidden" name="P_ID" value="<?=$medical['Patient_ID']; ?>" >
                  
                <div class="row">

                  <div class="col-md-6 mb-4">
                    <label>Patient ID </label>
                    <input type="text" name="P_ID" class="form-control">
                  </div>


                  <div class="col-md-6 mb-4">
                    <label>Date</label>
                    <input type="text" name="M_DATE" class="form-control">
                  </div>
                </div>

                <div class="mb-4">
                  <label>Doctor Name</label>
                  <input type="text" name="D_NAME" class="form-control">
                </div>

                <div class="mb-3">
                  <label for="Textarea1" class="form-label">Medical Details</label>
                  <textarea name="M_DETAILS" class="form-control" id="Textarea1" rows="3"></textarea>
                </div>

                <div>
                  <button name="submit_medical" type="submit" class="btn btn-primary btn-md ms-2">Submit form</button>
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