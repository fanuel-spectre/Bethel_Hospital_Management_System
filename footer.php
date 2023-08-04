<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Admin</title>
</head>
<body>
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
        <a class="navbar-brand" href="#">AYAT REAL STATE SALES MANAGMENT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Settings
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="logasadmin.php">Login as Admin</a>
                            <a class="dropdown-item" href="#">Help</a>
                          <a class="dropdown-item" href="#">Edit Profile</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="loggin.php">LOG OUT</a>
                        </div>
                      </li>
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav> 
    <script src="./js/jquery.min.js"></script>
    <script src="./js/tether.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('editor1');
    </script>
</body>

<footer id="main-footer" class="bg-inverse text-white mt-5 p-5">
    <div class="container">
        <div class="row">
            <div class="col">
              <p class="lead text-center">Copyright &copy; 2020 Betel Hospital</p>  
            </div>
        </div>
    </div>
</footer>
</html>