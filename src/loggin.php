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
         header("location: loggin.php");
       }
       else{
         $_SESSION['messge']="User Not Registered";
       }
  
 }
?>

<?php

$conn = mysqli_connect("localhost","root","","ayat");

if(isset($_POST['loggin'])){
    $username = $_POST['userName'];
    $password = $_POST['password'];
    global $conn;
    $query = "SELECT * FROM user WHERE username ='$username' and password='$password';";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1){
        header("Location:mainpage.php?userName=$username");
    }
    else{
        header("Location:loggin.php?login=fail");
        // $_SESSION['message']="Wrong Username/Password";
        // echo "<script> alert('wrong username and password')</script>";
       
    }
 
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="short">
        <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse sticky-top">
        <a class="navbar-brand" href="coverpage.php">
                  <img src="img/logo1.jpg" width="60" height="60" class="d-inline-block align-content-center"alt=""> AYAT REAL STATE SALES MANAGMENT</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id ="navbarSupportedContent">
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
                                    <a class="dropdown-item" href="adminlogin.php">Login as Admin</a>
                                    <a class="dropdown-item" href="employelogin.php">Login as Employee</a>
                                    <!-- <a class="dropdown-item" href="#">Help</a> -->
                                  <!-- <a class="dropdown-item" data-toggle="modal" data-target="#contactModal2" >Edit Profile</a>                                  <div class="dropdown-divider"></div> -->
                                  <!-- <a class="dropdown-item" href="loggin.php">LOG OUT</a> -->
                                </div>
                              </li>
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </nav> 
          
              
    <div class="login-container d-flex align-items-center justify-content-center">  
    <form class="form login-form text center"  action="loggin.php" method="post" enctype="multipart/form-data" autocomplete="off">
            <img class="avatar" src="img/profile pic.png">
            <h1 class="mb-5 font-weight-light text-uppercase">Login</h1>     
            <?php
            $errdisp = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if(strpos($errdisp, "login=fail" ) == true)
            {
              echo "<P class='text-danger'>Please insert a correct username or password</p>";
            }
            ?>
            <div class="form-group">
                <input type="text" name="userName" class="form-control rounded-pill form-control-lg" placeholder="Username">
            </div>
            <div class="form-group">
                    <input type="password" name="password" class="form-control rounded-pill form-control-lg" placeholder= "password">
                </div>  
                <div class="form-group" >
                <select name="select" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="reseptionist">Reseptionist</option>
                    <option value="nurse">Nurse</option>
                    <option value="lab">Laboratory</option>
                    <option value="doctable">Doctor</option>
                    <option value="S_heart_doc">Heart specialist doctor</option>
                    <option value="S_head_doc">Head specilaist doctor</option>
                    <option value="S_kidney_doc">Kidney specialist doctor</option>
                    <option value="S_skin_doc">skin specialist doctor</option>
                    <option value="pharmacy">Pharmacist</option>
                </select>
            </div>
            <div class="forget-link d-flex align-items-center justify-content-between">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label for="remember"><strong>Remember Password</strong></label>
                </div>
                <a href="resetpass.php"><strong>Forget Password?</strong></a>
            </div>
            <button type="submit" name="loggin" class="btn mt-5 btn-custom btn-block text-uppercase rounded-pill btn-lg">Login</button>
            <p class="mt-lg-4 font-weight-normal "><strong>Don't have an account, </strong><a href="newuser.php">
              <strong>Register Now</strong></a></p>

        </form>
    </div> 
      <img class="car" src="img/banner-bg.jpg">
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
<!-- <footer id="main-footer" class="bg-inverse text-white mt-5 p-5">
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
</footer> -->
<!-- <div class="modal fade" id="contactModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
                    <button class="close" data-dismiss="modal"><span>&times;</span></button>
                  </div>
                  <div class="modal-body">
                  <form class="form login-form text center"  action="loggin.php" method="post" enctype="multipart/form-data" autocomplete="off"> 
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
    </div>
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
</div> -->
</html>