<?php
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','designing');
 class Db_connect {
 	private $connect;
 	public function __construct() {
 		$this->open_connection();
 	}
 	public function open_connection() {
 		$this->connect = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
 		if (!$this->connect) {
 			echo "connection error". mysqli_error($this->connect);
 		}
 	}
 	public function My_query($sql) {
 		$query = mysqli_query($this->connect,$sql);
 		return $query;
 	}
 	public function fetch_array($query) {
 		return mysqli_fetch_array($query);
 	}
  	public function fetch_assoc($query) {
 		return mysqli_fetch_assoc($query);
 	}
 	public function num_rows($query) {
 		return mysqli_num_rows($query);
 	}
 	public static function pages() {
 		if (isset($_GET['page'])) {
 			$titles = $_GET['page'];
 		}else{
 			$titles = "home";
 		}
 		return $titles;
 	}
 	public static function admin_pager() {
 		if (isset($_GET['page'])) {
 			$pager = $_GET['page'];
 		}else{
 			$pager = "dashboard";
 		}
 		return $pager;
 	}
 }
 ?>
