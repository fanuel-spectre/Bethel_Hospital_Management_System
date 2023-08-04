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
         header("location: mainpage.php");
       }
       else{
         $_SESSION['messge']="User Not Registered";
       }
  
 }
 $custormer = $_GET['userName'];
if(isset($_POST['villa'])){
  $type = "Villa";
  header("location:subcity.php?username=$custormer&type=$type");
}
elseif(isset($_POST['appartment'])){
  $type = "Appartment";
  header("location:subcity2.php?username=$custormer&type=$type");

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Page</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
        <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse sticky-top">
            <a class="navbar-brand" href="coverpage.php">
                <img src="img/Ayat-Logo.png" width="100" height="80" class="d-inline-block align-content-center"alt=""> AYAT REAL STATE SALES MANAGMENT</a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="coverpage.php">Home <span class="sr-only">(current)</span></a>
                      
                    </li>
                </li>
               <li class="nav-item">
                <a href="gallery.php" class="nav-link">Gallery</a>
            </li>

                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                 aria-haspopup="true" aria-expanded="false">
                                  Settings
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="loggin.php">LOG OUT</a>
                                  
                                   <a class="dropdown-item" href="newsearch.php">ME</a>
                                </div>
                              </li>
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </nav>
              <br><br>
              <div class="card-columns">
                <section class="card mb-5 border-warning">  
                <div class="card-fluid">
                    <h3 class="mb-5 font-weight-light text-uppercase text-center">Superb Value</h3>
                  <img src="img/gold.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">As one of the top real estate developers in Ethiopia, we build a property with unbeatable and superb value to match your needs.   We give security to your family and risk avoidance to your investment by offering you calm, gated compound with common facilities fitting all. </p>
                  </div>
                </div>
                </section>
                <section class="card mb-5 border-warning">
                <div class="card-fluid p-3">
                  <blockquote class="blockquote mb-0 card-body">
                      <h3><strong>Famous Real Estate Agents Quotes...</strong></h3>
                    <p>“Real estate is an imperishable asset, ever increasing in value. It is the most solid security that human ingenuity has devised. It is the basis of all security and about the only indestructible security.”</p>
                    <footer class="blockquote-footer">
                      <small class="text-muted">
                        Archtecht<cite title="Source Title">Art Genslere </cite>
                      </small>
                    </footer>
                    <br>
                    <p>"I don't think you can teach architecture. You can only inspire people."</p>
                    <footer class="blockquote-footer">
                      <small class="text-muted">
                        Archtecht<cite title="Source Title">Zaha Hadid </cite>
                      </small>
                    </footer>
                    <br>
                    <p>“Real estate cannot be lost or stolen, nor can it be carried away. Purchased with common sense, paid for in full, and managed with reasonable care, it is about the safest investment in the world.”</p>
                    <footer class="blockquote-footer">
                      <small class="text-muted">
                        Agent<cite title="Source Title">Franklin D. Roosevelt </cite>
                      </small>
                    </footer>
                    <br>
                    <p>“If you don’t own a home, buy one. If you own a home, buy another one. If you own two homes, buy a third. And, lend your relatives the money to buy a home.”</p>
                    <footer class="blockquote-footer">
                      <small class="text-muted">
                        investor and multi-billionaire<cite title="Source Title">John Paulson </cite>
                      </small>
                    </footer>
                  </blockquote>
                </div>
                </section>
                <div class="card">
                    <h3 class="mb-5 font-weight-light text-uppercase text-center">Gorgeous Design</h3>
                  <img src="img/damn.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="width: 28rem; height: 15rem;">
                    <p class="card-text">A compound well designed by local and international architects who give attention to both aesthetics and functionality.  All our residences and apartments have eye catching views to the gardens, drive ways and common playgrounds.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="card bg-primary text-white text-center p-3">
                  <blockquote class="blockquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                    <footer class="blockquote-footer text-white">
                      <small>
                        Someone famous in <cite title="Source Title">Source Title</cite>
                      </small>
                    </footer>
                  </blockquote>
                </div>
                <div class="card text-center">
                    <h3 class="mb-5 font-weight-light text-uppercase text-center">Safe Compound</h3>
                    <img src="img/main.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Ayat Real State provides with 24-hours full security and the most safest and secure a compound can be for children and adults also with full 24hrs open supermarket.</p>
                    <p class="card-text"><small class="text-muted">Last updated 33 mins ago</small></p>
                  </div>
                </div>
                <div class="card">
                    <h3 class="mb-5 font-weight-light text-uppercase text-center">AYAT CEO</h3>
                    <!-- <video width="100%" controls>
                        <source src="img/e.mp4" type="video/mp4">
                         <source src="img/e.ogg" type="video/ogg">
                            Your browser does not support HTML5 video.
                                   </video> -->
                                   <img src="img/melat.jpg" class="card-img-top" alt="...">
              
                </div>
                <div class="card p-3 text-right">
                  <blockquote class="blockquote mb-0">
                    <p>Your Home Is Your World...​Discover Your Own With Ayat Real Estate</p>
                    <footer class="blockquote-footer">
                      <small class="text-muted">
                        Sales and Marketing Manager <cite title="Source Title">Mr. Mikiyas Assefa</cite>
                      </small>
                    </footer>
                  </blockquote>
                </div>
                <div class="card border-warning">
                    <form class="form login-form text center"  action="mainpage.php" method="post" enctype="multipart/form-data" autocomplete="off"> 
                        <h3 class="mb-5 font-weight-light text-uppercase text-center">Stay In Touch</h3>
                        <div class="form-group">
                            <strong> Full Name </strong> <input type="text" name="fullname"   class="form-control rounded-pill form-control-lg" placeholder="Full name" required>
                         </div>
                          <div class="form-group">
                             <strong> Email  </strong> <input type="email"  name="email" class="form-control rounded-pill form-control-lg" placeholder="Email" >
                                 </div>
                                 <div class="form-group">
                                    <strong> Phone No  </strong> <input type="text"  name="phoneno" class="form-control rounded-pill form-control-lg" placeholder="Phone No" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="message" ><strong>Message</strong></label>
                                            <textarea class="form-control" id="message" name="message"></textarea>
                                          </div>
                                          <button type="submit" value="submit" name="submit" class="btn mt-5 btn-custom btn-block text-uppercase rounded-pill btn-lg">Submit</button>
                                        </form>
                    </form>
                  <div class="card-body">
                    <p class="card-text">Leave Us Comments And Contact US For More Information </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>      
              <style>
               
              .card{
                  margin:0 15px;
              }

            </style>
            <br><br>
          <div class="container-fluid">
            <div class="row">
              <section class="card mb-5 border-warning">
            <div class="card-fluid" style="width: 25rem; height: 35rem;">
                <h3 class="mb-5 font-weight-light text-uppercase text-center">CMC Residential Project</h3>
              <img class="card-img img-fluid" src="img/images.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Ayat real estate is building new residential apartments in cmc almost 60% is finished</p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
            </div>
            </section>
            <section class="card mb-5 border-warning">
            <div class="card-fluid" style="width: 25rem;  height: 35rem;">
                <h3 class="mb-5 font-weight-light text-uppercase text-center">Villas For Sale</h3>
              <img class="card-img img-fluid" src="img/gallery1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Ayat Has built new contomporary villas in three main locations in Capital City Of Ethiopia Addis Ababa Click the Button To check Them out And Purchase</p>
                <form method="post">
                <button name="villa" class="btn btn-primary">Continue To Villas</button>
                </form>
              </div>
            </div>
            </section>
            <section class="card mb-5 border-warning">
            <div class="card-fluid" style="width: 25rem;">
                <h3 class="mb-5 font-weight-light text-uppercase text-center">Appartments For Sale</h3>
              <img class="card-img img-fluid" src="img/gallery2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Ayat Has built new contomporary Appartment in three main locations in Capital City Of Ethiopia Addis Ababa Click the Button To check Them out And Purchase</p>
                <form method="post">
                <button name="appartment" class="btn btn-primary">Continue To Apartment</button>
                </form>
              </div>
            </div>
            </section>
            <!-- <section class="card mb-5 border-warning">
            <div class="card-fluid" style="width: 18rem;">
              <img class="card-img img-fluid" src="img/wegagen.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            </section> -->
            <section class="card mb-5  border-warning">
            <div class="card-fluid" style="width: 20rem;">
                <h3 class="mb-5 font-weight-light text-uppercase text-center">Ayat Real Estate</h3>
              <img class="card-img img-fluid" src="img/Ayat-Logo.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Ayat Real State Was the pioneer real estate in ethiopia and earned it's name for it's quality and realible service</p>
                <img class="card-img img-fluid" src="img/logo2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              
                <a href="mainpage.html" class="btn btn-primary">HOME</a>
              </div>
            </div>
            </section>
            <section class="card mb-5 border-warning">
                <div class="card-fluid" style="width: 55rem;">
                    <video width="100%" controls>
                        <source src="img/Ayat.mp4" type="video/mp4">
                        <!-- <source src="img/e.ogg" type="video/ogg">
                            Your browser does not support HTML5 video. -->
                                   </video>

                                   <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">To Watch More Ayat Real Estate Video Click The BUtton Below</p>
                    <a href="https://www.youtube.com/watch?v=W0_UTd1vVeo" class="btn btn-primary">YOUTUBE</a><br>
                    <img class="card-img img-fluid" src="img/logo1.jpg" style="width:68rem; height:28rem;" class="card-img-top" alt="...">
                  </div>
                </div>
                </section>
                
            </div>
          </div>
          <div class="alert alert-dark d-flex align-items-center justify-content-center" role="alert">
           <h3>CALL NOW : +251-919040340 </h3> 
          </div>
          
    
              <script src="./js/jquery.min.js"></script>
            <script src="./js/tether.min.js"></script>
            <script src="./js/bootstrap.min.js"></script>
            <script src="./js/login.js"></script>
            <script src="./js/popper.min.js"></script>
            <footer id="main-footer" class="bg-inverse text-white mt-5 p-5">
              <div class="container">
                  <div class="row">
                      <div class="col text-center">
                        <div class="py-4">
                          <h1 class="h3">AYAT REAL STATE SALES MANAGMENT</h1>
                        <p class="lead text-center">Copyright &copy; 2020</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#contactModal" >Contact Us</button> 
                      </div>
                  </div>
              </div>
            </div>
            </footer>
            <div class="modal fade" id="contactModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
                    <button class="close" data-dismiss="modal"><span>&times;</span></button>
                  </div>
                  <div class="modal-body">
                  <form class="form login-form text center"  action="employeadmin.php" method="post" enctype="multipart/form-data" autocomplete="off"> 
                        <h3 class="mb-5 font-weight-light text-uppercase text-center">Stay In Touch</h3>
                        <div class="form-group">
                            <strong> Full Name </strong> <input type="text" name="fullname"   class="form-control rounded-pill form-control-lg" placeholder="Full name" required>
                         </div>
                          <div class="form-group">
                             <strong> Email  </strong> <input type="email"  name="email" class="form-control rounded-pill form-control-lg" placeholder="Email" >
                                 </div>
                                 <div class="form-group">
                                    <strong> Phone No  </strong> <input type="text"  name="phoneno" class="form-control rounded-pill form-control-lg" placeholder="Phone No" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="message" ><strong>Message</strong></label>
                                            <textarea class="form-control" id="message" name="message"></textarea>
                                          </div>
                                          <button type="submit" value="submit" name="submit" class="btn mt-5 btn-custom btn-block text-uppercase rounded-pill btn-lg">Submit</button>
                                        </form>
                    </form>
                  </div>    
                     <!-- <div class="modal-footer">
                    <button class="btn btn-primary btn-block">
                     Submit 
                    </button>
                  </div> -->
                </div>
              </div>
            </div>
            </body>
</html>