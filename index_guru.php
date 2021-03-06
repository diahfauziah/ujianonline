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
	<link href="css/bootstrap-tagsinput.css" rel="stylesheet">
	<link href="css/bootstrap-tagsinput-typeahead.css" rel="stylesheet">
    <link href='css/didactgothic.css' rel='stylesheet' type='text/css'>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-tagsinput.min.js"></script>
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
	  $(function(){
		$("i.fa").hover(function(){
			$(this).toggleClass("fa-lg fa-2x");
		});  
	  });
    </script>

    <!-- Style -->
    <style>
      body {
        font:400 15px;
        font-family: 'Lato', sans-serif;
        line-height: 1.8;
        background-color: #f2f2f2; 
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
        color: #777 !important;
      }
	  li#cari:hover {
		background-color: #f8f8f8;
	  }
	  .navbar-nav li:hover {
        background-color:#e7e7e7;
      }
      .menu, ul.navbar-right {
        font-size: 15px;
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
        background-color: #ffbf30;
        text-decoration: none;
        font-family: 'Didact Gothic', sans-serif;
      }
      
      .table a:hover  {
        color: #30cbe8;
      }

      .table span {
        /*color: #000000;*/
        color: #ffbf30;
      }

      .table span:hover{
        /*color: #30cbe8;*/
		font-size:18px;
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
	  .link2 {
		outline:none;  
	  }
      .link2 a:hover {
        color: #30cbe8;
      }
      .button {
        background-color: #30cbe8;
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
        background-color: #30cbe8;
        color: #ffffff;
        border: 1px solid #30cbe8;
        border-radius: 0px;
      }
      .button1:hover, .col-md-3 a:hover, .button2:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }

      .button2, .button2:link, .button2:visited {
        background-color: #ffffff;
        color: #30cbe8;
        border-color: #30cbe8;
        border: 1px solid #30cbe8;
        border-radius: 0px;
      }

      .judul a:link, a:visited {
        /*color: #2a2a2a;*/
        color: #30cbe8;
      }
	   .judul {
		   font-size: 15px;
		   font-weight: bold;
	   }
      .judul a:hover{
        /*color: #30cbe8;*/
        /* color: #ffbf30; */
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
      
      /* The close button */
      .closebtn {
          margin-left: 15px;
          color: #ffffff;
          font-weight: bold;
          float: right;
          font-size: 22px;
          line-height: 20px;
          cursor: pointer;
          transition: 0.3s;
      }
		table.i.fa, table.i.fa:visited, table.i.fa:link {
			color: #30cbe8;
		}
		a:link, a, a:visited {
			color: #30cbe8;
		}
      /* When moving the mouse over the close button */
      .closebtn:hover {
          color: black;
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
	  .bootstrap-tagsinput {
		  min-width: 190px;
		  max-width: 500px;
	  }
	  select.form-control {
		  border-radius: 4px;
	  }
	  input:focus::-webkit-input-placeholder { color:transparent; }
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
					<!-- <a class="navbar-brand" href="#myPage" style="padding-left:120px;">Ujian Online</a> -->
					<a class="navbar-brand" href="#myPage">Ujian Online</a>
				  </div>
				  <div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav menu">
					  <li><a href="index_guru.php"><span class="glyphicon glyphicon-home" style="font-size:15px"></span> Beranda</a></li>
					  <li><a href="kategori.php"><span class="fa fa-tag" style="font-size:15px"></span> Kategori</a></li>
					</ul>
					<!-- <ul class="nav navbar-nav navbar-right" style="padding-right:90px;"> -->
					<ul class="nav navbar-nav navbar-right">
					  <li id="cari">
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
			  <?php include("koneksi.php"); ?>
				<div class="content">
					<h2 style="margin-bottom: 30px; color:#30cbe8; font-family: 'Georgia', serif; text-align:center">Daftar Ujian</h2>
					<div class="row">
					  <div class="col-md-9">
						<form id="form1" action="index_guru.php" method="post" class="form-inline" role="form">
						<?php 
							$dibuat = $_SESSION['userid'];
							$kat = mysqli_query($link, "SELECT * FROM `materi` WHERE `dibuat_oleh`=$dibuat");
							$numrows = mysqli_num_rows($kat);
							if($numrows==0){ ?>
								<div class="form-group">
								<label class="control-label" style="margin-right:10px;" for="kategori">Kategori</label>
								<input type="text" disabled placeholder="belum ada materi" />
								</div>
							  <div class="form-group">
								<input type="text" disabled placeholder="belum ada kelas" />
							  </div>
							<?php  } else {
						?>
						  <div class="form-group materi-tag">
							<label class="control-label" style="color:#ffbf30;margin-right:10px;" for="kategori">Kategori</label>
								<!-- <select id="kategori" name="kategori" onchange="this.form.submit()" class="form-control">
										 <?php
										  /* if (isset($_POST['kategori'])){
											$_SESSION['matapelajaran'] = $_POST['kategori'];
										  }
										  
										  echo '<option value="0" ';
										  if ($_SESSION['matapelajaran']=="0"){
											  echo "selected";
										  }
										  echo '>All (Materi)</option>';
										  
										  
										  while($kate = mysqli_fetch_array($kat)){
											echo '<option value="';
											echo $kate['id_materi'];
											echo '" ';
											/*if ($_SESSION['matapelajaran']==$kate['id_materi']){
												echo 'selected';
											}
											echo '>';
											echo $kate['nama'];
											echo '</option>';
										  } */
										  
										?> 
							  </select> -->
							  <?php if (isset($_POST['kategori'])) $_SESSION['matapelajaran'] = $_POST['kategori']; ?>
							  <input id="kategori" name="kategori" type="text" data-role="tagsinput" class="col-md-3 form-control" placeholder="Ketik materi yang dicari" />
						  </div>
						  <div class="form-group">
							<select id="kelas" name="kelas" onchange="this.form.submit()" class="form-control">
								<?php
										  $querykelas = "SELECT * FROM `kelas` WHERE `dibuat_oleh`=$dibuat";
										  
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
							<?php } ?>
						</form>
					  </div>
					  <div class="col-md-3">
						<a href="new_ujian.php" class="button button1 pull-right" style="margin-bottom:10px; text-decoration:none"><span class="glyphicon glyphicon-plus"></span> Buat Ujian Baru</a>
					  </div>
					</div>
					<?php 
					  if(!empty($_SESSION['statuspesan'])){
							if (($_SESSION['statuspesan'] == "sukses")){
								echo '<div class="alert alert-success">';
								echo   '<a href="#" class="closebtn" data-dismiss="alert" aria-label="close">&times;</a>';
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
							}
						$_SESSION['statuspesan'] = "";
					  }
					?>
					<table class="table table-hover ">
					  <thead>
						<tr>
						  <th style="text-align: left; width:25%">Judul</th>
						  <th style="">Total Soal</th>
						  <th style="width:20%">Materi</th>
						  <th style="width:10%">Kelas</th>
						  <th style="">Tampilan ujian</th>
						  <th style="">Link ujian</th>
						  <th>Laporan</th>
						  <th style="width:20%">Terakhir diperbarui</th>
						</tr>
					  </thead>
					  <tbody>
						<?php
							  if (($_SESSION['matapelajaran']=="0"||$_SESSION['matapelajaran']=="") && $_SESSION['kelas']=="0"){
								  $querymapel = "select * from info_ujian where dibuat_oleh=$dibuat";
							  } else if ($_SESSION['matapelajaran']!="0" && $_SESSION['kelas']=="0") {
									$matr = $_SESSION['matapelajaran'];
									$datam = explode(',',$matr);
									$bnyk = count($datam);
									$qrym = " ";
									for ($j = 0; $j < $bnyk; $j++){
										$qrymtemp = "id_materi='$datam[$j]' ";
										$qrym = "$qrym $qrymtemp";
										if ($j+1 < $bnyk) $qrym = "$qrym or ";
									}
									$querymt = "SELECT id_ujian FROM materi_ujian WHERE $qrym";
									
									$querymapel = "select * from info_ujian where dibuat_oleh=$dibuat and id_ujian IN ($querymt)";
							  } else if (($_SESSION['matapelajaran']=="0"||$_SESSION['matapelajaran']=="") && $_SESSION['kelas']!="0") {
								  $idkel = $_SESSION['kelas'];
								  $querymapel = "select * from info_ujian where dibuat_oleh=$dibuat and id_kelas=$idkel";
							  } else {
									$idkel = $_SESSION['kelas'];
									$matr = $_SESSION['matapelajaran'];
									$datam = explode(',',$matr);
									$bnyk = count($datam);
									$qrym = " ";
									for ($j = 0; $j < $bnyk; $j++){
										$qrymtemp = "id_materi='$datam[$j]' ";
										$qrym = "$qrym $qrymtemp";
										if ($j+1 < $bnyk) $qrym = "$qrym or ";
									}
									$querymt = "SELECT id_ujian FROM materi_ujian WHERE $qrym";
									
									$querymapel = "select * from info_ujian where dibuat_oleh=$dibuat and id_kelas=$idkel and id_ujian IN ($querymt)";
							  }      			  
						  
						  $query = mysqli_query($link, $querymapel);

							while($data = mysqli_fetch_array($query)){
							  echo '<tr class="table-row">';
							  echo '<td style="text-align: left;">';
							  echo   '<div class="judul">';
							  echo     '<a class="link-judul" href="tambah_soal.php?tab=1&id='.$data['id_ujian'].'"">'. $data['judul_ujian'] .'</a><br>';
							  echo   '</div>';
							  echo   '<div style="font-size: 13px; color:#aba8a8;" class="link2">';
							  echo     '<a href="edit_ujian.php?id='.$data['id_ujian'].'">Edit</a> | <a href="#"  class="hapus" style="outline:none;" data-id='.$data['id_ujian'].' data-toggle="modal" data-target="#modalHapus">Hapus</a> | <a href="tambah_soal.php?id='.$data['id_ujian'].'">Tambah Soal</a>';
							  echo   '</div>';    
							  echo  '</td>';
							  echo  '<td>'. $data['total_soal'] .'</td>';
							  $idm = $data['id_ujian'];
							  $querynamamapel = "select * from materi_ujian where id_ujian=$idm";
							  $qnm = mysqli_query($link, $querynamamapel);	
							  echo  '<td>';
									while ($datamateri = mysqli_fetch_array($qnm)){
										$idmtri = $datamateri['id_materi'];
										$qmtr = mysqli_query($link, "SELECT * FROM materi WHERE id_materi='$idmtri'");
										$qmtrdta = mysqli_fetch_array($qmtr);
										echo $qmtrdta['nama'];
										echo '; ';
									}
							  echo  '</td>';
									$idk = $data['id_kelas'];
									  $querynmk = "select * from kelas where id_kelas=$idk";
									  $qnk = mysqli_query($link, $querynmk);
									  $namak = mysqli_fetch_array($qnk);
							  echo  '<td>';
									echo  $namak['nama'];
									echo  '</td>';
							  echo  '<td><a href="#" class="lihat_tampilan" data-id='.$data['id_ujian'].' data-toggle="tooltip" data-placement="top" title="Lihat tampilan ujian" ><i class="fa fa-eye fa-lg"></i> </a> </td>';
							  echo  '<td><a href="#" class="bagikan" data-toggle="tooltip" data-placement="top" data-id='.$data['url_ujian'].' title="Bagikan link ujian"><i class="fa fa-share-alt fa-lg"></i> </a></td>';
							  echo  '<td><a href="laporan_ujian.php?id='.$data['id_ujian'].'" data-toggle="tooltip" data-placement="top" title="Lihat laporan ujian"><i class="fa fa-bar-chart fa-lg"></i> </a></td>';
								$yrdata = strtotime($data['modified_date']);
								$bulan = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
							  echo  '<td>';
							  echo date('j', $yrdata)." ".$bulan[date('n', $yrdata)]." ".date('Y', $yrdata).", ".date('G:i', $yrdata);
							  echo '</td>';
							  echo '</tr>';      
						  }
						?>
					  </tbody>
					</table>
					<br />
					<?php $numrow = mysqli_num_rows($query);
							if($numrow==0){
							  echo   '<tr><div style="text-align:center; color:#777; margin-top:-50px; background-color:#f8f8f8; padding-top:10px; padding-bottom:10px">Belum ada ujian yang dibuat. Silahkan buat ujian baru.</div></tr>';
					} ?>

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
							<a  href="kategori.php" class="button button1" id="simpan" style="text-decoration:none;">Hapus Ujian</a>
							<button class="button button1" data-dismiss="modal" style="border-width:2px; background-color:#e7e7e7; border-color:#e7e7e7; color:#777">Batalkan</button>
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
								<label class="modal-title">Link Ujian <b id="p2"></b></label>
							 </div>
							 <div class="modal-body">
								<a href="#" id="modalshare" style="text-decoration: underline;"></a>
								<div id="tulisansukses" style="display:inline"></div>
								<button id="btn-tool" class="btn button button1 pull-right btn-copy-clip" data-clipboard-target="#modalshare" style="background-color:#e7e7e7; border-color:#e7e7e7; color:#000000">
											<img width="13" src="image/clippy.svg" alt="Copy to clipboard"> Copy
										</button>
							 </div>
							 <div class="modal-footer"></div>
						  </div>
						</div>
					</div>  
				</div>
			</div>
		</div>
		<div id="footer">
		  <p>2016 © Diah Fauziah. Ujian Online Template.</p>
		</div>
	</div>
	
	<!-- Include jQuery. -->
    <script type="text/javascript" src="js/typeahead.bundle.min.js"></script>
	<script type="text/javascript" src="js/angular.min.js"></script>
	<script type="text/javascript" src="js/rainbow.min.js"></script>
	
  </body>
</html>

<script type="text/javascript">
	
	function SelectText(element) {
		var doc = document;
		var text = doc.getElementById(element);    
		if (doc.body.createTextRange) { // ms
			var range = doc.body.createTextRange();
			range.moveToElementText(text);
			range.select();
		} else if (window.getSelection) {
			var selection = window.getSelection();
			var range = doc.createRange();
			range.selectNodeContents(text);
			selection.removeAllRanges();
			selection.addRange(range);
			
		}
	}
	
  $(function(){
    $(".bagikan").click(function(){
      x = $(this).attr("data-id");
	  y = $(this).closest('.table-row').find('.link-judul').text();
	  $("#p2").text(y);
      $("#modalshare").text(x);
      $("#modalshare").attr("href", x);
    });
	$("#modalshare").click(function(e){
		e.preventDefault();
	});
    $(".lihat_tampilan").click(function(){
      x = $(this).attr("data-id");
      $(this).attr("href","http://localhost/ujianonline/petunjukguru.php?id="+x);
    });
    $(".hapus").click(function(){
      var x = "";
      var y = "";
      x = $(this).closest('.table-row').find('.link-judul').text();
      y = $(this).attr("data-id")
      $("#p1").html(x);
      $("#simpan").attr("href", "hapus_ujian.php?id="+y);
    });
    $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
        $(".alert-success").slideUp(500);
    });
	$("#btn-tool").click(function(){
		$("#tulisansukses").css({"background-color":"#dff0d8", "color":"#3c763d"}).text("Link telah berhasil di-copy!").fadeIn(1000).fadeOut(1000);	
	});
  });
  
	// TAGSINPUT
	localStorage.clear();
	
    var materi = new Bloodhound({
	  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
	  queryTokenizer: Bloodhound.tokenizers.whitespace,
	  prefetch: 'materi.php'
	});
	materi.initialize();
	
	var elt = $('input[name="kategori"]');
	elt.tagsinput({
	  itemValue: 'value',
	  itemText: 'text',
	  typeaheadjs: {
		name: 'materi',
		displayKey: 'text',
		source: materi.ttAdapter()
	  }
	});

	if (1==<?php
		if (isset($_SESSION['matapelajaran'])&&(!empty($_SESSION['matapelajaran']))){
			echo 1;
		} else {
			echo 0;
		}
	?>) {
		<?php
		$matr = $_SESSION['matapelajaran'];
		$datam = explode(',',$matr);
		$bnyk = count($datam);
		$qrym = " ";
		for ($j = 0; $j < $bnyk; $j++){
			$qrymtemp = "id_materi='$datam[$j]' ";
			$qrym = "$qrym $qrymtemp";
			if ($j+1 < $bnyk) $qrym = "$qrym or ";
		}
		$querymt = "SELECT * FROM materi WHERE $qrym";
		$datakat = mysqli_query($link, $querymt);
		
		if ($datakat){
			while ($datamateri = mysqli_fetch_array($datakat)){
				$idmtri = $datamateri['id_materi'];
				$qmtr = mysqli_query($link, "SELECT * FROM materi WHERE id_materi='$idmtri'");
				$qmtrdta = mysqli_fetch_array($qmtr);
				?> var x = <?php echo '"{\"value\":' .$qmtrdta['id_materi'] .', \"text\":\"' .$qmtrdta['nama'] .'\"}"'; ?>;
				var obj = jQuery.parseJSON(x);
				elt.tagsinput('add', obj);
				<?php
			}
		}?>
	}
	
	$('input[name="kategori"]').on('change', function(){
		$('#form1').submit();
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