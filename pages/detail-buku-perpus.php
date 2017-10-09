<?php
$id = $_GET['id'];
$query = mysql_query("SELECT * FROM daftar_buku_perpus WHERE id='$id'");
$data=mysql_fetch_array($query);
?>
<div class="row">
        <!-- /span6 -->
        <div class="span12">
          
          <!-- /widget -->
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Detail buku</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table width="96%" style="margin-left:3%;">
                  <tr>
                    <td style="text-align:left;" width="10%">Kode</td>
                    <td style="text-align:center;" width="3%">:</td>
                    <td style="padding-left:5px;" width="27%"><?php echo $data['kode']; ?></td>
                    <td width="70%" rowspan="11" style="text-align:center;padding-left:5%;">
                        <img src="images/cover_buku_perpus/<?php echo $data['cover_depan'] ?>"
                        alt="Maaf Gambar Tidak Tersedia" style="width:250px;height:320px;min-height:300px;min-width:250px;max-height:300px;max-width:250px;float:left; margin:0 20px 0px 0;"/>
                        <img src="images/cover_buku_perpus/<?php echo $data['cover_belakang'] ?>"
                          alt="Maaf Gambar Tidak Teredia" style="width:250px;height:320px;min-height:300px;min-width:250px;max-height:300px;max-width:250px;"/>
                    </td>
                  </tr>
                  <tr>
                    <td style="text-align:left;">INS Pengarang</td>
                    <td style="text-align:center;">:</td>
                    <td style="padding-left:5px;"><?php echo $data['ins_pengarang']; ?></td>
                  </tr>
                  <tr>
                    <td style="text-align:left;">INS Judul</td>
                    <td style="text-align:center;">:</td>
                    <td style="padding-left:5px;"><?php echo $data['ins_judul']; ?></td>
                  </tr>
                  <tr>
                    <td style="text-align:left;">Pengarang</td>
                    <td style="text-align:center;">:</td>
                    <td style="padding-left:5px;"><?php echo $data['pengarang']; ?></td>
                  </tr>
                  <tr>
                    <td style="text-align:left;">Judul Buku</td>
                    <td style="text-align:center;">:</td>
                    <td style="padding-left:5px;"><?php echo $data['judul_buku']; ?></td>
                  </tr>
                  <tr>
                    <td style="text-align:left;">Penerbit</td>
                    <td style="text-align:center;">:</td>
                    <td style="padding-left:5px;"><?php echo $data['penerbit']; ?></td>
                  </tr>
                  <tr>
                    <td style="text-align:left;">Tahun Terbit</td>
                    <td style="text-align:center;">:</td>
                    <td style="padding-left:5px;"><?php echo $data['tahun_terbit']; ?></td>
                  </tr>
                  <tr>
                    <td style="text-align:left;">Jumlah Buku</td>
                    <td style="text-align:center;">:</td>
                    <td style="padding-left:5px;"><?php echo $data['jumlah']; ?></td>
                  </tr>
                  <tr>
                    <td style="text-align:left;">Riil</td>
                    <td style="text-align:center;">:</td>
                    <td style="padding-left:5px;"><?php echo $data['riil']; ?></td>
                  </tr>
                  <tr>
                    <td style="text-align:left;">Kurang</td>
                    <td style="text-align:center;">:</td>
                    <td style="padding-left:5px;"><?php echo $data['kurang']; ?></td>
                  </tr>
                  <tr>
                    <td style="text-align:left;">Keterangan</td>
                    <td style="text-align:center;">:</td>
                    <td style="padding-left:5px;"><?php echo $data['keterangan']; ?></td>
                  </tr>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
        </div>
        <!-- /span6 --> 
      </div>
