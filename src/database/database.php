<?php
 
$db=mysqli_connect("localhost","root","","ayat");
if (isset($_POST['Register_btn'])){
    session_start();

$firstname=mysql_real_escape_string($_POST['firstname']);
$lastname=mysql_real_escape_string($_POST['lastname']);
$email=mysql_real_escape_string($_POST['email']);
$phoneno=mysql_real_escape_string($_POST['phoneno']);
$adress=mysql_real_escape_string($_POST['adress']);
$username=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);
$confirmpassword=mysql_real_escape_string($_POST['confirmpassword']);

if($password==$confirmpassword){
    //create user
    
    $password= md5($password); 
    $confirmpassword= md5($confirmpassword); //hash password before storing
$sql = "INSERT INTO user(firstname, lastname, email, phoneno, adress, username, password, confirmpassword)VALUES('$firstname', '$lastname', '$email', '$phoneno', '$adress', '$username', '$password', '$confirmpassword')";
mysqli_query($db, $sql);
$_SESSION['message']="You are Registered Successfully";
$_SESSION['username']=$username;
header("location: ../loggin.php");//redirect to loggin page
}else{
//failed
$_SESSION['message']="password doesn't match";
}

}
?>

