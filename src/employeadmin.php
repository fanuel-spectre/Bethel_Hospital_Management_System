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
$sql = "INSERT INTO employemessage(fullname, email, phoneno, message)VALUES('$fullname', '$email', '$phoneno', '$message')";
 
       if($mysqli->query($sql)===true){
         $_SESSION['message']="registration successfull";
         header("location: employeepage.php");
       }
       else{
         $_SESSION['messge']="User Not Registered";
       }
  
 }
?>
