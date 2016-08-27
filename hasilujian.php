<?php
	session_start();
	if ((!isset($_GET['id']))||(!isset($_SESSION['Nilai']))){
		header('location:notfound.php');
	} else {
		$aidi = $_GET['id'];
		if ($_SESSION['role']=="murid" || $_SESSION['role']=="guru"){
			
		} else {
			header('location:ujian.php?id='.$aidi);
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Hasil Ujian | Ujian Online</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Include font awesome -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    </script>

    <!-- Style -->
    <style>
      body {
        font:400 14px Lato, sans-serif;
        line-height: 1.8;
        background-color: #f8f8f8;
        /*color: #818181;*/
      } 
      .navbar {
        margin-bottom: 0;
        z-index: 9999;
        border: 0; 
        font-size: 12px !important;
        border-radius: 0;
        /*background-color: #ecf8f6;*/
        background-color: #ffffff;
        border-color: #ccc;
      } 
      
      .navbar-nav li a:hover, .navbar-nav li.active a {
        color: #30cbe8 !important;
      }
      .container {
        padding: 20px 20px;
      }
      
      .panel {
        margin-top: 5px;
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
        font-size: 12px;
        line-height: 1.42857143;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 4px;
      }
      .button1, .button1:link, .button1:visited {
        background-color: #F7B733;
        color: #ffffff;
        border: 1px solid #F7B733;
        font-size: 13px;
      }
      .button1:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }
      .button2, .button2:link, .button2:visited {
        background-color: #f8f8f8;
        color: #30cbe8;
        border: 1px solid #30cbe8;
        font-size: 14px;
      }
      .button2:hover {
        background-color: #30cbe8;
        color: #ffffff;
        border: 1px solid #30cbe8;
      }
      .panel {
        border-color: #ffffff;
      }
      .imagecontainer {
        position: relative;
      }
      .imageposition {
        position: absolute;
        top:50%;
        left:50%;
        transform: translate(-50%, -50%);
        font-size: 18px;
        width: 80px;
        height: 80px;

      }
      li:active {
      	background-color: #ffffff;
      }

    </style>
  </head>
  <body>
    <!-- Navbar -->
    <?php include("koneksi.php");
      $id = $_GET['id'];
      $query3 = mysqli_query($link, "SELECT * FROM `info_ujian` WHERE `id_ujian`='$id' ");
      $ujian = mysqli_fetch_array($query3);
    ?>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#myPage" style="padding-left: 230px; color: #30cbe8;"><?php echo $ujian['judul_ujian'] ?></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right" style="padding-right: 160px;">
            <li ><a href="#"> <?php echo $_SESSION['nama']; ?> </a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container">
    <!--  <div class="circle">10</div> -->
      <div class="col-md-offset-3 col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
            <h4 style="text-align:center;">Hasil Ujian - <?php echo $ujian['judul_ujian']; ?></h4>
            <hr>
			<form class="form-horizontal">
				<div class="form-group">
					<label class="col-md-5" style="text-align:right; padding-right:0px;">Nama:</label>
					<div class="col-md-7" style="text-align:left"><?php echo $_SESSION['nama']; ?></div>
				</div>
				<div class="form-group">
					<label class="col-md-5" style="text-align:right; padding-right:0px;">Ujian:</label>
					<div class="col-md-7" style="text-align:left"><?php echo $ujian['judul_ujian'] ?></div>
				</div>
				<div class="form-group">
					<label class="col-md-5" style="text-align:right; padding-right:0px;">Total Waktu:</label>
					<div class="col-md-7" style="text-align:left"><?php echo $_SESSION['TotalWaktu'] ?></div>
				</div>
				<div class="form-group">
					<label class="col-md-5" style="text-align:right; padding-right:0px;">Soal Terjawab:</label>
					<div class="col-md-7" style="text-align:left"><?php echo $_SESSION['SoalTerjawab']; ?> dari <?php echo $_SESSION['SoalTotal']; ?> soal</div>
				</div>
				<div class="form-group">
					<label class="col-md-5" style="text-align:right; padding-right:0px;">Nilai:</label>
					<div class="col-md-7" style="text-align:left; font-size:50px; margin-top:-20px; color:#30cbe8;"><?php echo $_SESSION['Nilai']; ?></div>
				</div>
			</form>
          </div>
        </div>
        <!-- <a href="index_siswa.php?id=<?php echo $id ?>" type="button" class="button button1 pull-right" style="border-radius:0px; text-decoration:none;">Mulai Ujian <i class="fa fa-long-arrow-right"></i></a> -->
        <?php 
			if ($_SESSION['role']=="murid"){
				session_unset();
				session_destroy();
			}
		?>
      </div>
    </div>
	<footer class="text-center">
	  <p>2016 © Diah Fauziah. Ujian Online Template.</p>
    </footer>
    <!-- Include jQuery. -->
    <script type="text/javascript" src="js/tooltipsy.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-tagsinput.min.js"></script>
    <script></script>
  </body>
</html>