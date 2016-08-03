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
    
    <title>Home | Ujian Online</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='css/didactgothic.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap-tagsinput.css">

    <!-- Froala -->
      <!-- Include Font Awesome. -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Include Editor style. -->
    <link href="froala/css/froala_editor.min.css" rel="stylesheet" type="text/css" />
    <link href="froala/css/froala_style.min.css" rel="stylesheet" type="text/css" />

    <!-- Include Code Mirror style -->
    <link rel="stylesheet" href="css/codemirror.min.css">

    <!-- Include font awesome -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

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
    </script>

    <!-- Style -->
    <style>
      body {
        font:400 15px Lato, sans-serif;
        line-height: 1.8;
        /*color: #818181;*/
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
        border-bottom-color: #e7e7e7;
        border-bottom-width: 1px;
        /*background-color: #4ABDAC; */
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
        margin-bottom: 0px;
      }
      span.highlight {
        background-color: yellow;
      }
      span.label:hover {
     /*   background-color: #F7B733; */
        
      }
      .navbar-nav li a:hover, .navbar-nav li.active a {
        color: #4ABDAC !important;
      }
      
      #teksSoal {
        padding-left: 20px;
        padding-right: 10px;
      }
      .tooltip{
        position: relative;
        float: right;
      }
      .breadcrumb {
        background: rgba(245, 245, 245, 1);
        background-color: #ffffff;
        display: block;
        margin-bottom: 5px;
        margin-top: -10px;
      }
      .breadcrumb li {
        font-size: 12px;
      }
      .breadcrumb a {
        /* color: rgba(109, 116, 122, 1); */
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
        background-color: #F7B733;  
        color: #ffffff;
        border-color: #F7B733; 
      }

      .btn-simpan:hover {
        background-color: #ffffff;
        border-color: #F7B733;
        color: #F7B733;
        border-width: 2px;
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
        border: 1px solid #4ABDAC;
        border-radius: 0px;
      }
      .button1:hover, .button2:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }
      a:link, a:visited {
        color: #4ABDAC;
      }
      a:hover {
        text-decoration: underline;
      }

      .button2, .button2:link, .button2:visited {
        background-color: #F7B733;
        color: #ffffff;
        border-color: #F7B733;
        border: 1px solid #F7B733;
        border-radius: 0px;
      }

      .btn-glyphicon {
        background-color: #ffffff;
        border-color: #ffffff;
        color: #000000;
      }
      .modal-dialog {
        height: 80% !important;
        padding-top:10%;
      }

      a[data-toggle="pill"]:link, a[data-toggle="pill"]:visited {
        color: #4ABDAC;

      }

      .modal-body {
        height: 80%;
        overflow: auto;
      }
      .form-group {
        margin-bottom: 0px;
      }
      .nav-pills > li.active > a, .nav-pills > li.active > a:focus, .nav-pills > li.active > a:hover {
        color: #ffffff;
        background-color: #F7B733;
      }
      .nav-pills >li > a:hover, .nav-pills > li, .nav-pills > li {
        color: #F7B733;
      }
      .tooltip{ 
        position:relative;
        float:right;
      }
      .tooltip > .tooltip-inner {background-color: #eebf3f; padding:5px 15px; color:rgb(23,44,66); font-weight:bold; font-size:13px;}
      .popOver + .tooltip > .tooltip-arrow {    border-left: 5px solid transparent; border-right: 5px solid transparent; border-top: 5px solid #eebf3f;}
      
      .numberCircle {
          border-radius: 50%;

          width: 32px;
          height: 32px;
          padding: 5px;
          
          background: #fff;
          border: 2px solid #4ABDAC;
          color: #4ABDAC;
          text-align: center;
          
          font: 15px Arial, sans-serif;
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
        background-color: #ffffff;
        min-height: 600px;
        padding: 20px 12px;
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
            <li><a href="index_guru.php"><span class="glyphicon glyphicon-tag" style="font-size:13px"></span> Kategori</a></li>
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
      <?php include('koneksi.php'); 
            $id = $_GET['id'];
            $query4 = mysqli_query($link, "SELECT COUNT(*) FROM soal where id_ujian='$id' ");
            $arraynomor = mysqli_fetch_array($query4);
            $nomormax = (int)$arraynomor[0];
            $nomor = $nomormax + 1;
            $query3 = mysqli_query($link, "SELECT * FROM info_ujian where id_ujian='$id' ");
            $judul = mysqli_fetch_array($query3);
      ?>
      <div class="content">
      <div class="row">
        <h2 style="margin-left:25px; color:rgba(186, 182, 182, 1); margin-top:0px; margin-bottom:10px; font-family:'didact gothic', sans-serif">Tambah Soal <a href="http://localhost/ujianonline/view_ujian.php?id=<?php echo $judul['id_ujian'] ?>"><?php echo $judul['judul_ujian'] ?></a></h2>
      </div>
      <div class="row" style="margin-top:5px;">
          <div class="col-xs-6 col-md-9">
             <ol class="breadcrumb">
                <li><a href="index_guru.php">Beranda</a></li>
                <!--  <li><a href="view_ujian.php?id=<?php echo $ujian['id_ujian'] ?>"><?php echo $ujian['judul_ujian'] ?></a></li> -->
                <li class="active">Tambah soal</li>
             </ol>
           </div>
      </div>
      <div id="soal">
            <div class="row" style="margin-left:5px;">
              <div class="col-md-2">
                <ul class="nav nav-pills nav-stacked">
                  <li class="active">
                    <a data-toggle="pill" class="hashtip" href="#formPilihanGanda" title="<u><b>Contoh</b></u><br>Apa Ibukota Provinsi Jawa Barat?<br><i class='fa fa-circle-thin'></i></span> Jakarta<br><i class='fa fa-circle'></i> Bandung<br><i class='fa fa-circle-thin'></i> Surabaya<br><i class='fa fa-circle-thin'></i> Bogor<br>">Pilihan ganda</a>
                  </li>
                  <li>
                    <a data-toggle="pill" href="#formIsian" class="hashtip" title="<u><b>Contoh</b></u><br>Ibukota Provinsi Jawa Barat yaitu <input type=text class='form-control'>">Isian singkat</a>
                  </li>
                  <li>
                    <a data-toggle="pill" href="#formEssay" class="hashtip" title="<u><b>Contoh</b></u><br>Jelaskan sejarah kemerdekaan Indonesia! <textarea></textarea>">Essay</a>
                  </li>
                  <li>
                    <a data-toggle="pill" href="#formPencocokan" class="hashtip" title="<u><b>Contoh</b></u><br>Cocokkan provinsi dan ibukota provinsi yang sesuai!<br> Jawa Barat <span class='glyphicon glyphicon-resize-horizontal'></span> Bandung <br> Jawa Timur <span class='glyphicon glyphicon-resize-horizontal'></span> Surabaya">Pencocokan</a>
                  </li>
                  <li>
                    <a data-toggle="pill" href="#formBenarSalah" class="hashtip" title="<u><b>Contoh</b></u><br>Bandung adalah Ibukota Provinsi Jawa Barat<br><span class='glyphicon glyphicon-record'></span> Benar<br><span class='glyphicon glyphicon-record'></span> Salah">Benar/Salah</a>
                  </li>
                  <li>
                    <a data-toggle="pill" href="#formCheckbox" class="hashtip" title="<u><b>Contoh</b></u><br>Manakah yang berada di Provinsi Jawa Barat?<br> <span class='glyphicon glyphicon-unchecked'></span> Jakarta<br><span class='glyphicon glyphicon-check'></span> Bandung<br><span class='glyphicon glyphicon-check'></span> Depok<br><span class='glyphicon glyphicon-unchecked'></span> Banten">Checkbox</a>
                  </li>
                  <li>
                    <a data-toggle="pill" href="#formSebabAkibat" class="hashtip" title="<u><b>Contoh</b></u><br>Jelaskan sejarah kemerdekaan Indonesia! <textarea></textarea>">Sebab - akibat</a>
                  </li>
                  <li>
                    <a data-toggle="pill" href="#formPilihan123" class="hashtip" title="">Pilihan 1,2,3,4</a>
                  </li>
                </ul>
              </div>
              <div class="col-md-10">
                <div class="tab-content">
                  <div class="panel panel-default tab-pane fade in active" id="formPilihanGanda">
                    <div class="panel-body">
                      <div class="row">
                        <div style="margin-left:10px; width:15px; float:left;">
                          <strong id="nomor"><?php echo $nomor; ?>.</strong>
                        </div>
                        <div style="margin-left: 0px;">  
                          <div class="col-md-12" style="width:96%">
                            <form class="form-horizontal col-md-12" action="input_soal.php?id=<?php echo $id ?>" method="post">
                              <div class="form-group">
                                 <label class="form-control-label">Pertanyaan</label>
                                 <textarea id="edit1" name="edit1" class="form-control" rows="3">
                                 </textarea>
                              </div>
                              <p style="margin-left:-10px; font-size:11px; color:#818181; margin-top:10px;">Klik lingkaran untuk menetapkan jawaban yang benar</p>
                              <?php 
                                  $huruf = array("A","B","C","D","E");
                                  $i = 0; 
                                  while($i<4){
                                    echo '<div class="form-group" style="margin-bottom:10px">';
                                    echo   '<div class="row">';
                                      echo     '<div style="float:left" style="width:15px"><i class="fa fa-check-circle fa-lg checklist" style="color:#ffffff"></i></div>';
                                        echo     '<div style="margin-left:15px; width:50px; float:left; padding-right:10px;">';
                                          echo        '<div class="numberCircle">';
                                          echo         $huruf[$i];
                                          echo        '</div>'; 
                                        echo     '</div>';
                                        echo     '<div style="width:85%;  margin-left:-20px;" class="col-md-9">';
                                          echo       '<textarea class="form-control" id="opsiGanda1" name="opsiGanda';
                                          echo        $i;
                                          echo        '"></textarea>';
                                        echo     '</div>';
                                        echo     '<div style="float:left">';
                                          echo       '<i class="fa fa-trash"></i>';
                                        echo     '</div>';
                                      echo    '</div>';
                                    echo   '</div>';
                                    $i++;
                                  }
                              ?>
                              <div class="form-group opsiGandaE" style="margin-bottom:10px" id="opsiGanda1" hidden>
                                <div class="row">
                                    <div style="float:left" style="width:15px">
                                     <i class="fa fa-check-circle fa-lg checklist" style="color:#ffffff"></i> 
                                    </div>
                                    <div style="margin-left:15px; width:50px; float:left; padding-right:10px;">
                                      <div class="numberCircle">E</div>
                                    </div>
                                    <div style="width:85%;  margin-left:-20px;" class="col-md-9">
                                      <div class="form-control" id="opsiGanda1"></div>
                                    </div>
                                    <div style="float:left">
                                      <i class="fa fa-trash"></i>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group" style="margin-top: 10px;margin-bottom: 10px;">
                                <button class="button button1 tambahopsi" type="button" style="margin-left:20px; font-size:13px; background-color:#f8f8f8; border:0px; color:#777; outline:none;"><span class="glyphicon glyphicon-plus"></span> Tambahkan opsi</button>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px;">
                                <strong class="col-md-1">Poin:</strong>
                                <div class="col-md-3">
                                  <label style="width:60px;" class="form-control-label">Benar </label>
                                  <input type="text" class="form-control" style="width:32%">
                                </div>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px;">
                                <div class="col-md-push-1 col-md-3">
                                  <label style="width:60px;" class="form-control-label">Kosong</label>
                                  <input type="text" class="form-control" style="width:32%" value="0"> 
                                </div>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px">
                                <div class="col-md-push-1 col-md-3">
                                  <label style="width:60px;" class="form-control-label">Salah</label>
                                  <input type="text" class="form-control" style="width:32%" value="0"> 
                                </div>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px">
                                <div class="col-md-push-1 col-md-3">
                                  <label style="width:60px;" class="form-control-label"></label>
                                  <input type="submit" name="submit" value="Simpan" style="text-decoration:none" class="button button2" >
                                </div>                            
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default tab-pane fade" id="formIsian">
                    <div class="panel-body">
                      <div class="row">
                        <div style="margin-left:10px; width:15px; float:left;">
                          <strong id="nomor">1.</strong>
                        </div>
                        <div style="margin-left: 0px;">
                          <div class="col-md-12" style="width:96%">
                            <form class="form-horizontal col-md-12">
                              <div class="form-group">
                                <label class="form-control-label">Pertanyaan</label>
                                <textarea id="edit2" class="form-control" rows="3"></textarea>
                              </div>
                              <div class="form-group" style="margin-bottom:10px;">
                                <label class="form-control-label">Jawaban</label>
                                <div class="form-control" id="opsiIsian"></div>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px;">
                                <strong class="col-md-1">Poin:</strong>
                                <div class="col-md-3">
                                  <label style="width:60px;" class="form-control-label">Benar </label>
                                  <input type="text" class="form-control" style="width:32%">
                                </div>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px;">
                                <div class="col-md-push-1 col-md-3">
                                  <label style="width:60px;" class="form-control-label">Kosong</label>
                                  <input type="text" class="form-control" style="width:32%" value="0"> 
                                </div>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px">
                                <div class="col-md-push-1 col-md-3">
                                  <label style="width:60px;" class="form-control-label">Salah</label>
                                  <input type="text" class="form-control" style="width:32%" value="0"> 
                                </div>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px">
                                <div class="col-md-push-1 col-md-3">
                                  <label style="width:60px;" class="form-control-label"></label>
                                  <a href="view_ujian.html" id="hapusSoal" class="btn btn-simpan"> Simpan</a>
                                </div>                            
                              </div>
                            </form> 
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default tab-pane fade" id="formEssay">
                    <div class="panel-body">
                      <div class="row">
                        <div style="margin-left:10px; width:15px; float:left;">
                          <strong id="nomor">1.</strong>
                        </div>
                        <div style="margin-left: 0px;">
                          <div class="col-md-12" style="width:96%">
                            <form class="form-horizontal col-md-12">
                              <div class="form-group">
                                 <label class="form-control-label">Pertanyaan</label>
                                 <textarea id="edit5" class="form-control" row="3"></textarea>
                              </div>
                              <div class="form-group" style="margin-bottom:10px;">
                                <label class="form-control-label">Jawaban</label>
                                <textarea id="opsiEssay" class="form-control" row="3"></textarea>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px;">
                                <strong class="col-md-1">Poin:</strong>
                                <div class="col-md-3">
                                  <label style="width:60px;" class="form-control-label">Benar </label>
                                  <input type="text" class="form-control" style="width:32%">
                                </div>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px;">
                                <div class="col-md-push-1 col-md-3">
                                  <label style="width:60px;" class="form-control-label">Kosong</label>
                                  <input type="text" class="form-control" style="width:32%" value="0"> 
                                </div>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px">
                                <div class="col-md-push-1 col-md-3">
                                  <label style="width:60px;" class="form-control-label">Salah</label>
                                  <input type="text" class="form-control" style="width:32%" value="0"> 
                                </div>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px">
                                <div class="col-md-push-1 col-md-3">
                                  <label style="width:60px;" class="form-control-label"></label>
                                  <a href="view_ujian.html" id="hapusSoal" class="btn btn-simpan"> Simpan</a>
                                </div>                            
                              </div>
                            </form> 
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>    
                  <div class="panel panel-default tab-pane fade" id="formPencocokan">
                    <div class="panel-body">
                      <div class="row">
                        <div style="margin-left:10px; width:15px; float:left;">
                          <strong id="nomor">1.</strong>
                        </div>
                        <div class="col-md-12" style="width:96%">
                          <div style="margin-left: 0px;">
                            <form class="form-horizontal col-md-12">
                              <div class="form-group form-inline">
                                <div class="col-md-5">
                                  <strong>Pilihan</strong>
                                </div>
                                <div class="col-md-offset-2 col-md-5">
                                  <strong>Pasangan</strong>
                                </div>
                              </div>
                              <div class="form-group" style="margin-bottom:10px;">
                                <div class="col-md-5">
                                  <input type=text class="form-control">
                                </div>
                                <div class="col-md-offset-2 col-md-5">
                                  <input type=text class="form-control">
                                </div>
                              </div>
                              <div class="form-group" style="margin-bottom:10px;">
                                <div class="col-md-5">
                                  <input type=text class="form-control">
                                </div>
                                <div class="col-md-2" style="text-align:center";>
                                  
                                </div>
                                <div class="col-md-5">
                                  <input type=text class="form-control">
                                </div>
                              </div>
                              <div class="form-group" style="margin-bottom:10px;">
                                <div class="col-md-5">
                                  <input type=text class="form-control">
                                </div>
                                <div class="col-md-2" style="text-align:center";>
                                  
                                </div>
                                <div class="col-md-5">
                                  <input type=text class="form-control">
                                </div>
                              </div>
                              <div class="form-group" style="margin-bottom: 10px;">
                                <button class="button button1" style="margin-left:20px; font-size:13px; background-color:#f8f8f8; border:0px; color:#777"><span class="glyphicon glyphicon-plus"></span> Tambahkan opsi</button>
                              </div>
                              <br>
                              <div class="form-group form-inline" style="margin-bottom:10px;">
                                <strong class="col-md-1">Poin:</strong>
                                <div class="col-md-3">
                                  <label style="width:60px;" class="form-control-label">Benar </label>
                                  <input type="text" class="form-control" style="width:32%">
                                </div>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px;">
                                <div class="col-md-push-1 col-md-3">
                                  <label style="width:60px;" class="form-control-label">Kosong</label>
                                  <input type="text" class="form-control" style="width:32%" value="0"> 
                                </div>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px">
                                <div class="col-md-push-1 col-md-3">
                                  <label style="width:60px;" class="form-control-label">Salah</label>
                                  <input type="text" class="form-control" style="width:32%" value="0"> 
                                </div>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px">
                                <div class="col-md-push-1 col-md-3">
                                  <label style="width:60px;" class="form-control-label"></label>
                                  <a href="view_ujian.html" id="hapusSoal" class="btn btn-simpan"> Simpan</a>
                                </div>                            
                              </div>
                            </form> 
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default tab-pane fade" id="formSebabAkibat">
                    <div class="panel-body">
                      <div class="row">
                        <div style="margin-left:10px; width:15px; float:left;">
                          <strong id="nomor">1.</strong>
                        </div>
                        <div style="margin-left: 0px;">  
                          <div class="col-md-12" style="width:96%">
                            <form class="form-horizontal col-md-12">
                              <div class="form-group">
                                 <label class="form-control-label">Pernyataan</label>
                                 <textarea class="form-control" rows="2"></textarea>
                              </div>
                              <div class="form-group">
                                 <label class="form-control-label col-md-offset-5 col-md-6">SEBAB</label>
                                 <textarea  style="margin-bottom:10px;" class="form-control" rows="2"></textarea>
                              </div>
                              <div class="form-group">
                                <div class="radio">
                                  <label class="col-xs-12 col-md-12"><input type="radio">Pernyataan benar, alasan benar, keduanya menunjukkan hubungan sebab akibat</label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="radio">
                                  <label class="col-xs-12 col-md-12"><input type="radio">Pernyataan benar, alasan benar, tapi keduanya tidak menunjukkan hubungan sebab akibat</label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="radio">
                                  <label class="col-xs-12 col-md-12"><input type="radio">Pernyataan benar, alasan salah</label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="radio">
                                  <label class="col-xs-12 col-md-12"><input type="radio">Pernyataan salah, alasan benar</label>
                                </div>    
                              </div>
                              <div class="form-group" style="margin-bottom: 10px;">
                                <div class="radio">
                                  <label class="col-xs-12 col-md-12"><input type="radio">Pernyataan dan alasan salah</label>
                                </div>    
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px;">
                                <strong class="col-md-1">Poin:</strong>
                                <div class="col-md-3">
                                  <label style="width:60px;" class="form-control-label">Benar </label>
                                  <input type="text" class="form-control" style="width:32%">
                                </div>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px;">
                                <div class="col-md-push-1 col-md-3">
                                  <label style="width:60px;" class="form-control-label">Kosong</label>
                                  <input type="text" class="form-control" style="width:32%" value="0"> 
                                </div>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px">
                                <div class="col-md-push-1 col-md-3">
                                  <label style="width:60px;" class="form-control-label">Salah</label>
                                  <input type="text" class="form-control" style="width:32%" value="0"> 
                                </div>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px">
                                <div class="col-md-push-1 col-md-3">
                                  <label style="width:60px;" class="form-control-label"></label>
                                  <a href="view_ujian.html" id="hapusSoal" class="btn btn-simpan"> Simpan</a>
                                </div>                            
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default tab-pane fade" id="formPilihan123">
                    <div class="panel-body">
                      <div class="row">
                        <div style="margin-left:10px; width:15px; float:left;">
                          <strong id="nomor">1.</strong>
                        </div>
                        <div style="margin-left: 0px;">  
                          <div class="col-md-12" style="width:96%">
                            <form class="form-horizontal col-md-12">
                              <div class="form-group">
                                 <label class="form-control-label">Pernyataan</label>
                                 <textarea class="form-control" rows="3"></textarea>
                              </div>
                              <div class="form-group">
                                <div class="radio">
                                  <label class="col-xs-12 col-md-12"><input type="radio">(1), (2), dan (3) benar</label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="radio">
                                  <label class="col-xs-12 col-md-12"><input type="radio">(1) dan (3) benar</label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="radio">
                                  <label class="col-xs-12 col-md-12"><input type="radio">(2) dan (4) benar</label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="radio">
                                  <label class="col-xs-12 col-md-12"><input type="radio">Hanya (4) yang benar</label>
                                </div>    
                              </div>
                              <div class="form-group" style="margin-bottom:10px;">
                                <div class="radio">
                                  <label class="col-xs-12 col-md-12"><input type="radio">Benar semua</label>
                                </div>    
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px;">
                                <strong class="col-md-1">Poin:</strong>
                                <div class="col-md-3">
                                  <label style="width:60px;" class="form-control-label">Benar </label>
                                  <input type="text" class="form-control" style="width:32%">
                                </div>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px;">
                                <div class="col-md-push-1 col-md-3">
                                  <label style="width:60px;" class="form-control-label">Kosong</label>
                                  <input type="text" class="form-control" style="width:32%" value="0"> 
                                </div>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px">
                                <div class="col-md-push-1 col-md-3">
                                  <label style="width:60px;" class="form-control-label">Salah</label>
                                  <input type="text" class="form-control" style="width:32%" value="0"> 
                                </div>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px">
                                <div class="col-md-push-1 col-md-3">
                                  <label style="width:60px;" class="form-control-label"></label>
                                  <a href="view_ujian.html" id="hapusSoal" class="btn btn-simpan"> Simpan</a>
                                </div>                            
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default tab-pane fade" id="formCheckbox">
                    <div class="panel-body">
                      <div class="row">
                        <div style="margin-left:10px; width:15px; float:left;">
                          <strong id="nomor">1.</strong>
                        </div>
                        <div style="margin-left: 0px;">  
                          <div class="col-md-12" style="width:96%">
                            <form class="form-horizontal col-md-12">
                              <div class="form-group">
                                 <label class="form-control-label">Pertanyaan</label>
                                 <textarea id="edit3" class="form-control" rows="3"></textarea>
                              </div>
                              <div class="form-group">
                                <div class="checkbox">
                                  <label class="col-xs-12 col-md-12"><input type="checkbox" name="checkbox1"><input type="text" class="form-control"></label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="checkbox">
                                  <label class="col-xs-12 col-md-12"><input type="checkbox" name="checkbox2"><input type="text" class="form-control"></label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="checkbox">
                                  <label class="col-xs-12 col-md-12"><input type="checkbox" name="checkbox3"><input type="text" class="form-control"></label>
                                </div>
                              </div>
                              <div class="form-group" style="margin-bottom: 10px;">
                                <div class="checkbox">
                                  <label class="col-xs-12 col-md-12"><input type="checkbox" name="checkbox4"><input type="text" class="form-control"></label>
                                </div>    
                              </div>
                              <div class="form-group" style="margin-bottom: 10px;">
                                <button class="button button1" style="margin-left:20px; font-size:13px; background-color:#f8f8f8; border:0px; color:#777"><span class="glyphicon glyphicon-plus"></span> Tambahkan opsi</button>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px;">
                                <strong class="col-md-1">Poin:</strong>
                                <div class="col-md-3">
                                  <label style="width:60px;" class="form-control-label">Benar </label>
                                  <input type="text" class="form-control" style="width:32%">
                                </div>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px;">
                                <div class="col-md-push-1 col-md-3">
                                  <label style="width:60px;" class="form-control-label">Kosong</label>
                                  <input type="text" class="form-control" style="width:32%" value="0"> 
                                </div>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px">
                                <div class="col-md-push-1 col-md-3">
                                  <label style="width:60px;" class="form-control-label">Salah</label>
                                  <input type="text" class="form-control" style="width:32%" value="0"> 
                                </div>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px">
                                <div class="col-md-push-1 col-md-3">
                                  <label style="width:60px;" class="form-control-label"></label>
                                  <a href="view_ujian.html" id="hapusSoal" class="btn btn-simpan"> Simpan</a>
                                </div>                            
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default tab-pane fade" id="formBenarSalah">
                    <div class="panel-body">
                      <div class="row">
                        <div style="margin-left:10px; width:15px; float:left;">
                          <strong id="nomor">1.</strong>
                        </div>
                        <div style="margin-left: 0px;">
                          <div class="col-md-12" style="width:96%">
                            <form class="form-horizontal col-md-12">
                              <div class="form-group">
                                 <label class="form-control-label">Pertanyaan</label>
                                 <textarea id="edit4" class="form-control" row="3"></textarea>
                              </div>
                              <p style="margin-left:-10px; font-size:11px; color:#818181; margin-top:10px;">Klik lingkaran untuk menetapkan jawaban yang benar</p>
                              <div class="form-group" style="margin-bottom:10px; margin-top:10px;">
                                <div class="row">
                                  <div style="float:left" style="width:15px">
                                      <i class="fa fa-check-circle fa-lg" style="color:#ffffff"></i>
                                    </div>
                                    <div style="margin-left:15px; width:50px; float:left; padding-right:10px;">
                                      <i class="fa fa-circle-thin fa-2x setjawaban" style="color:#dadada"></i>
                                    </div>
                                    <div style="width:85%; margin-left:-20px;" class="col-md-9">
                                      Benar
                                    </div>
                                </div>
                              </div>
                              <div class="form-group" style="margin-bottom:10px; margin-top:10px;">
                                <div class="row">
                                  <div style="float:left" style="width:15px">
                                      <i class="fa fa-check-circle fa-lg" style="color:#ffffff"></i>
                                    </div>
                                    <div style="margin-left:15px; width:50px; float:left; padding-right:10px;">
                                      <i class="fa fa-circle-thin fa-2x setjawaban" style="color:#dadada"></i>
                                    </div>
                                    <div style="width:85%; margin-left:-20px;" class="col-md-9">
                                      Salah
                                    </div>
                                </div>
                              </div>
                              <br>
                              <div class="form-group form-inline" style="margin-bottom:10px;">
                                <strong class="col-md-1">Poin:</strong>
                                <div class="col-md-3">
                                  <label style="width:60px;" class="form-control-label">Benar </label>
                                  <input type="text" class="form-control" style="width:32%">
                                </div>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px;">
                                <div class="col-md-push-1 col-md-3">
                                  <label style="width:60px;" class="form-control-label">Kosong</label>
                                  <input type="text" class="form-control" style="width:32%" value="0"> 
                                </div>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px">
                                <div class="col-md-push-1 col-md-3">
                                  <label style="width:60px;" class="form-control-label">Salah</label>
                                  <input type="text" class="form-control" style="width:32%" value="0"> 
                                </div>
                              </div>
                              <div class="form-group form-inline" style="margin-bottom:10px">
                                <div class="col-md-push-1 col-md-3">
                                  <label style="width:60px;" class="form-control-label"></label>
                                  <a href="view_ujian.html" id="hapusSoal" class="btn btn-simpan"> Simpan</a>
                                </div>                            
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div> 
      </div>
    </div>  

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

    <!-- Include Language file if we want to use it. -->
    <script type="text/javascript" src="froala/js/languages/ro.js"></script>

    <!-- Initialize the editor. -->
    <script>
        $(function() {
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


            $('#edit1, #edit2, #edit3, #edit4, #edit5').froalaEditor({
              toolbarButtons: ['insertImage', 'undo', 'redo', 'clearFormatting', 'clear', 'bold', 'italic', 'underline', 'subscript', 'superscript', 'highlight', 'strikeThrough', 'align', 'formatOL', 'formatUL', 'remove'],
              placeholderText: 'Ketik pertanyaan',
              spellcheck: false
            });
            $('div.opsi').froalaEditor({
              toolbarInline: true,
              charCounterCount: false,
              toolbarButtons: ['bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', '-', 'undo', 'redo', 'align', 'insertImage'],
              placeholderText: 'Ketik jawaban',
              spellcheck:false
            });
			     $('.selector').froalaEditor('commands.show');
           $('span.fr-placeholder').css({"height":"35px"});
        });
    		$(function(){
    			$('textarea#opsiGanda1, div#opsiGanda2, div#opsiGanda3, div#opsiGanda4, div#opsiGanda5, div#opsiIsian, textarea#opsiEssay, textarea#opsiGandaT1').froalaEditor({
    			  toolbarInline: true,
    			  charCounterCount: false,
    			  toolbarButtons: ['bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', '-', 'align', 'insertImage', 'undo', 'redo'],
    			  toolbarVisibleWithoutSelection: true,
            placeholderText: 'Ketik jawaban',
            spellcheck:false
    			});
        });
        $(function(){
            $(".setjawaban").click(function(){
              $(".setjawaban").removeClass("fa fa-circle-thin");
              $(".setjawaban").addClass("fa fa-circle-thin");
              $(this).removeClass("fa fa-circle-thin");
              $(this).addClass("fa fa-circle");
              $(this).css({
                "color" : "#32CD32"
              });
              //$(this).closest('.checklist').find()
            });
            $('.tambahopsi').click(function(){
              $('.opsiGandaE').removeAttr("hidden");
            });
        });

        $('.hashtip').tooltipsy({
              offset: [10, 0],
              show: function (e, $el) {
                  $el.css({
                      'left': parseInt($el[0].style.left.replace(/[a-z]/g, '')) - 50 + 'px',
                      'opacity': '0.0',
                      'display': 'block'
                  }).animate({
                      'left': parseInt($el[0].style.left.replace(/[a-z]/g, '')) + 50 + 'px',
                      'opacity': '1.0'
                  }, 300);
              },
              hide: function (e, $el) {
                  $el.slideUp(100);
              },
              css: {
                  'font-size' : '13px',
                  'font-family':'"Lato", sans-serif',
                  'padding': '10px',
                  'max-width': '200px',
                  'color': '#000000',
                  'background-color': '#ffffff',
                  'border-radius': '4px',
                  'border': '0px solid #F7B733',
                  '-moz-box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
                  '-webkit-box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
                  'box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
                  'text-shadow': 'none'
              }
          });
    </script>
  </body>
</html>