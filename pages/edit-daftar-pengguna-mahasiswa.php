<?php
$id=$_GET['nim'];
$query = mysql_query("SELECT * FROM anggota_mahasiswa WHERE nim='$id'");
$fetchdata=mysql_fetch_array($query);
if (isset($_POST['kirim'])) {
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$program_studi = $_POST ['program_studi'];
	$kelas = $_POST ['kelas'];

	$update_pengguna_mahasiswa=mysql_query("UPDATE anggota_mahasiswa SET nama='$nama',jenis_kelamin='$jenis_kelamin',program_studi='$program_studi',kelas='$kelas' WHERE nim='$id'");
	if ($update_pengguna_mahasiswa) {
		echo "<script>alert('Berhasil Di Update')</script>";
	}
}
?>
<div class="row">
<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-book"></i>
	      				<h3>Edit Data Mahasiswa</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
				
						
							<div class="tab-content">
								<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" class="form-horizontal" method="post">
									<fieldset>
										<div class="control-group">											
											<label class="control-label" for="firstname">NIM</label>
											<div class="controls">
												<input type="text" class="span6" name="nim" value="<?php echo $fetchdata['0']; ?>" readonly="">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->


										<div class="control-group">											
											<label class="control-label" for="firstname">Nama</label>
											<div class="controls">
												<input type="text" class="span6" name="nama" value="<?php echo $fetchdata['1']; ?>">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="firstname">Jenis Kelamin</label>
											<div class="controls">
												<select name="jenis_kelamin">
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
											<label class="control-label" for="firstname">Kelas</label>
											<div class="controls">
												<input type="text" class="span6" name="kelas" value="<?php echo $fetchdata['4']; ?>">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->


										<div class="control-group">		
											<label class="control-label"></label>									
											<button type="submit" class="btn btn-primary" name="kirim">Update</button> 
										</div> <!-- /control-group --> 
									</fieldset>
								</form>
								</div>
							</div>
						</div>
					</div> <!-- /widget-content -->
				</div> <!-- /widget -->
</div>