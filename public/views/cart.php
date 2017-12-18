<?php
$cart->add_items();
 ?>
<h4 class="my-3">
	Products that you selected
</h4>
  <div align=right>
    <?php
    $cart->clear_all();
     ?>
    <form action="?page=cart" method="post" role="form">
  <input type="submit" name="clear" class="btn btn-danger" value="Empty Cart"></input>
  </form>
  </div>
<div class="row">
  <table class="table table-bordered col-md-6"  style="margin-top: 10px; margin-left: 5px;">
    <thead>
    	<tr>
      <th>Name</th>
      <th>Quantity</th>
      <th>price(Tsh)</th>
      <th>Action</th>
    	</tr>
    </thead>
    <tbody>
      <?php
      $total=0;
      if (!empty($_SESSION['cart_items'])) {

        foreach ($_SESSION['cart_items'] as $value) {
          ?>
        </tr>
          <td><?php echo $value['item_name']; ?></td>
          <td><?php echo $value['item_quantity']; ?></td>
          <td><?php echo $value['item_price']; ?></td>
          <td>
          <a href="?page=remove&id=<?php echo $value['item_id']; ?>">
            Remove Item
          </a>
          </td>
          </tr>
          <?php
          $total+=($value['item_quantity'] * $value['item_price']);
        }
      }
       ?>
      <tr>
      <td colspan="5" align=right><strong>Total:</strong> <?php echo "Tsh. ".number_format($total,2); ?></td>
      </tr>
    </tbody>
  </table>
</div>
  <div align=right>
  <a  href="<?php
      if (!isset($_SESSION['username'])) {
        echo "?page=login";
      }elseif (isset($_SESSION['username']) && empty($_SESSION['cart_items'])) {
        echo "?page=cart";
      }elseif (isset($_SESSION['username']) && !empty($_SESSION['cart_items'])) {
        echo "?page=payments";
      }
   ?>&next=index.php?page=payments" class="btn btn-success">continue to payments></a>
  </div>
