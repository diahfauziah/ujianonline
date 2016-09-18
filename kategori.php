<?php
	session_start();
	if ($_SESSION['role']!="guru"){
		header('location:login.php');
	}
	if (isset($_GET['tab'])) {
		$statusfrom = $_GET['tab'];
	} else {
		$statusfrom = 0;
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Kategori | Ujian Online</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='css/didactgothic.css' rel='stylesheet' type='text/css'>
    <!-- Include Font Awesome. -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-tagsinput.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-tagsinput.min.js"></script>
    <script type="text/javascript">
      $(function(){
        $('[data-toggle="tooltip"]').tooltip();
      });
    </script>

    <!-- Style -->
    <style>
      body {
        font:400 15px Lato, sans-serif;
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
        /*background-color: #30cbe8; */
        border-bottom-color: #e7e7e7; 
        border-width: 1px;
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

      /*.menu li {
        background-color: #e7e7e7;
      } */
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
        background-color: #f8f8f8;
        min-height: 600px;
        padding: 20px 12px;
      }
      .progress {
        margin-top: 5px;
        margin-bottom: 10px;
        border-radius: 0;
        overflow: visible;
      }
      label {
        color: #818181;
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
      .breadcrumb li {
        font-size: 12px;
      }
      textarea {
        outline: none;
      }
      .txtstuff {
        overflow: hidden;
      }
      .hiddendiv {
        display: none;
        white-space: pre-wrap;
        word-wrap: break-word;
        overflow-wrap: break-word;
      }
      .common {
        width: 1050px;
        min-height: 50px;
        overflow: hidden;
      }

      .btn-primary, .btn-primary:active, .btn-primary:focus {
        background-color: #30cbe8;  
        color: #ffffff;
        border-color: #30cbe8; 
        border-width: 2px;
      }
      .btn-primary:hover {
        background-color: #ffffff;
        border-color: #30cbe8;
        color: #30cbe8;
        border-width: 2px;
      }
      .btn-simpan, .btn-simpan:active, .btn-simpan:focus {
        background-color: #ffbf30;  
        color: #ffffff;
        border-color: #ffbf30; 
        border-width: 2px;
      }
      .btn-simpan:hover {
        background-color: #ffffff;
        border-color: #ffbf30;
        color: #ffbf30;
        border-width: 2px;
      }
      .breadcrumb a {
        color: rgba(109, 116, 122, 1);
      }
      .breadcrumb a:hover {
        color: #30cbe8;
      }
      .breadcrumb > .active {
        color: rgba(186, 182, 182, 1);
      }
      .breadcrumb > li + li:before {
        color: #cccccc;
        content: " > ";
      }
      .tooltip-inner {
        text-align: left;
      }
      .panel {
        border-width: 1px;
      }
      .modal-dialog {
        height: 80% !important;
        padding-top:10%;
      }
      .modal-body {
        height: 80%;
        overflow: auto;
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
      .button1, .button1:link, .button1:visited {
        background-color: #30cbe8;
        color: #ffffff;
        border: 1px solid #30cbe8;
        border-radius: 0px;
      }
      .button4, .button4:link, .button4:visited {
        background-color: #e7e7e7;
        color: #777;
        border: 1px solid #e7e7e7;
        border-radius: 0px;
      }
      .button1:hover, .button2:hover, a.button:hover, .button4:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }
      
      th {
        color: #ffffff;
        background-color: #ffbf30;
        text-decoration: none;
        font-family: 'Didact Gothic', sans-serif;
      }
      footer {
        position:absolute;
        bottom:0;
        width:100%;
      }
      .link2 a:link {
        color: #818181;
      }
      .link2 a:visited {
        color: #818181;
      }
      .link2 a:hover {
        color: #30cbe8;
      }
    
      /*  bhoechie tab */
      div.bhoechie-tab-container{
        z-index: 10;
        background-color: #f8f8f8;
        padding: 0 !important;
        border-radius: 4px;
        -moz-border-radius: 4px;
        border:0px solid #ddd;
        margin-top: 0px;
        margin-left: 30px;
        -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
        box-shadow: 0 6px 12px rgba(0,0,0,.175);
        -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
        background-clip: padding-box;
        opacity: 0.97;
        filter: alpha(opacity=97);
      }
      div.bhoechie-tab-menu{
        padding-right: 0;
        padding-left: 0;
        padding-bottom: 0;
      }
      div.bhoechie-tab-menu div.list-group{
        margin-bottom: 0;
      }
      div.bhoechie-tab-menu div.list-group>a{
        margin-bottom: 0;
      }
      div.bhoechie-tab-menu div.list-group>a .glyphicon,
      div.bhoechie-tab-menu div.list-group>a .fa {
        color: #ffbf30;
      }
      div.bhoechie-tab-menu div.list-group>a:first-child{
        border-top-right-radius: 0;
        -moz-border-top-right-radius: 0;
      }
      div.bhoechie-tab-menu div.list-group>a:last-child{
        border-bottom-right-radius: 0;
        -moz-border-bottom-right-radius: 0;
      }
      div.bhoechie-tab-menu div.list-group>a.active,
      div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
      div.bhoechie-tab-menu div.list-group>a.active .fa{
        background-color: #ffbf30;
        background-image: #ffbf30;
        color: #ffffff;
      }
      div.bhoechie-tab-menu div.list-group>a.active:after{
        content: '';
        position: absolute;
        left: 100%;
        top: 50%;
        margin-top: -13px;
        border-left: 0;
        border-bottom: 13px solid transparent;
        border-top: 13px solid transparent;
        border-left: 10px solid #ffbf30;
      }

      div.bhoechie-tab-content{
        background-color: #ffffff;
        /* border: 1px solid #eeeeee; */
        padding-left: 20px;
        padding-top: 10px;
      }

      div.bhoechie-tab div.bhoechie-tab-content:not(.active){
        display: none;
      }
      .list-group-item.active, .list-group-item.active:focus, .list-group-item.active:hover  {
        border-color: #f8f8f8;
      }
      a.list-group-item:hover {
        background-color: #ffffff;
        color: #ffbf30;
        border-bottom-color: #e7e7e7;
      }
      a.list-group-item {
        color: #ffbf30;
      }
      .list-group-item:visited, .list-group-item {
        background-color: #f8f8f8;
        border-color: #f8f8f8;
        color: #ffbf30;
        border-bottom-color: #e7e7e7;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <!-- Navbar -->
    <nav class="navbar navbar-default">
      <div class="container">
	    <?php include("koneksi.php"); ?>
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
    
    <!-- Container -->
    <div class="container">
      <div class="content">
        <h2 style="color:#30cbe8; font-family: 'Georgia', serif;">Kategori</h2>
        <p style="font-size:12px; margin-top:10px; color:#818181">Tambah/ubah <b>materi</b> dan <b>kelas</b> yang tersedia</p>
        <br>
        <div class="row">
          <div class="col-md-offset-2 col-md-10 bhoechie-tab-container">
            <div class="col-md-2 bhoechie-tab-menu">
                      <div class="list-group">
                        <a href="#tab1" data-toggle="tab" class="list-group-item <?php if($statusfrom==0) echo 'active '; ?> text-center">Materi</a>
                        <a href="#tab2" data-toggle="tab" class="list-group-item <?php if($statusfrom==1) echo 'active '; ?> text-center">Kelas</a>
                      </div>
            </div>
            <div class="col-md-10 bhoechie-tab" style="background-color:#ffffff;">
              <div class="bhoechie-tab-content <?php if($statusfrom==0) echo 'active '; ?>" id="tab1" style="background-color:#ffffff">
                <a href="#" class="button button1" data-toggle="modal" data-target="#modalTambahKategori" style="margin-bottom:10px; text-decoration:none; outline:none; font-size:13px; border-radius:15px;"><span class="glyphicon glyphicon-plus"></span> Tambah Materi</a>
                <?php 
				  if(!empty($_SESSION['statuspesan'])&&$statusfrom==0)
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
                      <th>Daftar Materi</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody style="background-color:#ffffff">
    							  <?php
    							    $dibuat = $_SESSION['userid'];
    								/*  $mp1 = mysqli_query($link, "SELECT * FROM `mata_pelajaran` WHERE `dibuat_oleh`=1");
										  while($data = mysqli_fetch_array($mp1)){
										  echo '<tr>';
										  echo   '<td>';
										  echo   $data['nama'];
										  echo   '<td></td>';
										  echo '</tr>'; }
      								} */
										
    								  $mp2 = mysqli_query($link, "SELECT * FROM `materi` WHERE `dibuat_oleh`=$dibuat");
    								
        							while($data1 = mysqli_fetch_array($mp2)){
        							  echo '<tr>';
        							  echo   '<td class="kategori">';
        							  echo   $data1['nama'];
        							  echo   '<td><div style="font-size: 12px; color:#aba8a8;" class="link2"><a href="#" data-toggle="modal" data-target="#modalEditKategori" data-id="'.$data1['id_materi'].'">Edit</a> | <a href="#" data-toggle="modal" data-target="#modalHapusKategori" data-id="'.$data1['id_materi'].'">Hapus</a></div></td>';
        							  echo '</tr>';
        							}
                    ?>
                  </tbody>
                </table>
				<?php $numrow = mysqli_num_rows($mp2);
					if($numrow==0){
					  echo   '<tr><div style="text-align:center; color:#777; margin-top:-20px; background-color:#f8f8f8; padding-top:10px; padding-bottom:10px">Belum ada materi yang ditambahkan.</div></tr>';
					} ?>
				<br />
              </div>

              <!-- class section -->
              <div class="bhoechie-tab-content <?php if($statusfrom==1) echo 'active '; ?>" id="tab2" style="background-color:#ffffff">
                <a href="#" class="button button1" data-toggle="modal" data-target="#modalKelas" style="margin-bottom:10px; text-decoration:none; font-size:13px; border-radius:15px;"><span class="glyphicon glyphicon-plus"></span> Tambah Kelas</a>
  				<?php 
				  if(!empty($_SESSION['statuspesan']) && $statusfrom==1)
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
                      <th>Daftar Kelas</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody style="background-color:#ffffff">
                    <?php
							        $dibuat = $_SESSION['userid'];
      								/*if ($_SESSION['kategori_guru']=="SMA"){
      								  $querykelas = "SELECT * FROM `kelas` WHERE id_kelas > 3 and `dibuat_oleh`=1";
      							    } else {
      								  $querykelas = "SELECT * FROM `kelas` WHERE (id_kelas < 4 or id_kelas > 6) and `dibuat_oleh`=1";
      							    } 
      								$kel1 = mysqli_query($link, $querykelas);
      								while($data2 = mysqli_fetch_array($kel1)){
      								  echo '<tr>';
      								  echo   '<td class="kelas">';
      								  echo   $data2['nama'];
      								  echo   '<td></td>';
      								  echo '</tr>';
      								} */
								
								      $kel2 = mysqli_query($link, "SELECT * FROM `kelas` WHERE `dibuat_oleh`=$dibuat");
      								while($data3 = mysqli_fetch_array($kel2)){
      								  echo '<tr>
      								         <td class="kelas">'.$data3['nama'].'</td>
      								         <td><div style="font-size: 12px; color:#aba8a8;" class="link2"><a href="#" data-toggle="modal" data-target="#modalEditKelas" data-id="'.$data3['id_kelas'].'">Edit</a> | <a href="#" data-toggle="modal" data-target="#modalHapusKelas" data-id="'.$data3['id_kelas'].'">Hapus</a></div></td>
      								      </tr>';
      								}
							      ?>
                  </tbody>
                </table>
				<?php $numrow = mysqli_num_rows($kel2);
					if($numrow==0){
					  echo   '<tr><div style="text-align:center; color:#777; margin-top:-20px; background-color:#f8f8f8; padding-top:10px; padding-bottom:10px">Belum ada kelas yang ditambahkan.</div></tr>';
				} ?>
				<br />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Kategori -->
    <div class="modal fade" id="modalTambahKategori" tabindex="-1" role="dialog" aria-labelledby="modalTambahKategoriLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" arial-label="close"><span aria-hidden="true"></span>&times;</button>
            <h4 class="modal-title" id="modalTambahKategoriLabel">Tambah Materi Baru</h4>
          </div>
          <form id="form1" autocomplete="off" action="newmapel.php" method="post" class="form form-inline"> 
            <div class="modal-body">
                <div class="form-group col-md-12">
                  <label class="form-control-label col-md-3">Nama</label>
                  <input type="text" id="namamapel" name="namamapel" class="form-control col-md-9" style="width:70%">
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="button button1" id="simpan" style="text-decoration:none;">Simpan</button>
              <button class="button button4" data-dismiss="modal" style="border-width:2px;">Batal</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalEditKategori" tabindex="-1" role="dialog" aria-labelledby="modalEditKategoriLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" arial-label="close"><span aria-hidden="true"></span>&times;</button>
            <h4 class="modal-title" id="modalEditKategoriLabel">Edit Materi</h4>
          </div>
		  <form id="form1" autocomplete="off" action="editmapel.php" method="post" class="form form-inline"> 
			  <div class="modal-body">
				<div class="form-group col-md-12">
				  <label class="form-control-label col-md-3">Nama</label>
				  <input type="text" id="namaeditmapel" name="namaeditmapel" class="form-control col-md-9" style="width:70%" value="tes">
				</div>
				<input type="hidden" id="idmapel" name="idmapel" />
			  </div>
			  <div class="modal-footer">
				<button type="submit" class="button button1" id="simpan1" style="text-decoration:none; margin-right:5px">Perbarui</a>
				<button type="reset" class="button button4" data-dismiss="modal" style="border-width:2px;">Batal</button>
			  </div>
		  </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalHapusKategori" tabindex="-1" role="dialog" aria-labelledby="modalTambahKategoriLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" arial-label="close"><span aria-hidden="true"></span>&times;</button>
            <h4 class="modal-title" id="modalTambahKategoriLabel">Hapus Materi</h4>
          </div>
          <form id="form1" autocomplete="off" action="hapusmapel.php" method="post" class="form form-inline"> 
            <div class="modal-body">
            Apakah Anda ingin menghapus <b id="namahapusmapel"></b> ?
            </div>
			<input type="hidden" id="idmapelhapus" name="idmapelhapus" />
            <div class="modal-footer">
              <button type="submit" class="button button1" id="simpan" style="text-decoration:none;">Hapus</button>
              <button type="reset" class="button button4" data-dismiss="modal" style="border-width:2px;">Batal</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal Kelas -->
    <div class="modal fade" id="modalKelas" tabindex="-1" role="dialog" aria-labelledby="modalKelas">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" arial-label="close"><span aria-hidden="true"></span>&times;</button>
            <h4 class="modal-title" id="modalKelasLabel">Tambah Kelas Baru</h4>
          </div>
          <form id="form4" autocomplete="off" action="newkelas.php" method="post" class="form form-inline"> 
            <div class="modal-body">
                <div class="form-group col-md-12">
                  <label class="form-control-label col-md-3">Nama Kelas</label>
                  <input type="text" id="namakelas" name="namakelas" class="form-control col-md-9" style="width:70%">
                </div>
            </div>
            <div class="modal-footer">
              <button class="button button1" id="simpan" style="text-decoration:none;">Simpan</button>
              <button class="button button4" data-dismiss="modal" style="border-width:2px;">Batal</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalEditKelas" tabindex="-1" role="dialog" aria-labelledby="modalEditKelasLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" arial-label="close"><span aria-hidden="true"></span>&times;</button>
            <h4 class="modal-title" id="modalEditKelasLabel">Edit Kelas</h4>
          </div>
          <form id="form2" autocomplete="off" action="editkelas.php" method="post" class="form form-inline"> 
          <div class="modal-body">
              <div class="form-group col-md-12">
                <label class="form-control-label col-md-3">Nama Kelas</label>
                <input type="text" id="namaeditkelas" name="namaeditkelas" class="form-control col-md-9" style="width:70%">
              </div>
			  <input type="hidden" id="idkelasedit" name="idkelasedit" />
          </div>
          <div class="modal-footer">
            <button type="submit" class="button button1" id="simpan2" style="text-decoration:none;">Perbarui</button>
            <button type="reset" class="button button4" data-dismiss="modal" style="border-width:2px;">Batal</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalHapusKelas" tabindex="-1" role="dialog" aria-labelledby="modalKelas">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" arial-label="close"><span aria-hidden="true"></span>&times;</button>
            <h4 class="modal-title" id="modalKelasLabel">Hapus Kelas</h4>
          </div>
          <form id="form1" autocomplete="off" action="hapuskelas.php" method="post" class="form form-inline"> 
            <div class="modal-body">
            Apakah Anda ingin menghapus <b id="namahapuskelas"></b> ?
            </div>
			<input type="hidden" id="idkelashapus" name="idkelashapus" />
            <div class="modal-footer">
              <button type="submit" class="button button1" id="simpan" style="text-decoration:none;">Hapus</button>
              <button class="button button4" data-dismiss="modal" style="border-width:2px;">Batal</button>
            </div>
          </form>
        </div>
      </div>
    </div>
	<footer class="text-center">
	  <p>2016 © Diah Fauziah. Ujian Online Template.</p>
    </footer>
  </body>
  <script type="text/javascript">
	$('#modalTambahKategori').on('shown.bs.modal', function() {
		$('#namamapel').focus();
	});
	
	$('#modalEditKategori').on('shown.bs.modal', function() {
		$('#namaeditmapel').focus();
	});
	
	$('#modalKelas').on('shown.bs.modal', function() {
		$('#namakelas').focus();
	});
	
	$('#modalEditKelas').on('shown.bs.modal', function() {
		$('#namaeditkelas').focus();
	});
	
    $(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
        });
    });
    $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
      $(".alert-success").slideUp(500);
    });

    $('a[data-target="#modalEditKelas"]').click(function(){
      var x = $(this).attr('data-id');
      var y = $(this).closest('tr').find('td.kelas').text();
      $('input#namaeditkelas').val(y);
      $('input#idkelasedit').val(x);
    });

    $('a[data-target="#modalHapusKelas"]').click(function(){
	  var x = $(this).attr('data-id');
      var y = $(this).closest('tr').find('td.kelas').text();
      $('#namahapuskelas').text(y);
	  $('input#idkelashapus').val(x);
    });

    $('a[data-target="#modalEditKategori"]').click(function(){
      var x = $(this).attr('data-id');
      var y = $(this).closest('tr').find('td.kategori').text();
      $('input#namaeditmapel').val(y);
	  $('input#idmapel').val(x);
    });

    $('a[data-target="#modalHapusKategori"]').click(function(){
      var y = $(this).closest('tr').find('td.kategori').text();
	  var x = $(this).attr('data-id');
      $('#namahapusmapel').text(y);
	  $('input#idmapelhapus').val(x);
    });
    
  </script>
</html>
