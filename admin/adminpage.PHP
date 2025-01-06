<?php 

include_once('inc/connect.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
    rel="stylesheet"  type='text/css'>
    
    
    

    <title>Arogya Health Care Staff</title>
</head>
<body>
    <section id="nav-bar">


        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
              
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                 
                  <li class="nav-item">
                    <a class="nav-link" href="../index.PHP">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </section>



    <div class="card">
  

  <div class="card-body">
    <h5 class="card-title">Patient Details</h5>
    
    <a href="patienttable.php" class="btn btn-primary">Go </a>
  </div>
</div>

<div class="card">
  

  <div class="card-body">
    <h5 class="card-title">Staff Details</h5>
    
    <a href="Staff.php" class="btn btn-primary">Go </a>
  </div>
</div>

<div class="card">
  

  <div class="card-body">
    <h5 class="card-title">Payment Details</h5>
    
    <a href="payment.php" class="btn btn-primary">Go </a>
  </div>
</div>

<div class="card">
 

  <div class="card-body">
    <h5 class="card-title">Room Details</h5>
    
    <a href="room.php" class="btn btn-primary">Go </a>
  </div>
</div>

<div class="card">
  

  <div class="card-body">
    <h5 class="card-title">Operatin Theoter Details</h5>
   
    <a href="operatingTheoter.php" class="btn btn-primary">Go </a>
  </div>
</div>

<div class="card">
  

  <div class="card-body">
    <h5 class="card-title">Waiting List Details</h5>
   
    <a href="waitinglist.php" class="btn btn-primary">Go </a>
  </div>
</div>

<div class="card">
  

  <div class="card-body">
    <h5 class="card-title">Shedule Details</h5>
   
    <a href="shedule.php" class="btn btn-primary">Go </a>
  </div>
</div>

<div class="card">
  

  <div class="card-body">
    <h5 class="card-title">Appointment Details</h5>
    
    <a href="#" class="btn btn-primary">Go </a>
  </div>
</div>


<div class="card">
  

  <div class="card-body">
    <h5 class="card-title">Medical History Details</h5>
   
    <a href="medical.php" class="btn btn-primary">Go </a>
  </div>
</div>


<div class="card">
  

  <div class="card-body">
    <h5 class="card-title">Treatment Details</h5>
   
    <a href="treatment.php" class="btn btn-primary">Go </a>
  </div>
</div>








</body>
</html>