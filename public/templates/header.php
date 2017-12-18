<?php
require_once ('../includes/database.php');
require_once ('../includes/session.php');
require_once ('../includes/users.php');
require_once ('../includes/products.php');
require_once ('../includes/cart.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo Db_connect::pages();?></title>
    <?php include ('css/css.php');?>
</head>
<body>
    <!-- Navigation -->
    <?php include ('templates/navigation.php');?>
         <div class="container">
