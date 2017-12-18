<?php
require_once ('../../includes/database.php');
require_once ('../../includes/session.php');
require_once ('../../includes/users.php');
require_once ('../../includes/products.php');
 if (!$session->is_logged()) {
  header("Location: Login.php");
 }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo Db_connect::admin_pager(); ?></title>
<?php include ('config/css.php');?>
</head>
<body>
<?php
include ('templates/navigation.php');
include ('templates/sidebar.php');
?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
