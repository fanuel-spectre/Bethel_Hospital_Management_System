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
$sql = "INSERT INTO employees(firstname, lastname, email, phoneno, adress,jobtitle, username, password)VALUES('$firstname', '$lastname', '$email', '$phoneno', '$adress','$jobtitle', '$username', '$password')";
 
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
    <title>Employee Page</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/fontawesome.css">
    <style>
      /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
      .row.content {height: 1500px}
      
      /* Set gray background color and 100% height */
      .sidenav {
        background-color: #555;
        height: 1549px;
      }
      
      /* Set black background color, white text and some padding */
      .sidenav {
        background-color: #555;
        height: 4000px;
      }
      
      /* Set black background color, white text and some padding */
      footer {
        background-color: #555;
        color: white;
        padding: 15px;
        transform: translateY(-50px);
      }
        .row.content {height: auto;} 
      }
    </style>
  
</head>
<body>
        <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse sticky-top">
                <a class="navbar-brand" href="#">
                  <img src="img/logo1.jpg" width="60" height="60" class="d-inline-block align-content-center"alt=""> AYAT REAL STATE SALES MANAGMENT</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="employeepage.php">Home <span class="sr-only">(current)</span></a>
                      
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
                                    <a class="dropdown-item" href="employeprofile.php">Me</a>
                                    <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="loggin.php">LOG OUT</a>
                                </div>
                              </li>
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </nav> 
              <div class="container-fluid">
                <div class="row content">
                  <div class="col-sm-3 sidenav ">
                    <h4><i class="fa fa-user"></i><strong> Employee</strong></h4>
                   <br><br>
                      <div class="button-group">
                        <a class="btn btn-outline-primary" href="update2.php" >Edit Profile</a> <br><br>
                        <button class="btn btn-outline-primary" data-toggle="modal" data-target="#contactModal" >Contact Admin</button>
                      </div>
                    </div>
              
                  <div class="col-sm-9 ">
                    <br>
                   <h4 class="list-off-employee text-center"><small>List Of Customers</small></h4>
                    <hr>
                    <table class="table">
                      <thead class="thead-inverse">
                        <tr>
                        <th>id</th>
                          <th>Firstname</th>
                          <th>lastName</th>
                          <th>email</th>
                          <th>phoneno</th>
                          <th>adress</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $con=mysqli_connect("localhost","root","","ayat");
                        $s=mysqli_query($con,"SELECT * FROM user");
                        while ($r=mysqli_fetch_array($s)){
                        ?>
                        <tr>
                        <th><?php echo $r['id'];?> </th>
                          <th><?php echo $r['firstname'];?> </th>
                          <th><?php echo $r['lastname'];?> </th>
                          <th><?php echo $r['email'];?> </th>
                          <th><?php echo $r['phoneno'];?> </th>
                          <th><?php echo $r['adress'];?> </th>
                          <!-- <th><a href="#" data-toggle="modal" data-target="#contactModal3"><strong><i class="fa fa-info-circle"></i> Info</strong></a></th> -->
                        </tr>
                        <?php
                          }
                          ?>
                        </tbody>
                        </table>
                    <br>
                    <hr>
                    <h4 class="list-off-employee text-center"><small>Customers Message</small></h4> 
                    
                    <table class="table">
                      <thead class="thead-inverse">
                        <tr>
                        <th>Messageid</th>
                          <th>Full Name</th>
                          <th>email</th>
                          <th>phoneno</th>
                          <th>Message</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $con=mysqli_connect("localhost","root","","ayat");
                        $s=mysqli_query($con,"SELECT * FROM message");
                        while ($r=mysqli_fetch_array($s)){
                        ?>
                        <tr>
                        <th><?php echo $r['messageid'];?> </th>
                          <th><?php echo $r['fullname'];?> </th>
                          <th><?php echo $r['email'];?> </th>
                          <th><?php echo $r['phoneno'];?> </th>
                          <th><?php echo $r['message'];?> </th>
                          <th><a href="deletemessage.php?a=<?php echo $r['messageid']; ?>">Remove</a></th>
                          <!-- <th><a href="#" data-toggle="modal" data-target="#contactModal3"><strong><i class="fa fa-info-circle"></i> Info</strong></a></th> -->
                        </tr>
                        <?php
                          }
                          ?>
                          <br>
                    <hr>
                    </tbody>
                    </table>
                    <hr>
                    <br>
                    <h4 class="list-off-employee text-center"><small>Customers Transaction</small></h4> 
                    <table class="table">
                      <thead class="thead-inverse">
                        <tr>
                        <th>Transaction id</th>
                          <th>Full Name</th>
                          <th>House Type</th>
                          <th>Sub City</th>
                          <th>Villa NO</th>
                          <th>Payment Method</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $con=mysqli_connect("localhost","root","","ayat");
                        $s=mysqli_query($con,"SELECT * FROM transaction");
                        while ($r=mysqli_fetch_array($s)){
                        ?>
                        <tr>
                        <th><?php echo $r['id'];?> </th>
                          <th><?php echo $r['fname'];?> </th>
                          <th><?php echo $r['type'];?> </th>
                          <th><?php echo $r['city'];?> </th>
                          <th><?php echo $r['villano'];?> </th>
                          <th><?php echo $r['payment'];?> </th>
                          <!-- <th><a href="deletemessage.php?a=<?php echo $r['messageid']; ?>">Remove</a></th> -->
                          <!-- <th><a href="#" data-toggle="modal" data-target="#contactModal3"><strong><i class="fa fa-info-circle"></i> Info</strong></a></th> -->
                        </tr>
                        <?php
                          }
                          ?>
                  
                  <br><hr>
                        
                      </tbody>
                    </table>
                   <hr> 
                    
                   
                    
                    
                  </div>
                </div>
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
                    <img src="img/logo1.jpg" width="120" height="120" class="d-inline-block align-content-top">
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
                  <div class="modal-footer">

                  </div>
                </div>
              </div>
            </div>
            
          
          
          
            <div class="modal fade" id="contactModal2">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="contactModalLabel">Add Employee</h5>
                    <button class="close" data-dismiss="modal"><span>&times;</span></button>
                  </div>
                  <div class="modal-body">
                    <form class="form" action="admin.php" method="post" enctype="multipart/form-data" autocomplete="off">
                    <div class="alert alert-error"><?=$_SESSION['message']?></div>
                      <div class="form-group">
                        <label for="name">First Name</label>
                        <input type="text" name="firstname" class="form-control" id="firstname" required>
                      </div>   
                      <div class="form-group">
                          <label for="name">Last Name</label>
                          <input type="text" name="lastname" class="form-control" id="lastname" required>
                        </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                      </div>
                      <div class="form-group">
                          <label for="name">Phone No</label>
                          <input type="text" name="phoneno" class="form-control" id="phoneno" required>
                        </div>
                        <div class="form-group">
                          <label for="name">Adress</label>
                          <input type="text" name="adress" class="form-control" id="adress" required>
                        </div>
                        <div class="form-group">
                          <label for="jobtitle"  name="jobtitle" class="form-control-label" required>Job Title</label>
                           <select class="form-control">
                               <option value="">Web Designer</option>
                               <option value="">Data Base Manager</option>
                               <option value="">Office Secritary</option>
                           </select>
                   </div>    
                        <div class="form-group">
                          <label for="name">User Name</label>
                          <input type="text" name="username" class="form-control" id="username" required>
                        </div>
                      <div class="form-group">
                          <label for="password">New Password</label>
                          <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="form-group">
                          <label for="password">Confirm Password</label>
                          <input type="password" name="confirmpassword" class="form-control" id="confirmpassword" required>
                        </div>
                        </form>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" value="Register" name="submit" class="btn mt-5 btn-custom btn-block text-uppercase rounded-pill btn-lg">
                     Submit 
                    </button>
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
                    <a href="adminpage.html" class="btn btn-outline-primary">Done</a>
                  </div>
                </div>
              </div>
            </div>
          </html>