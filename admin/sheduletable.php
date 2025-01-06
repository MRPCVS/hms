<?php
session_start();
require 'inc/connect.php'; 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shedule Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">

    <?php include('inc/message.php'); ?>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
          <h4> Shedule Table
          <a href="shedule.php" class="btn btn-primary float-end">Add</a>
          <a href="adminpage.php" class="btn btn-danger float-end">Back</a>
          </h4>
          </div>
          <div class="card-body">
            <table class="table table borderd table-striped">
                <thead>
                    <tr>
                        <th>Patient ID</th>
                        <th>Staff ID</th>
                        <th>Room Number</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Comment</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query = "select * FROM shedule";
                    $query_run = mysqli_query($con, $query);
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        foreach($query_run as $sh)
                        {
                           
                            ?>
                              <tr>
                                 <td><?= $sh['Patient_ID']; ?></td>
                                 <td><?= $sh['Staff_ID']; ?></td>
                                 <td><?= $sh['Room_No']; ?></td>                              
                                 <td><?= $sh['Dates']; ?></td>
                                 <td><?= $sh['Timess']; ?></td>
                                 <td><?= $sh['Comments']; ?></td>
                                
                                 <td>
                                    
                                    <a href="sheduleedit.php?Shedule_ID=<?= $sh['Shedule_ID']; ?>" class="btn btn-success btn-sm ">Update</a>                           
                                    <form action="inc/shedulecode.php" method="POST" class="d-inline">
                                        <button Type="submit" name="delete_shedule" value="<?= $sh['Shedule_ID'];?>" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                 </td>
                              </tr>
                            <?php
                            
                        }
                    }
                    else
                    {
                        echo "<h5>No Record Found</h5>";
                        
                    }
                    ?>
                    
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>