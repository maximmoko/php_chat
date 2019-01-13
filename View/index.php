<?php 
include "Controller/init.php";

session_start();
?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="View/in.css">
	<title></title>
</head>
<body>
	<div>
		<?php if(isset($_SESSION['loginto']) && $_SESSION['loginto']==true ){ ?>
	
		<!-- wrapper -->
		<div class="wrapper"> 
			<!-- title -->
			<h1 class="text">Mini-chat</h1>
			<!-- registration box -->
			<div class="registration">
				<?php include 'logON.php' ?> <!-- LOG ON --> 
			</div>
			<!-- send a message box -->
			<?php include 'logONtext.php' ?>
			<!-- message post box -->
			<?php include 'logONmessage.php' ?>
		</div>

		<?php }else{ ?>

		<div class="wrapper"> 
			<!-- title -->
			<h1 class="text">Mini-chat-ON</h1>
			<!-- registration box -->
			<div class="registration">
				<?php include 'logOF.php' ?> <!-- LOG OF --> 
			</div>
			<!-- send a message box -->
			<?php include 'logOFtext.php' ?>
			<!-- message post box -->
			<?php include 'logOFmessage.php' ?>
		</div>

		<?php } ?>
	</div>
</body>
</html>