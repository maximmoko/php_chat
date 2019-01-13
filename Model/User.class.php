<!-- 1. User Class

Properties
-id
-username
-password
-email
-avatar

+Contructor(array) [Receives an associative array of all the info]
+Getters / Setters for each of the properties
+SendEmail($subject, $msg_body) [To be able to send an email to the user] ??????????????????????????????????????????????????????????????????????-->
<?php 

class User{
	
	private $username;
	private $password;
	private $avatar;
	private $email;
	private $confirmed;
	private $confirm_code;

	public function __construct($data){
		
		$this->username = $data['username'];
		$this->password = $data['password'];
		$this->avatar = $data['avatar'];
		$this->email = $data['email'];
		$this->confirmed = $data['confirmed'];
		$this->confirm_code = $data['confirm_code'];
	}

	// ID GET SET
	public function getId(){
		return $this->id;
	}
	public function setId(){
		$this->id = $id;
		return $this->id;
	}

	// USERNAME GET SET
	public function getUsername(){
		return $this->username;
	}
	public function setUsername(){
		$this->username = $username;
		return $this->username;
	}

	// PASSWORD GET SET
	public function getPassword(){
		return $this->password;
	}
	public function setPassword(){
		$this->password = $password;
		return $this->password;
	}

	// AVATAR GET SET
	public function getAvatar(){
		return $this->avatar;
	}
	public function setAvatar(){
		$this->avatar = $avatar;
		return $this->avatar;
	}

	// EMAIL GET SET
	public function getEmail(){
		return $this->email;
	}
	public function setEmail(){
		$this->email = $email;
		return $this->email;
	}

	// CONFIRMED GET SET
	public function getConfirmed(){
		return $this->confirmed;
	}
	public function setConfirmed(){
		$this->confirmed = $confirmed;
		return $this->confirmed;
	}

	// CONFIRM_CODE GET SET
	public function getConfirm_code(){
		return $this->confirm_code;
	}
	public function setConfirm_code(){
		$this->confirm_code = $confirm_code;
		return $this->confirm_code;
	}

}

?>