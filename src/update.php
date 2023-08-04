<form action="" method="post">
    Enter User Name:<br>
    <input type="text" name="username" value="" placeholder="Enter User Name Here"><br>
    Change Name, Email, Address, password <br>
    <input type="email" name="email" value="" placeholder="Enter New Email Here"><br>
    <input type="text" name="adress" value="" placeholder="Enter New Address Here"><br>
    <input type="password" name="password" value="" placeholder="Enter New Password Here"><br>
    <input type="submit" name="s" value="Update Now">
</form>
<?php 
if(isset($_POST['s']))
{
    $u = $_POST['username'];
    $e = $_POST['email'];
    $a = $_POST['adress'];
    $p = $_POST['password'];
    

    mysql_connect("localhost","root","");
    mysql_select_db("ayat");
    mysql_query("update user set email='$e', adress='$a', password='$p' where username='$u'");
    $_SESSION['message']="registration successfull";    
    header("location: admin.php");
    echo "Edit SuccessFully....";

}
?>