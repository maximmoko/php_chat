<!-- 2. Message Class

Properties
-message
-username
-avatar

+Constructor(array) [Receives an array with the following infos: (username, avatar) -> of User and a string messages]
 $this -> username = array[username];
 $this -> avatar = array[avatar];
 this  -> message = array[messages];

 +Getter / Setter for the mesage properties [Don't forget to validate] -->
 <?php 

 class Message{
 	
 	private $message;
 	private $username;
 	private $avatar;

 	public function __construct($dataPost){
 	
 		$this ->username = $dataPost['username'];
 		$this ->avatar = $dataPost['avatar'];
 		$this ->comment = $dataPost['comment'];
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
 	public function getAvatar(){
 		return $this->avatar;
 	}
 	public function setAvatar(){
 		$this->avatar = $avatar;
 		return $this->avatar;
 	}

	// EMAIL GET SET
 	public function getComment(){
 		return $this->comment;
 	}
 	public function setComment(){
 		$this->comment = $comment;
 		return $this->comment;
 	}



 }

 ?>