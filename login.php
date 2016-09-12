<?php
include "config.php";
session_start();

$fname = $_POST['fname']; 
$lname = $_POST['lname']; 
    $lname = md5($lname);
    $lname = crypt($lname, $fname);
    
$sql = mysql_query("SELECT * FROM yourtablename WHERE fname = '".$fname."' and lname = '".$lname."'");
$count= mysql_num_rows($sql);

if($count == 1){
  echo "succesful login";
}else{
  echo "incorrect details";
  session_destroy();
}
?>
