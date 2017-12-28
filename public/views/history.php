<nav aria-label="breadcrumb" role="navigation" style="margin-top: 25px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current><a href="index.php?page=profile">My profile</a></li>
    <li class="breadcrumb-item"><a href="index.php?page=history">History</a></li>
  </ol>
</nav>
<div class="panel panel-default" style="margin-top: 10px;">
 <div class="panel-heading" style="text-align: center;"><strong>My Shopping History</strong></div>
 <div class="panel-body">
<div>
  <table class="table table-bordered">
      <thead>
        <tr>
          <th>Name</th>
          <th>Quantity</th>
          <th>Amount</th>
          <th>Payment Method</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $h = new cart;
        foreach ($h->session_history() as $x) {?>
          <tr>
          <td><?php echo $x['name'];?></td>
          <td><?php echo $x['quantity']; ?></td>
          <td><?php echo $x['price']; ?></td>
          <td><?php echo $x['payment_method']; ?></td>
          </tr>
          <?php
         }
         ?>
      </tbody>
    </table>
</div>
</div>
</div>
