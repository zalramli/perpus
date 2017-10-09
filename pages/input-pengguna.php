<?php
if (isset($_POST['inputmahasiswa'])) {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$jenis_kelamin= $_POST['jenis_kelamin'];
	$program_studi= $_POST['program_studi'];
	$kls=$_POST['kls'];

	$inputdatamahasiswa=mysql_query("INSERT INTO anggota_mahasiswa (nim,nama,jenis_kelamin,program_studi,kelas) VALUES ('$nim','$nama','$jenis_kelamin','$program_studi','$kls')");	
	if ($inputdatamahasiswa) {
		echo "<script>alert('Input Data Sukses')</script>";
	}
}
if (isset($_POST['inputdosen'])) {
	$id_dosen = $_POST['id_dosen'];
	$nip = $_POST['nip'];
	$namadosen = $_POST['namadosen'];
	$jk=$_POST['jk'];
	$program_studi=$_POST['program_studi'];

	$inputdatadosen=mysql_query("INSERT INTO anggota_dosen (id_dosen,nip,nama,jenis_kelamin,program_studi) VALUES ('$id_dosen','$nip','$namadosen','$jk','$program_studi')");
	if ($inputdatadosen) {
		echo "<script>alert('Input Data Sukses')</script>";
	}
}

?>
<div class="row">
	      	
	      	<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-book"></i>
	      				<h3>Input Data Pengguna</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						
						
						<div class="tabbable">
						<ul class="nav nav-tabs">
						  <li>
						    <a href="#formcontrols" data-toggle="tab">Mahasiswa</a>
						  </li>
						  <li  class="active"><a href="#jscontrols" data-toggle="tab">Dosen</a></li>
						</ul>
						
						<br>
						
							<div class="tab-content">
								<div class="tab-pane" id="formcontrols">
								<form id="edit-profile" class="form-horizontal" method="POST">
									<fieldset>
										<div class="control-group">											
											<label class="control-label" for="firstname">NIM</label>
											<div class="controls">
												<input type="text" class="span6" id="nim" name="nim">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										<div class="control-group">											
											<label class="control-label" for="firstname">Nama</label>
											<div class="controls">
												<input type="text" class="span6" id="nama" name="nama">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->										
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Jenis Kelamin</label>
											<div class="controls">
												<select name="jenis_kelamin">
													<option></option>
													<option value="L">Laki - Laki</option>
													<option value="P">Perempuan</option>
												</select>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="firstname">Program Studi</label>
											<div class="controls">
												<select id="program_studi" name="program_studi">
													<option></option>
													<option value="Teknik Geodesi">Teknik Geodesi</option>
													<option value="Teknik Otomotif">Teknik Otomotif</option>
												</select>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="firstname">Kelas / Semester</label>
											<div class="controls">
												<input type="text" class="span6" id="kls" name="kls">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										
										<div class="form-actions">
											<button type="submit" class="btn btn-primary" name="inputmahasiswa">Input</button>
										</div> <!-- /form-actions -->
									</fieldset>
								</form>
								</div>
								
								<div class="tab-pane active" id="jscontrols">
									<form id="edit-profile" class="form-horizontal" method="POST">
										<fieldset>          
										
										<div class="control-group">											
											<label class="control-label" for="firstname">ID</label>
											<div class="controls">
												<input type="text" class="span6" id="id_dosen" name="id_dosen" value="<?php echo autogenerate('id_dosen','anggota_dosen',4,'DSN')?>" readonly="">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="firstname">NIP</label>
											<div class="controls">
												<input type="text" class="span6" id="nip" name="nip">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="firstname">Nama</label>
											<div class="controls">
												<input type="text" class="span6" id="namadosen" name="namadosen">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Jenis Kelamin</label>
											<div class="controls">
												<select name="jk">
													<option></option>
													<option value="L">Laki - Laki</option>
													<option value="P">Perempuan</option>
												</select>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="firstname">Program Studi</label>
											<div class="controls">
												<select id="program_studi" name="program_studi">
													<option></option>
													<option value="Teknik Geodesi">Teknik Geodesi</option>
													<option value="Teknik Otomotif">Teknik Otomotif</option>
												</select>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="form-actions">
											<button type="submit" class="btn btn-primary" name="inputdosen">Input</button>
										</div> <!-- /form-actions -->                    
										</fieldset>
									</form>
								</div>
								
							</div>
						  
						  
						</div>
						
						
						
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
	      		
		    </div> <!-- /span8 -->
	      	
	      	
	      	
	      	
	      </div> <!-- /row -->