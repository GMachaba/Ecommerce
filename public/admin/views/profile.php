<div class="panel panel-default" style="margin-top: 10px;">
	<div class="panel-heading" style="text-align: center;"><strong><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>User Profile:</strong></div>
  <div class="panel-body">
        <fieldset>
    <table class="col-md-6">
      <?php
      foreach ($session->profile() as $r) {
      ?>
        <tr>
            <th>FIRST NAME:</th>
            <td><strong><?php echo $r['first']; ?></strong></td>
        </tr>
        <tr>
            <th>LAST NAME:</th>
            <td><strong><?php echo $r['last']; ?></strong></td>
        </tr>
        <tr>
            <th>PHONE NUMBER:</th>
            <td><strong><?php echo $r['phone']; ?></strong></td>
        </tr>
        <tr>
            <th>EMAIL:</th>
            <td><strong><?php echo $r['email']; ?></strong></td>
        </tr>
        <?php
      }
           ?>
    </table>
  </fieldset>
  </div>
</div>
