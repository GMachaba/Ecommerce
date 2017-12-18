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
        $user = $db->My_query("SELECT * FROM users WHERE email='$email' AND password =sha1('$password') LIMIT 1");
        if (Db_connect::num_rows($user) == 1) {
            $_SESSION['username'] = $email;
	}
}
	public function logout() {
		unset($_SESSION['username']);
		unset($this->username);
		$this->logged_in = false;
	}
	private function login_true() {
		if (isset($_SESSION['username'])){
			$this->username = $_SESSION['username'];
			$this->logged_in = true;
		}else{
			$this->logged_in = false;
		}
	}
	public function profile() {
		$data = new Db_connect();
		$email = $_SESSION['username'];
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
