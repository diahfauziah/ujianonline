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
    
    <title>Buat Ujian Baru | Ujian Online</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='css/didactgothic.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap-tagsinput.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <script src="js/bootstrap-tagsinput.min.js"></script>
	
	<!-- Froala -->
      <!-- Include Font Awesome. -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Include Editor style. -->
    <link href="froala/css/froala_editor.min.css" rel="stylesheet" type="text/css" />
    <link href="froala/css/froala_style.min.css" rel="stylesheet" type="text/css" />

    <!-- Include Code Mirror style -->
    <link rel="stylesheet" href="css/codemirror.min.css">
	
	<!-- Include Editor Plugins style. -->
    <link rel="stylesheet" href="froala/css/plugins/char_counter.css">
    <link rel="stylesheet" href="froala/css/plugins/code_view.css">
    <link rel="stylesheet" href="froala/css/plugins/colors.css">
    <link rel="stylesheet" href="froala/css/plugins/emoticons.css">
    <link rel="stylesheet" href="froala/css/plugins/file.css">
    <link rel="stylesheet" href="froala/css/plugins/fullscreen.css">
    <link rel="stylesheet" href="froala/css/plugins/image.css">
    <link rel="stylesheet" href="froala/css/plugins/image_manager.css">
    <link rel="stylesheet" href="froala/css/plugins/line_breaker.css">
    <link rel="stylesheet" href="froala/css/plugins/quick_insert.css">
    <link rel="stylesheet" href="froala/css/plugins/table.css">
    <link rel="stylesheet" href="froala/css/plugins/video.css">
    <!-- CSS rules for styling the element inside the editor such as p, h1, h2, etc. -->
    <link href="froala/css/froala_style.min.css" rel="stylesheet" type="text/css" />
	
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
        border-bottom-width: 1px;
        font-size: 12px !important;
        border-radius: 0;
        /*background-color: #30cbe8; */
        border-bottom-color: #e7e7e7;
      } 
      
      .navbar-nav li a:hover, .navbar-nav li.active a {
        color: #30cbe8 !important;
      }
     
      /*.menu li {
        background-color: #e7e7e7;
      } */
      
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
      label {
        color: #818181;
      }
      .panel {
        margin-top: 10px;
        border: 0px;
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
      footer {
        position:relative;
        bottom:0;
        width:100%;
      }
      .form-control {
        border-radius: 0px;
      }
      a:link, a:visited {
        color: #30cbe8;
      }
      a:hover {
        text-decoration: underline;
      }
	  .modal-dialog {
        height: 80% !important;
        padding-top:10%;
      }
      .modal-body {
        height: 80%;
        overflow: auto;
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
	<?php include("koneksi.php"); ?>
      <div class="col-md-offset-2 col-md-8">
          <div class="panel panel-default" id="panelSoal" style="margin-top: 10px;">
            <div class="panel-body">
              <h3 style="text-align:center; color:#30cbe8; font-family:'Georgia', serif;">Buat Ujian Baru</h3>
              <hr />
            <form id="form" autocomplete="off" class="form-horizontal" action="input_ujian.php" method="post">
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
              <div class="form-group">
                <label class="control-label col-md-3" for="Judul">Judul</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="Judul" name="Judul">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3" for="Waktu">Waktu</label>
                <div class="col-md-2">
                  <input type="number" class="form-control" id="Waktu" name="Waktu">
                </div>
                <!-- <div class="col-md-1" style="margin-left:-15px">
                   Jam
                 </div>
				 <div class="col-md-2">
                  <input type="number" class="form-control" id="Jam" name="Jam">
                </div> -->
                <div class="col-md-1" style="margin-left:-15px">
                   Menit
                 </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3" for="KategoriUjian">Kategori</label>
                <div class="col-md-5">
                  <select class="form-control" id="KategoriUjian" name="KategoriUjian" required>
                    <option value="">Pilih Materi</option>
					<?php
					  $dibuat = $_SESSION['userid'];
					  $kat = mysqli_query($link, "SELECT * FROM `mata_pelajaran` WHERE `dibuat_oleh`=$dibuat");
					  
					  while($kate = mysqli_fetch_array($kat)){
						echo '<option value="';
						echo $kate['id_kategori'];
						echo '">';
						echo $kate['nama'];
						echo '</option>';
					  }
					?>
                  </select>
                </div>
                <div class="col-md-4">
                  <select class="form-control" id="KategoriKelas" name="KategoriKelas" required>
                    <option value="">Pilih Kelas</option>
                    <?php
					  if ($_SESSION['kategori_guru']=="SMA"){
						$querykelas = "SELECT * FROM `kelas` WHERE id_kelas > 3 and (`dibuat_oleh`=$dibuat)";
					  } else {
						$querykelas = "SELECT * FROM `kelas` WHERE (id_kelas < 4 or id_kelas > 6) and (`dibuat_oleh`=$dibuat)";
					  }
					  $kel = mysqli_query($link, $querykelas);
					  
					  while($kate = mysqli_fetch_array($kel)){
						echo '<option value="';
						echo $kate['id_kelas'];
						echo '">';
						echo $kate['nama'];
						echo '</option>';
					  }
					?>
                  </select>
                 </div>
              </div>
			  <div class="form-group" style="margin-top:-10px">
				<label class="control-label col-md-3" for="modal"></label>
				<div class="col-md-5">
					<a href="#" data-toggle="modal" data-target="#modalTambahKategori" style="outline:none;"><i class="fa fa-plus"></i> <u>Tambah materi baru</u></a>
				</div>
				<div class="col-md-4">
					<a href="#" data-toggle="modal" data-target="#modalKelas" style="outline:none;"><i class="fa fa-plus"></i> <u>Kelas baru</u></a>
				</div>
			  </div>
              <div class="form-group">
                <label class="control-label col-md-3" for="AcakSoal">Acak soal</label>
                <div class="col-md-9">
                   <select class="form-control" id="AcakSoal" name="AcakSoal">
                    <option value="1">Ya</option>
                    <option value="0">Tidak</option>
                  </select>
                 </div>
              </div>
               <div class="form-group">
                  <label class="control-label col-md-3" for="PerluLogin">Peserta perlu login</label>
                  <div class="col-md-9">
                    <select class="form-control" id="PerluLogin" name="PerluLogin">
                      <option value="1">Ya</option>
                      <option value="0">Tidak</option>
                    </select>
                  </div>
                </div> 
				<div class="form-group">
                  <label class="control-label col-md-3" for="Petunjuk">Petunjuk</label>
                  <div class="col-md-9">
                    <textarea id="Petunjuk" name="Petunjuk" class="form-control" rows="15">
					</textarea>
                  </div>
                </div> 
              <div class="form-group">
                <div class="col-md-offset-3 col md-9" style="padding-left:15px;">
              <!--    <a href="index_guru.php" type="button" class="btn btn-simpan" > Simpan</a> -->
                  <input type="submit" name="submit" value="Simpan" class="submit-button btn btn-simpan" >
                </div>
              </div>
           </form>
          </div>
          </div>
      </div>
    </div>
	<div class="modal fade" id="modalTambahKategori" tabindex="1" role="dialog" aria-labelledby="modalTambahKategoriLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" arial-label="close"><span aria-hidden="true"></span>&times;</button>
            <h4 class="modal-title" id="modalTambahKategoriLabel">Materi Baru</h4>
          </div>
            <div class="modal-body">
                <div class="form-group col-md-12">
                  <label class="form-control-label col-md-3">Nama</label>
                  <input type="text" autocomplete="off" id="namamapel" name="namamapel" class="form-control col-md-9" style="width:70%">
                </div>
            </div>
            <div class="modal-footer">
              <button onclick="addmapel()" class="button button1" data-dismiss="modal" id="simpan" style="text-decoration:none;">Simpan</button>
              <button class="button button4" data-dismiss="modal" style="border-width:2px;">Batal</button>
            </div>
        </div>
      </div>
    </div>
	<div class="modal fade" id="modalKelas" tabindex="1" role="dialog" aria-labelledby="modalKelas">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" arial-label="close"><span aria-hidden="true"></span>&times;</button>
            <h4 class="modal-title" id="modalKelasLabel">Kelas Baru</h4>
          </div>
            <div class="modal-body">
                <div class="form-group col-md-12">
                  <label class="form-control-label col-md-3">Nama Kelas</label>
                  <input type="text" id="namakelas" autocomplete="off" name="namakelas" class="form-control col-md-9" style="width:70%">
                </div>
            </div>
            <div class="modal-footer">
              <button onclick="addkelas()" class="button button1" id="simpan" data-dismiss="modal" style="text-decoration:none;">Simpan</button>
              <button class="button button4" data-dismiss="modal" style="border-width:2px;">Batal</button>
            </div>
        </div>
      </div>
    </div>
    <footer class="text-center">
	  <p>2016 © Diah Fauziah. Ujian Online Template.</p>
    </footer>
	
	<!-- Include jQuery. -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/tooltipsy.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-tagsinput.min.js"></script>

    <!-- Include JS files. -->
    <script type="text/javascript" src="froala/js/froala_editor.min.js"></script>

    <!-- Include Code Mirror. -->
    <script type="text/javascript" src="js/codemirror.min.js"></script>
    <script type="text/javascript" src="js/xml.min.js"></script>

    <!-- Include Plugins. -->
    <script type="text/javascript" src="froala/js/plugins/align.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/char_counter.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/code_beautifier.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/code_view.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/colors.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/emoticons.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/entities.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/file.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/font_family.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/font_size.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/fullscreen.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/image.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/image_manager.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/inline_style.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/line_breaker.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/link.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/lists.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/paragraph_format.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/paragraph_style.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/quote.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/table.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/save.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/url.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/video.min.js"></script>
	
	<!-- jquery validation -->
	<script src="js/jquery.validate.min.js"></script>
	<script>
		$('#modalTambahKategori').on('shown.bs.modal', function() {
			$('#namamapel').focus();
		});
		
		$('#modalKelas').on('shown.bs.modal', function() {
			$('#namakelas').focus();
		});
		
		jQuery(document).ready(function(){
			var $form = $('#form');

            $form.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                rules: {
                    Judul: {
                        required: true,
                        maxlength: 100
                    },
                    Waktu: {
                        required: true,
                    },
					AcakSoal: {
                        required: true,
                    },
					KategoriUjian: {
                        required: true,
                    },
					KategoriKelas: {
                        required: true,
                    },
					PerluLogin: {
                        required: true,
                    }
                },
                messages: {},

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
                },

                submitHandler: function (form) {
                    form.submit();
                }
            });
		});
	</script>
	
	<script type="text/javascript">
	  $(function(){
		$.FroalaEditor.DefineIcon('clear', {NAME: 'refresh'});
		$.FroalaEditor.RegisterCommand('clear', {
		  title: 'Reset',
		  focus: false,
		  undo: true,
		  refreshAfterCallback: true,
		  callback: function () {
			this.html.set('');
			this.events.focus();
		  }
		});

		$.FroalaEditor.DefineIcon('highlight', {NAME: 'pencil'});
		$.FroalaEditor.RegisterCommand('highlight', {
		  title: 'Highlight',
		  focus: true,
		  undo: true,
		  refreshAfterCallback: true,
		  callback: function(e){
			if (this.colors.background=='#ffff00'){
			  this.colors.background('#ffffff');
			  this.events.focus();
			} else {
			  this.toggleClass("fr-active", this.format.applyStyle("background-color", "#ffff00;"));
			  this.events.focus();
			}
		  }
		});

    

		$('#Petunjuk').froalaEditor({
		  toolbarButtons: ['insertImage', 'undo', 'redo', 'bold', 'italic', 'underline', 'subscript', 'superscript', 'formatOL', 'formatUL', 'align','remove'],
		  placeholderText: 'Ketik untuk menambahkan petunjuk',
          charCounterCount: false,
		  spellcheck: false
		}); 
        $('span.fr-placeholder').css({"height":"35px"});
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
	
	function addmapel(){
		var xmlhttp = new XMLHttpRequest();
		var str = $('input[name="namamapel"]').val();
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				document.getElementById("KategoriUjian").innerHTML = xmlhttp.responseText;
			}
		};
		xmlhttp.open("GET", "_addmapel.php?name=" + str, true);
		xmlhttp.send();
		$('input[name="namamapel"]').val("");
	};
	
	function addkelas(){
		var xmlhttp = new XMLHttpRequest();
		var str = $('input[name="namakelas"]').val();
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				document.getElementById("KategoriKelas").innerHTML = xmlhttp.responseText;
			}
		};
		xmlhttp.open("GET", "_addkelas.php?name=" + str, true);
		xmlhttp.send();
		$('input[name="namakelas"]').val("");
	};
	
	$('input[name="namamapel"]').keydown(function(e){
		if (e.keyCode == 13){
			addmapel();
			$('#modalTambahKategori').modal('hide');
			$('body').removeClass('modal-open');
			$('.modal-backdrop').remove();
		}
	});
	
	$('input[name="namakelas"]').keydown(function(e){
		if (e.keyCode == 13){
			addkelas();
			$('#modalKelas').modal('hide');
			$('body').removeClass('modal-open');
			$('.modal-backdrop').remove();
		}
	});
	  
	</script>
  </body>
</html>
