<?php 

class DBManager{
	const HOST   	= "localhost";
	const USER   	= "root";
	const PASS   	= "";
	const DBNAME 	= "lab1";

	private $db;

		/**
		 * [__construct description]
		 */
		public function __construct(){
			//Try to connect to the database using the credentials
			//If connection is successful, it will keep the persistance in a variable called $db
			try{
				$this->db = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::DBNAME, self::USER, self::PASS);
				$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			}catch(Exception $e){
				die("Database connection error<br> " . $e->getMessage());
			}
		}

		public function getAllUsers(){
			$query = $this->db->query("SELECT * FROM users");
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function addUsers($obj){

			$query = $this->db->prepare("INSERT INTO users VALUES(DEFAULT, ?, ?, ?, ?, ?, ?);");
			$query->execute(array(
				
				$obj->getUsername(),
				$obj->getPassword(),
				$obj->getAvatar(),
				$obj->getEmail(),		
				$obj->getConfirmed(),
				$obj->getConfirm_code()
			));
		}

		public function updateConfirmed($username){
			$query = $this->db->prepare("UPDATE users SET confirmed='1' WHERE username='$username' ");
			$query->execute(array());
		}

		public function updateConfirm_code($username){
			$query = $this->db->prepare("UPDATE users SET confirm_code='0' WHERE username='$username' ");
			$query->execute(array());
		}

		public function getConfirm($username){
			$query = $this->db->prepare("SELECT * FROM users WHERE username = ? ");
			$query->execute(array($username));
			return $query->fetch(PDO::FETCH_ASSOC);
		}

		public function getUser($id){
			$query = $this->db->prepare("SELECT * FROM users WHERE id = ?");
			$query->execute(array($id));
			return $query->fetch(PDO::FETCH_ASSOC);
		}

		public function loginCheck($log,$pass){
			$query = $this->db->prepare("SELECT * FROM users WHERE username = ? and password = ?  ");
			$query->execute(array($log,$pass));
			return $query->fetch(PDO::FETCH_ASSOC);
		}

		public function addPosts($obj){
			$query = $this->db->prepare("INSERT INTO posts VALUES (NULL, ?, ?, ?)");
			$query->execute(array(
				$obj->getUsername(),
				$obj->getAvatar(),
				$obj->getComment(),
			));

		}

		public function displayComments(){
			$query = $this->db->prepare("SELECT * FROM posts ORDER BY id DESC");
			$query->execute(array());
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
	}


	?>