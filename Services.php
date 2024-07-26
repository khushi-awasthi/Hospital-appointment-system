<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

        <style>
            body{
                background: rgb(49, 2, 2);
                color:white;
            }
            .navbar{
                background: rgb(153, 153, 237);
            
            }
            .btn{
                background-color: rgb(208, 180, 234);
                color:white;
            }
            button:hover{
                background-color: rgb(47, 18, 72);
            }
            h1{
                color:rgb(5, 89, 89)
            }
            div img:hover{
                
                transform: scale(1.06);
                
          
                      }
            .col-sm-3 img{
                border:2px solid white;
            }
            
                      
            </style>
</head>
<body>
    <!-- Navbar start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 p-0">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <!-- Just an image -->
                    <nav class="navbar navbar-light">
                        <a class="navbar-brand" href="#">
                            <img src="png-transparent-p3-hd-logo.png" width="30" height="30" alt="">
                        </a>
                    </nav>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Appointment.php">Appointment</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Doctor.php">Doctors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Services.php">Services</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    About us
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="Missionvision.php">Mission And Visison</a>
                                    <a class="dropdown-item" href="Qualitypolicy.php"> Quality Policy</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="Contact.php">Contact</a>
                            </li>
                        </ul>
                        <!-- <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form> -->

                        <nav class="navbar navbar-light ">
                            <form class="form-inline">
                              <button class="btn " type="button"> <a href="register.php">Register</a></button>
                              <button class="btn " type="button"> <a href="login.php">Login</a></button>
                            </form>
                          </nav>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar end -->
        <div class="row">
            <div class="col-sm-5"></div>
            <div class="col-sm-2"> <h1>Services</h1></div>
            <div class="col-sm-5"></div>
        </div>
        <br>
        <hr>
        <div class="row">
            <div class="col-sm-6">
                <img src="hos17.webp" class="img-fluid" alt="Responsive image" width="100%" >
            </div>
            <div class="col-sm-6">
                <h2>Surgical Procedure</h2>
                <p> Hospitals offer a plethora of surgical interventions,
                    including but not limited to, orthopedic surgeries, cardiac surgeries,
                    neurosurgeries, and gastrointestinal procedures.</p>
                  <ol>
                    <li>Orthopedic Surgeries</li>
                    <li>Cardiac Surgeries</li>
                    <li>Neurosurgeries</li>
                    <li>ENT (Ear, Nose, and Throat) Surgeries</li>
                  </ol>
            </div>
        </div>
        <hr>
        <br>
        <div class="row">
            
            <div class="col-sm-6">
                <h2>Emergency Care</h2>
                <p> Hospitals provide round-the-clock emergency services to attend to critical medical needs, including
                    trauma care, stabilizing patients, and providing urgent interventions.</p>
                  <ol>
                    <li>Trauma Care</li>
                    <li>Medical Emergencies</li>
                    <li>Pain Management</li>
                    <li>Transfer and Admission</li>
                  </ol>
            </div>
            <div class="col-sm-6">
                <img src="hos13.jpg" class="img-fluid" alt="Responsive image" width="100%">
            </div>
        </div>
        <hr>
        <br>
        <div class="row">
            <div class="col-sm-6">
                <img src="hos16.jpg" class="img-fluid" alt="Responsive image" width="100%">
            </div>
            <div class="col-sm-6">
                <h2>Diagnostic Services</h2>
                <p>This includes various imaging techniques such as X-rays, MRIs, CT scans, and laboratory tests like
                    blood work, urine analysis, and biopsies, aiding in accurate diagnosis.</p>
                  <ol>
                    <li>Imaging Techniques</li>
                    <li>Laboratory Tests</li>
                    <li>Genetic Testing</li>
                    <li>Electrocardiography (ECG/EKG)</li>
                  </ol>
            </div>
        </div>
        <hr>
        <br>
        <div class="row">
            <div class="col-sm-6">
                <h2>Maternity and Obstetric Care</h2>
                <p>Hospitals provide comprehensive care for expectant mothers, including prenatal check-ups, childbirth
                    assistance, and postnatal care for both mother and child.</p>
                  <ol>
                    <li>Prenatal Care</li>
                    <li>Labor and Delivery</li>
                    <li>High-Risk Pregnancy Management</li>
                    <li>Postpartum Care</li>
                  </ol>
            </div>
            <div class="col-sm-6">
                <img src="1.jpg" class="img-fluid" alt="Responsive image" width="100%">
            </div>
        </div>
        <hr>
        <br>
        <div class="row">
            <div class="col-sm-6">
                <img src="hos26.jpeg.jpg" class="img-fluid" alt="Responsive image" width="100%">
            </div>
            <div class="col-sm-6">
                <h2>Anesthesia Services</h2>
              
              <p>Anesthesia is administered by trained professionals to ensure patient comfort and safety during
                surgical procedures.</p>
              <ol>
                <li>Pre-Anesthetic Evaluation</li>
                <li>Anesthesia Monitoring</li>
                <li>Post-Anesthesia Care</li>
              </ol>
            </div>
        </div>
        <hr><br>
        
        <hr>
        <br>
        <br>
        <div class="row">
            <div class="col-sm-3"><img src="1.jpg"  width="100%"height="300px"></div>
            <div class="col-sm-3"><img src="hos14.jpg" width="100%"height="300px"></div>
            <div class="col-sm-3"><img src="hos16.jpg"width="100%" height="300px"></div>
            <div class="col-sm-3"><img src="hos17.webp" width="100%"height="300px"></div>
        </div>
        <br><hr><br>
        <div class="row">
            <div class="col-sm-3"><img src="hos19.jpg"  width="100%"height="300px"></div>
            <div class="col-sm-3"><img src="hos21.jpg" width="100%"height="300px"></div>
            <div class="col-sm-3"><img src="hos23.jpg"width="100%" height="300px"></div>
            <div class="col-sm-3"><img src="hos25.jpg" width="100%"height="300px"></div>
        </div>
        <br><hr><br>
        <div class="row">
            <div class="col-sm-3"><img src="hos26.jpeg.jpg"  width="100%"height="300px"></div>
            <div class="col-sm-3"><img src="otp.webp" width="100%"height="300px"></div>
            <div class="col-sm-3"><img src="d1.jpg"width="100%" height="300px"></div>
            <div class="col-sm-3"><img src="d2.avif" width="100%"height="300px"></div>
        </div>
        <br><hr><br>
        <div class="row">
            <div class="col-sm-3"><img src="d3.jpg"  width="100%"height="300px"></div>
            <div class="col-sm-3"><img src="d4.avif" width="100%"height="300px"></div>
            <div class="col-sm-3"><img src="d5.jpg"width="100%" height="300px"></div>
            <div class="col-sm-3"><img src="d6.avif" width="100%"height="300px"></div>
        </div>
        <br><hr><br>
        </div>
</body>
</html>