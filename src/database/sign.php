<?php

include_once 'database.php';
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$adress=$_POST['adress'];
$username=$_POST['username'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
$sql= "INSERT INTO user (firstname, lastname, email, phoneno, adress, username, password, confirmpassword)
 VALUES ('$firstname','$lastname','$email','$phoneno','$adress','$username','$password','$confirmpassword')";

mysqli_query($conn, $sql);

