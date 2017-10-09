<?php
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
        <!-- /span8 -->
        <div class="span12">
          <!-- /widget -->
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Rekap Seluruh Data</h3>
              <a style="float:right;margin-right:10px;margin-top:3px;font-size:13px;" href="#print-bulanan" role="button" class="btn btn-small btn-default" data-toggle="modal">Print Bulanan</a>
              <a style="float:right;margin-right:10px;margin-top:3px;font-size:13px;" href="javascript:void(0);" class="btn btn-small btn-default" onclick="window.open('pages/print_rekap_semua.php','nama_window_pop_up','size=800,height=800,scrollbars=yes,resizeable=no')"><i class="btn-icon-only/ icon-print"> </i>    Print Seluruh Data</a>

            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th style="width:8%; text-align:center">Tgl. Pinjam</th>
                    <th style="width:12%; text-align:center">Nama Peminjam</th>
                    <th style="width:5%; text-align:center">Status</th>
                    <th style="width:10%; text-align:center">Program Studi</th>
                    <th style="width:8%; text-align:center">Kelas</th>
                    <th style="width:16%; text-align:center">Judul Buku 1</th>
                    <th style="width:1%; text-align:center">Jumlah</th>
                    <th style="width:16%; text-align:center">Judul Buku 2</th>
                    <th style="width:1%; text-align:center">Jumlah</th>
                    <th style="width:8%; text-align:center">Tgl. Max</th>
                    <?php
                    if ($_SESSION['level']=='admin') {
                    ?>
                    <th style="width:15%; text-align:center">Aksi</th>
                    <?php
                    }
                    ?>

                  </tr>
                </thead>
                <?php
                $nomor=1;
                $querydosen=mysql_query("SELECT * FROM tabel_peminjaman ORDER BY tgl_pinjam DESC");
                while ($hasil=mysql_fetch_array($querydosen)) {
                ?>
                <tbody>
                  <tr>
                    <td><?php echo $nomor++; ?></td>
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
                   <?php
                      if ($_SESSION['level']=='admin') {
                      ?>
                      <td class="td-actions">
                      <a href="javascript:void(0);" class="btn btn-primary btn-small"
                          onclick="window.open('pages/print_slip_pinjam_dsn.php?ID=<?php echo $hasil['0']; ?>','nama_window_pop_up','size=800,height=800,scrollbars=yes,resizeable=no')"><i class="btn-icon-only/ icon-print"> </i>Print</a>
                      <a href="?pages=rekap-peminjaman-buku&delete=<?php echo $hasil['0']; ?>" class="btn btn-danger btn-small"><i class="btn-icon-only/ icon-remove"> </i>Hapus</a>
                      </td>
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
        <!-- /span8 --> 
        
</div>

 <div id="print-bulanan" class="modal hide fade" tabindex="-1"     role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
  <h3 id="myModalLabel">Print Data</h3>
</div>
<form name="print-rekap-bulanan" action="pages/print_rekap_bulanan.php" method="post">
<div class="modal-body">
  <table>
    <tr>
      <td>Pilih Bulan</td>
      <td>:</td>
      <td>
        <select name="bulan">
        <option value="">Pilih Bulan</option>
        <option value="01">Januari</option>
        <option value="02">Februari</option>
        <option value="03">Maret</option>
        <option value="04">April</option>
        <option value="05">Mei</option>
        <option value="06">Juni</option>
        <option value="07">Juli</option>
        <option value="08">Agustus</option>
        <option value="09">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Pilih Tahun</td>
      <td>:</td>
      <td><input type="text" name="tahun" class="form-control"></td>
    </tr>
  </table>
</div>
<div class="modal-footer">
  <button class="btn btn-primary submit" name="printprint">Print</button>
  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
</div>
</form>
</div>