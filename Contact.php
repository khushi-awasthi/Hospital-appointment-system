<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
  body{
                background: rgb(49, 2, 2);
                color:black;
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
            h5{
                color:rgb(5, 89, 89)
            }
            .card-body{
              background:cadetblue;
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

<div class="container-fluid">
        <div class="row">
        <div class="col-sm-12 p-0">
            <img src="hos6.jpg" width="100%" height="50%">
            <br>
            <br>
            <div class="card-group">
  <div class="card">
    
    <div class="card-body">
      <h5 class="card-title">MR.SUBROTO CHATTERJEE</h5>
      <p class="card-text">Hospital Administration<br>
      tel:0522678008</p>
      
    </div>
  </div>
  <div class="card">
    
    <div class="card-body">
      <h5 class="card-title">DR.MAZHAR HUSAIN <br>
    </h5>
      <p class="card-text">Officiating Directo(Chief Neurosurgon)<br>
tel 0522-6780102,5226781742.</p>
      
    </div>
  </div>
  <div class="card">

    <div class="card-body">
      <h5 class="card-title">SHRI.ANIL VIKRAM SINGH</h5>
      <p class="card-text">Sr.Advisor
        <br>
        Sahara india pariwar
    </p>
    <br> 
    

</div>
</div>
</body>
</html>