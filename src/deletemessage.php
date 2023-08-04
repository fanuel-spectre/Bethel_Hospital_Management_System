<?php
$messageid = $_GET['a']; //get url data using get method
mysql_connect("localhost","root","");
mysql_select_db("ayat");
mysql_query("delete from message where messageid='$messageid'");
//redirect page to admin
header("location:employeepage.php");


?>