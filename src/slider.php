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
         header("location: slider.php");
       }
       else{
         $_SESSION['messge']="User Not Registered";
       }
  
 }
?>


<?php
session_start();
$_SESSION['messages'] ='';
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
         header("location: slider.php");
       }
       }
  
 
 ?>
 <?php
 
  // $_SESSION['messages'] ='';
$mysqli = new mysqli('localhost','root','','ayat');
if ($_SERVER['REQUEST_METHOD']=='POST'){

  $houseno=$mysqli->real_escape_string($_POST['houseno']);
  $houseno = "number1";
  $house=mysqli_query($mysqli,"SELECT houseno FROM house WHERE houseno='$houseno'");
  $result=mysqli_num_rows($house);
  //this if checks if the house exist in the database
  if($result==0){
     header("Location:slider.php?slider=fail");
  
  }
else{
  //this gets variables from the previous page by get method
 $name = $_GET['name'];
 $type = $_GET['type'];
 $subcity = $_GET['subcity'];
 if(isset($_POST['number1'])){
   $houseno = "Villa One";
   header("location:payment.php?name=$name&type=$type&subcity=$subcity&houseno=$houseno");
 }
}
}
if ($_SERVER['REQUEST_METHOD']=='POST'){

  $houseno=$mysqli->real_escape_string($_POST['houseno']);
  $houseno = "number2";
  $house=mysqli_query($mysqli,"SELECT houseno FROM house WHERE houseno='$houseno'");
  $result=mysqli_num_rows($house);
  if($result==0){
     header("Location:slider.php?slider=fail2");
    //
  }
else{
  //this gets variables from the previous page by get method
 $name = $_GET['name'];
 $type = $_GET['type'];
 $subcity = $_GET['subcity'];
 if(isset($_POST['number2'])){
   $houseno = "Villa Two";
   header("location:payment.php?name=$name&type=$type&subcity=$subcity&houseno=$houseno");
 }
}
}

