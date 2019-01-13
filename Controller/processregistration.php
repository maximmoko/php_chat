<?php 
include "init.php";

//include("database.php");
session_start();
?> 

<?php
if(isset($_POST['register'])){

    $case = true;
    echo "register<br><br>";

    if($_POST['password'] != $_POST['confirm']){
        echo "Passwords don't match!";
        $case = false;
    }else if(strlen(($_POST['username'])) <= 5){
        echo "Username is too short";
        $case = false;
    }

//VALIDATING THE INFO
    if($case = true){



        // var_dump($_FILES);
        // var_dump($_FILES['file']);

// UPLOAD FILE PHP
        $file = $_FILES['file'];

        $fileName=$_FILES['file']['name'];
        $fileTmpName=$_FILES['file']['tmp_name'];
        $fileSize=$_FILES['file']['size'];
        $fileError=$_FILES['file']['error'];
        $fileType=$_FILES['file']['type'];

        $fileExt=explode('.',$fileName);
        $fileActualExt=strtolower(end($fileExt));

        $allowed=array('jpg','jpeg','png','pdf');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError===0) {
                if ($fileSize < 1000000) {
                    $fileNameNew=uniqid('',true).".".$fileActualExt;
                    $fileDestination="../avatars/".$fileNameNew;
                    $moved=move_uploaded_file($fileTmpName, $fileDestination);
                    if($moved){
                      
                        $string = str_replace('../', '', $fileDestination); // Replaces "../"
                        $_SESSION['img'] = $string;
                        echo "this is it";
                        var_dump($string);
                        $_SESSION['img']=$string;
                        $photo=$_SESSION['img'];
             
                    }else{
                        echo "something is wrong....";
                    // var_dump($fileSize);

                    }
                }else{
                    echo "your file is to big";
                }
            }else{
                echo "there was an error uploading your file";
            }
        }else{
            echo "you can not uplode files of this type!";
        }
        
        var_dump($fileDestination);

// AFTER UPLOADING THE FILE VALIDATION IS CONTINUE
        $username = $_POST['username'];
        $password = $_POST['password'];
        $avatar = $string;//$fileDestination;
        $email = $_POST['email'];
        $confirm = 0;
        $confirmcode=rand();

        $arrToUser = array(
            'username' =>  $username,
            'password' =>  md5($password),
            'avatar' =>  $avatar,
            'email' =>  $email,
            'confirmed' =>  $confirm,
            'confirm_code' =>  $confirmcode
        );

        var_dump($arrToUser);
        // exit();

        $user = new User($arrToUser);
        echo "CHARACTER INFO AFTER OOP";
        var_dump($user);
        
        $db->addUsers($user);

        // $query = $db->prepare("INSERT INTO users VALUES (NULL, ?, ?, ?, ?, ?, ?)");
        // $result = $query->execute(array($username, md5($password), $avatar, $email, '0',$confirmcode));

        $message="Confirm your email and click link http://localhost/lab3/Controller/emailconfirmation.php?username=$username&code=$confirmcode";

        mail($email,"Confirm email",$message,"From: donotreply@tome.com");

        // echo "Result is: $result";

        echo " Registration is compleate , please confirm your email address";

        var_dump($email,"Confirm email",$message,"From: donotreply@tome.com");
        exit();
        
       header("location: ../index.php");
    }
    
}

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<!-- back to the main page -->
<a href="../index.php"><input type="button" name="back" value="back"></a>
</body>
</html>