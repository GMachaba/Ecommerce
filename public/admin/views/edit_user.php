 <style>
 	.form-control{
 		margin-top: 10px;
 	}
 </style>
 <div class="panel panel-default" style="margin-top: 10px;">
	<div class="panel-heading" style="text-align: center;"><strong>PRODUCTS:</strong></div>
  <div class="panel-body">
  	 <fieldset>
    <form action="" method="post" role="form">
    	<table class="col-md-6">
        <?php 
        $edit = new user();
        foreach ($edit->edit_user() as $users) { 
          ?>
    		<tr>
    			<th>FIRST NAME:</th>
    			<td><input type="text" class="form-control" name="first" value="<?php echo $users['first'] ?>" placeholder="First  Name" required></td>
    		</tr>
    		<tr>
    			<th>LAST NAME:</th>
    			<td><input type="text" class="form-control" name="last" value="<?php echo $users['last'] ?>" placeholder="Last  Name" required></td>
    		</tr>
    		<tr>
    			<th>PHONE NUMBER:</th>
    			<td><input type="text" class="form-control" name="phone" value="<?php echo $users['phone'] ?>" placeholder="phone" required></td>
    		</tr>
    		<tr>
    			<th>EMAIL:</th>
    			<td><input type="text" class="form-control" name="email" value="<?php echo $users['email'] ?>" placeholder="Email" required></td>
    		</tr>
    		<tr>
    			<th>PASSWORD:</th>
    			<td><input type="text" class="form-control" name="password" value="<?php //echo $users['password'] ?>" placeholder="password"></td>
    		</tr>
    		<tr>
    			<td><input type="hidden" name="id" value="<?php echo  $users['id']; ?>">
    			</td>
    		</tr>
    		<tr>
    			<th></th>
    			<td><button type="submit" class="btn btn-info" style="margin-top: 10px;" name="saved">SAVE</button></td>
    		</tr>
        <?php
        }
         ?>
    	</table>
    </form>
    </fieldset>
  	</div>
 </div>