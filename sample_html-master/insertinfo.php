<?php
// Create connection
$mysqli = new mysqli('localhost','root','','dbms');
// Check connection

$in=$mysqli->query("INSERT INTO signup VALUES('".$_POST['fname']."','".$_POST['mail']."','".$_POST['pnum']."','".$_POST['state']."','".$_POST['cpswd']."','".$_POST['gnd']."')");
$psw=$_POST['pswd'];
$cpsw=$_POST['cpswd'];
if ($in === TRUE AND strcmp($psw, $cpsw)!=0) {
  echo "Signed up successfully!!";
}

 else {
  echo "Error inserting data in database!!".$mysqli->error;
}

$mysqli->close();
?>