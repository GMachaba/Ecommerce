     <!-- Page Heading -->
      <h4 class="my-3">Laptops available in our store now
      </h4>
      <div class="row">
        <?php
        $p = new product();
        foreach ($p->product_category(1) as $laptops){
          ?>
             <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#">
              <img class="card-img-top" src="admin/uploads/<?php echo $laptops['images'];?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                  <?php echo $laptops['name']; ?>
              </h4>
              <p class="card-text">
                Procesor: <?php echo $laptops['processor']; ?> </br>
                Display: <?php echo $laptops['Display']; ?></br>
                RAM: <?php echo $laptops['Ram']; ?></br>
                HDD: <?php echo $laptops['memory']; ?></br>
                Speed: 2.3ghz</br>
                Condition: New</br>
                Price: Tsh <?php echo $laptops['price']; ?>
              </p>
            </div>
            <div class="card-footer">
             <form action="?page=cart&id=<?php echo $laptops['id'];?>" method="post">
              <div>
            <input type="text" class="form-control" name="qa"  value="1"/>
            <input type="hidden" name="hidden_name" value="<?php echo $laptops['name'];?>"/>
            <input type="hidden" name="hidden_price" value="<?php echo $laptops['price'];?>"/>
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