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
    
    <title>Edit Ujian | Ujian Online</title>

    <!-- Bootstrap -->
    <link href='css/didactgothic.css' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	
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
        /*color: #818181;*/
        background-color: #f8f8f8;
      } 
      @media (max-width: 768px) {
        .container {
          width: 96%;
        }
      }


      @media (min-width: 1366px) {
        .container {
          width: 80%;
        }
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
        border-bottom-width: 1px;
        border-bottom-color: #e7e7e7;

      } 
      .navbar-nav li a:hover, .navbar-nav li.active a {
        color: #4ABDAC !important;
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
      }
      .button2, .button2:link, .button2:visited{
        background-color: #F7b733;
        color: #ffffff;
        border: 2px solid #F7b733;
      }
      .button2:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }
      .breadcrumb {
        background: rgba(245, 245, 245, 1);
        background-color: #f8f8f8;
        display: block;
      }
      th {
        color: #777; 
      }
      label {
        font-size: 14px;
        color: #777;
      }
      .breadcrumb li {
        font-size: 12px;
      }
      .breadcrumb a, .breadcrumb a:visited {
        color: #4ABDAC;
      }
      .breadcrumb a:hover {
        /* color: rgba(42, 100, 150, 1); */
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
        color: #4ABDAC;
      }

      .table span {
        /*color: #000000;*/
        color: #4ABDAC;
      }

      .table span:hover{
        /*color: #4ABDAC;*/
        color: #818181;
      }

      .link2 a:link, a:visited {
        color: #818181;
      }
      .link2 a:hover {
        color: #000000;
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
        color: #4ABDAC;
      }

      .judul a:hover{
        /*color: #4ABDAC;*/
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
      .btn-simpan, .btn-simpan:active, .btn-simpan:focus {
        background-color: #F7b733;  
        color: #ffffff;
        border-color: #F7b733; 
      }
      .btn-simpan:hover {
        background-color: #ffffff;
        border-color: #F7b733;
        color: #F7b733;
        border-width: 2px;
      }
      .panel {
        border-width: 0px;
      }
      .list-group-item.active, .list-group-item.active:focus, .list-group-item.active:hover  {
        border-color: #e7e7e7;
      }
      a.list-group-item:hover {
        background-color: #ffffff;
        color: #F7b733;
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
      .form-control {
        border-radius: 0px;
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

    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-default">
	<?php include("koneksi.php"); ?>
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
    
    <div class="container">
     <div class="content">
       <?php
          $id = $_GET['id'];
          $query = mysqli_query($link, "SELECT * FROM info_ujian WHERE id_ujian=".$id);
          $ujian = mysqli_fetch_array($query);
      ?>
      <h2 style="margin: 14px; margin-bottom: 0px; color:#4ABDAC; font-family:'didact gothic', sans-serif">Edit Ujian <?php echo $ujian['judul_ujian'] ?></h2>
      <div class="row">
          <div class="col-xs-6 col-md-9">
             <ol class="breadcrumb">
                <li><a href="index_guru.php">Beranda</a></li>
                <li class="active">Edit Ujian</li>
             </ol>
           </div>
      </div>
      <div class="row">
        
          <form id="form" action="update_ujian.php?id=<?php echo $ujian['id_ujian']?>" class="form-horizontal" method="post">
            <div class="col-md-8">
				<div class="form-group">
				  <label for="Judul" class="col-md-4 control-label">Judul</label>
				  <div class="col-md-8">
					<input type="text" class="form-control" id="Judul" name="Judul" value="<?php echo $ujian['judul_ujian'] ?>">
				  </div>
				</div>
				<!-- <div class="form-group">
				  <label for="URL" class="col-md-4 control-label">URL</label>
				  <div class="col-md-8">
					<a href="#" class="form-control disabled" style="background-color:#f8f8f8"><?php echo $ujian['url_ujian'] ?></a>
				  </div> 
				  <input type="hidden" id="URL" name="URL" value="<?php echo $ujian['url_ujian'] ?>" />
				</div> -->
				<div class="form-group">
				  <label for="Waktu" class="col-md-4 control-label">Waktu</label>
				  <div class="col-md-3">
					<input type="number" class="form-control" id="Waktu" name="Waktu" value="<?php echo $ujian['lama_ujian'] ?>">
				  </div>
				  <div class="col-md-5">
					 Menit
				   </div>
				</div>
				<div class="form-group">
				  <label class="col-md-4 control-label">Acak soal</label>
				  <div class="col-md-8">
					  <?php if($ujian['acak_soal']==1){
							  echo '<select id="AcakSoal" name="AcakSoal" class="form-control">';
							  echo   '<option value="1" selected>Ya</option>';
							  echo   '<option value="0">Tidak</option>';
							  echo '</select>';
							} else {
							  echo '<select id="AcakSoal" name="AcakSoal" class="form-control">';
							  echo   '<option value="1">Ya</option>';
							  echo   '<option value="0" selected>Tidak</option>';
							  echo '</select>';
							}  
					  ?>
				   </div>
				</div>
				<div class="form-group">
				  <label class="col-md-4 control-label">Kategori</label>
				  <div class="col-md-5">
					<select class="form-control" id="KategoriUjian" name="KategoriUjian" required>
					  <?php
					  $dibuat = $_SESSION['userid'];
					  $kat = mysqli_query($link, "SELECT * FROM `mata_pelajaran` WHERE `dibuat_oleh`=1 or `dibuat_oleh`=$dibuat");
					  
					  while($kate = mysqli_fetch_array($kat)){
						echo '<option value="';
						echo $kate['id_kategori'];
						echo '" ';
						if ($kate['id_kategori']==$ujian['mata_pelajaran']){
							echo 'selected';
						}
						echo '>';
						echo $kate['nama'];
						echo '</option>';
					  }
					?>
					</select>
				  </div>
				  <div class="col-md-3">
					<select class="form-control" id="KategoriKelas" name="KategoriKelas" required>
					  <?php
					  if ($_SESSION['kategori_guru']=="SMA"){
						$querykelas = "SELECT * FROM `kelas` WHERE id_kelas > 3 and (`dibuat_oleh`=1 or `dibuat_oleh`=$dibuat)";
					  } else {
						$querykelas = "SELECT * FROM `kelas` WHERE (id_kelas < 4 or id_kelas > 6) and (`dibuat_oleh`=1 or `dibuat_oleh`=$dibuat)";
					  }
					  $kel = mysqli_query($link, $querykelas);
					  
					  while($kate = mysqli_fetch_array($kel)){
						echo '<option value="';
						echo $kate['id_kelas'];
						echo '"';
						if ($kate['id_kelas']==$ujian['id_kelas']){
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
				<div class="form-group">
					<label class="col-md-4 control-label">Peserta perlu login</label>
					<div class="col-md-8">
					  <?php if($ujian['perlu_login']==1){
							  echo '<select id="PerluLogin" name="PerluLogin" class="form-control">';
							  echo   '<option value="1" selected>Ya</option>';
							  echo   '<option value="0">Tidak</option>';
							  echo '</select>';
							} else {
							  echo '<select id="PerluLogin" name="PerluLogin" class="form-control">';
							  echo   '<option value="1">Ya</option>';
							  echo   '<option value="0" selected>Tidak</option>';
							  echo '</select>';
							}  
					  ?>
					</div>
				</div>
            </div>
            <div class="col-md-12">
				<div class="form-group" style="margin-left:-55px;">
				  <label class="col-md-3 control-label">Petunjuk</label>
				  <div class="col-md-9">
					<textarea id="Petunjuk" name="Petunjuk" class="form-control" rows="15">
					  <?php echo $ujian['petunjuk']; ?>
					</textarea>
				  </div>
				</div>
				<div class="form-group">
				  <div class="col-md-offset-3 col md-9" style="padding-left:0px;">
					<button type="submit" class="button button2" style="text-decoration:none"> Simpan</button>
				  </div>
				</div>
            </div>
          </form>
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
    <script type="text/javascript" src="froala/js/plugins/quick_insert.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/quote.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/table.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/save.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/url.min.js"></script>
    <script type="text/javascript" src="froala/js/plugins/video.min.js"></script>
	
	<!-- jquery validation -->
	<script src="js/jquery.validate.min.js"></script>
	<script>
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
        //$('span.fr-placeholder').css({"height":"35px"});
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

	  
	</script>
  </body>
</html>
