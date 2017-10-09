<?php
$id=$_GET['UsEr'];
$query = mysql_query("SELECT * FROM user WHERE id_user='$id'");
$fetchdata=mysql_fetch_array($query);
if (isset($_POST['kirim'])) {	
}
if (isset($_POST['kirim'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$level=$_POST['level'];

	$update = mysql_query("UPDATE user SET username='$username', password='$password', level='$level' WHERE id_user='$id'");
	if ($update) {
		echo "<script>alert('Edit Sukses')</script>";
	}
}
?>
<div class="row">
<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-book"></i>
	      				<h3>Edit Data Pengurus</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
				
						
							<div class="tab-content">
								<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" class="form-horizontal" method="post">
									<fieldset>
										<div class="control-group">											
											<label class="control-label" for="firstname">ID User</label>
											<div class="controls">
												<input type="text" class="span6" name="id_user" value="<?php echo $fetchdata['0']; ?>" readonly="">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->


										<div class="control-group">											
											<label class="control-label" for="firstname">Username</label>
											<div class="controls">
												<input type="text" class="span6" name="username" value="<?php echo $fetchdata['1']; ?>">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="firstname">Password</label>
											<div class="controls">
												<input type="text" class="span6" name="password" value="<?php echo $fetchdata['2']; ?>" >
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="firstname">Level</label>
											<div class="controls">
												<select name="level">
												<option value="admin" <?php if ($hasil['level']=="admin"){echo "selected";} ?> >Admin</option>
                                                <option value="operator" <?php if ($hasil['level']=="operator"){echo "selected";} ?>>Operator</option>
                                                </select>
											</div> <!-- /controls -->				
										</div> <!-- /control-group --> 


										<div class="control-group">		
											<label class="control-label"></label>									
											<button type="submit" class="btn btn-primary" name="kirim">Save</button> 
										</div> <!-- /control-group --> 
									</fieldset>
								</form>
								</div>
							</div>
						</div>
					</div> <!-- /widget-content -->
				</div> <!-- /widget -->
</div>