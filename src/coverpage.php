<?php
session_start();
$_SESSION['message'] ='';
$mysqli = new mysqli('localhost','root','','ayat');
if ($_SERVER['REQUEST_METHOD']=='POST'){
$fullname=$mysqli->real_escape_string($_POST['fullname']);
$email=$mysqli->real_escape_string($_POST['email']);
$phoneno=$mysqli->real_escape_string($_POST['phoneno']);
$message=$mysqli->real_escape_string($_POST['message']);
// $password1= md5($password); 
//$confirmpassword= md5($confirmpassword); 
$sql = "INSERT INTO message(fullname, email, phoneno, message)VALUES('$fullname', '$email', '$phoneno', '$message')";
 
       if($mysqli->query($sql)===true){
         $_SESSION['message']="registration successfull";
         header("location: coverpage.php");
       }
       else{
         $_SESSION['messge']="User Not Registered";
       }
  
 }
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  
  <style>
  body {
  margin-top: 105px; }

.navbar {
  box-shadow: 2px 2px 5px #3292a6;
  opacity: 0.9;
  background: #fff; }
  .navbar .nav-item {
    font-size: 1.4rem;
    padding-right: 20px; }

#showcase {
  position: relative;
  background-image: url("img/villa2.jpg");
  min-height: 600px; }
  #showcase .primary-overlay {
    background-color: rgba(50, 146, 166, 0.8);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%; }

.info-header {
  width: 50%;
  margin: auto;
  border-bottom: 1px #ddd solid; }

#authors img {
  margin-top: -50px; }

#authors .fa {
  font-size: 25px; }

#authors .card:hover {
  background: #3292a6;
  color: #fff; }
  #authors .card:hover .fa {
    color: #fff; }

#main-footer {
  height: 300px; }
  #main-footer a {
    color: #fff; }

@media (max-width: 576px) {
  nav .container {
    width: 100%; } }
    

  </style>
  <title>Cover Page</title>
</head>
<body id="home">
  <nav class="navbar navbar-toggleable-md navbar-light fixed-top py-4">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right"><span class="navbar-toggler-icon" data-toggle="collapse" data-target="#navbarNav"></span></button>
      <a href="#" class="navbar-brand">
        <img src="img/Ayat-Logo.png" width="60" height="60" alt=""> <h3 class="d-inline align-middle">Ayat Real States</h3>
      </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="#home" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link">About Us</a>
          </li>
          <li class="nav-item">
            <a href="#authors" class="nav-link">Meet Ayat Real Estates</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link">Contact</a>
          </li>
          <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                 aria-haspopup="true" aria-expanded="false">
                                  Settings
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="adminlogin.php">Login as Admin</a>
                                    <a class="dropdown-item" href="employelogin.php">Login as Employee</a>
                                </div>
                              </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- SHOWCASE -->
  <section id="showcase" class="py-5">
    <div class="primary-overlay text-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-12 text-center">
            <h1 class="display-2 mt-5 pt-5">
              Own The House You Dream Of...
            </h1>
            <p class="lead">Ayat Real Estate Is On Full Effect To Make Your House Dream True.</p>
            <a href="#" class="btn btn-outline-secondary btn-lg text-white"><i class="fa fa-arrow-right"></i> Read More</a>
          </div>
          <div class="col-lg-6 col-sm-12">
            <img src="img/qqq.jpg" style="width: 60rem; height: 37rem;" class="img-fluid hidden-md-down" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- NEWSLETTER -->
  <section id="newsletter" class="bg-inverse text-white py-5">
    <div class="container">
      <form class="row">
        <div class="col-md-4">
          <a href="loggin.php" class="btn btn-primary btn-lg btn-block">
            <i class="fa fa-user"></i> Log In
          </a>
        </div>
        <div class="col-md-4">
          <button class="btn btn-primary btn-lg btn-block">
            <i class="fa fa-envelope-open-o"></i> 
          </button>
        </div> <div class="col-md-4">
          <a href="newuser.php" class="btn btn-primary btn-lg btn-block">
            <i class="fa fa-registered"></i> Create New Account
          </a>
        </div>
      </form>
    </div>
  </section>

  <!-- BOXES -->
  <section id="boxes" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="card text-center card-outline-primary">
            <div class="card-block">
              <h3 class="text-primary">Smart Choice</h3>
              <p class="text-muted">Ayat Real estate is the best real estate in ethiopia!! Based On reviews 9.4/10</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card text-center card-primary text-white">
            <div class="card-block">
              <h3>24 hrs Security</h3>
              <p>Ayat Real Estate Provides A 24hrs Security For Residence in Ayat Real Estate Mender </p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card text-center card-outline-primary">
            <div class="card-block">
              <h3 class="text-primary">Parking Lot</h3>
              <p class="text-muted">Ayat Real Estate Provides Residents With A highly Secured Parking Lots</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card text-center card-primary text-white">
            <div class="card-block">
              <h3>Glamerous View</h3>
              <p>Ayat Real Estate Ownes The Best View In The Heart Of th Capital City Addiss Ababa</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ABOUT / WHY -->
  <section id="about" class="my-5 py-5 text-center bg-faded">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="info-header mb-5">
            <h1 class="text-primary pb-3">
              Why Ayat Real Estate?
            </h1>

            <p class="lead pb-3">
              We Guarantee You That Choosing Ayat Real Estate As Your Companion Will Be One Of The Right Descions You Will Made In Your LIFETIME...
            </p>
          </div>

          <!-- ACCORDION -->
          <div id="accordion" role="tablist">
            <div class="card">
              <div class="card-header" role="tab" id="heading1">
                <h5 class="mb-0">
                  <div href="#collapse1" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-arrow-circle-down"></i> Get Inspired
                  </div>
                </h5>
              </div>

              <div id="collapse1" class="collapse show">
                <div class="card-block">
                 Ayat Real Esate Is The Reciepient Of "THE ARCADIAN REAL ESTATES WINNNWER OF 2013 & 2018" We are The Pioneers real estate in ethiopia and have the exprience of more than 20 years in work with great feedback from customers libero, accusantium beatae asperiores odit neque dignissimos ducimus et vel aut repudiandae ut? Quod ducimus minima perspiciatis, minus, quas, sunt architecto odit suscipit id ut, iure. Libero accusamus nihil laudantium iste eligendi.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" role="tab" id="heading2">
                <h5 class="mb-0">
                  <div class="collapsed" href="#collapse2" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-arrow-circle-down"></i> Gain The Knowledge
                  </div>
                </h5>
              </div>

              <div id="collapse2" class="collapse">
                <div class="card-block">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi quia eligendi possimus eaque excepturi assumenda error enim quos, libero, accusantium beatae asperiores odit neque dignissimos ducimus et vel aut repudiandae ut? Quod ducimus minima perspiciatis, minus, quas, sunt architecto odit suscipit id ut, iure. Libero accusamus nihil laudantium iste eligendi.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" role="tab" id="heading3">
                <h5 class="mb-0">
                  <div class="collapsed" href="#collapse3" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-arrow-circle-down"></i> Open Your Mind
                  </div>
                </h5>
              </div>

              <div id="collapse3" class="collapse">
                <div class="card-block">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi quia eligendi possimus eaque excepturi assumenda error enim quos, libero, accusantium beatae asperiores odit neque dignissimos ducimus et vel aut repudiandae ut? Quod ducimus minima perspiciatis, minus, quas, sunt architecto odit suscipit id ut, iure. Libero accusamus nihil laudantium iste eligendi.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- AUTHORS -->
  <section id="authors" class="my-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="info-header mb-5">
            <h1 class="text-primary pb-3">
              Meet Ayat Real Estate
            </h1>

            <p class="lead pb-3">
