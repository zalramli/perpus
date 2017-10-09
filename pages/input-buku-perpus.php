<?php
if (isset($_POST['kirim'])) {
	$id=$_POST['id'];
	$kode = $_POST['kode'];
	$ins_pengarang = $_POST ['ins_pengarang'];
	$ins_judul = $_POST ['ins_judul'];
	$pengarang = $_POST ['pengarang'];
	$judul_buku = $_POST ['judul_buku'];
	$penerbit = $_POST ['penerbit'];
	$tahun_terbit = $_POST ['tahun_terbit'];
	$jumlah=$_POST['jumlah'];
	$riil=$_POST['riil'];
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
    $dir  = "cover_buku_perpus/$gambar"; // definisi direktori atau folder tempat untuk disimpan gambar

    //pemisah
    $temp2  = $_FILES['cover_belakang']['tmp_name']; // untuk menyimpan sementara file yang di upload 
    $format2 = $_FILES['cover_belakang']['type']; // untuk menentukan format gambar
 
  //maksud $_FILES['gambar'] adalag mengambil nilai pada form dengan input yang bernama gambar tadi
 
  //membuat validasi file yang di upload gambar atau bukan
     
    $gambar2  = $_FILES['cover_belakang']['name']; // definisi variabel nama gambar
    $dir2  = "cover_buku_perpus/$gambar2"; // definisi direktori atau folder tempat untuk disimpan gambar
	$inputnilai=mysql_query("INSERT INTO daftar_buku_perpus (id,kode,ins_pengarang,ins_judul,pengarang,judul_buku,penerbit,tahun_terbit,jumlah,riil,kurang,keterangan,cover_depan,cover_belakang) VALUES ('$id','$kode','$ins_pengarang','$ins_judul','$pengarang','$judul_buku','$penerbit','$tahun_terbit','$jumlah','$riil','$kurang','$keterangan','','')");
	if ($inputnilai) {
		echo "<script>alert('Berhasil Menyimpan')</script>";
	} else {
		echo "Error 41".mysql_error();
	}
}

?>
<div class="row">
<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-book"></i>
	      				<h3>Input Buku Perpustakaan AKN Lumajang</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
							<div class="tab-content">
								<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" method="post" class="form-horizontal" enctype="multipart/form-data">
									<fieldset>
										
										<input type="hidden" name="id">

										<div class="control-group">											
											<label class="control-label" for="kode">Kode</label>
											<div class="controls">
												<input type="text" class="span6" name="kode" id="kode">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="ins_pengarang">Ins_Pengarang</label>
											<div class="controls">
												<input type="text" class="span6" id="ins_pengarang" name="ins_pengarang">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="ins_judul">Ins_Judul</label>
											<div class="controls">
												<input type="text" class="span6" id="ins_judul" name="ins_judul">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="pengarang">Pengarang</label>
											<div class="controls">
												<input type="text" class="span6" id="pengarang" name="pengarang">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="judul_buku">Judul Buku</label>
											<div class="controls">
												<input type="text" class="span6" id="judul_buku" name="judul_buku">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="penerbit">Penerbit</label>
											<div class="controls">
												<input type="text" class="span6" id="penerbit" name="penerbit">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="tahun_terbit">Tahun Terbit</label>
											<div class="controls">
												<input type="text" class="span6" id="tahun_terbit" name="tahun_terbit">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="firstname">Jumlah</label>
											<div class="controls">
												<input type="text" class="span6" name="jumlah">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="firstname">Riil</label>
											<div class="controls">
												<input type="text" class="span6" name="riil">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="span3">
											<button type="submit" name="kirim" class="btn btn-primary">Save</button> 
											<button type="reset" class="btn">Cancel</button>
										</div>
									</fieldset>
								</form>
								</div>
								
							</div>  
						</div>	
					</div> <!-- /widget-content -->		
				</div> <!-- /widget -->
</div>