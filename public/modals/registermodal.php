                <!-- Modal Registration -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2">
          Register
</button>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Fill your info to be registered</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
     <div class="modal-body">
<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['first']) && !empty($_POST['last']) &&!empty($_POST['phone']) &&!empty($_POST['email']) &&!empty($_POST['password'])) {
    $first=$_POST['first'];
    $last=$_POST['last'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=SHA1($_POST['password']);
    $q="INSERT INTO users(first,last,phone,email,password) VALUES('$first','$last','$phone','$email','$password')";
    $r=mysqli_query($dbc,$q);
        }else{
    echo "please enter all informations to be registered";
    }
}
?>
    <form action="index.php?page=home" method="post" role="form">
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
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
          </div>
            <input type="submit" class="btn btn-default" name="submit" value="submit"></input>
    </form>


     </div>
 </div>
</div>
</div>