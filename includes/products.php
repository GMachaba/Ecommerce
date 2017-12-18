<?php
require_once ('database.php');
class product {
	public function all_products() {
    if (isset($_GET['offset'])) {
      $offset=$_GET['offset'];
    }else{
      $offset=0;
    }
		$data = new Db_connect();
		$query = $data->My_query("SELECT * FROM products LIMIT 10 offset $offset");
		$product = array();
		while ($me = $data->fetch_array($query)) {
			$product[] = $me;
		}
		return $product;
	}
	public function product_id($id) {
		$data = new Db_connect();
		$query = $data->My_query("SELECT * FROM products WHERE id = {$id}");
		$result = $data->fetch_assoc($query);
		return $result;
	}
	public function product_category($category) {
		$data = new Db_connect();
		$query = $data->My_query("SELECT * FROM products WHERE category = {$category}");
		$product = array();
		while ($me = $data->fetch_array($query)) {
			$products[] = $me;
		}
		return $products;
	}
	public function call_category() {
		$data = new Db_connect();
		$query = $data->My_query("SELECT * FROM category ORDER BY id ASC");
		$product = array();
		while ($me = $data->fetch_array($query)) {
			$product[] = $me;
		}
		return $product;
	}
	public function count_all() {
		$data = new Db_connect();
		$query = $data->My_query("SELECT id FROM products");
		$total = $data ->num_rows($query);
		return $total;
	}
	public function product_order() {
		$data = new Db_connect();
		$query = $data->My_query("SELECT * FROM product_order ORDER BY id LIMIT 10");
		$order = array();
		while ($me = $data->fetch_array($query)) {
			$order[] = $me;
		}
		return $order;
	}
	public function search_product() {
		$data = new Db_connect();
		$searchq = strtolower(htmlentities($_POST['engine']));
		$query = $data->My_query("SELECT * FROM products WHERE lower(name) LIKE '%".$searchq."%'");
		$product = array();
		while ($me = $data->fetch_array($query)) {
			$product[] = $me;
		}
		return $product;
	}
	public function add_product() {
		$data = new Db_connect();
		$target_dir = "uploads/";
	    $target_file = $target_dir .basename($_FILES["file"]["name"]);
	    $uploadOk = 1;
	    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
	      echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
	    }else{
	      echo "sorry there was an error while uploading your image";
	    }
	  $imagename = $_FILES["file"]["name"];
	  $name=$_POST['name'];
	  $quantity=$_POST['quantity'];
	  $price=$_POST['price'];
	  $category=$_POST['category'];
	  $memory=$_POST['memory'];
	  $ram=$_POST['ram'];
	  $processor=$_POST['processor'];
	  $display=$_POST['display'];
	  $q = $data->My_query("INSERT INTO products(name,quantity,price,category,memory,ram,processor,display,images) VALUES('$name','$quantity','$price',$category,'$memory','$ram','$processor','$display','$imagename')");
		}
		public function update_product() {
			$data = new Db_connect();
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$query = $data->My_query("SELECT * FROM products WHERE id = $id LIMIT 1");
				$product = array();
				while ($me = $data->fetch_array($query)) {
					$product[] = $me;
				}
			}
		 	if (isset($_POST['update'])) {
		 		//uploading image to be updated...
		 		$target_dir = "uploads/";
		 		$target_file= $target_dir. basename($_FILES["update_file"]["name"]);
		 		$uploadok=1;
		 		$imageFileType= pathinfo($target_file,PATHINFO_EXTENSION);
		 		$imageup=$_FILES["update_file"]["name"];
				  $name=$_POST['name'];
				  $quantity=$_POST['quantity'];
				  $price=$_POST['price'];
				  $category=$_POST['category'];
				  $memory=$_POST['memory'];
				  $ram=$_POST['ram'];
				  $processor=$_POST['processor'];
				  $display=$_POST['display'];
				  $id=$_POST['id'];
				  $query= $data->My_query("SELECT * FROM products WHERE id={$id}");
				  $l=$data->fetch_array($query);
				  $delete_image = 'uploads/'.$l['images'];
				  $delete_old= False;
				  if (strlen($_FILES["update_file"]["tmp_name"]) > 0) {
				  	if (move_uploaded_file($_FILES["update_file"]["tmp_name"], $target_file)) {
		 		  		$delete_old = True;
			 		}else{
			 			$imageup = $l['images'];
			 		}
				  }else{
				  	$imageup = $l['images'];
				  }
		 		//updating database..
				  $k= $data->My_query("UPDATE products SET name='$name', quantity='$quantity',price='$price',category=$category, memory='$memory', Ram='$ram', processor='$processor', Display='$display', images='$imageup' WHERE id={$id}");
				  if ($k) {
				  	if ($delete_old) {
				  		unlink($delete_image);
				  	}
				  	header('Location: index.php?page=Products');
				  } else {
				  	header('location: index.php?page=Products' && error_log("not updated"));
				  }
		 	}
		 	return $product;
		}
		public function delete_product(){
			$data = new Db_connect();
			$id = $_GET['id'];
			$query = $data->My_query("DELETE FROM products WHERE id = $id");
			if ($query) {
			header("location:?page=products");
			exit();
			}else{
				echo "error on deleting";
			}

		}
}
 ?>
