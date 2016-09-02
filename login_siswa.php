<?php
	session_start();
	if (!isset($_GET['id'])){
		header('location:notfound.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Ujian Online - Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='css/didactgothic.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap-tagsinput.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-tagsinput.min.js"></script>
    <script type="text/javascript">
    </script>

    <!-- Style -->
    <style>
      body {
        font:400 14px Lato, sans-serif;
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
        border: 0; 
        font-size: 12px !important;
        border-radius: 0;
        /*background-color: #30cbe8; */
      } 
      
      .navbar-nav li a:hover, .navbar-nav li.active a {
        color: #30cbe8 !important;
      }
      .navbar-nav li:hover {
        background-color:#e7e7e7;
      }
      /*.menu li {
        background-color: #e7e7e7;
      } */
      .container {
        padding: 20px 20px;
      }
      .progress {
        margin-top: 5px;
        margin-bottom: 10px;
        border-radius: 0;
        overflow: visible;
      }
      label {
        color: #777;
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
      }
      .btn-primary:hover {
        background-color: #ffffff;
        border-color: #30cbe8;
        color: #30cbe8;
        border-width: 2px;
      }
      .btn-simpan, .btn-simpan:active, .btn-simpan:focus {
        background-color: #30cbe8;  
        color: #ffffff;
        border-color: #30cbe8; 
        border-width: 2px;
        border-radius: 0px;
      }
      .btn-simpan:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        color: #ffffff;
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
        border:0px;
      }
      .form-control{ border-radius: 0px;}
    </style>
  </head>
  <body>
        
    <!-- Container -->
    <div class="container">
        <div class="col-md-offset-4 col-md-4" style="margin-top:50px; margin-bottom:30px;">
          <h2 style="text-align:center; color:#ffbf30; margin-bottom:30px;">Ujian Online</h2>
          <div class="panel panel-default" id="panelSoal">
            <div class="panel-body">
              <h4 style="text-align:center; color:#30cbe8;">Login Siswa</h4>
              <hr>
            <form id="form" method="post" autocomplete="off" class="form-horizontal" action="login_siswaval.php">
			  <?php 
				if (isset($_SESSION["statuspesan"])){
				  if ($_SESSION["statuspesan"]=="gagal"){
					echo '<div class="alert alert-danger">';
					echo   '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
					echo   '<strong>Gagal!</strong>';
					echo   $_SESSION['pesan'];
					echo '</div>';
					$_SESSION['statuspesan'] = "";
				  } else if ($_SESSION["statuspesan"]=="sukses") {
					echo '<div class="alert alert-success">';
					echo   '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
					echo   '<strong>Berhasil!</strong>';
					echo   $_SESSION['pesan'];
					echo '</div>';
					$_SESSION['statuspesan'] = "";
				  }
				}
			  ?>
			  <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>" />
              <div class="form-group">
                <label class="col-md-3">Username</label>
                <div class="col-md-9">
                  <input type="text" name="username" id="username" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3">Password</label>
                <div class="col-md-9">
                  <input type="password" name="password" id="password" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-offset-3 col md-9" style="padding-left:15px;">
				  <button type="submit"class="btn btn-simpan">Masuk</button>
                </div>
              </div>
              <!--<p style="text-align:center;">Belum punya akun? <a href="register.php" style="color:#ffbf30">Daftar disini.</a></p> -->
           </form>
          </div>
          </div>
        </div>
    </div>
	
	<footer class="text-center">
	  <p>2016 © Diah Fauziah. Ujian Online Template.</p>
    </footer>
  </body>
</html>