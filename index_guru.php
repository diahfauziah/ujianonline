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
    
    <title>Home | Ujian Online</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='css/didactgothic.css' rel='stylesheet' type='text/css'>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	
	<!-- clipboard js -->
	<script src="js/clipboard.min.js"></script>
	<script src="js/tooltips.js"></script>
	
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
        font:400 15px;
        font-family: 'Lato', sans-serif;
        line-height: 1.8;
        background-color: #f8f8f8; 
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
        border-bottom-color: #e7e7e7;
        border-bottom-width: 1px;
      } 

      .navbar-nav li a:hover, .navbar-nav li.active a {
        color: #4ABDAC !important;
      }

      .menu {
        font-size: 13px;
      }
    
      .container {
          padding-right: 15px;
          padding-left: 15px;
          margin-right: auto;
          margin-left: auto;
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
      label {
        color: #676767; 
      }
      th {
        color: #ffffff;
        background-color: #F7B733;
        text-decoration: none;
        font-family: 'Didact Gothic', sans-serif;
      }
      .breadcrumb li {
        font-size: 12px;
      }
      .breadcrumb a {
        color: rgba(109, 116, 122, 1);
      }
      .breadcrumb a:hover {
        color: rgba(42, 100, 150, 1);
      }
      .breadcrumb > .active {
        color: rgba(186, 182, 182, 1);
      }
      .breadcrumb > li + li:before {
        color: #cccccc;
        content: " > ";
      }
      .table a:hover  {
        color: #4ABDAC;
      }

      .table span {
        /*color: #000000;*/
        color: #4ABDAC;
      }

      .table span:hover{
        /*color: #4ABDAC;*/
        color: #F7B733;
      }

      table {
        color: #676767;
        margin-top: 15px;
      }

      .link2 a:link {
        color: #818181;
      }
      .link2 a:visited {
        color: #818181;
      }
      .link2 a:hover {
        color: #4ABDAC;
      }
      .button {
        background-color: #4ABDAC;
        border: none;
        color: #ffffff;
        padding: 6px 12px;
        text-align: center;
        text-decoration: none;
        display: inline-block;;
        font-weight: 400;
        font-size: 14px;
        line-height: 1.42857143;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 4px;
      }
      .button1, .button1:link, .button1:visited, .col-md-3 a:link, .col-md-3 a:visited, .col-md-3 a:active {
        background-color: #4ABDAC;
        color: #ffffff;
        border: 1px solid #4ABDAC;
        border-radius: 0px;
      }
      .button1:hover, .col-md-3 a:hover, .button2:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }

      .button2, .button2:link, .button2:visited {
        background-color: #ffffff;
        color: #4ABDAC;
        border-color: #4ABDAC;
        border: 1px solid #4ABDAC;
        border-radius: 0px;
      }

      .judul a:link, a:visited {
        /*color: #2a2a2a;*/
        color: #4ABDAC;
      }

      .judul a:hover{
        /*color: #4ABDAC;*/
        /* color: #F7B733; */
        text-decoration: underline;
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
      .modal-content {
        border-radius: 0px;
      }
      .modal-body {
        padding: 10px;
      }
      .alert-success {
        color: #4abdac;
        background-color: #ecf8f6;
        border-color: #ecf8f6;
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
      .form-control {
        border-radius: 0px;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="topheader">
          <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a class="navbar-brand" href="#myPage" style="padding-left:120px;">Ujian Online</a> -->
          <a class="navbar-brand" href="#myPage">Ujian Online</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav menu">
            <li><a href="index_guru.php"><span class="glyphicon glyphicon-home" style="font-size:13px"></span> Beranda</a></li>
            <li><a href="kategori.php"><span class="fa fa-tag" style="font-size:13px"></span> Kategori</a></li>
          </ul>
          <!-- <ul class="nav navbar-nav navbar-right" style="padding-right:90px;"> -->
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
    <div class="container">
	  <?php include("koneksi.php"); ?>
      <div class="content">
        <h2 style="margin-bottom: 30px; color:#4ABDAC; font-family: 'Didact Gothic', sans-serif;">Daftar Ujian</h2>
        <div class="row">
          <div class="col-md-9">
            <form id="form1" action="index_guru.php" method="post" class="form-inline" role="form">
              <div class="form-group">
                <label class="col-md-2" style="color:#F7B733;">Kategori</label>
                <div class="col-md-4">
				  <select id="kategori" name="kategori" onchange="this.form.submit()" class="form-control">
					<?php
					  $dibuat = $_SESSION['userid'];
					  $kat = mysqli_query($link, "SELECT * FROM `mata_pelajaran` WHERE `dibuat_oleh`=1 or `dibuat_oleh`=$dibuat");
					  
					  if (isset($_POST['kategori'])){
						$_SESSION['matapelajaran'] = $_POST['kategori'];
					  }
					  
					  echo '<option value="0" ';
					  if ($_SESSION['matapelajaran']=="0"){
						  echo "selected";
					  }
					  echo '>All (Mata Pelajaran)</option>';
					  
					  
					  while($kate = mysqli_fetch_array($kat)){
						echo '<option value="';
						echo $kate['id_kategori'];
						echo '" ';
						if ($_SESSION['matapelajaran']==$kate['id_kategori']){
							echo 'selected';
						}
						echo '>';
						echo $kate['nama'];
						echo '</option>';
					  }
					  
					?>
                  </select>
                </div>
                <div class="col-md-offset-1 col-md-3" style="margin-left:30px">
                  <select id="kelas" name="kelas" onchange="this.form.submit()" class="form-control">
                    <?php
					  if ($_SESSION['kategori_guru']=="SMA"){
						$querykelas = "SELECT * FROM `kelas` WHERE id_kelas > 3 and (`dibuat_oleh`=1 or `dibuat_oleh`=$dibuat)";
					  } else {
						$querykelas = "SELECT * FROM `kelas` WHERE (id_kelas < 4 or id_kelas > 6) and (`dibuat_oleh`=1 or `dibuat_oleh`=$dibuat)";
					  }
					  $kel = mysqli_query($link, $querykelas);
					  
					  if (isset($_POST['kelas'])){
						$_SESSION['kelas'] = $_POST['kelas'];
					  }
					  
					  echo '<option value="0" ';
					  if ($_SESSION['kelas']=="0"){
						  echo "selected";
					  }
					  echo '>All (Kelas)</option>';
					  
					  
					  while($kate = mysqli_fetch_array($kel)){
						echo '<option value="';
						echo $kate['id_kelas'];
						echo '" ';
						if ($_SESSION['kelas']==$kate['id_kelas']){
							echo 'selected';
						}
						echo '>';
						echo $kate['nama'];
						echo '</option>';
					  }
					?>
                  </select>
                </div>
                
              </div>
            </form>
          </div>
          <div class="col-md-3">
            <a href="new_ujian.php" class="button button1 pull-right" style="margin-bottom:10px; text-decoration:none"><span class="glyphicon glyphicon-plus"></span> Buat Ujian Baru</a>
          </div>
        </div>

        <?php 
          if(!empty($_SESSION['statuspesan']))
          {
			if (($_SESSION['statuspesan'] == "sukses")){
				echo '<div class="alert alert-success">';
				echo   '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
				echo   '<strong>Berhasil!</strong> ';
				echo   $_SESSION['pesan'];
				echo '</div>';
				$_SESSION['statuspesan'] = "";
			} else if ($_SESSION["statuspesan"]=="gagal") {
				echo '<div class="alert alert-danger">';
				echo   '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
				echo   '<strong>Gagal!</strong>';
				echo   $_SESSION['pesan'];
				echo '</div>';
				$_SESSION['statuspesan'] = "";
			}
          }
        ?>
        <table class="table table-hover">
          <thead>
            <tr>
              <th style="text-align: left;">Judul</th>
              <th>Total Soal</th>
              <th>Mata Pelajaran</th>
              <th>Kelas</th>
              <th>Tampilan ujian</th>
              <th>Link ujian</th>
              <th>Laporan</th>
              <th>Terakhir diperbarui</th>
            </tr>
          </thead>
          <tbody>
            <?php
			  if ($_SESSION['matapelajaran']=="0" && $_SESSION['kelas']=="0"){
				$querymapel = "select * from info_ujian where dibuat_oleh=$dibuat order by modified_date desc";
			  } else if ($_SESSION['matapelajaran']!="0" && $_SESSION['kelas']=="0") {
				$idmapel = $_SESSION['matapelajaran'];
				$querymapel = "select * from info_ujian where dibuat_oleh=$dibuat and mata_pelajaran=$idmapel order by modified_date desc";
			  } else if ($_SESSION['matapelajaran']=="0" && $_SESSION['kelas']!="0") {
				$idkel = $_SESSION['kelas'];
				$querymapel = "select * from info_ujian where dibuat_oleh=$dibuat and id_kelas=$idkel order by modified_date desc";
			  } else {
				$idmapel = $_SESSION['matapelajaran'];
				$idkel = $_SESSION['kelas'];
				$querymapel = "select * from info_ujian where dibuat_oleh=$dibuat and mata_pelajaran=$idmapel and id_kelas=$idkel order by modified_date desc";
			  }
			  
              $query = mysqli_query($link, $querymapel);

              while($data = mysqli_fetch_array($query)){
                echo '<tr class="table-row">';
                echo '<td style="text-align: left;">';
                echo   '<div class="judul">';
                echo     '<a class="link-judul" href="view_ujian.php?id='.$data['id_ujian'].'"">'. $data['judul_ujian'] .'</a><br>';
                echo   '</div>';
                echo   '<div style="font-size: 12px; color:#aba8a8;" class="link2">';
                echo     '<a href="edit_ujian.php?id='.$data['id_ujian'].'">Edit</a> | <a href="#"  class="hapus" data-id='.$data['id_ujian'].' data-toggle="modal" data-target="#modalHapus">Hapus</a> | <a href="tambah_soal.php?id='.$data['id_ujian'].'">Tambah Soal</a>';
                echo   '</div>';    
                echo  '</td>';
                echo  '<td>'. $data['total_soal'] .'</td>';
				$idm = $data['mata_pelajaran'];
				$querynamamapel = "select * from mata_pelajaran where id_kategori=$idm";
				$qnm = mysqli_query($link, $querynamamapel);
				$namamp = mysqli_fetch_array($qnm);
                echo  '<td>';
				echo  $namamp['nama'];
				echo  '</td>';
				$idk = $data['id_kelas'];
				$querynmk = "select * from kelas where id_kelas=$idk";
				$qnk = mysqli_query($link, $querynmk);
				$namak = mysqli_fetch_array($qnk);
                echo  '<td>';
				echo  $namak['nama'];
				echo  '</td>';
                echo  '<td><a href="#" class="lihat_tampilan" data-id='.$data['id_ujian'].' data-toggle="tooltip" data-placement="top" title="Lihat tampilan siswa" ><span class="glyphicon glyphicon-eye-open"></span> </a> </td>';
                echo  '<td><a href="#" class="bagikan" data-toggle="tooltip" data-placement="top" data-id='.$data['url_ujian'].' title="Bagikan link ujian"><span class="glyphicon glyphicon-share-alt"></span> </a></td>';
                echo  '<td><a href="laporan_ujian.php?id='.$data['id_ujian'].'" data-toggle="tooltip" data-placement="top" title="Tampilkan laporan ujian"><span class="glyphicon glyphicon-stats"></span> </a></td>';
                echo  '<td>'. $data['modified_date'] .'</td>';
                echo '</tr>';      
              }
            ?>
          </tbody>
        </table>
        <!-- Modal Hapus -->
                  <div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="modalHapusLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" arial-label="close"><span aria-hidden="true"></span>&times;</button>
                          <h4 class="modal-title" id="modalHapusLabel">Hapus Ujian</h4>
                        </div>
                        <div class="modal-body">
                          <p style="padding-left:20px; margin-bottom:0px">Apakah anda ingin menghapus ujian <b id="p1"> Gerak Lurus Beraturan?</b>?</p>
                        </div>
                        <div class="modal-footer">
                          <!-- <a href="#" class="button button2 col-md-6" data-dismiss="modal" style="text-decoration:none;">Batalkan</a>
                          <a href="#" class="button button1 col-md-6" id="simpan" style="text-decoration:none;">Hapus Ujian</a> -->
                          <a  href="kategori.php" class="button button1" id="simpan" style="text-decoration:none;">Hapus Ujian</a>
                          <button class="btn btn-default" data-dismiss="modal" style="border-width:2px;">Batalkan</button>
                        </div>
                      </div>
                    </div>
                  </div>
        <!-- Modal Bagikan -->
          <div class="modal fade" id="modalBagikan" tabindex="-1" role="dialog" aria-labelledby="modalBagikanLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                 <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" arial-label="close"><span aria-hidden="true"></span>&times;</button>
                    <label class="modal-title">Link Ujian Deret Aritmetika</label>
                 </div>
                 <div class="modal-body">
                    <a href="#" id="modalshare" style="text-decoration: underline;"></a>
                    <button id="btn-tool" class="btn button button1 pull-right btn-copy-clip" data-clipboard-target="#modalshare">
						<img width="13" src="image/clippy.svg" alt="Copy to clipboard"> Copy
					</button>
                  </div>
                  <div class="modal-footer"></div>
               </div>
            </div>
          </div>  
      </div>
    </div>
	<footer class="text-center">
	  <p>2016 © Diah Fauziah. Ujian Online Template.</p>
    </footer>
  </body>
</html>
<script type="text/javascript">
  $(function(){
    $(".bagikan").click(function(){
      x = $(this).attr("data-id");
      $("#modalshare").text(x);
      $("#modalshare").attr("href", x);
    });
    $(".lihat_tampilan").click(function(){
      x = $(this).attr("data-id");
      $(this).attr("href","http://localhost/ujianonline/petunjuk.php?id="+x);
    });
    $(".hapus").click(function(){
      var x = "";
      var y = "";
      x = $(this).closest('.table-row').find('.link-judul').text();
      y = $(this).attr("data-id")
      $("#p1").html(x);
      $("#simpan").attr("href", "hapus_ujian.php?id="+y);
    });
  });
  
  $(function(){
	var clipboard = new Clipboard('.btn-copy-clip');

	clipboard.on('success', function(e) {
		e.clearSelection();
		showTooltip(e.trigger,'Disalin!');
	});

	clipboard.on('error', function(e) {
		showTooltip(e.trigger,fallbackMessage(e.action));
	}); 
  });
</script>