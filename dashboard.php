<?php
include "config/connect.php";
session_start();
error_reporting(0);
if (!isset($_SESSION['tingkat']))
{
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Sistem Informasi Perpustakaan AKN Lumajang</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">


<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style type="text/css">
    .tableakn{
      position: fixed;
      top:150px;
    }
      .logolembaga{
        width: 120px;
        height: 120px;
      }
      .anchor{
        width: 100%;
        height: 100%
        
      }
    </style>
</head>
<body>
<table cellspacing="0" cellpadding="0" align=center>
                        <tr>
                            <td rowspan="6"><img class="logolembaga" src="images/polinema-logo.png"/></td>
                            <td style="text-align: center; font-size: 13px"><b>KEMENTERIAN RISET TEKNOLOGI DAN PENDIDIKAN TINGGI</b></td>
                            <td rowspan="6" ><img class="logolembaga" src="images/aknl-logo.png" /></td>
                        </tr>
                        <tr>
                            <td style="text-align: center; font-size: 15px"><b>PROGRAM STUDI DILUAR DOMISILI (PDD) POLITEKNIK NEGERI MALANG</b></td>
                        </tr>
                        <tr>
                            <td style="text-align: center; font-size: 19px"><b>RINTISAN AKADEMI KOMUNITAS NEGERI LUMAJANG</b></td>
                        </tr>
                        <tr>
                            <td style="font-size: 12px; text-align: center">Sekretariat : SMKN 1 Lumajang, Jln HOS. Cokroaminoto 161 Telp.(0334) 8780440 Lumajang - 67311</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; font-size: 14px"><b>website : aknlumajang.ac.id      email : info@aknlumajang.ac.id</b></td>
                        </tr>
                        <tr>
                            <td style="text-align: center; font-size: 14px"><b>e-mail : aknlumajang@yahoo.com dan aknlumajang@gmail.com</b></td>
                        </tr>
                  </table>
                  <br>
<div class="navbar navbar-fixed-top ">
  <div class="navbar-inner">
    <div class="container"> 
    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="dashboard.php">Sistem Informasi Perpustakaan AKN Lumajang</a>
        <div class="nav-collapse">
          <ul class="nav pull-right">
              <li class="dropdown">           
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="icon-user"></i>
                &nbsp;&nbsp;<?php echo $_SESSION['username']; ?>
                <b class="caret"></b>
              </a>
              
              <ul class="dropdown-menu">
                <li><a href="logout.php">Logout</a></li>
              </ul>           
            </li>
          </ul>
        
      </div>
      <!--/.nav-collapse --> 
      
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <!--
        <li><a href="dashboard.php"><i class="icon-home"></i><span>Dashboard</span> </a> </li>
        -->
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-book"></i><span>Buku</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">            
            <li><a href="?pages=daftar-buku-perpus" id="dor">Daftar Buku Perpus</a></li>
            <li><a href="?pages=input-buku-perpus">Input Buku Perpus</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-list-alt"></i><span>Peminjaman Buku</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="?pages=pinjambuku">Peminjaman</a></li>
            <li><a href="?pages=pengembalian-buku">Pengembalian</a></li>
            <li><a href="?pages=rekap-peminjaman-buku">Rekap Seluruh Data</a></li>
            <li><a href="?pages=rekap-telat">Rekap Telat</a></li>
          </ul>
        </li>
        <?php
        if ($_SESSION['tingkat']=='admin') {
        ?>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user-md"></i><span>Management</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="?pages=input-pengurus">Tambah Pengurus</a></li>
            <li><a href="?pages=daftar-pengurus">Daftar Pengurus</a></li>
          </ul>
        </li>        
          
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i><span>Anggota</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="?pages=input-pengguna">Tambah Pengguna</a></li>
            <li><a href="?pages=daftar-pengguna">Daftar Dosen</a></li>
            <li><a href="?pages=daftar-pengguna-mhs">Daftar Mahasiswa</a></li>
          </ul>
        </li>
         <?php
        }
        ?>   
        <?php
        if ($_SESSION['tingkat']=='operator') {
        ?>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i><span>Anggota</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="?pages=input-pengguna">Tambah Pengguna</a></li>
            <li><a href="?pages=daftar-pengguna">Daftar Dosen</a></li>
            <li><a href="?pages=daftar-pengguna-mhs">Daftar Mahasiswa</a></li>
          </ul>
        </li>
        <?php
        }
        ?>
        <li>          
          <a href="?pages=settings">
            <i class="icon-cogs"></i>
            <span>Pengaturan</span>
          </a>                    
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="span12">
            <?php
              if($_GET['pages']){
              include 'pages/'.$_GET['pages'].'.php';
              }
            ?>
            <div id="target-1" class="widget">
              
            </div> <!-- /widget -->
            
          </div> <!-- /span12 -->
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>

<!-- /extra -->
<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
      <?php
      $tanggal=date('Y');
      ?>
        <div class="span12"> <center><a>&copy; <?php echo $tanggal; ?> AKN Lumajang</a> </center></div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
 
<script src="js/base.js"></script> 
<script>     

        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    pointColor: "rgba(220,220,220,1)",
				    pointStrokeColor: "#fff",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    pointColor: "rgba(151,187,205,1)",
				    pointStrokeColor: "#fff",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }

        var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }    

        $(document).ready(function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var calendar = $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          selectable: true,
          selectHelper: true,
          select: function(start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
              calendar.fullCalendar('renderEvent',
                {
                  title: title,
                  start: start,
                  end: end,
                  allDay: allDay
                },
                true // make the event "stick"
              );
            }
            calendar.fullCalendar('unselect');
          },
          editable: true,
          events: [
            {
              title: 'All Day Event',
              start: new Date(y, m, 1)
            },
            {
              title: 'Long Event',
              start: new Date(y, m, d+5),
              end: new Date(y, m, d+7)
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d-3, 16, 0),
              allDay: false
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d+4, 16, 0),
              allDay: false
            },
            {
              title: 'Meeting',
              start: new Date(y, m, d, 10, 30),
              allDay: false
            },
            {
              title: 'Lunch',
              start: new Date(y, m, d, 12, 0),
              end: new Date(y, m, d, 14, 0),
              allDay: false
            },
            {
              title: 'Birthday Party',
              start: new Date(y, m, d+1, 19, 0),
              end: new Date(y, m, d+1, 22, 30),
              allDay: false
            },
            {
              title: 'EGrappler.com',
              start: new Date(y, m, 28),
              end: new Date(y, m, 29),
              url: 'http://EGrappler.com/'
            }
          ]
        });
      });
    </script><!-- /Calendar -->
</body>
</html>
