<?php
session_start();
$_SESSION['message'] ='';
$mysqli = new mysqli('localhost','root','','ayat');
if ($_SERVER['REQUEST_METHOD']=='POST'){
  //check if username already taken
$username=$mysqli->real_escape_string($_POST['house']);
  $user=mysqli_query($mysqli,"SELECT houseno FROM house WHERE houseno='$houseno'");
  $result=mysqli_num_rows($house);
  if($result>0){
    $_SESSION['message']="HOUSE NO ALREADY EXIST CHOOSE ANOTHER HOUSE NO FROM 1-5";
    //
  }
  else{
$hname=$mysqli->real_escape_string($_POST['hname']);
$houseno=$mysqli->real_escape_string($_POST['houseno']);
$htype=$mysqli->real_escape_string($_POST['htype']);
$hlocation=$mysqli->real_escape_string($_POST['hlocation']);
// $password1= md5($password);    password hasher
//$confirmpassword= md5($confirmpassword); 
$sql = "INSERT INTO house(hname, houseno, htype, hlocation)VALUES('$hname', '$houseno', '$htype', '$hlocation')";
 
       if($mysqli->query($sql)===true){
         $_SESSION['message']="registration successfull";
         header("location: admin.php");
       }
       else{
         $_SESSION['messge']="User Not Registered";
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
    <title>Add House</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
        <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse sticky-top">
                <a class="navbar-brand" href="admin.php">AYAT REAL STATE SALES MANAGMENT</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="admin.php">Home <span class="sr-only">(current)</span></a>
                      
                    </li>
                </li>
                
                  </ul>
                 
                </div>
              </nav> 
    <div class="login-container d-flex align-items-center justify-content-center">

    <form class="form login-form text center"  action="addhouse.php" method="post" enctype="multipart/form-data" autocomplete="off"> 
    <div class="alert alert-error"><?=$_SESSION['message']?></div>
            <img class="avatar" src="img/house.png">
            <h1 class="mb-5 font-weight-light text-uppercase">ADD HOUSE</h1>
            <div class="form-group">
               <strong> House Name </strong> <input type="text" name="hname"   class="form-control rounded-pill form-control-lg" placeholder="House Name" required>
            </div>
            <div class="form-group">
                <strong> House No </strong> <input type="text"  name="houseno" class="form-control rounded-pill form-control-lg" placeholder="House No" required>
                </div>
             <div class="form-group">
                <strong> House Type  </strong> <input type="text"  name="htype" class="form-control rounded-pill form-control-lg" placeholder="House Type" required>
                    </div>
           <div class="form-group">
                <strong> House Location </strong> <input type="text" name="hlocation" class="form-control rounded-pill form-control-lg" placeholder="House Location" required>
                    </div>        
            <button type="submit" value="ADD" name="ADD" class="btn mt-5 btn-custom btn-block text-uppercase rounded-pill btn-lg">ADD</button>
                 </form>
  
    </div>  
      <!-- <img class="car" src="img/suburbb.png"> -->
      <div class="buggati">
        <div class="img">
      </div>
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

</html>