if ($_SERVER['REQUEST_METHOD']=='POST'){

  $houseno=$mysqli->real_escape_string($_POST['houseno']);
  $houseno = "number3";
  $house=mysqli_query($mysqli,"SELECT houseno FROM house WHERE houseno='$houseno'");
  $result=mysqli_num_rows($house);
  if($result==0){
     header("Location:slider.php?slider=fail3");
    //
  }
else{
  //this gets variables from the previous page by get method
 $name = $_GET['name'];
 $type = $_GET['type'];
 $subcity = $_GET['subcity'];
 if(isset($_POST['number3'])){
   $houseno = "Villa Three";
   header("location:payment.php?name=$name&type=$type&subcity=$subcity&houseno=$houseno");
 }
}
}
if ($_SERVER['REQUEST_METHOD']=='POST'){

  $houseno=$mysqli->real_escape_string($_POST['houseno']);
  $houseno = "number4";
  $house=mysqli_query($mysqli,"SELECT houseno FROM house WHERE houseno='$houseno'");
  $result=mysqli_num_rows($house);
  if($result==0){
     header("Location:slider.php?slider=fail4");
    //
  }
else{
  //this gets variables from the previous page by get method
 $name = $_GET['name'];
 $type = $_GET['type'];
 $subcity = $_GET['subcity'];
 if(isset($_POST['number4'])){
   $houseno = "Villa Four";
   header("location:payment.php?name=$name&type=$type&subcity=$subcity&houseno=$houseno");
 }
}
}
if ($_SERVER['REQUEST_METHOD']=='POST'){

  $houseno=$mysqli->real_escape_string($_POST['houseno']);
  $houseno = "number5";
  $house=mysqli_query($mysqli,"SELECT houseno FROM house WHERE houseno='$houseno'");
  $result=mysqli_num_rows($house);
  if($result==0){
     header("Location:slider.php?slider=fail5");
    //
  }
else{
  //this gets variables from the previous page by get method
 $name = $_GET['name'];
 $type = $_GET['type'];
 $subcity = $_GET['subcity'];
 if(isset($_POST['number5'])){
   $houseno = "Villa Five";
   header("location:payment.php?name=$name&type=$type&subcity=$subcity&houseno=$houseno");
 }
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Slider</title>
</head>
<body>
  <div class="spinner-border" role="status">
    <span class="sr-only">Loading...</span>
  </div>
  <!-- navigation -->
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
          </ul>
          <form class="form-inline my-2 my-lg-0">
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Settings
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="loggin.html">LOG OUT</a>
                            <a class="dropdown-item" href="newsearch.php">ME</a>
                        </div>
                      </li>
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav> 
   
    <div class="card text-center">
      <div class="card-header">
    <!-- display error message -->
      <?php
            $errdisp = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if(strpos($errdisp, "slider=fail" ) == true)
            {
              echo "<P class='text-danger'>SORRY, HOUSE ALREADY TAKEN CHOOSE ANOTHER HOUSE PLEASE</p>";
            }
            ?>
       <h4>VILLA NO 1 </h4> 
      </div>
    <div class ="carouselslide-container d-flex align-items-center justify-content-center">
     <div id="slider5" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
              <li class="active" data-target="#slider5" data-slide-to="0"></li>
              <li class="active" data-target="#slider5" data-slide-to="1"></li>
              <li class="active" data-target="#slider5" data-slide-to="2"></li>
              <li class="active" data-target="#slider5" data-slide-to="3"></li>
              <li class="active" data-target="#slider5" data-slide-to="4"></li>
              <li class="active" data-target="#slider5" data-slide-to="5"></li>
          </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="card-img-top" src="img/villa2.jpg" alt="First Slide" class="d-block img-fluid" style="width:100%;height:auto;">
            <div class="carousel-caption d-none d-md-block">
                 <h3>Exterior View</h3>
                 <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
            </div>
          </div>
          
          <div class="carousel-item">
            <img class="card-img-top" src="img/livingroom1.jpg" alt="Second Slide" class="d-block img-fluid" style="width:100%;height:auto;"> 
            <div class="carousel-caption d-none d-md-block">
                <h3>Living Room</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
           </div>  
        </div>
        <div class="carousel-item">
          <img class="card-img-top" src="img/bed1.jpg" alt="Second Slide" class="d-block img-fluid" style="width:100%;height:auto;"> 
          <div class="carousel-caption d-none d-md-block">
              <h3>Bed Room</h3>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
         </div>  
      </div>
      <div class="carousel-item">
        <img class="card-img-top" src="img/toilet1.jpg" alt="Second Slide" class="d-block img-fluid" style="width:100%;height:auto;"> 
        <div class="carousel-caption d-none d-md-block">
            <h3>Rest Room</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
       </div>  
    </div>
    <div class="carousel-item">
      <img class="card-img-top" src="img/stairs1.jpg" alt="Second Slide" class="d-block img-fluid" style="width:100%;height:auto;"> 
      <div class="carousel-caption d-none d-md-block">
          <h3>Stairs</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
     </div>  
  </div>
          <div class="carousel-item">
            <img class="card-img-top" src="img/blueprint1.jpg" alt="Third Slide" class="d-block img-fluid" style="width:100%;height:auto;"> 
            <div class="carousel-caption d-none d-md-block">
                <h3>Blueprint Plan</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
           </div>  
        </div>
     </div>
     <a href="#slider5" class="carousel-control-prev" data-slide="prev">
         <span class="carousel-control-prev-icon"></span>
     </a>
     <a href="#slider5" class="carousel-control-next" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
    
      </div>
      </div>
      <div class="card-block">
        <h4 class="card-title">CCD VILLA #47</h4>
        <h6 class="card-subtitle">City - Addis Ababa </h6>
        <h6>Area - BOLE Wollo Sefer</h6>
        <h6>Type - Villa (G+1)</h6>
        <h6>Bedrooms - 4 Bedrooms</h6>
        <h6>Bathrooms - 5(4 ensuite)</h6>
        <h6>Toilets - 3 toilets</h6>
        <h6>Total floor - 544.4 m^2</h6>
        <h6>Plot size- (344-410 m^2)</h6>
        <h6>Price - 6,000,000 birr</h6>
        <p class="card-text">CCD Villa #47 is built on 5000 Sequare Meters It has ventilation System parking lot and Swimming Pool 
          With advanced 24-hrs Security on the Quetly neighberhood of CMC around salite mhret church.</p>
          <form method="post">
          <button class="btn btn-outline-primary" data-toggle="modal" data-target="#contactModal3" >Read More</button>
          <button class="btn btn-outline-primary" data-toggle="modal" data-target="#contactModal4" >Contact Sales Team</button>
          <button name="number1" class="btn btn-outline-primary">Procced to Payment</button>
          </form>
      </div> 
      <div class="card-footer text-muted">
        <h4>Exqusite View</h4>
      </div>
    </div>
      <br><br><br>

      <div class="card text-center">
      <div class="card-header">
      <!-- display error message -->
      <?php
            $errdisp = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if(strpos($errdisp, "slider=fail2" ) == true)
            {
              echo "<P class='text-danger'>SORRY, HOUSE ALREADY TAKEN CHOOSE ANOTHER HOUSE PLEASE</p>";
            }
            ?>
       <h4>VILLA NO 2 </h4> 
      </div>
    <div class ="carouselslide-container d-flex align-items-center justify-content-center">
     <div id="slider4" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
              <li class="active" data-target="#slider4" data-slide-to="0"></li>
              <li class="active" data-target="#slider4" data-slide-to="1"></li>
              <li class="active" data-target="#slider4" data-slide-to="2"></li>
              <li class="active" data-target="#slider4" data-slide-to="3"></li>
              <li class="active" data-target="#slider4" data-slide-to="4"></li>
              <li class="active" data-target="#slider4" data-slide-to="5"></li>
          </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="card-img-top" src="img/villa2.jpg" alt="First Slide" class="d-block img-fluid" style="width:100%;height:auto;">
            <div class="carousel-caption d-none d-md-block">
                 <h3>Exterior View</h3>
                 <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
            </div>
          </div>
          
          <div class="carousel-item">
            <img class="card-img-top" src="img/livingroom1.jpg" alt="Second Slide" class="d-block img-fluid" style="width:100%;height:auto;"> 
            <div class="carousel-caption d-none d-md-block">
                <h3>Living Room</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
           </div>  
        </div>
        <div class="carousel-item">
          <img class="card-img-top" src="img/bed1.jpg" alt="Second Slide" class="d-block img-fluid" style="width:100%;height:auto;"> 
          <div class="carousel-caption d-none d-md-block">
              <h3>Bed Room</h3>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
         </div>  
      </div>
      <div class="carousel-item">
        <img class="card-img-top" src="img/toilet1.jpg" alt="Second Slide" class="d-block img-fluid" style="width:100%;height:auto;"> 
        <div class="carousel-caption d-none d-md-block">
            <h3>Rest Room</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
       </div>  
    </div>
    <div class="carousel-item">
      <img class="card-img-top" src="img/stairs1.jpg" alt="Second Slide" class="d-block img-fluid" style="width:100%;height:auto;"> 
      <div class="carousel-caption d-none d-md-block">
          <h3>Stairs</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
     </div>  
  </div>
          <div class="carousel-item">
            <img class="card-img-top" src="img/blueprint1.jpg" alt="Third Slide" class="d-block img-fluid" style="width:100%;height:auto;"> 
            <div class="carousel-caption d-none d-md-block">
                <h3>Blueprint Plan</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
           </div>  
        </div>
     </div>
     <a href="#slider4" class="carousel-control-prev" data-slide="prev">
         <span class="carousel-control-prev-icon"></span>
     </a>
     <a href="#slider4" class="carousel-control-next" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
    
      </div>
      </div>
      <div class="card-block">
        <h4 class="card-title">CCD VILLA #47</h4>
        <h6 class="card-subtitle">City - Addis Ababa </h6>
        <h6>Area - BOLE Wollo Sefer</h6>
        <h6>Type - Villa (G+1)</h6>
        <h6>Bedrooms - 4 Bedrooms</h6>
        <h6>Bathrooms - 5(4 ensuite)</h6>
        <h6>Toilets - 3 toilets</h6>
        <h6>Total floor - 544.4 m^2</h6>
        <h6>Plot size- (344-410 m^2)</h6>
        <h6>Price - 6,000,000 birr</h6>
        <p class="card-text">CCD Villa #47 is built on 5000 Sequare Meters It has ventilation System parking lot and Swimming Pool 
          With advanced 24-hrs Security on the Quetly neighberhood of CMC around salite mhret church.</p>
          <form method="post">
          <button class="btn btn-outline-primary" data-toggle="modal" data-target="#contactModal3" >Read More</button>
          <button class="btn btn-outline-primary" data-toggle="modal" data-target="#contactModal4" >Contact Sales Team</button>
          <button name="number2" class="btn btn-outline-primary">Procced to Payment</button>
          </form>
      </div> 
      <div class="card-footer text-muted">
        <h4>Swimming Pool</h4>
      </div>
    </div>
      <br><br><br>


      <div class="card text-center">
      <div class="card-header">
      <!-- display error message -->
      <?php
            $errdisp = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if(strpos($errdisp, "slider=fail3" ) == true)
            {
              echo "<P class='text-danger'>SORRY, HOUSE ALREADY TAKEN CHOOSE ANOTHER HOUSE PLEASE</p>";
            }
            ?>
       <h4>VILLA NO 3 </h4> 
      </div>
    <div class ="carouselslide-container d-flex align-items-center justify-content-center">
     <div id="slider1" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
              <li class="active" data-target="#slider1" data-slide-to="0"></li>
              <li class="active" data-target="#slider1" data-slide-to="1"></li>
              <li class="active" data-target="#slider1" data-slide-to="2"></li>
              <li class="active" data-target="#slider1" data-slide-to="3"></li>
              <li class="active" data-target="#slider1" data-slide-to="4"></li>
              <li class="active" data-target="#slider1" data-slide-to="5"></li>
          </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="card-img-top" src="img/villa2.jpg" alt="First Slide" class="d-block img-fluid" style="width:100%;height:auto;">
            <div class="carousel-caption d-none d-md-block">
                 <h3>Exterior View</h3>
                 <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
            </div>
          </div>
          
          <div class="carousel-item">
            <img class="card-img-top" src="img/livingroom1.jpg" alt="Second Slide" class="d-block img-fluid" style="width:100%;height:auto;"> 
            <div class="carousel-caption d-none d-md-block">
                <h3>Living Room</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
           </div>  
        </div>
        <div class="carousel-item">
          <img class="card-img-top" src="img/bed1.jpg" alt="Second Slide" class="d-block img-fluid" style="width:100%;height:auto;"> 
          <div class="carousel-caption d-none d-md-block">
              <h3>Bed Room</h3>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
         </div>  
      </div>
      <div class="carousel-item">
        <img class="card-img-top" src="img/toilet1.jpg" alt="Second Slide" class="d-block img-fluid" style="width:100%;height:auto;"> 
        <div class="carousel-caption d-none d-md-block">
            <h3>Rest Room</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
       </div>  
    </div>
    <div class="carousel-item">
      <img class="card-img-top" src="img/stairs1.jpg" alt="Second Slide" class="d-block img-fluid" style="width:100%;height:auto;"> 
      <div class="carousel-caption d-none d-md-block">
          <h3>Stairs</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
     </div>  
  </div>
          <div class="carousel-item">
            <img class="card-img-top" src="img/blueprint1.jpg" alt="Third Slide" class="d-block img-fluid" style="width:100%;height:auto;"> 
            <div class="carousel-caption d-none d-md-block">
                <h3>Blueprint Plan</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
           </div>  
        </div>
     </div>
     <a href="#slider1" class="carousel-control-prev" data-slide="prev">
         <span class="carousel-control-prev-icon"></span>
     </a>
     <a href="#slider1" class="carousel-control-next" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
    
      </div>
      </div>
      <div class="card-block">
        <h4 class="card-title">CCD VILLA #47</h4>
        <h6 class="card-subtitle">City - Addis Ababa </h6>
        <h6>Area - BOLE Wollo Sefer</h6>
        <h6>Type - Villa (G+1)</h6>
        <h6>Bedrooms - 4 Bedrooms</h6>
        <h6>Bathrooms - 5(4 ensuite)</h6>
        <h6>Toilets - 3 toilets</h6>
        <h6>Total floor - 544.4 m^2</h6>
        <h6>Plot size- (344-410 m^2)</h6>
        <h6>Price - 6,000,000 birr</h6>
        <p class="card-text">CCD Villa #47 is built on 5000 Sequare Meters It has ventilation System parking lot and Swimming Pool 
          With advanced 24-hrs Security on the Quetly neighberhood of CMC around salite mhret church.</p>
          <form method="post">
          <button class="btn btn-outline-primary" data-toggle="modal" data-target="#contactModal3" >Read More</button>
          <button class="btn btn-outline-primary" data-toggle="modal" data-target="#contactModal4" >Contact Sales Team</button>
          <button name="number3" class="btn btn-outline-primary">Procced to Payment</button>
          </form>
      </div> 
      <div class="card-footer text-muted">
        <h4>Glamorious Life</h4>
      </div>
    </div>
      <br><br><br>


      <div class="card text-center">
      <div class="card-header">
      <!-- display error message -->
      <?php
            $errdisp = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if(strpos($errdisp, "slider=fail4" ) == true)
            {
              echo "<P class='text-danger'>SORRY, HOUSE ALREADY TAKEN CHOOSE ANOTHER HOUSE PLEASE</p>";
            }
            ?>
       <h4>VILLA NO 4 </h4> 
      </div>
    <div class ="carouselslide-container d-flex align-items-center justify-content-center">
     <div id="slider2" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
              <li class="active" data-target="#slider2" data-slide-to="0"></li>
              <li class="active" data-target="#slider2" data-slide-to="1"></li>
              <li class="active" data-target="#slider2" data-slide-to="2"></li>
              <li class="active" data-target="#slider2" data-slide-to="3"></li>
              <li class="active" data-target="#slider2" data-slide-to="4"></li>
              <li class="active" data-target="#slider2" data-slide-to="5"></li>
          </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="card-img-top" src="img/villa2.jpg" alt="First Slide" class="d-block img-fluid" style="width:100%;height:auto;">
            <div class="carousel-caption d-none d-md-block">
                 <h3>Exterior View</h3>
                 <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
            </div>
          </div>
          
          <div class="carousel-item">
            <img class="card-img-top" src="img/livingroom1.jpg" alt="Second Slide" class="d-block img-fluid" style="width:100%;height:auto;"> 
            <div class="carousel-caption d-none d-md-block">
                <h3>Living Room</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
           </div>  
        </div>
        <div class="carousel-item">
          <img class="card-img-top" src="img/bed1.jpg" alt="Second Slide" class="d-block img-fluid" style="width:100%;height:auto;"> 
          <div class="carousel-caption d-none d-md-block">
              <h3>Bed Room</h3>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
         </div>  
      </div>
      <div class="carousel-item">
        <img class="card-img-top" src="img/toilet1.jpg" alt="Second Slide" class="d-block img-fluid" style="width:100%;height:auto;"> 
        <div class="carousel-caption d-none d-md-block">
            <h3>Rest Room</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
       </div>  
    </div>
    <div class="carousel-item">
      <img class="card-img-top" src="img/stairs1.jpg" alt="Second Slide" class="d-block img-fluid" style="width:100%;height:auto;"> 
      <div class="carousel-caption d-none d-md-block">
          <h3>Stairs</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
     </div>  
  </div>
          <div class="carousel-item">
            <img class="card-img-top" src="img/blueprint1.jpg" alt="Third Slide" class="d-block img-fluid" style="width:100%;height:auto;"> 
            <div class="carousel-caption d-none d-md-block">
                <h3>Blueprint Plan</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
           </div>  
        </div>
     </div>
     <a href="#slider2" class="carousel-control-prev" data-slide="prev">
         <span class="carousel-control-prev-icon"></span>
     </a>
     <a href="#slider2" class="carousel-control-next" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
    
      </div>
      </div>
      <div class="card-block">
        <h4 class="card-title">CCD VILLA #47</h4>
        <h6 class="card-subtitle">City - Addis Ababa </h6>
        <h6>Area - BOLE Wollo Sefer</h6>
        <h6>Type - Villa (G+1)</h6>
        <h6>Bedrooms - 4 Bedrooms</h6>
        <h6>Bathrooms - 5(4 ensuite)</h6>
        <h6>Toilets - 3 toilets</h6>
        <h6>Total floor - 544.4 m^2</h6>
        <h6>Plot size- (344-410 m^2)</h6>
        <h6>Price - 6,000,000 birr</h6>
        <p class="card-text">CCD Villa #47 is built on 5000 Sequare Meters It has ventilation System parking lot and Swimming Pool 
          With advanced 24-hrs Security on the Quetly neighberhood of CMC around salite mhret church.</p>
          <form method="post">
          <button class="btn btn-outline-primary" data-toggle="modal" data-target="#contactModal3" >Read More</button>
          <button class="btn btn-outline-primary" data-toggle="modal" data-target="#contactModal4" >Contact Sales Team</button>
          <button name="number4" class="btn btn-outline-primary">Procced to Payment</button>
          </form>
      </div> 
      <div class="card-footer text-muted">
        <h4>24hrs WIFI</h4>
      </div>
    </div>
      <br><br><br><br><br><br>


      <div class="card text-center">
      <div class="card-header">
      <!-- display error message -->
      <?php
            $errdisp = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if(strpos($errdisp, "slider=fail5" ) == true)
            {
              echo "<P class='text-danger'>SORRY, HOUSE ALREADY TAKEN CHOOSE ANOTHER HOUSE PLEASE</p>";
            }
            ?>
       <h4>VILLA NO 5 </h4> 
      </div>
    <div class ="carouselslide-container d-flex align-items-center justify-content-center">
     <div id="slider3" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
              <li class="active" data-target="#slider3" data-slide-to="0"></li>
              <li class="active" data-target="#slider3" data-slide-to="1"></li>
              <li class="active" data-target="#slider3" data-slide-to="2"></li>
              <li class="active" data-target="#slider3" data-slide-to="3"></li>
              <li class="active" data-target="#slider3" data-slide-to="4"></li>
              <li class="active" data-target="#slider3" data-slide-to="5"></li>
          </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="card-img-top" src="img/villa2.jpg" alt="First Slide" class="d-block img-fluid" style="width:100%;height:auto;">
            <div class="carousel-caption d-none d-md-block">
                 <h3>Exterior View</h3>
                 <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
            </div>
          </div>
          
          <div class="carousel-item">
            <img class="card-img-top" src="img/livingroom1.jpg" alt="Second Slide" class="d-block img-fluid" style="width:100%;height:auto;"> 
            <div class="carousel-caption d-none d-md-block">
                <h3>Living Room</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
           </div>  
        </div>
        <div class="carousel-item">
          <img class="card-img-top" src="img/bed1.jpg" alt="Second Slide" class="d-block img-fluid" style="width:100%;height:auto;"> 
          <div class="carousel-caption d-none d-md-block">
              <h3>Bed Room</h3>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
         </div>  
      </div>
      <div class="carousel-item">
        <img class="card-img-top" src="img/toilet1.jpg" alt="Second Slide" class="d-block img-fluid" style="width:100%;height:auto;"> 
        <div class="carousel-caption d-none d-md-block">
            <h3>Rest Room</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
       </div>  
    </div>
    <div class="carousel-item">
      <img class="card-img-top" src="img/stairs1.jpg" alt="Second Slide" class="d-block img-fluid" style="width:100%;height:auto;"> 
      <div class="carousel-caption d-none d-md-block">
          <h3>Stairs</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
     </div>  
  </div>
          <div class="carousel-item">
            <img class="card-img-top" src="img/blueprint1.jpg" alt="Third Slide" class="d-block img-fluid" style="width:100%;height:auto;"> 
            <div class="carousel-caption d-none d-md-block">
                <h3>Blueprint Plan</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, modi.</p>
           </div>  
        </div>
     </div>
     <a href="#slider3" class="carousel-control-prev" data-slide="prev">
         <span class="carousel-control-prev-icon"></span>
     </a>
     <a href="#slider3" class="carousel-control-next" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
    
      </div>
      </div>
      <div class="card-block">
        <h4 class="card-title">CCD VILLA #47</h4>
        <h6 class="card-subtitle">City - Addis Ababa </h6>
        <h6>Area - BOLE Wollo Sefer</h6>
        <h6>Type - Villa (G+1)</h6>
        <h6>Bedrooms - 4 Bedrooms</h6>
        <h6>Bathrooms - 5(4 ensuite)</h6>
        <h6>Toilets - 3 toilets</h6>
        <h6>Total floor - 544.4 m^2</h6>
        <h6>Plot size- (344-410 m^2)</h6>
        <h6>Price - 6,000,000 birr</h6>
        <p class="card-text">CCD Villa #47 is built on 5000 Sequare Meters It has ventilation System parking lot and Swimming Pool 
          With advanced 24-hrs Security on the Quetly neighberhood of CMC around salite mhret church.</p>
          <form method="post">
          <button class="btn btn-outline-primary" data-toggle="modal" data-target="#contactModal3" >Read More</button>
          <button class="btn btn-outline-primary" data-toggle="modal" data-target="#contactModal4" >Contact Sales Team</button>
          <button name="number5" class="btn btn-outline-primary">Procced to Payment</button>
          </form>
      </div> 
      <div class="card-footer text-muted">
        <h4>Dream</h4>
      </div>
    </div>
      <br><br><br>
     
</body>
<script src="./js/jquery.min.js"></script>
<script src="./js/jquery.js"></script>
<script src="./js/tether.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/bootstrap.js"></script>
<script src="./js/login.js"></script>
<script src="./js/popper.min.js"></script>
<script>
    $('.carousel').carousel({
       interval: 5000, 
       keyboard: true,
       pause: 'hover',
       wrap: false
    })

</script>
<script>
  //init tooltip
  $('[data-toggle="tooltip"]').tooltip();
</script>
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
                  <form class="form login-form text center"  action="slider.php" method="post" enctype="multipart/form-data" autocomplete="off"> 
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
                  </div>    </div>
    </div>
  </div>
  



  <div class="modal fade" id="contactModal2">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="contactModalLabel">Edit Profile</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="name">First Name</label>
              <input type="text" class="form-control" id="firstname">
            </div>   
            <div class="form-group">
                <label for="name">Last Name</label>
                <input type="text" class="form-control" id="lastname">
              </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="name">Phone No</label>
                <input type="text" class="form-control" id="phoneno">
              </div>
              <div class="form-group">
                <label for="name">Adress</label>
                <input type="text" class="form-control" id="adress">
              </div>
              <div class="form-group">
                <label for="name">User Name</label>
                <input type="text" class="form-control" id="username">
              </div>
            <div class="form-group">
                <label for="password">New Password</label>
                <input type="password" class="form-control" id="password">
              </div>
              <div class="form-group">
                <label for="password">Confirm Password</label>
                <input type="password" class="form-control" id="confirmpassword">
              </div>
              </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary btn-block">
           Submit 
          </button>
        </div>
      </div>
    </div>
  </div>






  <div class="modal fade" id="contactModal4">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="contactModalLabel">Sales Team</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body justify-content-center">
          <h3>Sales Team</h3>
          <h6>Head off.Tel: +251-116-123456|</h6>
          <h6>Sales off.mob: +251-919-040340 OR: +251-919-040340|</h6>
          <h6>FAX: +251-116-123458|</h6>
          <h6>SNAP Plaza 5th Floor|</h6>
          <h6>   Airport Road</h6>
          <h6>Addis Ababa, Ethiopia</h6>
          <form class="form login-form text center"  action="slider.php" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text"  name="fullname" class="form-control" placeholder="Enter name here" id="name">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email"  class="form-control" placeholder="Enter email here" id="email">
            </div>
            <div class="form-group">
              <label for="phoneno">Phone Number</label>
              <input type="text"  name="phoneno" class="form-control" placeholder="Phone Number here" id="email">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" name="message"  placeholder="Enter message here" id="message"></textarea>
            </div>
            <input type="submit" value="Submit" name="submit" class="btn btn-primary btn-block btn-lg">
          </form>
          
        
        </div>
        <div class="modal-footer">
        <strong>AYAT REAL ESTATE SALES MANAGMENT PLC</strong> </P>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="contactModal3">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="contactModalLabel">Read More</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <h3>CCD VILLA #47</h3>
          <P>CCD Villa #47 is built on 5000 Sequare Meters It has ventilation System parking lot and Swimming Pool 
            With advanced 24-hrs Security on the Quetly neighberhood of CMC around salite mhret church. CCD Villa #47 
            is designed by one of the highley regarded archtectures of our country archtect FANUEL HAFTU and was built 
            and become available for market in 2012 E.C and we are happy to tell you that we have a six month guarantee for major
          damages in the structure of the house and a life time free maintenance <strong>AYAT REAL ESTATE SALES MANAGMENT PLC</strong> </P>
        </div>
        <div class="modal-footer">
          <a href="slider.php" class="btn btn-outline-primary">Done</a>
        </div>
      </div>
    </div>
  </div>
</html>