        <!-- Page Heading -->
      <h4 class="my-3">Smartphones available in our store now
      </h4>
      <div class="row">
        <?php
        $games = new product();
        foreach ($games->product_category(3) as $list) {
          ?>
        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="admin/uploads/<?php echo  $list['images'];?>" alt="">
            <p><?php echo $list['name'];?></p>
          </a>
          </div>
    <?php
        }
         ?>

             </div>
