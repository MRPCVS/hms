<?php
session_start();
require 'inc/connect.php'; 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Room and OT Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">

    <?php include('inc/message.php'); ?>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
          <h4> Room and OT Table
          <a href="room.php" class="btn btn-primary float-end">Add</a>
          <a href="adminpage.php" class="btn btn-danger float-end">Back</a>
          </h4>
          </div>
          <div class="card-body">
            <table class="table table borderd table-striped">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Room Number</th>
                        <th>Ward Number</th>
                        <th>Type</th>
                        <th>Availability</th>
                     
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query = "select * FROM room";
                    $query_run = mysqli_query($con, $query);
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        foreach($query_run as $rot)
                        {
                           
                            ?>
                              <tr>
                                 <td><?= $rot['Dates']; ?></td>
                                 <td><?= $rot['Room_No']; ?></td>
                                 <td><?= $rot['Ward_No']; ?></td> 
                                 <td><?= $rot['Types']; ?></td>
                                 <td><?= $rot['Available']; ?></td>                             
                               
                                 
                                 <td>
                                    
                                    <a href="roomedit.php?Room_No=<?= $rot['Room_No']; ?>" class="btn btn-success btn-sm ">Update</a>                           
                                    <form action="inc/roomcode.php" method="POST" class="d-inline">
                                        <button Type="submit" name="delete_room" value="<?= $rot['Room_No'];?>" class="btn btn-danger btn-sm">Delete</button>
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