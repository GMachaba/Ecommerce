<?php
#database connections...
$dbc=mysqli_connect('localhost', 'root', '789807', 'admin');	

#loading data....
$q="SELECT * FROM pages WHERE id=1";
$r=mysqli_query($dbc, $q);
$page= mysqli_fetch_assoc($r);

#loading pages...
if (isset($_GET['page'])) {
	$titles=$_GET['page'];
}else{
	$titles="home";
}

#for admin pages
#reading views..
if (isset($_GET['page'])) {
	$pager=$_GET['page'];
}else{
	$pager="dashboard";
}
#for admin pages
#reading views..
if (isset($_GET['page'])) {
	$pager=$_GET['page'];
}else{
	$pager="dashboard";
}
?>