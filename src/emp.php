<?php
// session_start();
// $_SESSION['message'] ='';
// $mysqli = new mysqli('localhost','root','','ayat');
// if ($_SERVER['REQUEST_METHOD']=='POST'){
// $username=$_POST['username'];
// $password=$_POST['password'];
// $s=mysqli_query("select* from user where username='$username' and password='$password'");
// if($r= mysqli_fetch_array($s)){
//   $_SESSION['username']=$username;
//   header("location:subcity.php");
// }
// else{
//   echo "<div style='color:red; background_color:black:padding:10px;'> please enter valid username and password </div>";
// include "loggin.php";
// }
// }
$conn = mysqli_connect("localhost","root","","ayat");

if(isset($_POST['employelogin'])){
    $username = $_POST['userName'];
    $password = $_POST['password'];
    // $username = "milli";
    // $password = "milli";
    global $conn;
    $query = "SELECT * FROM employees WHERE username ='$username' and password='$password';";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1){
        header("Location:employeepage.php");
    }
    else{
        header("Location:employelogin.php?login=fail");
        // echo "<script>alert('wrong username and password')</script>";
       
    }
 
   
}
?>