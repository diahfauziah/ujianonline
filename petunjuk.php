<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Home | Ujian Online</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
        background-color: #ebebeb;
        border-color: #ccc;
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
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <?php include("koneksi.php");
      $id = $_GET['id'];
      $query = mysqli_query($link, "SELECT * FROM `soal` WHERE `id_ujian`='$id' ");
      //$soal = mysqli_fetch_array($query);
      $query3 = mysqli_query($link, "SELECT `judul_ujian` FROM `info_ujian` WHERE `id_ujian`='$id' ");
      $judul = mysqli_fetch_array($query3);
    ?>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#myPage" style="padding-left: 230px; color: #4ABDAC;"><?php echo $judul['judul_ujian'] ?></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right" style="padding-right: 160px;">
            <li><a href="#logout"> Andhini </a></li>
            <li><a href="#logout">Logout</a></li>
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
            <p>Bla blah</p>
          </div>
        </div>
        <a href="index_siswa2.php?id=<?php echo $id ?>" type="button" class="button button1" style="border-radius:0px; text-decoration:none;">Mulai Ujian</a>
      </div>
    </div>
    <!-- Include jQuery. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/tooltipsy.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-tagsinput.min.js"></script>
    <script></script>
  </body>
</html>