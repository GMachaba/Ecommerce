<?php
#database connnection..
require_once ('../../includes/database.php');
require_once ('../../includes/session.php');
require_once ('../../includes/users.php');
require_once ('../../includes/products.php');
if (isset($_POST['submit'])) {
	$session->login();
	if ($session->is_logged()) {
	header("Location: index.php?page=dashboard");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin login</title>
<?php include ('config/css.php');?>
</head>
<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					<form action="" method="post" role="form">
									  <div class="form-group">
									    <label for="email">Email address</label>
									    <input type="email" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off">
									  </div>

									  <div class="form-group">
									    <label for="password">Password</label>
									    <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off">
									  </div>
								<!--
									  <div class="checkbox">
									    <label>
									      <input type="checkbox"> Check me out
									    </label>
									  </div>
								-->
									  <button type="submit" class="btn btn-default" name="submit">Login</button>
									</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
<?php include ('config/js.php');?>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>