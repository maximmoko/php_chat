<?php  
session_start();
if(isset($_POST['logout'])){
	$_SESSION['loginto']=false;
	var_dump($_SESSION['loginto']);
	echo "hey";
	header("Location: ../index.php");	
	exit();
}

?>