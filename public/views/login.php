<!-- /heading -->
<div class="my-3">
      <h1 ><i>Login/Register</i>
      </h1>
      <p>Hello welcome!! Please <b>Login</b> or <b>Register</b> inorder to Buy products in our site.</p>
</div>
<!-- Nav tabs -->
<ul class="nav nav-tabs col-md-8" role="tablist" style="margin-top:20px;">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#login" role="tab">LOGIN</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#register" role="tab">REGISTER</a>
  </li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
	<?php
  //for login ....
	if (isset($_POST['login'])) {
    $session->login();
    if ($session->is_logged()) {
      if(isset($_GET['next'])){
        header("location: ".$_GET['next']);
      }else{
        header("location: index.php");
      }
    }
	}
	 ?>
  <div class="tab-pane active" id="login" role="tabpanel">
	     <form action="" method="post" role="form" class="col-md-4">
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox" name="c-checkbox"> Remember me
		    </label>
		  </div>
      <div><a href="#">Forgot password?</a></div>
            <input type="submit" class="btn btn-default" name="login" value="login"></input>
    </form>

  </div>
  <div class="tab-pane" id="register" role="tabpanel">
    <?php
    //Registration form..
      $register = new user();
      $register->register_user();
?>
    <form action="index.php?page=login" method="post" role="form" class="col-md-8">
            <div class="form-group">
            <label for="first">first name:</label>
            <input type="text" class="form-control" name="first" placeholder="Enter your first name" required>
          </div>
            <div class="form-group">
            <label for="last">Last name:</label>
            <input type="text" class="form-control" name="last" placeholder="Enter your last name" required>
          </div>
            <div class="form-group">
            <label for="phone">Phone number:</label>
            <input type="text" class="form-control" name="phone" placeholder="Enter your phone number" required>
          </div>
          <div class="form-group">
            <label for="email2">Email address</label>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="password2">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
          </div>
            <input type="submit" class="btn btn-default" name="submit" value="submit"></input>
    </form>
  </div>
  </div>
