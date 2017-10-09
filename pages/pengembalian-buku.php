<?php
if($_GET['backbook']){
    $id=$_GET['backbook'];
    $tampil_tabelpeminjaman = mysql_query("SELECT * FROM tabel_peminjaman WHERE id='$id'");
    $fetch_tblpinjam = mysql_fetch_array($tampil_tabelpeminjaman);
    $judul1 = $fetch_tblpinjam['judul_buku1'];
    $jumlah1 = $fetch_tblpinjam['jumlah1'];
    $judul2 = $fetch_tblpinjam['judul_buku2'];
    $jumlah2 =$fetch_tblpinjam['jumlah2'];

    $kembali_judul1 = mysql_query("SELECT * FROM daftar_buku_perpus WHERE judul_buku= '$judul1' ");
    $fetch_judul1 = mysql_fetch_array($kembali_judul1);
    $idbuku1 = $fetch_judul1['id'];
    $jumlah_buku1 = $fetch_judul1['jumlah'];
    $riil_judul1=$fetch_judul1['riil'];
    $hasil1 = $riil_judul1 + $jumlah1;
    $kurangjudul1= $jumlah_buku1 - $hasil1;
    if ($jumlah_buku1==$hasil1) {
    $keterangan='Lengkap';
    } else {
    $keterangan ='Belum Lengkap';
    }
    $update_judul1 = mysql_query("UPDATE daftar_buku_perpus SET riil='$hasil1', kurang='$kurangjudul1', keterangan='$keterangan' WHERE id='$idbuku1'");

    $kembali_judul2 = mysql_query("SELECT * FROM daftar_buku_perpus WHERE judul_buku='$judul2'");
    $fetch_judul2 = mysql_fetch_array($kembali_judul2);
    $idbuku2 = $fetch_judul2['id'];
    $jumlah_buku2 =$fetch_judul2['jumlah'];
    $riil_judul2= $fetch_judul2['riil'];
    $hasil2 = $riil_judul2 + $jumlah2;
    $kurangjudul2 = $jumlah_buku2 - $hasil2;
    if ($jumlah_buku2==$hasil2) {
    $keterangan='Lengkap';
    } else {
    $keterangan ='Belum Lengkap';
    }
    $update_judul2 = mysql_query("UPDATE daftar_buku_perpus SET riil='$hasil2', kurang='$kurangjudul2', keterangan='$keterangan' WHERE id='$idbuku2'");

    $update_rekap = mysql_query("UPDATE tabel_peminjaman SET status_kembali='1' WHERE id='$id'");

    if ($update_judul2) {
      echo "<script>alert('Terima Kasih Telah Mengembalikan Buku')</script>";
    }
    else{
      echo "<script>alert('Error')</script>".mysql_error();
    }
}
if($_GET['delete']){
    $id=$_GET['delete'];
    $hasil=mysql_query("delete from tabel_peminjaman where id='$id'");
    if($id){
        echo"<script>alert('Berhasil Menghapus')</script>";
    }else{
        echo"<script>alert('Gagal Menghapus')</script>";
    }
}
?>
<div class="row">
        <!-- /span6 -->
        <div class="span12">
          <!-- /widget -->
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Rekap Peminjaman Buku</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th style="width:8%; text-align:center">Tgl. Pinjam</th>
                    <th style="width:12%; text-align:center">Nama Peminjam</th>
                    <th style="width:5%; text-align:center">Status</th>
                    <th style="width:10%; text-align:center">Program Studi</th>
                    <th style="width:8%; text-align:center">Kelas</th>
                    <th style="width:13%; text-align:center">Judul Buku 1</th>
                    <th style="width:1%; text-align:center">Jumlah</th>
                    <th style="width:13%; text-align:center">Judul Buku 2</th>
                    <th style="width:1%; text-align:center">Jumlah</th>
                    <th style="width:8%; text-align:center">Tgl. Max</th>
                    <th style="width:20%; text-align:center">Aksi</th>
                  </tr>
                </thead>
                <?php
                $no=1;
                $querydosen=mysql_query("SELECT * FROM tabel_peminjaman WHERE status_kembali='0'");
                while ($hasil=mysql_fetch_array($querydosen)) {
                  
                ?>
                <tbody>
                  <tr>
                    <td><?php echo $hasil['1']; ?></td>
                    <td><?php echo $hasil['2']; ?></td>
                    <td><?php echo $hasil['jabatan']; ?></td>
                    <td><?php echo $hasil['program_studi']; ?></td>
                    <td><?php echo $hasil['kelas_semester']; ?></td>
                   <td><?php echo $hasil['judul_buku1']; ?></td>
                   <td><?php echo $hasil['jumlah1']; ?></td>
                   <td><?php echo $hasil['judul_buku2']; ?></td>
                   <td><?php echo $hasil['jumlah2']; ?></td>
                   <td><?php echo $hasil['tgl_kembali']; ?></td>
                    <td class="td-actions">
                      <a href="?pages=pengembalian-buku&backbook=<?php echo $hasil['id']; ?>" class="btn btn-small btn-warning"><i class="btn-icon-only/ icon-check"> </i>Kembali</a>
                  
                      <a href="javascript:void(0);" class="btn btn-small btn-primary"
                          onclick="window.open('pages/print_slip_pinjam.php?ID=<?php echo $hasil['0']; ?>','nama_window_pop_up','size=800,height=800,scrollbars=yes,resizeable=no')"><i class="btn-icon-only/ icon-print"> </i>Print</a>
                      <?php
                      if ($_SESSION['level']=='admin') {
                      ?>
                      <a href="?pages=pengembalian-buku&delete=<?php echo $hasil['0']; ?>" class="btn btn-danger btn-small"><i class="btn-icon-only/ icon-remove"> </i>Hapus</a></td>
                      <?php
                      }
                      ?>
                      
                </tbody>
                <?php } ?>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
          

        </div>
        <!-- /span6 --> 
      </div>