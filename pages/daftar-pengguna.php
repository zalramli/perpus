<?php
if ($_GET['nip']) {
  $id = $_GET['nip'];
  $hasil=mysql_query("delete from anggota_dosen where nip='$id'");
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
              <h3>Dosen</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th width="3%" style="text-align:center;">No.</th>
                    <th width="12%" style="text-align:center;">ID Dosen</th>
                    <th width="20%" style="text-align:center;">NIP</th>
                    <th width="30%" style="text-align:center;">Nama</th>
                    <th width="10%" style="text-align:center;">Jenis Kelamin</th>
                    <th width="13%" style="text-align:center;">Program Studi</th>
                    <th style="text-align:center;">Aksi</th>
                  </tr>
                </thead>
                <?php
                $no=1;
                $batas = 10;
                $hal = @$_GET['hal'];
                if(empty($hal)) {
                  $posisi = 0;
                  $hal = 1;
                } else {
                  $posisi = ($hal-1) * $batas;
                }
                $querydosen=mysql_query("SELECT * FROM anggota_dosen LIMIT $posisi,$batas");
                $no = $posisi + 1;
                $cek = mysql_num_rows($querydosen);
                if ($cek < 1) {
                  echo "tidak ditemukan";
                } else {
                while ($hasil=mysql_fetch_array($querydosen)) {
                ?>
                <tbody>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $hasil['0']; ?></td>
                    <td><?php echo $hasil['1']; ?></td>
                    <td><?php echo $hasil['2']; ?></td>
                    <td><?php echo $hasil['3']; ?></td>
                    <td><?php echo $hasil['4']; ?></td>
                    <td class="td-actions">
                     
                      <a href="?pages=edit-daftar-pengguna-dosen&nip=<?php echo $hasil['nip']; ?>" class="btn btn-small btn-primary"><i class="btn-icon-only/ icon-edit"> </i>Edit</a>
                      <a onclick="return confirm('Yakin ingin menghapus data ?')"  href="?pages=daftar-pengguna&nip=<?php echo $hasil['nip']; ?>" class="btn btn-danger btn-small"><i class="btn-icon-only/ icon-remove"> </i>Hapus</a></td>
                </tbody>
                <?php 
                } 
                }
                ?>
              </table>



              </div>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
        </div>
        <!-- /span6 --> 
        <div style="margin-top:10px; float:left;">
                <?php
                $jml = mysql_num_rows(mysql_query("SELECT * FROM anggota_dosen"));
                echo "Jumlah Data : <b>".$jml."</b>";
                ?>
              </div>

              <div style="margin-top:10px; float:right;">
              <?php
              $jml_hal = ceil($jml / $batas);
              for ($i=1; $i<=$jml_hal; $i++) {
                if ($i != $hal) {
                  echo "<a href='?pages=daftar-pengguna&hal=$i'>&nbsp<button style='background-color:#fff; border:1px solid #666 color:#666;'>$i</button></a>"; 
                } else {
                  echo "&nbsp<button style='background-color:#ccc; border:1px; solid #000;'><b>$i</b></button>";
                }
              }
              ?>
              </div>
              </div>
      </div>

              