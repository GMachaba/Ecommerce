<?php
require_once ('database.php');
class session {
	public $username;
	private $logged_in = false;
	 public function start_session() {
		session_start();
		$this->login_true();
	}
	public function is_logged() {
		$this->login_true();
		return $this->logged_in;
	}
	public function login() {
		$db = new Db_connect();
		$email = $_POST['email'];
		$password = $_POST['password'];
        $user = $db->My_query("SELECT * FROM users WHERE email='$email' LIMIT 1");
        if (Db_connect::num_rows($user) == 1) {
					if (isset($_POST['c-checkbox'])) {
						// $_COOKIE['username'] = $email;
						setcookie("username",$email, time()+7200);
					}else {
						$_SESSION['username'] = $email;
					}
	}else{
		die("Username or password is not correct");
	}
}
	public function logout() {
		unset($_SESSION['username']);
		try {
			setcookie("username", $_COOKIE['username'], time() - 7200);
		} catch (Exception $e) {
			unset($_SESSION['username']);
		}
		unset($this->username);
		$this->logged_in = false;
	}
	private function login_true() {
		if (isset($_SESSION['username'])){
			  $this->username = $_SESSION['username'];
				$this->logged_in = true;
		}else if (isset($_COOKIE['username'])) {
			$this->username = $_COOKIE['username'];
			$this->logged_in = true;
		}else{
			$this->logged_in = false;
		}
	}
	public function profile() {
		$data = new Db_connect();
		if(isset($_SESSION['username'])){
			$email = $_SESSION['username'];
		}else if($_COOKIE['username']){
			$email = $_COOKIE['username'];
		}

		$query = $data->My_query("SELECT * FROM users WHERE email = '$email'");
		$user = array();
		while ($me = $data->fetch_array($query)) {
			$user[] = $me;
		}
		return $user;
	}
}
$session = new session();
$session->start_session();
 ?>
