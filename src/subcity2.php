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
         header("location: subcity2.php");
       }
       else{
         $_SESSION['messge']="User Not Registered";
       }
  
 }
?>

<?php
$name = $_GET['username'];
$type = $_GET['type'];

if(isset($_POST['bole'])){
  $subcity = "Bole";
  header("location:slider2.php?name=$name&type=$type&subcity2=$subcity");
}
elseif(isset($_POST['cmc'])){
  $subcity = "CMC";
  header("location:slider2.php?name=$name&type=$type&subcity2=$subcity");
}
elseif(isset($_POST['gerji'])){
  $subcity = "Gerji";
  header("location:slider2.php?name=$name&type=$type&subcity2=$subcity");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>subcity2</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <style>
    img{
        margin:0 90px;
    }
    
  </style>

    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse sticky-top">
        <a class="navbar-brand" href="coverpage.php">AYAT REAL STATE SALES MANAGMENT</a>
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
         <!-- <li class="nav-item">
           <a href="#" class="nav-link">about us</a>
       </li> -->
          </ul>
          <form class="form-inline my-2 my-lg-0">
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false">
                          Settings
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <!-- <a class="dropdown-item" href="logasadmin.php">Login as Admin</a>
                            <a class="dropdown-item" href="#">Help</a>
                          <a class="dropdown-item" data-toggle="modal" data-target="#contactModal2" >Edit Profile</a>  
                           <div class="dropdown-divider"></div> -->
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
      <div class="card text-center">
        <div class="card-header">
         <h4><i class="fa fa-home"></i> Choose A Sub-City </h4> 
        </div>
      <div class="containere">
        <br><br>
        <div class="row">

          <div class="col-12 col-md-4 "><a href="#"><img style = "display:block" class="payment" src="img/gallery (12).jpg" height="200px" width="300px"></a><br><p>AYAT Real Estate Villas In Bole Sub-City<br> Around Wollo Sefer</p>
          <form method="post">
          <button name="bole" class="btn mt-1 btn-custom btn-block text-uppercase rounded-pill btn-lg" style= "margin:0 120px; width: 15rem;" >Bole</button> 
          </form>
            <a style= "margin:0 190px;">
             
           <div class="dropdown-menu " aria-labelledby="Dropdown">
               <!-- <a class="dropdown-item" href="slider.php">VILLA</a> 
              <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="slider2.php">APARTMENT</a> -->
           </div></a></div>
          <div class="col-6 col-md-4"><a href="#"><img style ="display:block" class="payment" src="img/gallery (12).jpg" height="200px" width="300px"></a><br><p>AYAT Real Estate Villas In CMC Sub-City<br> Behind Church Salite Mihret </p>
          <form method="post">
          <button name="cmc" class="btn mt-1 btn-custom btn-block text-uppercase rounded-pill btn-lg" style= "margin:0 120px; width: 15rem;" >CMC</button> </form>
            <a style= "margin:0 200px;">
            <div class="dropdown-menu" aria-labelledby="Dropdown">
               <!-- <a class="dropdown-item" href="slider.php">VILLA</a> 
              <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="slider2.php">APARTMENT</a> -->
           </div></a></div>
          <div class="col-6 col-md-4"><a href="#"><img style ="display:block" class="payment" src="img/gallery (12).jpg" height="200px" width="300px"></a><br><p>AYAT Real Estate Villas In Gerji Sub-City<br> On The Left Corner Of Mebrat Hayl</p>
          <form method="post">
          <button name="gerji" class="btn mt-1 btn-custom btn-block text-uppercase rounded-pill btn-lg" style= "margin:0 120px; width: 15rem;" >Gerji</button> </form>
          <a style= "margin:0 200px;">
            <div class="dropdown-menu" aria-labelledby="Dropdown">
               <!-- <a class="dropdown-item" href="slider.php">VILLA</a>
              <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="slider2.php">APARTMENT</a> -->
           </div></a></div>
        </div>
        <br><br><br>
        </div>      
</body>
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
                  <form class="form login-form text center"  action="subcity2.php" method="post" enctype="multipart/form-data" autocomplete="off"> 
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
</html>