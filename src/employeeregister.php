<?php
session_start();
$_SESSION['message'] ='';
$mysqli = new mysqli('localhost','root','','ayat');
if ($_SERVER['REQUEST_METHOD']=='POST'){
  if($_POST['password']==$_POST['confirmpassword']){
$firstname=$mysqli->real_escape_string($_POST['firstname']);
$lastname=$mysqli->real_escape_string($_POST['lastname']);
$email=$mysqli->real_escape_string($_POST['email']);
$phoneno=$mysqli->real_escape_string($_POST['phoneno']);
$adress=$mysqli->real_escape_string($_POST['adress']);
$jobtitle=$mysqli->real_escape_string($_POST['jobtitle']);
$username=$mysqli->real_escape_string($_POST['username']);
$password=$mysqli->real_escape_string($_POST['password']);
// $password1= md5($password); 
//$confirmpassword= md5($confirmpassword); 
$sql = "INSERT INTO employees(firstname, lastname, email, phoneno, adress,jobtitle, username, password)VALUES('$firstname', '$lastname', '$email', '$phoneno', '$adress', '$jobtitle','$username', '$password')";
 
       if($mysqli->query($sql)===true){
         $_SESSION['message']="registration successfull";
         header("location: admin.php");
       }
       else{
         $_SESSION['messge']="User Not Registered";
       }
  }
  else{
    $_SESSION['message']="password doesnt match";
  }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>newuser</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
        <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse sticky-top">
                <a class="navbar-brand" href="#">AYAT REAL STATE SALES MANAGMENT</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                      
                    </li>
                </li>
                 <li class="nav-item">
                   <a href="#" class="nav-link">about us</a>
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
                                  <a class="dropdown-item"data-toggle="modal" data-target="#contactModal2" >Edit Profile</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                              </li>
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </nav> 
    <div class="login-container d-flex align-items-center justify-content-center">

    <form class="form login-form text center"  action="employeeregister.php" method="post" enctype="multipart/form-data" autocomplete="off"> 
    <div class="alert alert-error"><?=$_SESSION['message']?></div>
            <img class="avatar" src="img/profile pic.png">
            <h1 class="mb-5 font-weight-light text-uppercase">Employee Register</h1>
            <div class="form-group">
               <strong> First Name </strong> <input type="text" name="firstname"   class="form-control rounded-pill form-control-lg" placeholder="First name" required>
            </div>
            <div class="form-group">
                <strong> Last Name </strong> <input type="text"  name="lastname" class="form-control rounded-pill form-control-lg" placeholder="Last name" required>
                </div>
             <div class="form-group">
                <strong> Email  </strong> <input type="email"  name="email" class="form-control rounded-pill form-control-lg" placeholder="Email" required>
                    </div>
           <div class="form-group">
                <strong> Phone No </strong> <input type="text" name="phoneno" class="form-control rounded-pill form-control-lg" placeholder="Phone no" required>
                    </div>
            <div class="form-group">
               <strong>Adress </strong> <input type="text"  name="adress" class="form-control rounded-pill form-control-lg" placeholder="Adress" required>
                    </div>
                    <div class="form-group">
                          <label for="jobtitle" name="jobtitle" class="form-control-label" name="jobtitle" required>Job Title</label>
                           <select class="form-control" name="jobtitle">
                               <option value="web designer">Web Designer</option>
                               <option value="DB Manager">Data Base Manager</option>
                               <option value="Office Secritary">Office Secritary</option>
                           </select>
                   </div>
                    <div class="form-group">
                 <strong>User Name </strong> <input type="text"  name="username" required class="form-control rounded-pill form-control-lg" placeholder="Username" required>
                     </div>
             <div class="form-group">
                <strong>Password </strong> <input type="password"  name="password" class="form-control rounded-pill form-control-lg" placeholder="Password" required> 
                      </div>
            <div class="form-group">
                <strong>Confirm Password </strong> <input type="password"  name="confirmpassword" autocomplete="new-password" class="form-control rounded-pill form-control-lg" placeholder="Confirm password" required>
                </div>
        
            <button type="submit" value="Register" name="register" class="btn mt-5 btn-custom btn-block text-uppercase rounded-pill btn-lg">Register</button>
                 </form>
  
    </div>  
      <img class="car" src="img/suburbb.png">
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
<div class="modal fade" id="contactModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
        <button class="close" data-dismiss="modal"><span>&times;</span></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message"></textarea>
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

</html>