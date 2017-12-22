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
<tr>
    <th>CHANGE PASSWORD:</th>
    <td><a href="#"><strong>Change password</strong></a></td>
</tr>
<?php
}
   ?>
</table>
</div>
</div>
</div>
