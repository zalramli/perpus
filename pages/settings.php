<?php
$query_halaman_depan= mysql_query("SELECT * FROM catatan_dinamis WHERE id='2'");
$fetch_haldep = mysql_fetch_array($query_halaman_depan);
$query_comments= mysql_query("SELECT * FROM catatan_dinamis WHERE id='1'");
$fetch_comments = mysql_fetch_array($query_comments);
if (isset($_POST['save_haldep'])) {
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	$update = mysql_query("UPDATE catatan_dinamis SET judul='$judul', isi='$isi' WHERE id='2'");
	if ($update) {
		echo "<script>alert('Sukses')</script>";
	} else {
		echo "<script>alert('Gagal')</script>";
	}
}
if (isset($_POST['save_comments'])) {
	$isi_komentar = $_POST['isi_komentar'];
	$update = mysql_query("UPDATE catatan_dinamis SET isi='$isi_komentar' WHERE id='1'");
	if ($update) {
		echo "<script>alert('Sukses')</script>";
	} else {
		echo "<script>alert('Gagal')</script>";
	}
}
?>
<div class="row">
<div class="span12">      		
	      		
	      		<div class="widget">
	      			
	      			<div class="widget-header">
	      				<i class="icon-comments"></i>
	      				<h3>Pengaturan Isi Halaman Depan</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
				
						
							<div class="tab-content">
								<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" class="form-horizontal" method="post">
									<fieldset>
										<div class="control-group">											
											<label class="control-label" for="firstname">Judul</label>
											<div class="controls">
												<input type="text" name="judul" class="form-control" value="<?php echo $fetch_haldep['judul'] ; ?>">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										<div class="control-group">											
											<label class="control-label" for="firstname">Isi</label>
											<div class="controls">
												<textarea name="isi" style="width:450px;height:100px;"><?php echo $fetch_haldep['isi'] ?></textarea>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										<div class="control-group">		
											<label class="control-label"></label>									
											<button type="submit" class="btn btn-primary" name="save_haldep">Save</button> 
										</div> <!-- /control-group --> 
									</fieldset>
								</form>
								</div>
							</div>
						</div>
					</div>
					<div class="widget">
	      			
	      			<div class="widget-header">
	      				<i class="icon-comments"></i>
	      				<h3>Pengaturan Komentar</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
				
						
							<div class="tab-content">
								<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" class="form-horizontal" method="post">
									<fieldset>
										<div class="control-group">											
											<label class="control-label" for="firstname">Isi</label>
											<div class="controls">
												<textarea name="isi_komentar" style="width:450px;height:100px;"><?php echo $fetch_comments['isi'] ?></textarea>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										<div class="control-group">		
											<label class="control-label"></label>									
											<button type="submit" class="btn btn-primary" name="save_comments">Save</button> 
										</div> <!-- /control-group --> 
									</fieldset>
								</form>
								</div>
							</div>
						</div>
					</div>
</div>


</div>