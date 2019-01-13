<?php

	 if(file_exists("Model/DB_Manager.class.php")){  	// it is working but still not clear
		include "Model/DB_Manager.class.php";
		include "Model/User.class.php";
		include "Model/Message.class.php";
	 }else{
	 	include "../Model/DB_Manager.class.php";
		include "../Model/User.class.php";
		include "../Model/Message.class.php";
	}
	$db = new DBManager();
?>
