<?php
	ini_set('session.gc_maxlifetime', 23400);
	session_start();
	if (!isset($_GET['id'])){
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
    
    <title>Petunjuk Ujian | Ujian Online</title>

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
        border-color: #dadada;
      } 
      
      .navbar-nav li a:hover, .navbar-nav li.active a {
        color: #4ABDAC !important;
      }
      .container {
        padding: 20px 20px;
      }
      
      .panel {
        margin-top: 5px;
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
        color: #4ABDAC;
        border: 1px solid #4ABDAC;
        font-size: 14px;
      }
      .button2:hover {
        background-color: #4ABDAC;
        color: #ffffff;
        border: 1px solid #4ABDAC;
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
      .carousel-inner > .item > img,
      .carousel-inner > .item > a > img {
          width: 70%;
          margin: auto;
      }
      .carousel-indicators li {
        border-color: #777;
      }
      .carousel-indicators .active {
        background-color: #777;
      }
      .carousel-control.left, .carousel-control.right {
        background-image: linear-gradient(to right,rgb(248, 248, 248) 0,rgba(0,0,0,.0001) 100%);
        color: #777;
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
          <a class="navbar-brand" href="#myPage" style="padding-left: 230px; color: #4ABDAC;"><?php echo $ujian['judul_ujian'] ?></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right" style="padding-right: 160px;">
            <li><a href="#"> <?php echo $_SESSION['nama']; ?> </a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container">
    <!--  <div class="circle">10</div> -->
      <div class="col-md-offset-1 col-md-10">
        <div class="panel panel-default">
          <div class="panel-body">
            <h5>Petunjuk</h5>
            <hr>
			<?php 
				if ($ujian['petunjuk']){
					echo $ujian['petunjuk'];
				} else {
					echo 'Tidak ada petunjuk ujian';
				}
			?>
          </div>
        </div>
        <a href="index_siswa.php?id=<?php echo $id ?>" type="button" class="button button1 pull-right" style="border-radius:0px; text-decoration:none;">Mulai Ujian <i class="fa fa-long-arrow-right"></i></a>
        <a href="#" style="pull-right" id="panduan">Panduan Ujian</a>
        <br />
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:20px; border:1px solid #ddd;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" data-interval="0">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="image/1a.png" alt="Chania" width="100%">
            </div>

            <div class="item">
              <img src="image/2coret.png" alt="Chania" width="100%">
            </div>

            <div class="item">
              <img src="image/3highlight.png" alt="Chania" width="100%">
            </div>

            <div class="item">
              <img src="image/4hapusformat.png" alt="Chania" width="100%">
            </div>

          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div>
    </div>
	<footer class="text-center">
	  <p>2016 © Diah Fauziah. Ujian Online Template.</p>
    </footer>
    <!-- Include jQuery. -->
    <script type="text/javascript" src="js/tooltipsy.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-tagsinput.min.js"></script>
    <script>
      $(function(){
        $('#panduan').click(function(){
          $('.collapse').collapse('toggle');
        });
      });
    </script>
  </body>
</html>