<?php
if (isset($_POST['Input'])) {
	$id_user=$_POST['id_user'];
	$username=$_POST['username'];
	$pasword=$_POST['password'];
	$level=$_POST['level'];

	$input=mysql_query("INSERT INTO user (id_user,username,password,tingkat) VALUES ('$id_user','$username','$password','$level')");
	if ($input) {
		echo "<script>alert('Input User Sukses')</script>";
	}
}
?>
<div class="row">
<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-user"></i>
	      				<h3>Input Pengurus</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
							<div class="tab-content">
								<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" class="form-horizontal" method="post">
									<fieldset>
										<div class="control-group">											
											<label class="control-label" for="firstname">ID User :</label>
											<div class="controls">
												 <input type="text" class="form-control" value="<?php echo autogenerate('id_user','user',4,'US')?>" name="id_user" readonly>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->


										<div class="control-group">											
											<label class="control-label" for="firstname">Username :</label>
											<div class="controls">
												<input type="text" class="span6" name="username">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="firstname">Password :</label>
											<div class="controls">
												<input type="password" class="span6" name="password">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="firstname">Level :</label>
											<div class="controls">
												<select id="select02" name="level" class="form-control" >
                                                       <option>Pilih Salah Satu</option>
                                                       <option value="admin">Admin</option>
                                                       <option value="operator">Operator</option>
                                                    </select>
											</div> <!-- /controls -->				
										</div> <!-- /control-group --> 


										<div class="control-group">		
											<label class="control-label"></label>									
											<button type="submit" class="btn btn-primary" name="Input">Input</button> 
										</div> <!-- /control-group --> 
									</fieldset>
								</form>
								</div>
							</div>
						</div>
					</div> <!-- /widget-content -->
				</div> <!-- /widget -->
</div>