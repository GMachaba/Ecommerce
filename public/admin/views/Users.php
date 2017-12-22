			                <!-- Modal Registration -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2" style="padding-top: 20px;
margin-top: 10px;">
         <span class=" glyphicon glyphicon-user" aria-hidden="true"></span>
</button>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Fill the Form to Register a New User</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
     <div class="modal-body">
<?php
$register = new user();
$register->register_user();
?>
    <form action="index.php?page=users" method="post" role="form">
            <div class="form-group">
            <label for="first">first name:</label>
            <input type="text" class="form-control" name="first" placeholder="Enter your first name" required>
          </div>
            <div class="form-group">
            <label for="last">Last name:</label>
            <input type="text" class="form-control" name="last" placeholder="Enter your last name" required>
          </div>
            <div class="form-group">
            <label for="phone">Phone number:</label>
            <input type="text" class="form-control" name="phone" placeholder="Enter your phone number" required>
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
          </div>
            <input type="submit" class="btn btn-default" name="submit" value="submit"></input>
    </form>
     </div>
 </div>
</div>
</div>
      	<h1 class="page-header">Registered users in our system:</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<table class="table table-bordered" style="margin-left: 5px;">
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>phone number</th>
      <th>email</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  				<?php
				$q = new user();
				$id =$list['id']=1;
				foreach($q->all_users() as $list) {
			echo '<tr>
					<td>'.$list['first'].'</td>
					<td>'.$list['last'].'</td>
					<td>'.$list['phone']. '</td>
					<td>'.$list['email'].'</td>';
          ?>
        <td>
            <a href="?page=edit_user&id=<?php echo $list['id'];?>" class="btn btn-info">
              <span class=" glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </a>
            <a href="?page=delete_user&id=<?php echo $list['id'] ?>" class="btn btn-danger">
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
      <a href="index.php?page=Users&offset=<?php echo $previous;?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php
        $q = new user();
        $total = (int)count($q->all_users())/10;
        $counter = 0;
        while($counter <= $total){
          ?>
            <li><a href="index.php?page=Users&offset=<?php echo $counter * 10;?>"><?php echo $counter + 1;?></a></li>
          <?php
          $counter++;
        }
      ?>
    <li>
      <a href="index.php?page=Users&offset=<?php echo $_GET['offset'] + 10;?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
				</div>
