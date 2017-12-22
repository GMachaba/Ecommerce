<div class="row">
<button align="center" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="margin-top: 10px; margin-left: 5px;">
  Add Product
</button>
<?php
if (isset($_POST['submit'])){
  $product = new product();
  $product->add_product();
}
?>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Enter Products informations</h4>
      </div>
      <div class="modal-body">
            <form action="index.php?page=Products" method="post" role="form" enctype="multipart/form-data">
            <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" placeholder="product name" required>
          </div>
            <div class="form-group">
            <label for="last">Quantity:</label>
            <input type="number" class="form-control" name="quantity" placeholder="Quantity" min=1>
          </div>
            <div class="form-group">
            <label for="price">Price(Tsh):</label>
            <input type="text" class="form-control" name="price" placeholder="price" required>
          </div>
            <div class="form-group">
            <label for="price">Memory/HDD:</label>
            <input type="text" class="form-control" name="memory" placeholder="memory">
            </div>
              <div class="form-group">
            <label for="price">RAM:</label>
            <input type="text" class="form-control" name="ram" placeholder="ram">
          </div>
          <div class="form-group">
            <label for="price">Processor:</label>
            <input type="text" class="form-control" name="processor" placeholder="processor">
          </div>
          <div class="form-group">
            <label for="price">Display:</label>
            <input type="text" class="form-control" name="display" placeholder="display">
          </div>
            <div class="form-group">
            <label for="category">category:</label>
            <select class="form-control" name="category">
              <option value="0"></option>
              <?php
              $product = new product();
               foreach ($product->call_category() as $list){
                   echo '<option value="'.$list['id'].'">'.$list['name'].'</option>';
                    }
             ?>
            </select>
          </div>
                 <div class="form-group">
                  <label>Choose image</label>
                  <input type="file" name="file" id="file">
                </div>
            <input type="submit" class="btn btn-default" name="submit" value="submit"></input>
    </form>
      </div>
    </div>
  </div>
</div>
        <h1 class="page-header">Total Products we have</h1>
      </div>
    </div><!--/.row-->
			<table class="table table-bordered"  style="margin-top: 10px; margin-left: 5px;">
  <thead>
    <tr>
      <th>Name</th>
      <th>Quantity</th>
      <th>Price(Tsh)</th>
      <th>Category</th>
      <th>Images</th>
      <th>Memory</th>
      <th>RAM</th>
      <th>Processor</th>
      <th>Display</th>
      <th>status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  				<?php
				$q = new product();
				$id =$list['id'];
				foreach ($q->all_products() as $list) {
          if ($list['quantity']==0) {
            $list['status']="out of stock";
          }else{
            $list['status']="Available";
          }
			echo '<tr>
					<td>'.$list['name'].'</td>
					<td>'.$list['quantity'].'</td>
					<td>'.$list['price'].'</td>
					<td>'.$list['category'].'</td>';
      ?>
          <td>
            <img src="uploads/<?php echo $list['images'];?>" style="width:50px;height:30px;" alt="No Image" />
          </td>
          <td><?php echo $list['memory'];?></td>
          <td><?php echo $list['Ram'];?></td>
          <td><?php echo $list['processor'];?></td>
          <td><?php echo $list['Display'];?></td>
          <td><?php echo $list['status'];?></td>
          <td>
            <a href="?page=edit&id=<?php echo $list['id'];?>" class="btn btn-info">
              <span class=" glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </a>
            <a href="?page=delete&id=<?php echo $list['id'];?>" class="btn btn-danger">
              <span class=" glyphicon glyphicon-trash" aria-hidden="true"></span>
            </a>
          </td>
				</tr>
      <?php
				$id++;
				}
				?>
  </tbody>
</table>
<nav aria-label="Page navigation" align="right">
  <ul class="pagination">
    <li>
      <?php
      if(!isset($_GET['offset']) || $_GET['offset'] == 0){
        $previous = 0;
      }else{
        $previous = $_GET['offset'] - 10;
      }
      ?>
      <a href="index.php?page=Products&offset=<?php echo $previous;?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php
        $q = new product();
        $total = (int)count($q->all_products())/10;
        $counter = 0;
        while ($counter <= $total) {
          ?>
          <li><a href="index.php?page=Products&offset=<?php echo $counter * 10;?>"><?php echo $counter + 1;?></a></li>
        <?php
        $counter++;
      }
    ?>
    <li>
       <a href="index.php?page=Products&offset=<?php echo $_GET['offset'] + 10;?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</div>
