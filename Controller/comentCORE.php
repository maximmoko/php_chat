<?php 
include "init.php";
// include "Model/Message.class.php";
session_start();
?>

<?php
if(isset($_POST['postButton']) && $_SESSION['loginto']==true){
	if(!empty($_POST['comment'])){

		$username=$_SESSION['username'];
		$avatar=$_SESSION['file'];
		$comment = $_POST['comment'];

		  $arrToPost = array(
            'username' =>  $username,
            'avatar' =>  $avatar,    
            'comment' =>  $comment
        );

		  $post = new Message($arrToPost);

		  $db->addPosts($post);

		//OOP
		//$newOne = $db->commentPost($username, $avatar, $comment);

		header("location: ../index.php");
	}else{
		echo "please fill out comment section";
?>

<!-- back to the main page -->
<a href="index.php"><input type="button" name="back" value="back"></a>

<?php
	}
}
?>