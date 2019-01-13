
<?php 
include "init.php";
?>

<?php 
session_start();
?>

<?php
if(isset($_POST['logonow'])) {
	$e_name=$_POST['log'];
	$e_pass=md5(($_POST['password']));
	var_dump($e_name);
	var_dump($e_pass);
	//exit();

	//OOP	
	$newOne = $db->loginCheck($e_name,$e_pass);
	var_dump($newOne);
	if($newOne['password']==$e_pass && $newOne['confirmed']==1){
		$loginto=true;
		$_SESSION['loginto']=$loginto;			
				// echo $newOne['avatar'];
		$_SESSION['username']=$newOne['username'];
		$_SESSION['file']=$newOne['avatar'];
		//exit();
		header("Location: ../index.php");

	}else{
		$_SESSION['loginto']==false;
				// echo "login or password doesn't much";
		header("Location: ../index.php");
	}
}
?>


 			