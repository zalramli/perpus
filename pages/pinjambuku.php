<?php
include '../config/connect.php';
?>
<div class="row">
	      	<div class="span12">

	      		<div class="widget ">

	      			<div class="widget-header">
	      				<i class="icon-book"></i>
	      				<h3>Peminjaman Buku</h3>
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
								<form id="edit-profile" class="form-horizontal" action="?pages=pinjam-mhs-sukses" method="POST">
									<fieldset>

										<input type="hidden" class="form-control" value="<?php echo autogenerate('id','tabel_peminjaman',6,'Perp.AKNL_')?>" name="id_pinjam" readonly>

										<div class="control-group">
											<label class="control-label" for="firstname">Tanggal Pinjam</label>
											<div class="controls">
												<input type="text" class="span6" id="tgl_pinjam" name="tgl_pinjam" value="<?php echo date('Y-m-d'); ?>" readonly="">
											</div> <!-- /controls -->
										</div> <!-- /control-group -->

										<div class="control-group">
											<label class="control-label" for="firstname">NIM</label>
											<div class="controls">
												<input type="text" class="span6" id="nim" name="nim">
											</div> <!-- /controls -->
										</div> <!-- /control-group -->
										<div class="control-group">
											<label class="control-label" for="firstname">Judul Buku 1</label>
											<div class="controls">
												<select name="judul_buku1" class="span6 form-control">
												<option value="">Pilih Judul Buku</option>
						                        <?php
						                          $query = "SELECT id, judul_buku FROM daftar_buku_perpus ORDER BY judul_buku ASC";
						                          $sql = mysql_query ($query);
						                          while ($hasil = mysql_fetch_array ($sql)) {
						                          echo "<option value='$hasil[judul_buku]'>$hasil[judul_buku]</option>";
						                          }
						                        ?>
						                        </select>
											</div> <!-- /controls -->
										</div> <!-- /control-group -->

										<div class="control-group">
											<label class="control-label" for="firstname">Jumlah Buku 1</label>
											<div class="controls">
												<input type="text" class="span6" id="jumlah" name="jumlah1">
											</div> <!-- /controls -->
										</div> <!-- /control-group -->

										<div class="control-group">
											<label class="control-label" for="firstname">Judul Buku 2</label>
											<div class="controls">
												<select name="judul_buku2" class="span6 form-control">
												<option value="">Pilih Judul Buku</option>
						                        <?php
						                          $query = "SELECT id, judul_buku FROM daftar_buku_perpus ORDER BY judul_buku ASC";
						                          $sql = mysql_query ($query);
						                          while ($hasil = mysql_fetch_array ($sql)) {
						                          echo "<option value='$hasil[judul_buku]'>$hasil[judul_buku]</option>";
						                          }
						                        ?>
						                        </select>
											</div> <!-- /controls -->
										</div> <!-- /control-group -->

										<div class="control-group">
											<label class="control-label" for="firstname">Jumlah Buku 2</label>
											<div class="controls">
												<input type="text" class="span6" id="jumlah" name="jumlah2">
											</div> <!-- /controls -->
										</div> <!-- /control-group -->

										<div class="form-actions">
											<button type="submit" class="btn btn-primary" name="mahasiswapinjam">Pinjam Buku</button>
										</div> <!-- /form-actions -->
									</fieldset>
								</form>
								</div>

								<div class="tab-pane active" id="jscontrols">
									<form id="edit-profile" action="?pages=pinjam-dsn-sukses" class="form-horizontal" method="POST">
										<fieldset>
											<input type="hidden" class="form-control" value="<?php echo autogenerate('id','tabel_peminjaman',6,'Perp.AKNL_')?>" name="id_pinjam_dsn" readonly>
										<div class="control-group">
											<label class="control-label" for="firstname">Tanggal Pinjam</label>
											<div class="controls">
												<input type="text" class="span6" id="tgl_pinjam" name="tgl_pinjam" value="<?php echo date('Y-m-d'); ?>" readonly="">
											</div> <!-- /controls -->
										</div> <!-- /control-group -->

										<div class="control-group">
											<label class="control-label" for="firstname">ID Dosen</label>
											<div class="controls">
												<input type="text" class="span6" id="id_dosen" name="id_dosen">
											</div> <!-- /controls -->
										</div> <!-- /control-group -->

										<div class="control-group">
											<label class="control-label" for="firstname">Judul Buku 1</label>
											<div class="controls">
												<select name="judul_buku3" class="span6 form-control">
												<option>Pilih Judul Buku</option>
						                        <?php
						                          $query = "SELECT id, judul_buku FROM daftar_buku_perpus ORDER BY judul_buku ASC";
						                          $sql = mysql_query ($query);
						                          while ($hasil = mysql_fetch_array ($sql)) {
						                          echo "<option value='$hasil[judul_buku]'>$hasil[judul_buku]</option>";
						                          }
						                        ?>
						                        </select>
											</div> <!-- /controls -->
										</div> <!-- /control-group -->

										<div class="control-group">
											<label class="control-label" for="firstname">Jumlah Buku 1</label>
											<div class="controls">
												<input type="text" class="span6" id="jumlah3" name="jumlah3">
											</div> <!-- /controls -->
										</div> <!-- /control-group -->

										<div class="control-group">
											<label class="control-label" for="firstname">Judul Buku 2</label>
											<div class="controls">
												<select name="judul_buku4" class="span6 form-control">
												<option value="">Pilih Judul Buku</option>
						                        <?php
						                          $query = "SELECT id, judul_buku FROM daftar_buku_perpus ORDER BY judul_buku ASC";
						                          $sql = mysql_query ($query);
						                          while ($hasil = mysql_fetch_array ($sql)) {
						                          echo "<option value='$hasil[judul_buku]'>$hasil[judul_buku]</option>";
						                          }
						                        ?>
						                        </select>
											</div> <!-- /controls -->
										</div> <!-- /control-group -->

										<div class="control-group">
											<label class="control-label" for="firstname">Jumlah Buku 2</label>
											<div class="controls">
												<input type="text" class="span6" id="jumlah4" name="jumlah4">
											</div> <!-- /controls -->
										</div> <!-- /control-group -->

										<div class="form-actions">
											<button type="submit" class="btn btn-primary" name="dosenpinjam">Pinjam Buku</button>
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
