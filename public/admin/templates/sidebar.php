	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<!-- Dashboard -->
			<li class="<?php if (Db_connect::admin_pager() =='dashboard') {
				echo 'active';
			}?>"><a href="index.php?page=dashboard"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Dashboard</a></li>
			<!-- users -->
			<li class="<?php if (Db_connect::admin_pager() =='Users') {
				echo 'active';
			}?>"><a href="?page=Users"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Users</a></li>
			<!-- product -->
			<li class="<?php if (Db_connect::admin_pager() =='Products') {
				echo 'active';
			}?>"><a href="?page=Products"><svg class="glyph stroked basket "><use xlink:href="#stroked-basket"/></svg> Products</a></li>
			<!-- Settings -->
			<li class="<?php if (Db_connect::admin_pager() =='Settings') {
				echo 'active';
			}?>"><a href="?page=Settings"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"/></svg> Settings</a></li>
			<!-- icons -->
			<li class="<?php if (Db_connect::admin_pager() =='icons') {
				echo 'active';
			}?>"><a href="?page=icons"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Icons</a></li>
	</div><!--/.sidebar-->
