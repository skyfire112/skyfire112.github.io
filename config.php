<?php
//this script connects to database
$localhost = "localhost";
$username = "root";
$password = "";
//this is the database name it can be whatever you want
$database = "";
$server = "127.0.0.1";

mysql_connect($server,$username,$password);

mysql_select_db($database) or die( "Unable to select database");
?>

