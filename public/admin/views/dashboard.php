				<h1 class="page-header">Dashboard</h1>
			</div>
		</div>
				<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo product::count_all();?></div>
							<div class="text-muted">Total products</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked basket "><use xlink:href="#stroked-basket"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo count(product::product_order()); ?></div>
							<div class="text-muted">Products orderd</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo user::count_all();?></div>
							<div class="text-muted">New Users</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">25.2k</div>
							<div class="text-muted">Musics</div>
						</div>
					</div>
				</div>
			</div>
<div class="col-md-8">
<div class="panel panel-default">
		<div class="panel-heading"><svg class="glyph stroked basket "><use xlink:href="#stroked-basket"/></svg> Products Ordered:</div>
		<div class="panel-body">
		<table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>Id</th>
		        <th>Name</th>
		        <th>Quantity</th>
		        <th>Amount</th>
		        <th>Payment Method</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<?php
		    	$d = new product;
		    	foreach ($d->product_order() as $x) {?>
		    	 	<tr>
		    	 	<td><?php echo $x['id']; ?></td>
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
</div>
</div>
</div>
