<?php
  $id_pinjam = $_POST['id_pinjam'];
  $tgl_pinjam=$_POST['tgl_pinjam'];
  $nim=$_POST['nim'];
  $judul_buku1 = $_POST['judul_buku1'];
  $jumlah1 = $_POST['jumlah1'];
  $judul_buku2 = $_POST['judul_buku2'];
  $jabatanmhs= 'Mahasiswa';
  $jumlah2 = $_POST['jumlah2'];
  $tgl_kembali = date('Y-m-d', strtotime('+7 days', strtotime($tgl_pinjam)));
  $status_kembali = '0';

  $query = mysql_query("SELECT * FROM anggota_mahasiswa WHERE nim='$nim'");
  $fetch_data=mysql_fetch_array($query);
  $nama = $fetch_data['nama'];
  $jk = $fetch_data['jenis_kelamin'];
  $program_studi = $fetch_data['program_studi'];
  $kelas = $fetch_data['kelas'];

  $inputmahasiswa = mysql_query("INSERT INTO tabel_peminjaman (id,tgl_pinjam,nama_peminjam,jenis_kelamin,nomor_induk,jabatan,program_studi,kelas_semester,judul_buku1,jumlah1,judul_buku2,jumlah2,tgl_kembali,status_kembali) VALUES ('$id_pinjam','$tgl_pinjam','$nama','$jk','$nim','$jabatanmhs','$program_studi','$kelas','$judul_buku1','$jumlah1','$judul_buku2','$jumlah2','$tgl_kembali','$status_kembali')");

  $queryjudul1 = mysql_query("SELECT * FROM daftar_buku_perpus WHERE judul_buku='$judul_buku1' ");
  $fetch_queryjudul1 = mysql_fetch_array($queryjudul1);
  $jumlah_book= $fetch_queryjudul1['jumlah'];
  $riil_book=$fetch_queryjudul1['riil'];
  $hasil1=$riil_book - $jumlah1;
  $kurangmhs = $jumlah_book - $hasil1;
  $keterangan = 'Belum Lengkap';
  $updatemahasiswa = mysql_query("UPDATE daftar_buku_perpus SET riil='$hasil1', kurang='$kurangmhs', keterangan='$keterangan' WHERE judul_buku='$judul_buku1'");

  $queryjudul2 = mysql_query("SELECT * FROM daftar_buku_perpus WHERE judul_buku='$judul_buku2' ");
  $fetch_queryjudul2 = mysql_fetch_array($queryjudul2);
  $jumlah_book2= $fetch_queryjudul2['jumlah'];
  $riil_book2=$fetch_queryjudul2['riil'];
  $hasil2=$riil_book2 - $jumlah2;
  $kurangmhs2= $jumlah_book2 - $hasil2;
  $updatemahasiswa2 = mysql_query("UPDATE daftar_buku_perpus SET riil='$hasil2', kurang='$kurangmhs2', keterangan='$keterangan' WHERE judul_buku='$judul_buku2'");
?>
<div class="row">

          <div class="span12">

            <div id="target-1" class="widget">

              <div class="widget-content">

                <h3>Data Berhasil Ditambahkan</h3>
                <br>
                 <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th style="width:8%; text-align:center">Tgl. Pinjam</th>
                    <th style="width:12%; text-align:center">Nama Peminjam</th>
                    <th style="width:5%; text-align:center">Status</th>
                    <th style="width:10%; text-align:center">Program Studi</th>
                    <th style="width:10%; text-align:center">Kelas</th>
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
                    <td><?php echo $nama; ?></td>
                    <td><?php echo $jabatanmhs; ?></td>
                    <td><?php echo $program_studi; ?></td>
                    <td><?php echo $kelas; ?></td>
                   <td><?php echo $judul_buku1; ?></td>
                   <td><?php echo $jumlah1; ?></td>
                   <td><?php echo $judul_buku2; ?></td>
                   <td><?php echo $jumlah3; ?></td>
                   <td><?php echo $tgl_kembali; ?></td>
                </tbody>

              </table>
                <a href="javascript:void(0);" class="btn btn-primary"
                          onclick="window.open('pages/print_slip_pinjam_mhs.php?ID=<?php echo $id_pinjam; ?>','nama_window_pop_up','size=800,height=800,scrollbars=yes,resizeable=no')"><i class="btn-icon-only/ icon-print"> </i>Print</a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn  btn-success" href="?pages=rekap-peminjaman-buku"><i class="icon-list"></i> Lihat Seluruh Data</a>

              </div> <!-- /widget-content -->

            </div> <!-- /widget -->

          </div> <!-- /span12 -->
</div>
