<?php
$id=$_GET['id'];
$query = mysql_query("SELECT * FROM anggota_dosen WHERE id_dosen='$id'");
$fetchdata=mysql_fetch_array($query);
if (isset($_POST['kirim'])) {
	$nip = $_POST['nip'];
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$program_studi = $_POST['program_studi'];

	$update = mysql_query("UPDATE anggota_dosen SET nip='$nip',nama='$nama',jenis_kelamin='$jk',program_studi='$program_studi'WHERE id_dosen='$id'");
	if ($update) {
		echo "<script>alert('Edit Data Dosen Sukses')</script>";
	}
}
?>
<div class="row">
<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-book"></i>
	      				<h3>Edit Data Dosen</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
				
						
							<div class="tab-content">
								<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" class="form-horizontal" method="post">
									<fieldset>
										<div class="control-group">											
											<label class="control-label" for="firstname">NIP</label>
											<div class="controls">
												<input type="text" class="span6" name="nip" value="<?php echo $fetchdata['1']; ?>">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->


										<div class="control-group">											
											<label class="control-label" for="firstname">Nama</label>
											<div class="controls">
												<input type="text" class="span6" name="nama" value="<?php echo $fetchdata['2']; ?>">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="firstname">Jenis Kelamin</label>
											<div class="controls">
												<select name="jk">
												<option value="L" <?php if ($fetchdata['jenis_kelamin']=="L"){echo "selected";} ?> >Laki - Laki</option>
                                                <option value="P" <?php if ($fetchdata['jenis_kelamin']=="P"){echo "selected";} ?>>Perempuan</option>
                                                </select>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="firstname">Program Studi</label>
											<div class="controls">
												<select name="program_studi">
												<option value="Teknik Geodesi" <?php if ($fetchdata['program_studi']=="Teknik Geodesi"){echo "selected";} ?> >Teknik Geodesi</option>
                                                <option value="Teknik Otomotif" <?php if ($fetchdata['program_studi']=="Teknik Otomotif"){echo "selected";} ?>>Teknik Otomotif</option>
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