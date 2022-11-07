<?php
include 'config.php';
if(isset($_POST['submit']) && $_POST["email"] !='' && $_POST["password"]!= '' && $_POST["repassword"] !=''){
	$email = $_POST["email"];
	$password= $_POST["password"];
	$repassword= $_POST["repassword"];
	if($password != $repassword){
		header("location: register.php");
	}
	$sql = "SELECT * FROM users WHERE email='$email'";
	$old = mysql_query($conn,$sql);
	echo mysql_num_rows($old);
} else{
		header("location: register.php");
}
?>