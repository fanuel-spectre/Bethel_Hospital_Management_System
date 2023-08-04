<?php
// session_start();
$_SESSION['message'] ='';
$mysqli = new mysqli('localhost','root','','ayat');
if ($_SERVER['REQUEST_METHOD']=='POST'){
  //check if username already taken
$username=$_POST['username'];
  $new=mysqli_query($mysqli,"SELECT username FROM new WHERE username='$username'");
  $result=mysqli_num_rows($new);
  if($result>0){
    $_SESSION['message']="USER NAME ALREADY EXIST CHOOSE ANOTHER USER NAME";
    //
  }
  elseif($_POST['password']==$_POST['confirmpassword']){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$phoneno=$_POST['phoneno'];
$adress=$_POST['adress'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$security=$_POST['security'];
// $password1= md5($password);    password hasher
//$confirmpassword= md5($confirmpassword); 
$sql = "INSERT INTO new(fname, lname, phoneno, add, username,email, password,security)VALUES('$fname', '$lname', '$phoneno', '$add', '$username', '$email', '$password','$security')";
       if($mysqli->query($sql)===true){
         $_SESSION['message']="registration successfull";
         header("location: loggin.php");
       }
       else{
         $_SESSION['messge']="User Not Registered";
       }
  }
  else{
    $_SESSION['message']="PASSWORD DOESN'T MATCH";
    header("location: damn.php?signup=password&firstname=$firstname&lastname=$lastname&phoneno=$phoneno&adress=$adress&username=$username&email=$email");
  }
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kill me</title>
</head>
<body>
<div class="login-container d-flex align-items-center justify-content-center">

    <form class="form login-form text center"  action="damn.php" method="post" enctype="multipart/form-data">
    <strong>first Name</strong>
    <?php
            if(isset($_GET['firstname'])){
              $firstname=$_GET['firstname'];
              echo' <input type="firstname" name="firstname"   class="form-control rounded-pill form-control-lg" placeholder="first" value="'.$firstname.'" required>';
          }
          else{
              echo' <input type="firstname" name="firstname"   class="form-control rounded-pill form-control-lg" placeholder="first" required>';
          }
          ?><br>
           <strong>Last Name</strong><?php
         
            if(isset($_GET['lastname'])){
                $lastname=$_GET['lastname'];
                echo' <input type="text" name="lastname"   class="form-control rounded-pill form-control-lg" placeholder="Last name" value="'.$lastname.'" required>';
            }
            else{
                echo' <input type="text" name="lastname"   class="form-control rounded-pill form-control-lg" placeholder="Last name" required>';
            }
            ?><br>
           <strong> Phone No</strong><?php
            if(isset($_GET['phoneno'])){
                $phoneno=$_GET['phoneno'];
                echo' <input type="text" name="phoneno"   class="form-control rounded-pill form-control-lg" placeholder="Phone No" value="'.$phoneno.'" required>';
            }
            else{
                echo' <input type="text" name="phoneno"   class="form-control rounded-pill form-control-lg" placeholder="Phone No" required>';
            }
            ?><br>
            <strong>Adress</strong><?php
            if(isset($_GET['adress'])){
                $adress=$_GET['adress'];
                echo' <input type="text" name="adress"   class="form-control rounded-pill form-control-lg" placeholder="Adress" value="'.$adress.'" required>';
            }
            else{
                echo' <input type="text" name="adress"   class="form-control rounded-pill form-control-lg" placeholder="Adress" required>';
            }
            ?><br>
           <strong> User Name</strong><?php
            if(isset($_GET['username'])){
                $username=$_GET['username'];
                echo' <input type="text" name="username"   class="form-control rounded-pill form-control-lg" placeholder="User Name" value="'.$username.'" required>';
            }
            else{
                echo' <input type="text" name="username"   class="form-control rounded-pill form-control-lg" placeholder="User Name" required>';
            }
            ?><br>
            <strong>Email</strong><?php
            if(isset($_GET['email'])){
                $email=$_GET['email'];
                echo' <input type="email" name="email"   class="form-control rounded-pill form-control-lg" placeholder="email" value="'.$email.'" required>';
            }
            else{
                echo' <input type="email" name="email"   class="form-control rounded-pill form-control-lg" placeholder="email" required>';
            }
            ?>
             <div class="form-group">
                <strong>Password </strong> <input type="password"  name="password" class="form-control rounded-pill form-control-lg" placeholder="Password" required> 
                      </div>
            <div class="form-group">
                <strong>Confirm Password </strong> <input type="password"  name="confirmpassword" autocomplete="new-password" class="form-control rounded-pill form-control-lg" placeholder="Confirm password" required>
                </div>
                <div class="form-group">
               <strong>What Is Your Favorite Movie Character ! </strong> <input type="text"  name="security" class="form-control rounded-pill form-control-lg" placeholder="Security Question" required>
                    </div>
            <button type="submit" value="Register" name="submit" class="btn mt-5 btn-custom btn-block text-uppercase rounded-pill btn-lg">Register</button>
                 </form>
            
           </form>
        </div>
</body>
</html>