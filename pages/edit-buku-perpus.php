<?php
$id = $_GET['id'];
$query = mysql_query("SELECT * FROM daftar_buku_perpus WHERE id='$id'");
$hasil = mysql_fetch_array($query);
if (isset($_POST['kirim'])) {
	$kode = $_POST['kode'];
	$ins_pengarang = $_POST ['ins_pengarang'];
	$ins_judul = $_POST ['ins_judul'];
	$pengarang = $_POST ['pengarang'];
	$judul_buku = $_POST ['judul_buku'];
	$penerbit = $_POST ['penerbit'];
	$tahun_terbit = $_POST ['tahun_terbit'];
	$jumlah = $_POST ['jumlah'];
	$riil = $_POST ['riil'];
	if ($jumlah==$riil) {
		$keterangan='Lengkap';
	} else {
		$keterangan ='Belum Lengkap';
	}
	$kurang=$jumlah - $riil;

	$temp  = $_FILES['cover_depan']['tmp_name']; // untuk menyimpan sementara file yang di upload 
    $format = $_FILES['cover_depan']['type']; // untuk menentukan format gambar
 
  //maksud $_FILES['gambar'] adalag mengambil nilai pada form dengan input yang bernama gambar tadi
 
  //membuat validasi file yang di upload gambar atau bukan
   
     
    $gambar  = $_FILES['cover_depan']['name']; // definisi variabel nama gambar
    $dir  = "images/cover_buku_perpus/$gambar"; // definisi direktori atau folder tempat untuk disimpan gambar

    $temp2  = $_FILES['cover_belakang']['tmp_name']; // untuk menyimpan sementara file yang di upload 
    $format2 = $_FILES['cover_belakang']['type']; // untuk menentukan format gambar
 
  //maksud $_FILES['gambar'] adalag mengambil nilai pada form dengan input yang bernama gambar tadi
 
  //membuat validasi file yang di upload gambar atau bukan
   
     
    $gambar2  = $_FILES['cover_belakang']['name']; // definisi variabel nama gambar
    $dir2  = "images/cover_buku_perpus/$gambar2"; // definisi direktori atau folder tempat untuk disimpan gambar

	$update_buku_perpus=mysql_query("UPDATE daftar_buku_perpus SET kode='$kode',ins_pengarang='$ins_pengarang',ins_judul='$ins_judul',pengarang='$pengarang',judul_buku='$judul_buku',penerbit='$penerbit',tahun_terbit='$tahun_terbit',jumlah='$jumlah',riil='$riil',kurang='$kurang',keterangan='$keterangan',cover_depan='$gambar',cover_belakang='$gambar2' WHERE id='$id'");
	if ($update_buku_perpus) {		
		move_uploaded_file($temp, $dir);
		move_uploaded_file($temp2, $dir2);
		echo "<script>alert('Berhasil Di Update')</script>";
	}
}
?>
<div class="row">
<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-book"></i>
	      				<h3>Edit Buku Perpustakaan AKN Lumajang</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
							<div class="tab-content">
								<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" method="post" class="form-horizontal" enctype="multipart/form-data">
									<fieldset>
										
										<div class="control-group">											
											<label class="control-label" for="id"></label>
											<div class="controls">
												<input type="hidden" class="span6" id="id" name="id" value="<?php echo $hasil['0']; ?>">										
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->										
										
										<div class="control-group">											
											<label class="control-label" for="kode">Kode</label>
											<div class="controls">
												<input type="text" class="span6" name="kode" id="kode" value="<?php echo $hasil['kode']; ?>">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="ins_pengarang">Ins_Pengarang</label>
											<div class="controls">
												<input type="text" class="span6" id="ins_pengarang" name="ins_pengarang" value="<?php echo $hasil['ins_pengarang']; ?>">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="ins_judul">Ins_Judul</label>
											<div class="controls">
												<input type="text" class="span6" id="ins_judul" name="ins_judul" value="<?php echo $hasil['ins_judul']; ?>">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="pengarang">Pengarang</label>
											<div class="controls">
												<input type="text" class="span6" id="pengarang" name="pengarang" value="<?php echo $hasil['pengarang']; ?>">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="judul_buku">Judul Buku</label>
											<div class="controls">
												<input type="text" class="span6" id="judul_buku" name="judul_buku" value="<?php echo $hasil['judul_buku']; ?>">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="penerbit">Penerbit</label>
											<div class="controls">
												<input type="text" class="span6" id="penerbit" name="penerbit" value="<?php echo $hasil['penerbit']; ?>">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="tahun_terbit">Tahun Terbit</label>
											<div class="controls">
												<input type="text" class="span6" id="tahun_terbit" name="tahun_terbit" value="<?php echo $hasil['tahun_terbit']; ?>">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="firstname">Jumlah</label>
											<div class="controls">
												<input type="text" class="span6" name="jumlah" value="<?php echo $hasil['jumlah']; ?>" >
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="firstname">Riil</label>
											<div class="controls">
												<input type="text" class="span6" name="riil" value="<?php echo $hasil['riil']; ?>" >
											</div> <!-- /controls -->				
										</div> <!-- /control-group --> 
										<br>
										<div class="control-group">											
											<label class="control-label" for="gambar">Cover Depan</label>
											<div class="controls">
												<input type="file" class="span0" id="gambar" name="cover_depan">
											</div> <!-- /controls -->		

										</div> <!-- /control-group -->
											<div class="control-group">											
											<label class="control-label" for="gambar">Cover Belakang</label>
											<div class="controls">
												<input type="file" class="span0" id="gambar" name="cover_belakang">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										<br>

										<div class="span3">
											<button type="submit" name="kirim" class="btn btn-primary">Update</button> 
											
										</div>
									</fieldset>
								</form>
								</div>
								
							</div>  
						</div>	
					</div> <!-- /widget-content -->		
				</div> <!-- /widget -->
</div>