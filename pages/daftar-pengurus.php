<?php
if($_GET['delete']){
    $a=$_GET['delete'];
    $b=mysql_query("delete from user where id_user='$a'");
    if($a){
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
            <div class="widget-header"> <i class="icon-group"></i>
              <h3>Management Pengguna</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th class="td-actions">Aksi</th>
                  </tr>
                </thead>
                <?php
                $no=1;
                $batas = 5;
                $hal = @$_GET['hal'];
                if(empty($hal)) {
                  $posisi = 0;
                  $hal = 1;
                } else {
                  $posisi = ($hal-1) * $batas;
                }
                $query=mysql_query("SELECT * FROM user LIMIT $posisi,$batas");
                $no = $posisi + 1;
                $cek = mysql_num_rows($query);
                if ($cek < 1) {
                  echo "tidak ditemukan";
                } else {
                while ($fetch=mysql_fetch_array($query)) {
                ?>
                <tbody>
                  <tr>
                    <td width="3%"><?php echo $no++; ?></td>
                    <td width="40%"><?php echo $fetch['1']; ?></td>
                    <td width="3%"><?php echo $fetch['2']; ?></td>
                    <td width="3%"><?php echo $fetch['3']; ?></td>

                    <td class="td-actions" width="">
                      <a href="?pages=edit-pengurus&UsEr=<?php echo $fetch['0']; ?>" class="btn btn-small btn-primary"><i class="btn-icon-only icon-edit"> </i>Edit</a>
                      <a onclick="return confirm('Yakin ingin menghapus data ?')"  href="?pages=daftar-pengurus&delete=<?php echo $fetch['0']; ?>" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i>Hapus</a>
                    </td>
                  </tr>
                </tbody>
                <?php
                }
                }
                ?>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
          <div style="margin-top:10px; float:left;">
                <?php
                $jml = mysql_num_rows(mysql_query("SELECT * FROM user"));
                echo "Jumlah Data : <b>".$jml."</b>";
                ?>
              </div>

              <div style="margin-top:10px; float:right;">
              <?php
              $jml_hal = ceil($jml / $batas);
              for ($i=1; $i<=$jml_hal; $i++) {
                if ($i != $hal) {
                  echo "<a href='?pages=daftar-pengurus&hal=$i'>&nbsp<button style='background-color:#fff; border:1px solid #666 color:#666;'>$i</button></a>"; 
                } else {
                  echo "&nbsp<button style='background-color:#ccc; border:1px; solid #000;'><b>$i</b></button>";
                }
              }
              ?>
              </div>
        </div>
        <!-- /span6 --> 
      </div>