<?php 
session_start();
include("init.php"); 
?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 

	$username=$_GET['username'];
	$code=$_GET['code'];

	var_dump($code);
	var_dump($username);


	$newOne = $db->getConfirm($username);

	echo "username :";
	var_dump($username);


	$db_code=$newOne['confirm_code'];

	echo "db_code";
	var_dump($db_code);
	echo "newOne[confirm_code] :";
	var_dump($newOne['confirm_code']);

	

	if($code==$db_code){

		$db->updateConfirmed($username);
		$db->updateConfirm_code($username);
		
		echo "thank you . your email has been confirmed";?>

		<a href="../index.php"><input type="button" name="back_to_main" value="back"></a>

		<?php
	}else{
		echo "username and code is not match";
	}
	
	?>
</body>
</html>