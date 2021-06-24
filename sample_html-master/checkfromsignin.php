<?php
$psw=$_POST['pswd'];
$cpsw=$_POST['cpswd'];
if (strcmp($psw, $cpsw)>0) {
	echo "corect";

}
else {
	echo"incorrect";
}
?>
