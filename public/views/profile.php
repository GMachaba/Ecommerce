<nav aria-label="breadcrumb" role="navigation" style="margin-top: 25px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current><a href="index.php?page=profile">My profile</a></li>
    <li class="breadcrumb-item"><a href="index.php?page=history">History</a></li>
  </ol>
</nav>
<div class="panel panel-default" style="margin-top: 10px;">
 <div class="panel-heading" style="text-align: center;"><strong>MY PROFILE:</strong></div>
 <div class="panel-body">
<div class="col-md-8">
<table>
<?php
foreach ($session->profile() as $r) {
?>
<tr>
    <th>FIRST NAME:</th>
    <td><strong><?php echo $r['first']; ?></strong></td>
</tr>
<tr>
    <th>LAST NAME:</th>
    <td><strong><?php echo $r['last']; ?></strong></td>
</tr>
<tr>
    <th>PHONE NUMBER:</th>
    <td><strong><?php echo $r['phone']; ?></strong></td>
</tr>
<tr>
    <th>EMAIL:</th>
    <td><strong><?php echo $r['email']; ?></strong></td>
</tr>
<?php
}
   ?>
<!-- Modal Registration -->
<tr>
  <th>Password:</th>
  <td><strong><label data-toggle="modal" data-target="#myModal3" style="text-color: blue;">Change password</label></strong></td>
</tr>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel">Fll inputs to change Password</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body">
  <?php
  $user = new user();
  $user->change_password();
   ?>

<form action="index.php?page=profile" method="post" role="form">
  <!-- <div class="form-group">
  <label for="password">Current Password</label>
  <input type="password" class="form-control" name="cpassword" placeholder="Enter current Password" required>
  </div> -->
<div class="form-group">
<label for="password">New Password</label>
<input type="password" class="form-control" name="epassword" placeholder="Enter new Password" required>
</div>
<div class="form-group">
<label for="password">Confirm new Password</label>
<input type="password" class="form-control" name="cnpassword" placeholder="Confirm new Password" required>
</div>
<input type="submit" class="btn btn-default" name="change" value="change"></input>
</form>
</div>
</div>
</div>
</div>
</div>
</table>
</div>
</div>
</div>
