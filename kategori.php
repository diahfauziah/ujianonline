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
        /*background-color: #4ABDAC; */
        border-bottom-color: #e7e7e7; 
        border-width: 1px;
      } 
      
      .navbar-nav li a:hover, .navbar-nav li.active a {
        color: #4ABDAC !important;
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
        background-color: #4ABDAC;  
        color: #ffffff;
        border-color: #4ABDAC; 
        border-width: 2px;
      }
      .btn-primary:hover {
        background-color: #ffffff;
        border-color: #4ABDAC;
        color: #4ABDAC;
        border-width: 2px;
      }
      .btn-simpan, .btn-simpan:active, .btn-simpan:focus {
        background-color: #F7b733;  
        color: #ffffff;
        border-color: #F7b733; 
        border-width: 2px;
      }
      .btn-simpan:hover {
        background-color: #ffffff;
        border-color: #F7b733;
        color: #F7b733;
        border-width: 2px;
      }
      .breadcrumb a {
        color: rgba(109, 116, 122, 1);
      }
      .breadcrumb a:hover {
        color: #4ABDAC;
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
      .button1, .button1:link, .button1:visited {
        background-color: #4ABDAC;
        color: #ffffff;
        border: 2px solid #4ABDAC;
      }
      .button1:hover {
        background-color: #ffffff;
        color: #4ABDAC;
        border: 2px solid #4ABDAC;
      }
      
      th {
        color: #ffffff;
        background-color: #F7B733;
        text-decoration: none;
        font-family: 'Didact Gothic', sans-serif;
      }
      .alert-success {
        color: #4abdac;
        background-color: #ecf8f6;
        border-color: #ecf8f6;
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
        color: #4ABDAC;
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
        color: #F7b733;
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
        background-color: #F7b733;
        background-image: #F7b733;
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
        border-left: 10px solid #F7b733;
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
        color: #F7b733;
        border-bottom-color: #e7e7e7;
      }
      a.list-group-item {
        color: #F7b733;
      }
      .list-group-item:visited, .list-group-item {
        background-color: #f8f8f8;
        border-color: #f8f8f8;
        color: #F7b733;
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
    
    <!-- Container -->
    <div class="container">
      <div class="content">
        <h2 style="color:#4ABDAC; font-family: 'Didact Gothic', sans-serif;">Kategori</h2>
        <p style="font-size:12px; margin-top:10px; color:#818181">Tambah/ubah <b>mata pelajaran</b> dan <b>kelas</b> yang tersedia</p>
        <br>
        <div class="row">
                <div class="col-md-offset-2 col-md-10 bhoechie-tab-container">
                    <div class="col-md-2 bhoechie-tab-menu">
                      <div class="list-group">
                        <a href="#tab1" data-toggle="tab" class="list-group-item active text-center">
                          Mata Pelajaran
                        </a>
                        <a href="#tab2" data-toggle="tab" class="list-group-item text-center">
                          Kelas
                        </a>
                      </div>
                    </div>
                    <div class="col-md-10 bhoechie-tab" style="background-color:#ffffff;">
                        <!-- flight section -->
                        <div class="bhoechie-tab-content active" id="tab1" style="background-color:#ffffff">
                            <a href="#" class="button button1" data-toggle="modal" data-target="#modalTambahKategori" style="margin-bottom:10px; text-decoration:none"><span class="glyphicon glyphicon-plus"></span> Tambah Mata Pelajaran</a>
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
                                  <th>Nama Mata Pelajaran</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody style="background-color:#ffffff">
							  <?php
							    $dibuat = $_SESSION['userid'];
								$mp1 = mysqli_query($link, "SELECT * FROM `mata_pelajaran` WHERE `dibuat_oleh`=1");
								
								while($data = mysqli_fetch_array($mp1)){
								  echo '<tr>';
								  echo   '<td>';
								  echo   $data['nama'];
								  echo   '<td></td>';
								  echo '</tr>';
								}
								
								$mp2 = mysqli_query($link, "SELECT * FROM `mata_pelajaran` WHERE `dibuat_oleh`=$dibuat");
								
								while($data1 = mysqli_fetch_array($mp2)){
								  echo '<tr>';
								  echo   '<td>';
								  echo   $data1['nama'];
								  echo   '<td><div style="font-size: 12px; color:#aba8a8;" class="link2"><a href="#">Edit</a> | <a href="#">Hapus</a></div></td>';
								  echo '</tr>';
								}
								
							  ?>
                              </tbody>
                            </table>
                        </div>
                        <!-- train section -->
                        <div class="bhoechie-tab-content" id="tab2" style="background-color:#ffffff">
                          <a href="#" class="button button1" data-toggle="modal" data-target="#modalKelas" style="margin-bottom:10px; text-decoration:none"><span class="glyphicon glyphicon-plus"></span> Tambah Kelas</a>
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
                                <th>Kelas</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody style="background-color:#ffffff">
                              <?php
							    $dibuat = $_SESSION['userid'];
								if ($_SESSION['kategori_guru']=="SMA"){
								  $querykelas = "SELECT * FROM `kelas` WHERE id_kelas > 3 and `dibuat_oleh`=1";
							    } else {
								  $querykelas = "SELECT * FROM `kelas` WHERE (id_kelas < 4 or id_kelas > 6) and `dibuat_oleh`=1";
							    } 
								$kel1 = mysqli_query($link, $querykelas);
								
								while($data2 = mysqli_fetch_array($kel1)){
								  echo '<tr>';
								  echo   '<td>';
								  echo   $data2['nama'];
								  echo   '<td></td>';
								  echo '</tr>';
								}
								
								$kel2 = mysqli_query($link, "SELECT * FROM `kelas` WHERE `dibuat_oleh`=$dibuat");
								
								while($data3 = mysqli_fetch_array($kel2)){
								  echo '<tr>';
								  echo   '<td>';
								  echo   $data3['nama'];
								  echo   '<td><div style="font-size: 12px; color:#aba8a8;" class="link2"><a href="#">Edit</a> | <a href="#">Hapus</a></div></td>';
								  echo '</tr>';
								}
								
							  ?>
                            </tbody>
                          </table>
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
            <h4 class="modal-title" id="modalTambahKategoriLabel">Mata Pelajaran Baru</h4>
          </div>
          <div class="modal-body">
            <form id="form1" action="newmapel.php" method="post" class="form form-inline"> 
              <div class="form-group col-md-12">
                <label class="form-control-label col-md-3">Nama</label>
                <input type="text" id="namamapel" name="namamapel" class="form-control col-md-9" style="width:70%">
              </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="button button1" id="simpan" style="text-decoration:none;">Simpan</button>
            <button class="btn btn-default" data-dismiss="modal" style="border-width:2px;">Batal</button>
			</form>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Kelas -->
    <div class="modal fade" id="modalKelas" tabindex="-1" role="dialog" aria-labelledby="modalKelas">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" arial-label="close"><span aria-hidden="true"></span>&times;</button>
            <h4 class="modal-title" id="modalKelasLabel">Kelas Baru</h4>
          </div>
          <div class="modal-body">
            <form id="form2" action="newkelas.php" method="post" class="form form-inline"> 
              <div class="form-group col-md-12">
                <label class="form-control-label col-md-3">Nama Kelas</label>
                <input type="text" id="namakelas" name="namakelas" class="form-control col-md-9" style="width:70%">
              </div>
          </div>
          <div class="modal-footer">
            <button class="button button1" id="simpan" style="text-decoration:none;">Simpan</button>
            <button class="btn btn-default" data-dismiss="modal" style="border-width:2px;">Batal</button>
			</form>
          </div>
        </div>
      </div>
    </div>
	<footer class="text-center">
	  <p>2016 © Diah Fauziah. Ujian Online Template.</p>
    </footer>
  </body>
  <script type="text/javascript">
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
  </script>
</html>
