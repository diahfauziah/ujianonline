<?php
	session_start();
	if ($_SESSION['role']!="guru"){
		header('location:login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Laporan Ujian | Ujian Online</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='css/didactgothic.css' rel='stylesheet' type='text/css'>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<!-- Include Font Awesome. -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <script type="text/javascript">
      $(function(){
        $('[data-toggle="tooltip"]').tooltip();
        //$(".tooltipIcon").tooltip();
        $(".bagikan").click(function(){
            $(this).tooltip("hide");
            $("#modalBagikan").modal("show");
            $('input.url').focus(function(){
                $(this).select();
            });
        });
      });
    </script>

    <!-- Style -->
    <style>
      body {
        font:400 15px Lato, sans-serif;
        line-height: 1.8;
        background-color: #f8f8f8;
      } 
	  html,body {
			margin:0;
			padding:0;
			height:100%;
		}
		#wrapper {
			min-height:100%;
			position:relative;
		}
		#header {
			
		}
		#content1 {
		}
		#footer {
			background:#f8f8f8;
			width:100%;
			height:50px;
			position:absolute;
			bottom:0;
			left:0;
			text-align:center;	
		}
      .container {
          padding-right: 15px;
          padding-left: 15px;
          margin-right: auto;
          margin-left: auto;
      }
      .btn {
        transition-duration: 0.4s;
        cursor: pointer;
      }
      .navbar {
        margin-bottom: 0;
        /*z-index: 9999; */
        font-size: 12px !important;
        border-radius: 0;
        /*background-color: #30cbe8; */
        border-bottom-color: #e7e7e7;
        border-bottom-width: 1px;
      } 

      .navbar-nav li a:hover, .navbar-nav li.active a {
        color: #30cbe8 !important;
      }
      
      .container {
          padding-right: 15px;
          padding-left: 15px;
          margin-right: auto;
          margin-left: auto;
      }
      .footer {
          background-color: #F4F4F4;
          border-top: 1px solid #e5e5e5;
          color: #999;
          padding: 20px 15px;
          background-color: #f5f5f5;
      }
      .footer, .content, .topheader {
          margin: 0 auto;
          max-width: 1024px;
      }
      .content {
        background-color: #ffffff;
        min-height: 600px;
        padding: 20px 12px;
      }
      .progress {
        margin-top: 5px;
        margin-bottom: 10px;
        border-radius: 0;
        overflow: visible;
      }
      .panel {
        margin-top: 10px;
      }
      span.highlight {
        background-color: yellow;
      } 
      #teksSoal {
        padding-left: 20px;
        padding-right: 10px;
      }
      .breadcrumb {
        background: rgba(245, 245, 245, 1);
        background-color: #ffffff;
        display: block;
      }
      th, label {
        color: #777; 
      }
      .breadcrumb li {
        font-size: 12px;
      }
      .breadcrumb a {
        color: #30cbe8;
      }
      .breadcrumb a:hover {
        text-decoration: underline;
      }
      .breadcrumb > .active {
        color: rgba(186, 182, 182, 1);
      }
      .breadcrumb > li + li:before {
        color: #cccccc;
        content: " > ";
      }
      .table a:hover  {
        color: #30cbe8;
      }

      .table span {
        /*color: #000000;*/
        color: #30cbe8;
      }

      .table span:hover{
        /*color: #30cbe8;*/
        color: #818181;
      }

      .link2 a:link, a:visited {
        color: #818181;
      }
      .link2 a:hover {
        color: #000000;
      }

      .btn-custom, .btn-custom:active, .btn-custom:focus {
        background-color: #30cbe8;  
        color: #ffffff;
        border-color: #30cbe8; 
      }

      .btn-custom:hover {
        background-color: #ffffff;
        border-color: #30cbe8;
        color: #30cbe8;
        border-width: 2px;
      }

      .btn-abu, .btn-abu:active, .btn-abu:focus {
        background-color: #ffffff;
        border-color: #adadad;
        color: #adadad;
      }
      .btn-abu:hover {
        background-color: #adadad;  
        color: #ffffff;
        border-color: #adadad; 
      }

      .judul a:link, a:visited {
        /*color: #2a2a2a;*/
        color: #30cbe8;
      }

      .judul a:hover{
        /*color: #30cbe8;*/
        color: #2a2a2a;
      }

      .table th, td {
        text-align: center;
      }
      .modal-dialog {
        height: 80% !important;
        padding-top:10%;
      }
      .modal-body {
        height: 80%;
        overflow: auto;
      }
      th {
        color: #ffffff;
        background-color: #ffbf30;
        text-decoration: none;
      }
      a:link {
        color: #30cbe8;
      }
      a:hover{
        text-decoration: underline;
      }
	  

    </style>
  </head>
  <body>
  <div id="wrapper">
    <!-- Navbar -->
	<div id="header">
		<nav class="navbar navbar-default">
		  <div class="container">
			<div class="topheader">
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#myPage">Ujian Online</a>
			  </div>
			  <div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav menu">
				  <li><a href="index_guru.php"><span class="glyphicon glyphicon-home" style="font-size:13px"></span> Beranda</a></li>
				  <li><a href="kategori.php"><span class="fa fa-tag" style="font-size:13px"></span> Kategori</a></li>
				</ul> 
				<ul class="nav navbar-nav navbar-right">
				  <li>
					<form class="navbar-form" role="search">
					<div class="input-group">
					  <input type="text" class="form-control" placeholder="Search">
					  <div class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
					  </div>
					</div>
				  </form>
				  </li>
				  <li><a href="#"> <?php echo $_SESSION["nama"]; ?> </a></li>
				  <li><a href="logout.php"><u>Keluar</u></a></li>
				</ul>
			  </div>
			</div>
		  </div>
		</nav>
	</div>
	<div id="content1">
	<div class="container">
      <?php include('koneksi.php'); 
            $id = $_GET['id'];
            $query = mysqli_query($link, "SELECT * FROM `info_ujian` WHERE `id_ujian`='$id' ");
            $ujian = mysqli_fetch_array($query);
      ?>
      <div class="content">
        <h2 style="margin: 14px; margin-bottom: 5px; color:rgba(186, 182, 182, 1); font-family: 'Georgia', serif; text-align:center;">Laporan Ujian <a href="http://localhost/ujianonline/tambah_soal.php?tab=1&id=<?php echo $ujian['id_ujian']?>"><?php echo $ujian['judul_ujian'] ?></a></h2>
         <div class="col-md-offset-2 col-md-8">
         <div class="panel panel-default">
            
              <?php include('koneksi.php'); 
                $id = $_GET['id'];
                $query = mysqli_query($link, "SELECT * FROM `laporan_ujian_guru` WHERE `id_ujian`='$id' ");
				$numrow = mysqli_num_rows($query);
                  echo '<table class="table table-hover" style="margin-top:0px;">
                    <thead>
                      <tr>
                        <th>Tanggal Akses</th>
                        <th>Nama Peserta</th>
                        <th>Skor</th>
                        <th>Total waktu</th>
                      </tr>
                    </thead>
                  <tbody>';
                  while($laporan = mysqli_fetch_array($query)){
                    echo '<tr>';
					$yrdata = strtotime($laporan['tanggal_akses']);
                    $bulan = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                    echo  '<td>'. date('j', $yrdata)." ".$bulan[date('n', $yrdata)]." ".date('Y', $yrdata).", ".date('G:i', $yrdata) .'</td>';
                    echo  '<td>'. $laporan["nama_peserta"] .'</td>';
                    echo  '<td>'. $laporan["nilai"] .'</td>';
						$jam = intval($laporan["total_waktu"] / 3600, 10);
						$menit = intval(($laporan["total_waktu"] % 3600) / 60, 10);
						$detik = intval($laporan["total_waktu"] % 60, 10);
						$tampilwaktu = "$jam jam  $menit menit $detik detik";
                    echo  '<td>'. $tampilwaktu .'</td>';
                    echo '</tr>';
                  };
                  echo '</tbody>
                </table>';
				?> 
				<?php 
				if($numrow==0){
                      echo   '<tr><div style="text-align:center; color:#777; background-color:#f8f8f8; padding-top:10px; padding-bottom:10px">Belum ada peserta yang mengikuti ujian ini</div></tr>';
                }
              ?>
         </div>
        </div>
      </div>
  </div>
    </div>
	<div id="footer">
	  <p>2016 © Diah Fauziah. Ujian Online Template.</p>
    </div>
  </div>
  </body>
</html>