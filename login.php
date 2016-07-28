<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Login Guru | Ujian Online</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap-tagsinput.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
        font:400 14px Lato, sans-serif;
        line-height: 1.8;
        /*color: #818181;*/
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
        /*background-color: #4ABDAC; */
      } 
      
      .navbar-nav li a:hover, .navbar-nav li.active a {
        color: #4ABDAC !important;
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
      }
      .btn-primary:hover {
        background-color: #ffffff;
        border-color: #4ABDAC;
        color: #4ABDAC;
        border-width: 2px;
      }
      .btn-simpan, .btn-simpan:active, .btn-simpan:focus {
        background-color: #4ABDAC;  
        color: #ffffff;
        border-color: #4ABDAC; 
        border-width: 2px;
      }
      .btn-simpan:hover {
        background-color: #ffffff;
        border-color: #4ABDAC;
        color: #4ABDAC;
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
    </style>
  </head>
  <body>
    
    <!-- Container -->
    <div class="container">
        <div class="col-md-offset-4 col-md-4" style="margin-top:50px; margin-bottom:30px;">
          <h2 style="text-align:center; font-family:'didact gothic', sans-serif; color:#f7b733; margin-bottom:30px;">Ujian Online</h2>
          <div class="panel panel-default" id="panelSoal">
            <div class="panel-body">
              <h4 style="text-align:center; color:#4ABDAC; font-family:'didact gothic', sans-serif;">Login Guru</h4>
              <hr>
            <form id="form" method="post" class="form-horizontal" action="loginval.php">
			  <?php 
				if (isset($_SESSION["statuspesan"])){
				  if ($_SESSION["statuspesan"]!=""){
					echo '<div class="alert alert-danger">';
					echo   '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
					echo   '<strong>Gagal login!</strong>';
					echo   $_SESSION['pesan'];
					echo '</div>';
					$_SESSION['statuspesan'] = "";
				  }
				}
			  ?>
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
              <p style="text-align:center;">Belum punya akun? <a href="register.php" style="color:#f7b733">Daftar disini.</a></p>
           </form>
          </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
