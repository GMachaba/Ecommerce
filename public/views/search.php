      <div class="row">
        <?php
        $product = new product();
        $product->search_product();
        $count = count($product->search_product());
        if ($count == 0) {?>
             <h4 class="my-3">No matching item
            </h4>
             <?php
         }else{
        foreach ($product->search_product() as $items){
          ?>
             <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item" style="margin-top: 10px;">
          <div class="card h-100">
            <a href="#">
              <img class="card-img-top" src="admin/uploads/<?php echo $items['images'];?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">
                  <?php echo $items['name']; ?>
                </a>
              </h4>
              <p class="card-text">
                Procesor: <?php echo $items['processor']; ?> </br>
                Display: <?php echo $items['Display']; ?></br>
                RAM: <?php echo $items['Ram']; ?></br>
                HDD: <?php echo $items['memory']; ?></br>
                Speed: 2.3ghz</br>
                Condition: New</br>
                Price: Tsh <?php echo $items['price']; ?>
              </p>
            </div>
            <div class="card-footer">
             <form action="?page=cart&id=<?php echo $items['id'];?>" method="post">
              <div>
            <input type="number" class="form-control" name="qa"  value="1" min="1" max="<?php echo $items['quantity']?>"/>
            <input type="hidden" name="hidden_name" value="<?php echo $items['name'];?>"/>
            <input type="hidden" name="hidden_price" value="<?php echo $items['price'];?>"/>
            <input type="submit" name="cart" value="Add to cart" class="btn btn-success col-md-8" style=" margin-top: 5px;"/>
              </div>
            </form>
              </div>
          </div>
        </div>
        <?php
        }
      }
         ?>
      </div>
      <!-- /.row -->
