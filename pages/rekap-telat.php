<?php
$lampau = date('2015-12-12');
$tgl_sekarang  = date('Y-m-d');
$PenguranganTgl = date('Y-m-d', mktime(0,0,0,date('m'),date('d')-8,date('Y')));
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
              <h3>Rekap Telat</h3>
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
                $querydosen=mysql_query("SELECT * FROM tabel_peminjaman WHERE tgl_pinjam BETWEEN '$lampau' AND '$PenguranganTgl'");
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
                      <a href="javascript:void(0);" class="btn btn-small btn-primary"
                          onclick="window.open('pages/print_telat.php?ID=<?php echo $hasil['0']; ?>','nama_window_pop_up','size=800,height=800,scrollbars=yes,resizeable=no')"><i class="btn-icon-only/ icon-print"> </i>Print</a>
                      <?php
                      if ($_SESSION['level']=='admin') {
                      ?>
                      <a href="?pages=rekap-telat&delete=<?php echo $hasil['0']; ?>" class="btn btn-danger btn-small"><i class="btn-icon-only/ icon-remove"> </i>Hapus</a></td>
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