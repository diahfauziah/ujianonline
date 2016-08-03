<?php
	session_start();
	if (isset($_SESSION['role'])){
		session_unset();
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Daftar | Ujian Online</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='css/didactgothic.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap-tagsinput.css">
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
    </style>
  </head>
  <body>
    <!-- Container -->
    <div class="container">
        <div class="col-md-offset-3 col-md-6" style="margin-top:10px; margin-bottom:10px;">
          <h2 style="text-align:center; font-family:'didact gothic', sans-serif; color:#f7b733; margin-bottom:30px;">Ujian Online</h2>
          <div class="panel panel-default" id="panelSoal">
            <div class="panel-body">
              <h4 style="text-align:center; color:#4ABDAC; font-family:'didact gothic', sans-serif;">Register Guru</h4>
              <hr>
            <form id="form" action="registerval.php" method="post" class="form-horizontal">
              <div class="form-group">
                <label class="col-md-4">Nama</label>
                <div class="col-md-8">
                  <input type="text" id="nama" name="nama" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4">Kategori</label>
                <div class="col-md-8">
                  <select id="kategori" name="kategori" class="form-control">
                    <option value="1">SMP/Sederajat</option>
                    <option value="2">SMA/Sederajat</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4">Username</label>
                <div class="col-md-8">
                  <input type="text" id="username" name="username" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4">Password</label>
                <div class="col-md-8">
                  <input type="password" id="password" name="password" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4">Konfirm Password</label>
                <div class="col-md-8">
                  <input type="password" id="repassword" name="repassword" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-offset-4 col md-8" style="padding-left:15px;">
                  <button type="submit" class="btn btn-simpan"> Daftar</a>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-offset-4 col md-8" style="padding-left:15px;">
                  <p>Sudah punya akun? <a href="login.php" style="color:#f7b733">Masuk disini.</a></p>
                </div>
              </div>
           </form>
          </div>
          </div>
        </div>
    </div>
	<footer class="text-center">
	  <p>2016 © Diah Fauziah. Ujian Online Template.</p>
    </footer>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-tagsinput.min.js"></script>
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
                    nama: {
                        required: true,
                        maxlength: 100
                    },
                    kategori: {
                        required: true,
                    },
                    username: {
                        required: true,
                        maxlength: 50
                    },
					password: {
                        required: true
                    },
                    repassword: {
                        required: true,
                        equalTo: "#password"
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
  </body>
</html>
