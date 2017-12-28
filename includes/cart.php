<?php
require_once 'database.php';
require_once 'session.php';
class cart {
	public $item_array = array();
	public function add_items() {
		if (isset($_POST['cart'])) {
		   if (isset($_SESSION['cart_items'])) {
		     $item_array_id = array_column($_SESSION['cart_items'],"item_id");
		     if (!in_array($_SESSION['cart_items'], $item_array_id)) {
		       $count=count($_SESSION['cart_items']);
		          $item_array=array(
		          'item_id' => $_GET['id'],
		          'item_name' => $_POST['hidden_name'],
		          'item_quantity' => $_POST['qa'],
		          'item_price' => $_POST['hidden_price']
		          );
		          $_SESSION['cart_items'][$count] = $item_array;
		     }
		   }else{
		    $item_array=array(
		      'item_id' => $_GET['id'],
		      'item_name' => $_POST['hidden_name'],
		      'item_quantity' => $_POST['qa'],
		      'item_price' => $_POST['hidden_price']
		      );
		    $_SESSION['cart_items'][0]= $item_array;
		   }
		 }
	}
	public function cart_finalise() {
		$data = new Db_connect();
	  if (isset($_POST['final']) && isset($_SESSION['cart_items'])) {
	    $payments=$_POST['payment'];
			$email = $_SESSION['username'];
			$ss = $data->My_query("SELECT id FROM users WHERE email='$email' LIMIT 1");
			$user_id = $data->fetch_assoc($ss);
	    foreach ($_SESSION['cart_items'] as $value) {
			$did = $user_id['id'];
	    $name=$value['item_name'];
	    $quantity=$value['item_quantity'];
	    $price=($value['item_quantity'] * $value['item_price']);
	    $h = $data->My_query("INSERT INTO product_order(name,quantity,price,payment_method,user_id) VALUES('$name','$quantity','$price','$payments',$did)");
	    $id = $value['item_id'];
	    $e = $data->My_query("UPDATE products SET quantity = quantity-$quantity WHERE id=$id");
	  }
	  header("location: ?page=cart");
	  unset($_SESSION['cart_items']);
	    }
	}
	public function clear_all() {
		if (isset($_POST['clear'])) {
			unset($_SESSION['cart_items']);
		}
	}
	public function clear_by_id($id) {
		$count=count($_SESSION['cart_items']);
		for ($i=0; $i < $count; $i++) {
			if ($id == $_SESSION['cart_items'][$i]['item_id']) {
				unset($_SESSION['cart_items'][$i]);
				header("location: index.php?page=cart");
				break;
			}
		}
	}
	public function session_history() {
		$data = new Db_connect();
		$email = $_SESSION['username'];
		$qb = $data->My_query("SELECT * FROM users WHERE email = '$email' LIMIT 1");
		$j = $data->fetch_assoc($qb);
		$jk = $j['id'];
		$query = $data->My_query("SELECT * FROM product_order WHERE user_id = $jk");
		$h = array();
		while ($me = $data->fetch_array($query)) {
			$h[] = $me;
		}
		return $h;
	}
}
$cart = new cart();
 ?>
