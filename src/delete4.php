<?php
$id = $_GET['a']; //get url data using get method
mysql_connect("localhost","root","");
mysql_select_db("ayat");
mysql_query("delete from transaction where id='$id'");
//redirect page to admin
header("location:newsearch.php");


?>