<style>
 	.form-control{
 		margin-top: 10px;
 	}
</style>
 <div class="panel panel-default" style="margin-top: 10px;">
	<div class="panel-heading" style="text-align: center;"><strong>PRODUCTS:</strong></div>
  <div class="panel-body">
  	<div class="col-md-6">
<?php
$product = new product();
foreach ($product->update_product() as $list) {
?>
 <form action="" method="post" style="padding-top: 5px;" enctype="multipart/form-data">
 	<table>
 		<tr>
 			<th>NAME:</th>
 			<td><input type="text" class="form-control" name="name" placeholder="product name" value="<?php echo $list['name']; ?>" required></td>
 		</tr>
  		<tr>
 			<th>QUANTITY:</th>
 			<td><input type="text" class="form-control" name="quantity" placeholder="quantity" value="<?php echo $list['quantity']; ?>" required></td>
 		</tr>
 		<tr>
 			<th>PRICE(Tsh):</th>
 			<td><input type="text" class="form-control" name="price" placeholder="price" value="<?php echo $list['price']; ?>" required></td>
 		</tr>
 		<tr>
 			<th>MEMORY/HDD:</th>
 			<td><input type="text" class="form-control" name="memory" placeholder="Memory/Hdd" value="<?php echo $list['memory'];?>"></td>
 		</tr>
 		<tr>
 			<th>RAM:</th>
 			<td><input type="text" class="form-control" name="ram" placeholder="RAM" value="<?php echo $list['Ram'];?>"></td>
 		</tr>
  		<tr>
 			<th>PROCESSOR:</th>
 			<td><input type="text" class="form-control" name="processor" placeholder="processor" value="<?php echo $list['processor']; ?>"></td>
 		</tr>
  		<tr>
 			<th>DISPLAY:</th>
 			<td><input type="text" class="form-control" name="display" placeholder="Display" value="<?php echo $list['Display']; ?>"></td>
 		</tr>
 		<tr>
 			<th>CATEGORY:</th>
 			<td><select name="category" class="form-control">
 				<option value="<?php echo $list['category'] ?>">Laptops</option>
 				<option value="<?php echo $list['category'] ?>">Mobile Phones</option>
 				<option value="<?php echo $list['category'] ?>">Games Consoles</option>
 				<option value="<?php echo $list['category'] ?>">Game Accessories</option>
 			</select></td>
 		</tr>
 		<tr>
 			<td><input type="hidden" name="id" value="<?php echo $list['id'];?>"></td>
 		</tr>
 		<tr>
 			<td><button type="submit" class="btn btn-success" name="update">Update</button></td>
 		</tr>
 	</table>  		
 </div>
	 <div class="col-md-6">
		<img src="uploads/<?php echo $list['images'] ?>" alt="">
     <div class="form-group">
      <label>Change Image</label>
      <input type="file" name="update_file" id="update_file">
    </div>
	</div>
</form>
<?php 
}
 ?>

</div>
</div>