These Are Our Highly Regarded Agents Whom are Pioneers With The Real Estate AndSworn To Make Ayat Real Estate and The World A better Place...
            </p>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card">
                <div class="card-block">
                  <img src="img/profile pic.png" alt="" class="img-fluid rounded-circle w-50 mb-3">
                  <h3>Bezawit Yaekob</h3>
                  <h5 class="text-muted">CEO Of Ayat Real Estate</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat dolores earum numquam vel tempora, ut.</p>
                  <div class="d-flex flex-row justify-content-center">
                    <div class="p-4">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </div>
                    <div class="p-4">
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div class="p-4">
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card">
                <div class="card-block">
                  <img src="img/profile pic.png" alt="" class="img-fluid rounded-circle w-50 mb-3">
                  <h3>Selam Abebe</h3>
                  <h5 class="text-muted">Co-Manager</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat dolores earum numquam vel tempora, ut.</p>
                  <div class="d-flex flex-row justify-content-center">
                    <div class="p-4">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </div>
                    <div class="p-4">
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div class="p-4">
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card">
                <div class="card-block">
                  <img src="img/profile pic.png" alt="" class="img-fluid rounded-circle w-50 mb-3">
                  <h3>Chala abdellah</h3>
                  <h5 class="text-muted">Lead Architect</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat dolores earum numquam vel tempora, ut.</p>
                  <div class="d-flex flex-row justify-content-center">
                    <div class="p-4">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </div>
                    <div class="p-4">
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div class="p-4">
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card">
                <div class="card-block">
                  <img src="img/profile pic.png" alt="" class="img-fluid rounded-circle w-50 mb-3">
                  <h3>Abebe Gobena</h3>
                  <h5 class="text-muted">Site Manager</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat dolores earum numquam vel tempora, ut.</p>
                  <div class="d-flex flex-row justify-content-center">
                    <div class="p-4">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </div>
                    <div class="p-4">
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div class="p-4">
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact" class="bg-faded py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <h3>Stay In Touch</h3>
          <p class="lead">Ask Questions Leave Comments We will Get Back To You.</p>
          <form class="form login-form text center"  action="coverpage.php" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="form-group">
              <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" name="fullname" class="form-control" placeholder="Name">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" name="email" class="form-control" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input type="text" name="phoneno" class="form-control" placeholder="Phone No">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
              </div>
            </div>
            <input type="submit" value="Submit" name="submit" class="btn btn-primary btn-block btn-lg">
          </form>
        </div>
        <div class="col-lg-3 align-self-center">
          <img src="img/Ayat-Logo.png" class="img-fluid hidden-md-down" alt="">
        </div>
      </div>
    </div>
  </section>
  

  <footer id="main-footer" class="py-5 bg-primary text-white">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-6 offset-md-6">
          <p class="lead">Copyright &copy; 2020 Ayat Real Estate PLC</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/jquery.min.js"></script>
  <script src="js/tether.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/navbar-fixed.js"></script>
</body>
</html>
