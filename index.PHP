<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/indexStyles.css">
    <link rel="stylesheet" href="css/bootstrap.css">
  

    <title>Arogya Health Care Hospital</title>
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
                    <a class="nav-link"  href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about-us">About</a>  
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#appointment">Appointment</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </section>

    <!-- Banner section -->
<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="promo-title">WELCOME TO AROGYA HEALTHCARE</p>
                <p>We are team of Specialized Doctors.
                   "Your devotion and care bring healing, comfort and hope."</p>
            </div>
            <div class="col-mod-6 text-center">
                <img src="img/doctornew.png" class="img-fluid ">
            </div>
        </div>
    </div>

</section>

<!-- About Us -->

<section id="about-us">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 ">
       <h1 class="title text-center">WHY CHOOSE US</h1>
       <div class="row ">
        <div class="col-md-6 ">
            <p class="about-title">Arogya Hospitals, a household name for health care services in Sri Lanka, which pioneered providing community-based expert healthcare services by positioning its chain of hospitals in strategic locations has now turned into a chain of fully fledged multispecialty hospitals offering tertiary care. Being the first internationally accredited hospital chain in Sri Lanka, Arogya Hospitals operates in Colombo, Kegalle. Hemas Hospitals also operates of the largest company owned diagnostic laboratory chain in Sri Lanka with 50 laboratories spread across the country. </p>
        </div>
        <div class="col-md-6 ">
            <img src="img/about.jpg" class="img-fluid ">
        </div>
       </div>
    </div>
</section>





<section id="services">
    <div class="container text-center">
        <h1 class="title">WHAT WE DO ? </h1>
        <div class="row text-center">
            <div class="col-md-4 services">
                <i class="fa fa-heartbeat fa-5x"></i>
                <h4>OPD & Channelling</h4>
                <p>Scheduling, One screen dashboard quick appointment booking, Payment, Cancellation, Rescheduling, Doctor payment, Nurse app with real-time queue management, Room display, Central TV display, SMS alerts, Patient Portal access.</p>
            </div>

            <div class="col-md-4 services">
                <i class="fa fa-plus-circle fa-5x"></i>
                <h4>Stock & Pharmacy</h4>
                <p>Multi-location stock, Barcoding, Suppliers, One click order, PO, PR, GRN & Return, Shortage, Excess, Isolation, Expiration alerts, Transfer, ward & pharmacy billing , Queue management, Automated Bin-card, General Ledger, Trial balance.</p>
            </div>

            <div class="col-md-4 services">
                <i class="fa fa-flask fa-5x"></i>
                <h4>Laboratory</h4>
                <p>Test master, Lab parameters, Reference ranges, Result calculations, Laboratory sample workflow, Barcoding, Worksheet, Analyser integration automation, Critical results, Test Re-run verification, History, SMS alerts, Results reporting.</p>
            </div>

            <div class="col-md-4 services">
                <i class="fa fa-bed fa-5x"></i>
                <h4>IP Admission</h4>
                <p>Ward, Room, Bed management, Bed utlization dashboard, Admission, Transfer, Discharge workflow, Integrated with Procedure Scheduling, Laboratory workflow & Stock, In-Patient Pricing matrix, In-Patient Discharge summary and Billing.</p>
            </div>

            <div class="col-md-4 services">
                <i class="fa fa-user fa-5x"></i>
                <h4>Packages & Short Visit</h4>
                <p>Single encounter booking and payments with multi-department services, Packages with pre-planned list of services, Pricing configuration, Short visit workflow & Patient status dashboard, Patient scheduling with visit & stay time optimization</p>
            </div>
        
        </div>
        
    </div>
</section>

<!-- Appointment Section -->

<section id="appointment" class="appointment section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Make an Appointment</h2>
       
      </div>
      <br>

      <form accept="" role="form" class="php-email-form">
        <div class="row">
          <div class="col-md-4 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" >
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" >
           
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" >
            
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 form-group mt-3">
            <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" >
            
          </div>
          <div class="col-md-4 form-group mt-3">
            <select name="age" id="age" class="form-select">
              <option value="">Select Age</option>
              <option value="Department 1">Below 18</option>
              <option value="Department 2">18-40</option>
              <option value="Department 3">40 above</option>
            </select>
            
          </div>
          <div class="col-md-4 form-group mt-3">
            <select name="doctor" id="doctor" class="form-select">
              <option value="">Select Doctor</option>
              <option value="Doctor 1">Doctor 1</option>
              <option value="Doctor 2">Doctor 2</option>
              <option value="Doctor 3">Doctor 3</option>
            </select>  
          </div>
        </div>

        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
          
        </div>
        <button type="button" class="btn btn-primary">Make an Appointment</button>
      </form>

    </div>
  </section><!-- End Appointment Section -->



  <section id="contact">
    <div class="container text-center">
        <p>FIND US ON SOCIAL MEDIA</p>
        <div class="social-icons">
            <a href=" https://www.facebook.com/"> <img src="img/facebook.png"></i></a>
            <a href=" https://twitter.com/?lang=en"> <img src="img/twitter.png"></i></a>
            <a href="https://www.instagram.com/"> <img src="img/InstagramLogo.png"></i></a>
            <a href="https://www.snapchat.com/"> <img src="img/snapchat.png"></i></a>

        </div>
    </div>
</section>


 


<!-- footer section -->

<section id="footer">
    
    <div class="container">
        <div class="row">
            <div class="col-md-5 footer-box">
                <h3>AROGYA HOSPITAL KEGALLE</h3>
              <p>
                Arogya Hospital Road<br>
                Panakawa, Kegalle<br><br>
                <strong>Phone:</strong> +94 705204528<br>
                <strong>Email:</strong> Arogya@example.com<br>
              </p>
            </div>
            <div class="col-md-5 footer-box">
                <h3>AROGYA HOSPITAL COLOMBO</h3>
              <p>
                Arogya Hospital Road<br>
                Panakawa, Colombo<br><br>
                <strong>Phone:</strong> +94 726011293<br>
                <strong>Email:</strong> Arogya@example.com<br>
              </p>
            </div>
            <div class="col-md-2 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#about-us">About us</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#appointment">Appointment</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#Login">Contact</a></li>
                </ul>
              </div>
              
        </div>
    </div>
</section>




</body>
</html>