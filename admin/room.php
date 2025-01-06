<?php 


session_start();

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Room and Operating Theoter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/roomStyles.css">
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
          <form action="inc/roomcode.php"  method="POST">
                    <div class="row">
                    <div class="col-md-6 mb-4">
                        <label>Date </label>
                        <input type="text" name="DATES" class="form-control">
                    </div>
                    </div>

                    <div class="row">
                    
                    <div class="col-md-6 mb-4">
                        <label>Room Number</label>
                        <input type="text" name="R_NUMBER"class="form-control">
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <label>Ward Number </label>
                        <input type="text" name="W_NUMBER"class="form-control">
                    </div>
                    </div>

                    <div class="row">

                    <div class="col-md-6 mb-4">
                        <label>Types</label>
                        <input type="text" name="TYPES"class="form-control">
                    </div>
                    <div class="col-md-6 mb-4">
                        <label>Availability</label>
                        <input type="text" name="AVAILABILITY"class="form-control ">
                    </div>
                    </div>

                    <div>
                      <button name="submit_room" type="submit" class="btn btn-primary btn-md ms-2">Submit form</button>
                    </div>
                  

                </form>
          </div>
        </div>
      </div>
    </div>
  </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>