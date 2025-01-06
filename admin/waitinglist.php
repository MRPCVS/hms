<?php 

include_once('inc/connect.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waiting List</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="waitinglistStyles.css">
   
</head>
<body>
  <section class="h-100 bg-dark">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-xs-12 ">
          <div class="card card-registration my-4">
            <div class="row g-0">
              
              
              
              <div class="col-xl-12">
                <div class="card-body p-md-5 text-black">
                  <h3 class="mb-5 text-uppercase">Waiting List</h3>

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="PatientIDtxt" class="form-control form-control-sm" />
                      <label class="form-label" for="PatientIDtxt">Patient ID</label>
                    </div>
                    <div class="col-md-6 mb-4 d-flex justify-content-end ">
                      <button type="button" class="btn btn-light btn-md">Search</button>
                    </div>
                  </div>
                  
  
                  
  
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="ContactNumber(private)txt" class="form-control form-control-sm" />
                        <label class="form-label" for="ContactNumber(private)txt">Date </label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="ContactNumber(home)txt" class="form-control form-control-sm" />
                        <label class="form-label" for="ContactNumber(home)txt">Staff ID</label>
                      </div>
                    </div>
                  </div>


                  

                 
  
                  <div class="form-outline w-100">
                <textarea class="form-control" id="textAreaExample" rows="4"
                  style="background: #fff;"></textarea>
                <label class="form-label" for="textAreaExample">Comment</label>
              </div>
  
                

                  
  
                  <div class="d-flex justify-content-end pt-3">
                    <button type="button" class="btn btn-light btn-md">Reset all</button>
                    <button type="button" class="btn btn-light btn-md">Delete</button>
                    <button type="button" class="btn btn-primary btn-md ms-2">Submit</button>
                  </div>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>