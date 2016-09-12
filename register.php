<?php
incldue "config.php";
session_start();


//you have to give your first name section a name
$fname = $_POST["fname"];
$lname = $_POST["lname"];

//this is not needed but you can hash the lname and treat is as a password
$lname = md5($lname);
$lname = crypt($lname, $fname);

//your table name is the table you store your user info in name it what ever you want but chane "yourtablename" if you do so
$quer = mysql_query("INSERT INTO yourtablename (id, fname, lname) VALUES ("NULL", '".$fname."', '"$lname"')");

mysql_query($quer) or trigger_error(mysql_error()."in".$quer);

//this is a very simple rego form with no checking ot see if name is already registered if you want me to add that just tell me

?>
