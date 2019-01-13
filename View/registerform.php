<?php   
// include("database.php");
 ?>  
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="index.css" type="text/css">
	<title>registerform</title>
</head>
<body>
	<div  style=" margin:100px 520px;">
		<form action = "../Controller/processregistration.php" method = "post" enctype="multipart/form-data" style="width: 40%; background-color: #666666;  padding:20px 150px 20px 80px;" >
			<input type="text" name="username" placeholder="name:" value="" required><br><br>
			<input type="password" name="password" placeholder="password:" value="" required><br><br>
			<input type="password" name="confirm" placeholder="confirmation:" value="" required><br><br>
			<input type="email" name="email" placeholder="email"><br><br>
			<input type="file" name="file" placeholder="avatar:" value="" ><br><br>
			<input type="submit" name="register" value="submit"><br><br>
			<input type="submit" name="reset" value="reset">
		</form>	
	</div>
</body>
</html>