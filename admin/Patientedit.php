<?php 


session_start();
require 'inc/connect.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patient Edit</title>
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
                <h4>Patient Add
                  <a href="patienttable.php" class="btn btn-success float-end">view</a>         
                </h4>
          <div class="card-body">

          <?php
            if(isset($_GET['Patient_ID']))
          {
            $Patient_ID = mysqli_real_escape_string($con, $_GET['Patient_ID']);
            $query="SELECT * FROM patient WHERE Patient_ID='$Patient_ID' ";
            $query_run = mysqli_query($con, $query);

            if(mysqli_num_rows($query_run)>0)
            {
                $Patient = mysqli_fetch_array($query_run);
                ?>
             
                <form action="inc/code.php"  method="POST">
                    <input type="hidden" name="P_ID" value="<?=$Patient['Patient_ID']; ?>" >
                  
                    <div class="mb-4">
                        <label>Full name </label>
                        <input type="text" name="P_NAME" value="<?=$Patient['Full_Name']; ?>" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label>Address</label>
                        <input type="text" name="P_ADD"  value="<?=$Patient['P_Address']; ?>" class="form-control">
                    </div>

                    <div class="row">
                    
                    <div class="col-md-6 mb-4">
                        <label>Contact Number (private)</label>
                        <input type="text" name="P_CONTACT_P"  value="<?=$Patient['Contact_P']; ?>" class="form-control">
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <label>Contact Number (home)</label>
                        <input type="text" name="P_CONTACT_H" value="<?=$Patient['Contact_H']; ?>" class="form-control">
                    </div>
                    </div>

                    <div class="row">

                    <div class="col-md-6 mb-4">
                        <label>DOB</label>
                        <input type="text" name="DOB" value="<?=$Patient['P_DOB']; ?>" class="form-control">
                    </div>
                    <div class="col-md-6 mb-4">
                        <label>Email_ID</label>
                        <input type="text" name="EMAIL" value="<?=$Patient['P_Email']; ?>" class="form-control ">
                    </div>
                    </div>

                    <div>
                      <button name="update_patient" type="submit" class="btn btn-primary btn-md ms-2">Update form</button>
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