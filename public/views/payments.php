<h4 class="my-3">
	Choose payments method:
</h4>
<div class="row">
  <div class="form-group">
<?php
 $cart->cart_finalise();
   ?>
  <form action="?page=payments" method="post">
  <div class="radio">
    <label>
      <input type="radio" name="payment" id="mpesa" value="M-pesa" checked><img class="img-fluid" src="images/mpesa.png" style="height: 50px; width: 50px;" alt="">
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="payment" id="tigopesa" value="Tigo pesa"><img class="img-fluid" src="images/tigo.png" style="height: 50px; width: 50px;" alt="">
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="payment" id="visa" value="Visa"><img class="img-fluid" src="images/visa.png" style="height: 50px; width: 50px;" alt="">
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="payment" id="paypall" value="Paypall"><img class="img-fluid" src="images/paypall.jpg" style="height: 50px; width: 50px;" alt="">
    </label>
  </div>
  <input type="submit" class="btn btn-success" name="final" value="Finalise your Market"></input>
  </form>
</div>
</div>