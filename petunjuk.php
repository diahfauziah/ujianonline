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
        font-size: 12px !important;
        border-radius: 0;
        /*background-color: #ecf8f6;*/
        border:0px;
        background-color: #ffffff;
      } 
      
      .navbar-nav li a:hover, .navbar-nav li.active a {
        color: #30cbe8 !important;
      }
      .container {
        padding: 20px 20px;
      }
      
      .panel {
        margin-top: 5px;
        border-color: #ffffff;
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
        font-size: 15px;
        line-height: 1.42857143;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 4px;
      }
      .button1, .button1:link, .button1:visited {
        background-color: #F7B733;
        color: #ffffff;
        border: 1px solid #F7B733;
        font-size: 15px;
      }
      .button1:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }
      .button2, .button2:link, .button2:visited {
        background-color: #f8f8f8;
        color: #30cbe8;
        border: 1px solid #30cbe8;
        font-size: 15px;
      }
      .button2:hover {
        background-color: #30cbe8;
        color: #ffffff;
        border: 1px solid #30cbe8;
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
        background-image: none;
        background-color: #ffffff;
        color: #777;
      }
      a:hover{
        text-decoration: none;
      }
      .form-group {
        margin-bottom: 0px;
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
            <li><a href="#"> <?php echo $_SESSION['nama']; ?> </a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container">
    <!--  <div class="circle">10</div> -->
      <div class="col-md-offset-1 col-md-10">
        <div class="row">
          <div class="panel panel-default col-md-offset-1 col-md-10">
            <div class="panel-body">
              <h5 style="text-align:center"><b>Informasi Ujian</b></h5>
              <hr>
              <form class="form-horizontal">
                  <div class="form-group">
                    <label class="col-md-2" style="text-align:right; padding-right:0px;">Judul:</label>
                      <div class="col-md-10" style="text-align:left"><?php echo $ujian['judul_ujian']; ?></div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-2" style="text-align:right; padding-right:0px;">Waktu:</label>
                    <div class="col-md-3" style="text-align:left"><?php echo $ujian['lama_ujian']; ?> menit</div>
                    <label class="col-md-offset-1 col-md-2" style="text-align:right; padding-right:0px;">Jumlah soal:</label>
                    <div class="col-md-3" style="text-align:left"><?php echo $ujian['total_soal']; ?></div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-2" style="text-align:right; padding-right:0px;">Kategori:</label>
                      <div class="col-md-10" style="text-align:left">
                        <?php
                          $idm = $ujian['mata_pelajaran'];
                        $querynamamapel = "select * from mata_pelajaran where id_kategori=$idm";
                        $qnm = mysqli_query($link, $querynamamapel);
                        $namamp = mysqli_fetch_array($qnm);
                        echo $namamp['nama'];
                        echo " - ";
                        $idk = $ujian['id_kelas'];
                        $querynmk = "select * from kelas where id_kelas=$idk";
                        $qnk = mysqli_query($link, $querynmk);
                        $namak = mysqli_fetch_array($qnk);
                        echo $namak['nama'];
                        ?>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-2" style="text-align:right; padding-right:0px;">Petunjuk:</label>
                    <div class="col-md-10" style="text-align:left" rows="3">
                      <?php
                        if ($ujian['petunjuk']!=null){
                        echo $ujian['petunjuk'];
                        } else {
                        echo "-";
                        }
                      ?>
                    </div>
                  </div>
                </form>
            </div>
          </div>
        </div>
        <div class="row" style="margin-bottom:10px;">
          <div class="col-md-offset-1 col-md-10">
            <a href="index_siswa.php?id=<?php echo $id ?>" type="button" class="button button1 col-md-offset-9 col-md-3" style="border-radius:0px; text-decoration:none;">Mulai Ujian <i class="fa fa-long-arrow-right"></i></a>
          </div>
        </div>
        <div class="row">
        <div class="panel panel-default col-md-offset-1 col-md-10">
          <div class="panel-body">
            <h5 href="#" style="text-align:center" id="panduan"><b>Panduan Ujian</b></h5>
            <hr />
            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:0px" data-interval="0">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
				<li data-target="#myCarousel" data-slide-to="5"></li>
				<li data-target="#myCarousel" data-slide-to="6"></li>
				<li data-target="#myCarousel" data-slide-to="7"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="image/pilih.png" alt="Chania" width="100%">
                </div>

                <div class="item">
                  <img src="image/coret1.png" alt="Chania" width="100%">
                </div>
				
				<div class="item">
                  <img src="image/blok2.png" alt="Chania" width="100%">
                </div>
				
                <div class="item">
                  <img src="image/hapusformat.png" alt="Chania" width="100%">
                </div>
				
				<div class="item">
                  <img src="image/aturulang.png" alt="Chania" width="100%">
                </div>
				
				<div class="item">
                  <img src="image/jawab.png" alt="Chania" width="100%">
                </div>
				
				<div class="item">
                  <img src="image/silang.png" alt="Chania" width="100%">
                </div>
				
				<div class="item">
                  <img src="image/nomor.png" alt="Chania" width="100%">
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