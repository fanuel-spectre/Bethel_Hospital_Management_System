<?php
$messageid = $_GET['a']; //get url data using get method
mysql_connect("localhost","root","");
mysql_select_db("ayat");
mysql_query("delete from employemessage where messageid='$messageid'");
//redirect page to admin
header("location:admin.php");


?>