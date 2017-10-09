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
if($_GET['id']){
    $id=$_GET['id'];
    $hasil=mysql_query("delete from daftar_buku_perpus where id='$id'");
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
        <form method="post" action="">
         
         
          
          <!-- /widget -->
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Daftar Buku</h3>
              <input type="text" name="inputan_pencarian">
              <input type="submit" name="cari_buku" value="Cari Buku">
              <a style="float:right;margin-right:10px;margin-top:3px;font-size:13px;" href="javascript:void(0);" class="btn btn-small btn-default" onclick="window.open('pages/print_daftar_buku_perpus.php?ID=<?php echo $hasil['0']; ?>','nama_window_pop_up','size=800,height=800,scrollbars=yes,resizeable=no')"><i class="btn-icon-only/ icon-print"> </i>    Print</a>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th style="text-align:center;"> No </th>
                    <th style="text-align:center;"> Kode </th>
                    <th style="text-align:center;"> Pengarang </th>
                    <th style="text-align:center;"> Judul Buku </th>
                    <th style="text-align:center;"> Penerbit </th>
                    <th style="text-align:center;"> Tahun Terbit </th>
                    <th style="text-align:center;"> Aksi </th>

                  </tr>
                </thead>
                <?php
                $inputan_pencarian = @$_POST['inputan_pencarian'];
                $cari_buku = @$_POST['cari_buku'];
                if ($cari_buku) {
                    if($inputan_pencarian != "") {
                        $no=1;
                        $query=mysql_query("SELECT * FROM daftar_buku_perpus WHERE judul_buku like '%$inputan_pencarian%' or pengarang like '%$inputan_pencarian%' or penerbit like '%$inputan_pencarian%'");
                    } else {
                    }
                } else {
                    $query=mysql_query("SELECT * FROM daftar_buku_perpus LIMIT $posisi,$batas");
                    $no = $posisi + 1;
                    $cek = mysql_num_rows($query);
                }
                while ($hasil=mysql_fetch_array($query)) {
                ?>
                <tbody>
                  <tr>
                    <td style="text-align:center;" width="3%"> <?php echo $no++; ?>. </td>
                    <td width="5%"> <?php echo $hasil['kode']; ?> </td>
                    <td width="20%"> <?php echo $hasil['pengarang']; ?> </td>
                    <td width="29%"> <?php echo $hasil['judul_buku']; ?> </td>
                    <td width="15%"> <?php echo $hasil['penerbit']; ?> </td>
                    <td width="8%"> <?php echo $hasil['tahun_terbit']; ?> </td>
                    
                    <td class="td-actions">

                      <a href="?pages=detail-buku-perpus&id=<?php echo $hasil['id']; ?>" class="btn btn-small btn-success"><i class="btn-icon-only/ icon-edit"> </i>Detail</a>    
                    <?php
                    if ($_SESSION['tingkat']=='admin') {
                    ?>
                      <a href="?pages=edit-buku-perpus&id=<?php echo $hasil['id']; ?>" class="btn btn-small btn-primary"><i class="btn-icon-only/ icon-edit"> </i>Edit</a>
                    <?php
                    }
                    ?>

                    <?php
                    if ($_SESSION['tingkat']=='operator') {
                    ?>
                      <a href="?pages=edit-buku-perpus&id=<?php echo $hasil['id']; ?>" class="btn btn-small btn-primary"><i class="btn-icon-only/ icon-edit"> </i>Edit</a>
                    <?php
                    }
                    ?>                         
                      
                     <?php
                    if ($_SESSION['tingkat']=='admin') {
                    ?>
                      <a href="?pages=daftar-buku-perpus&id=<?php echo $hasil['id']; ?>" class="btn btn-danger btn-small"><i class="btn-icon-only/ icon-remove"> </i>Hapus</a></td>
                    <?php
                    }
                    ?>
                </tr>

                   
                </tbody>
                <?php } ?>
              </table>
              </form>
            </div>
            <!-- /widget-content --> 
          </div>
          <div style="margin-top:10px; float:left;">
                <?php
                $jml = mysql_num_rows(mysql_query("SELECT * FROM daftar_buku_perpus"));
                echo "Jumlah Data : <b>".$jml."</b>";
                ?>
              </div>

              <div style="margin-top:10px; float:right;">
              <?php
              $jml_hal = ceil($jml / $batas);
              for ($i=1; $i<=$jml_hal; $i++) {
                if ($i != $hal) {
                  echo "<a href='?pages=daftar-buku-perpus&hal=$i'>&nbsp<button style='background-color:#fff; border:1px solid #666 color:#666;'>$i</button></a>"; 
                } else {
                  echo "&nbsp<button style='background-color:#ccc; border:1px; solid #000;'><b>$i</b></button>";
                }
              }
              ?>
              </div>
        </div>
        <!-- /span6 --> 
      </div>
      