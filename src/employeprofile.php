

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
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
      input{
        width:40%;
        height: 5%;
        border:1px;
        border-radius: 05px;
        padding: 8px 15px 8px 15px;
        margin: 10px 0px 15px 0px;
        box-shadow: 1px 1px 2px 1px grey;
    }
      footer {
        background-color: #555;
        color: white;
        padding: 15px;
        width:100%;
      }
      
      /* On small screens, set height to 'auto' for sidenav and grid */
      @media screen and (max-width: 767px) {
        .sidenav {
          height: 100%;
          padding: 15px;
        }
        .row.content {height: auto;} 
      }
    </style>
  
</head>
<body>
        <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse sticky-top">
                <a class="navbar-brand" href="coverpage.php">
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
                   <a class="btn btn-outline-primary" href="update2.php" >Edit Profile</a> <br><br>
                      <!-- <div class="button-group">
                        
                        <button class="btn btn-outline-primary" data-toggle="modal" data-target="#contactModal" >Contact Admin</button>
                      </div> -->
                    </div>
              
                  <div class="col-sm-9 ">
                    <br><h1>Search Account</h1>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Enter User Name to Search"/><br>
            <input type="submit" name="search" value="Search Data">

        </form>
        <div class="col-sm-9 ">
                    <br>
                   <h4 class="list-off-employee text-center"><small>Your Account Info</small></h4>
                    <hr>
                    <table class="table">
                      <thead class="thead-inverse">
                        <tr>
                        <th>id</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Phone no</th>
                          <th>Adress</th>
                          <th>Job Title</th>
                          <th>User Name</th>
                          <th>Password</th>
                          <th>Update</th>
                        </tr>
                      </thead>
                      <tbody>
        <?php
        $connection = mysqli_connect("localhost","root","");
        $db= mysqli_select_db($connection,'ayat');

        if(isset($_POST['search']))
        {
            $username = $_POST['username'];
            $query="SELECT * FROM employees where username='$username'";
            $query_run=mysqli_query($connection,$query);
            while($row=mysqli_fetch_array($query_run))
            {
                ?>
                <tr>
                <th><?php echo $row['eid'];?> </th>
                  <th><?php echo $row['firstname'];?> </th>
                  <th><?php echo $row['lastname'];?> </th>
                  <th><?php echo $row['email'];?> </th>
                  <th><?php echo $row['phoneno'];?> </th>
                  <th><?php echo $row['adress'];?> </th>
                  <th><?php echo $row['jobtitle'];?> </th>
                  <th><?php echo $row['username'];?> </th>
                  <th><?php echo $row['password'];?> </th>
                        <th><a href="update2.php?a=<?php echo $row['firstname'];?>">Change</a></th>
                </tr>
                <?php
            }
        }
        ?>
    </tbody>
    </table>
                  <br><br>
                       
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
                     </html>