     <!-- Page Heading -->
      <h4 class="my-3">Laptops available in our store now
      </h4>
      <div class="row">
        <?php
        $k = new product();
        foreach ($k->product_category(2) as $mobiles){
          ?>
             <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#">
              <img class="card-img-top" src="admin/uploads/<?php echo $mobiles['images'];?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">
                  <?php echo $mobiles['name']; ?>
                </a>
              </h4>
              <p class="card-text">
                Procesor: <?php echo $mobiles['processor']; ?> </br>
                Display: <?php echo $mobiles['Display']; ?></br>
                RAM: <?php echo $mobiles['Ram']; ?></br>
                HDD: <?php echo $mobiles['memory']; ?></br>
                Speed: 2.3ghz</br>
                Condition: New</br>
                Price: Tsh <?php echo $mobiles['price']; ?>
              </p>
            </div>
            <div class="card-footer">
             <form action="?page=cart&id=<?php echo $mobiles['id'];?>" method="post">
              <div>
            <input type="number" class="form-control" name="qa"  value="1" min="1" max="<?php echo $mobiles['quantity']?>"/>
            <input type="hidden" name="hidden_name" value="<?php echo $mobiles['name'];?>"/>
            <input type="hidden" name="hidden_price" value="<?php echo $mobiles['price'];?>"/>
            <input type="submit" name="cart" value="Add to cart" class="btn btn-success col-md-8" style=" margin-top: 5px;"/>
              </div>
            </form>
              </div>
          </div>
        </div>
        <?php
        }
         ?>
      </div>
      <!-- /.row -->
