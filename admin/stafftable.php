<?php
session_start();
require 'inc/connect.php'; 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Staff Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">

    <?php include('inc/message.php'); ?>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
          <h4> Staff Table
          <a href="staff.php" class="btn btn-primary float-end">Add</a>
          <a href="adminpage.php" class="btn btn-danger float-end">Back</a>
          </h4>
          </div>
          <div class="card-body">
            <table class="table table borderd table-striped">
                <thead>
                    <tr>
                        <th>Staff ID</th>
                        <th>Staff Name</th>
                        <th>Address</th>
                        <th>Contact Number (private)</th>
                        <th>Contact Number (home)</th>
                        <th>DOB</th>
                        <th>Email ID</th>
                        <th>Staff Type</th>
                        <th>Specialization</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query = "select * FROM staff";
                    $query_run = mysqli_query($con, $query);
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        foreach($query_run as $staff)
                        {
                           
                            ?>
                              <tr>
                                 <td><?= $staff['Staff_ID']; ?></td>
                                 <td><?= $staff['Staff_Name']; ?></td>
                                 <td><?= $staff['Staff_Address']; ?></td> 
                                 <td><?= $staff['Contact_P']; ?></td>
                                 <td><?= $staff['Contact_H']; ?></td>                             
                                 <td><?= $staff['DOB']; ?></td>
                                 <td><?= $staff['Email']; ?></td>
                                 <td><?= $staff['S_Type']; ?></td>
                                 <td><?= $staff['Specialization']; ?></td>
                                 
                                 <td>
                                    
                                    <a href="staffedit.php?Staff_ID=<?= $staff['Staff_ID']; ?>" class="btn btn-success btn-sm ">Update</a>                           
                                    <form action="inc/staffcode.php" method="POST" class="d-inline">
                                        <button Type="submit" name="delete_staff" value="<?= $staff['Staff_ID'];?>" class="btn btn-danger btn-sm">Delete</button>
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