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
  <?php
  if ($session->is_logged()) {
  foreach ($cart->session_product() as $h) {
     echo $h['item_name'];
  }
}
   ?>
</div>
</div>
</div>
