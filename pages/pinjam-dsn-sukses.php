<?php
  $id_pinjam = $_POST['id_pinjam_dsn'];
  $tgl_pinjam = $_POST['tgl_pinjam'];
  $id_dosen = $_POST['id_dosen'];
  $judul_buku3 = $_POST['judul_buku3'];
  $jumlah3 = $_POST['jumlah3'];
  $judul_buku4 = $_POST['judul_buku4'];
  $jumlah4 = $_POST['jumlah4'];
  $jabatandsn = 'Dosen';
  $tgl_kembalidsn = date('Y-m-d', strtotime('+7 days', strtotime($tgl_pinjam)));

  $querydosen = mysql_query("SELECT * FROM anggota_dosen WHERE id_dosen='$id_dosen'");
  $fetch_data_dosen = mysql_fetch_array($querydosen);
  $namadosen = $fetch_data_dosen['nama'];
  $jkdosen= $fetch_data_dosen['jenis_kelamin'];
  $prodi_dosen = $fetch_data_dosen['program_studi'];

  $inputdosen = mysql_query("INSERT INTO tabel_peminjaman (id,tgl_pinjam,nama_peminjam,jenis_kelamin,nomor_induk,jabatan,program_studi,kelas_semester,judul_buku1,jumlah1,judul_buku2,jumlah2,tgl_kembali) VALUES ('$id_pinjam','$tgl_pinjam','$namadosen','$jkdosen','$nip','$jabatandsn','$prodi_dosen','','$judul_buku3','$jumlah3','$judul_buku4','$jumlah4','$tgl_kembalidsn')");

  $queryjudul3 = mysql_query("SELECT * FROM daftar_buku_perpus WHERE judul_buku='$judul_buku3' ");
  $fetch_queryjudul3 = mysql_fetch_array($queryjudul3);
  $jumlah_book3= $fetch_queryjudul3['jumlah'];
  $riil_book3=$fetch_queryjudul3['riil'];
  $hasil3=$riil_book3 - $jumlah3;
  $kurangdsn = $jumlah_book3 - $hasil3;
  $keterangan = 'Belum Lengkap';
  $updatedsn = mysql_query("UPDATE daftar_buku_perpus SET riil='$hasil3', kurang='$kurangdsn', keterangan='$keterangan' WHERE judul_buku='$judul_buku3'");

  $queryjudul4 = mysql_query("SELECT * FROM daftar_buku_perpus WHERE judul_buku='$judul_buku4' ");
  $fetch_queryjudul4 = mysql_fetch_array($queryjudul4);
  $jumlah_book4= $fetch_queryjudul4['jumlah'];
  $riil_book4=$fetch_queryjudul4['riil'];
  $hasil4=$riil_book4 - $jumlah4;
  $kurangdsn2 = $jumlah_book4 - $hasil4;
  $keterangan = 'Belum Lengkap';
  $updatedsn2 = mysql_query("UPDATE daftar_buku_perpus SET riil='$hasil4', kurang='$kurangdsn2', keterangan='$keterangan' WHERE judul_buku='$judul_buku4'");
?>
<div class="row">

          <div class="span12">

            <div id="target-1" class="widget">

              <div class="widget-content">

                <h3>Data Berhasil Ditambahkan</h3>
                <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th style="width:8%; text-align:center">Tgl. Pinjam</th>
                    <th style="width:12%; text-align:center">Nama Peminjam</th>
                    <th style="width:5%; text-align:center">Status</th>
                    <th style="width:10%; text-align:center">Program Studi</th>
                    <th style="width:20%; text-align:center">Judul Buku 1</th>
                    <th style="width:1%; text-align:center">Jumlah</th>
                    <th style="width:20%; text-align:center">Judul Buku 2</th>
                    <th style="width:1%; text-align:center">Jumlah</th>
                    <th style="width:8%; text-align:center">Tgl. Max</th>

                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td><?php echo $tgl_pinjam; ?></td>
                    <td><?php echo $namadosen; ?></td>
                    <td><?php echo $jabatandsn; ?></td>
                    <td><?php echo $prodi_dosen; ?></td>
                   <td><?php echo $judul_buku3; ?></td>
                   <td><?php echo $jumlah3; ?></td>
                   <td><?php echo $judul_buku4; ?></td>
                   <td><?php echo $jumlah4; ?></td>
                   <td><?php echo $tgl_kembalidsn; ?></td>
                </tbody>

              </table>
                <br>
                <a href="javascript:void(0);" class="btn btn-primary"
                          onclick="window.open('pages/print_slip_pinjam_dsn.php?ID=<?php echo $id_pinjam; ?>','nama_window_pop_up','size=800,height=800,scrollbars=yes,resizeable=no')"><i class="btn-icon-only/ icon-print"> </i>Print</a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn  btn-success" href="?pages=rekap-peminjaman-buku"><i class="icon-list"></i>Lihat Seluruh Data</a>

              </div> <!-- /widget-content -->

            </div> <!-- /widget -->

          </div> <!-- /span12 -->
</div>
