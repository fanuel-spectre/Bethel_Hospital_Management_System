<?php
$connection = new mysqli("localhost","root","","ayat");
if($_POST)
{
    $email=$_POST['email'];
    $selectquery = mysqli_query($connection,"select * from user where email='{$email}'") or die(mysqli_error($connection));
    $count = mysqli_num_rows($selectquery);
    $row = mysqli_fetch_array($selectquery);
    
    if($count>0)
    {
       echo"your password is : "; echo $row['password'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <form method="post">
    <br>
    Email : <input type="email" name="email">
    <input type="submit">
    <a class="btn btn-primary" href="loggin.php" >Get Back</a> 
    
    </form>
</body>
</html>