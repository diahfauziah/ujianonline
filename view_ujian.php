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
    
    <title>Lihat Ujian | Ujian Online</title>

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
    
	<!-- Include Font Awesome. -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-tagsinput.min.js"></script>
    <script type="text/javascript"> 
      $(function(){
        /*$('.collapse').collapse(); */
        $("#collapse1").collapse();
        $("#collapse2").collapse();
        $("#collapse1").on("hide.bs.collapse", function(){
          $(".panahTurun1").html('<span class="glyphicon glyphicon-chevron-down"></span>');
        });
        $("#collapse1").on("show.bs.collapse", function(){
          $(".panahTurun1").html('<span class="glyphicon glyphicon-chevron-up"></span>');
        });
        $("#collapse2").on("hide.bs.collapse", function(){
          $(".panahTurun2").html('<span class="glyphicon glyphicon-chevron-down"></span>');
        });
        $("#collapse2").on("show.bs.collapse", function(){
          $(".panahTurun2").html('<span class="glyphicon glyphicon-chevron-up"></span>');
        });
        $(".soal").mouseover(function(){
         // $(this).css("border-color", "blue");
        });
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
      #panel {
        display: none;
      }
      .navbar {
        margin-bottom: 0;
        /*z-index: 9999; */
        font-size: 12px !important;
        border-radius: 0;
        border-bottom-color: #e7e7e7;
        border-bottom-width: 1px;
      }
      label, th {
        line-height: 1.8;
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
      .footer {
          background-color: #F4F4F4;
          border-top: 1px solid #e5e5e5;
          color: #999;
          padding: 20px 15px;
          background-color: #f5f5f5;
      }
      .footer, .content, .topheader {
          margin-top: 0px;
          margin-right: auto;
          margin-bottom: 0px;
          margin-left: auto;
          max-width: 1024px;
      }
      .content {
        background-color: #f8f8f8;
        min-height: 600px;
        padding: 20px 12px;
        overflow: hidden;
      }
      .progress {
        margin-top: 5px;
        margin-bottom: 10px;
        border-radius: 0;
        overflow: visible;
      }
      
      span.highlight {
        background-color: yellow;
      }
      #teksSoal {
        padding-left: 20px;
        padding-right: 10px;
      }
      .tooltip{
        position: relative;
        float: right;
      }
      .btn-default {
        border-color: #cccccc;
      }
      .breadcrumb {
        background: rgba(245, 245, 245, 1);
        background-color: #f8f8f8;
        display: block;
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
      .modal-dialog {
        height: 80% !important;
        padding-top:10%;
      }

      .modal-body {
        height: 80%;
        overflow: auto;
      }

      .btn-primary, .btn-primary:active, .btn-primary:focus, .btn-primary:visited {
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
      .button1, .button1:link, .button1:visited, .col-md-3 a:link, .col-md-3 a:visited, .col-md-3 a:active {
        background-color: #4ABDAC;
        color: #ffffff;
        border: 0px;
      }
      .col-md-3 a:hover {
        background-color: #ffffff;
        color: #4ABDAC;
        border: 2px solid #4ABDAC;
      }

      .btn-abu, .btn-abu:active, .btn-abu:focus {
        background-color: #f8f8f8;
        border: 2px solid #f8f8f8; 
        color: #adadad;
      }
      .btn-abu:hover {
        background-color: #adadad;  
        color: #ffffff;
        border: 2px solid #adadad; 
      }
      th {
        color: #818181;
      }
      .table>tbody>tr>th{
        padding-left: 15px;
      }
      .panel {
        margin-bottom: 0px;
        border-radius: 0px;
      }
      .panel > .panel-heading {
        background-color: #F7B733;
        border-color: #F7B733;
        color: #ffffff;
      } 
      #panel1, #panel2 {
        border-width: 0px; 
        border-color: #ffffff;
        border-bottom-width: 2px;
      } 

      .editUjian a:hover, .panahTurun1:hover, .panahTurun2:hover {
        background-color: #4ABDAC;
        color: #ffffff;
        border-color: #4ABDAC;
      }
      .editUjian a:visited {
        background-color: #4ABDAC;  
        color: #ffffff;
        border-color: #4ABDAC; 
      }
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
      .button2, .button2:visited, .button2:link {
        font-size:13px; background-color:#ffffff; border-width:1px; color:#777;
      }
      .button2:hover, .button1:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }
      a:link, a:visited {
        color: #4ABDAC;
      }
      a:hover {
        text-decoration: underline;
      }
      .box {
        background-color: #f8f8f8;
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
    
    
  <div class="container">
      <?php include('koneksi.php'); 
            $id = $_GET['id'];
            $query = mysqli_query($link, "SELECT * FROM `info_ujian` WHERE `id_ujian`='$id' ");
            $ujian = mysqli_fetch_array($query);
      ?>
    <div class="content">
      <h2 style="margin: 14px; margin-bottom: 5px; color:#4ABDAC; font-family: 'Didact Gothic', sans-serif; text-align:center;"><?php echo $ujian['judul_ujian'] ?></h2>
      
        <div class="col-md-offset-2 col-md-8">
          <div class="row">
              <ol class="breadcrumb" style='margin-bottom:0px; width:100%; float:left'>
                <li><a href="index_guru.php">Beranda</a></li>
                <li class="active"><?php echo $ujian['judul_ujian'] ?></li>
             </ol>
          </div>
          <a href="#" class="button button2 pull-right" style="margin-top:10px; margin-right:10px; margin-bottom:10px; text-decoration:none"><span class="glyphicon glyphicon-eye-open"></span> Lihat tampilan siswa</a>
          <a href="tambah_soal2.php?id=<?php echo $ujian['id_ujian'] ?>" class="button button2 pull-right" style="margin-top:10px; margin-right:10px; text-decoration:none;"><span class="glyphicon glyphicon-plus"></span> Tambah soal</a>
        </div>
       <!-- <div class="col-md-6">
            <div class="pull-right">
              <a href="lihat_tampilan_ujian.html" class="button button1" style="margin-bottom:10px; text-decoration:none;"><span class="glyphicon glyphicon-eye-open"></span> Lihat tampilan ujian</a>
            </div>
        </div> -->

         <div class="col-md-offset-2 col-md-8">
            <div class="panel panel-default" style="margin-bottom:5px; border-radius:0px;">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-9 col-md-10">
                    <label>Informasi Ujian</label>
                  </div>
                  <div class="col-xs-3 col-md-2">
                    <a data-toggle="collapse" href="#collapse1" class="btn btn-primary btn-sm pull-right panahTurun1" style="color:#ffffff; border-radius:20px"><span class="glyphicon glyphicon-chevron-up"></span></a>
                    <div class="editUjian">
                      <a href="edit_ujian.php?id=<?php echo $ujian['id_ujian'] ?>" class="btn btn-primary btn-sm pull-right" style="margin-right:2px; border-radius:20px;"><span class="glyphicon glyphicon-pencil"></span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div id="collapse1" class="panel-collapse collapse">
                <table class="table table-hover">
                  <tbody>  
                   <tr>
                     <th class="col-md-3">URL</th>
                     <td><a href=#><?php echo $ujian['url_ujian'] ?></a></td>
                   </tr>
                   <tr>
                     <th>Waktu</th>
                     <td class="btnbiru"><?php echo $ujian['lama_ujian'] ?> Menit</td>
                   </tr>
                   <tr>
                     <th>Jumlah soal</th>
                     <td><?php echo $ujian['total_soal'] ?></td>
                   </tr>
                   <tr>
                     <th>Acak soal</th>
                     <td>
                     <div style="padding-left:0px;">
                       Ya
                     </div>
                     </td>
                   </tr>
                   <tr>
                    <th>Perlu login</th>
                    <td>
                      <div style="padding-left:0px;">
                       Ya
                     </div>
                    </td>
                   </tr>
                   <tr>
                     <th>Kategori</th> 
                     <td>
                      <span class="label label-default">Matematika</span>
                     </td>
                   </tr>
                   <tr>
                     <th>Petunjuk</th> 
                     <td>
                      <?php echo $ujian['petunjuk'] ?>
                     </td>
                   </tr>
                  </tbody>
                </table> 
              </div>  
            </div>
            <div class="panel panel-default tab-pane fade in active" id="formPilihanGanda">
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
                                 <textarea id="edit1" class="form-control" rows="3">
                                 </textarea>
                              </div>
                              <p style="margin-left:-10px; font-size:11px; color:#818181; margin-top:10px;">Klik lingkaran untuk menetapkan jawaban yang benar</p>
                              <div class="form-group" style="margin-bottom:10px">
                                <div class="row">
                                    <div style="float:left" style="width:15px">
                                     <i class="fa fa-check-circle fa-lg checklist" style="color:#ffffff"></i> 
                                    </div>
                                    <div style="margin-left:15px; width:50px; float:left; padding-right:10px;">
                                      <i class="fa fa-circle-thin fa-2x setjawaban" style="color:#dadada"></i>
                                    </div>
                                    <div style="width:85%;  margin-left:-20px;" class="col-md-9">
                                      <div class="form-control" id="opsiGanda1"></div>
                                    </div>
                                    <div style="float:left">
                                      <i class="fa fa-trash"></i>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group" style="margin-bottom:10px;">
                                <div class="row">
                                  <div style="float:left" style="width:15px">
                                      <i class="fa fa-check-circle fa-lg" style="color:#32cd32"></i>
                                    </div>
                                    <div style="margin-left:15px; width:50px; float:left; padding-right:10px;">
                                      <i class="fa fa-circle fa-2x setjawaban" style="color:#32cd32"></i>
                                    </div>
                                    <div style="width:85%; margin-left:-20px;" class="col-md-9">
                                      <div class="form-control" id="opsiGanda1"></div>
                                    </div>
                                    <div style="float:left">
                                      <i class="fa fa-trash"></i>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group" style="margin-bottom:10px">
                                <div class="row">
                                    <div style="float:left" style="width:15px">
                                      <i class="fa fa-check-circle fa-lg" style="color:#ffffff"></i>
                                    </div>
                                    <div style="margin-left:15px; width:50px; float:left; padding-right:10px;">
                                      <i class="fa fa-circle-thin fa-2x setjawaban" style="color:#dadada"></i>
                                    </div>
                                    <div style="width:85%; margin-left:-20px;" class="col-md-9">
                                      <div class="form-control" id="opsiGanda1"></div>
                                    </div>
                                    <div style="float:left">
                                      <i class="fa fa-trash"></i>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group" style="margin-bottom:10px">
                                <div class="row">
                                    <div style="float:left" style="width:15px">
                                      <i class="fa fa-check-circle fa-lg" style="color:#ffffff"></i>
                                    </div>
                                    <div style="margin-left:15px; width:50px; float:left; padding-right:10px;">
                                      <i class="fa fa-circle-thin fa-2x setjawaban" style="color:#dadada"></i>
                                    </div>
                                    <div style="width:85%;margin-left:-20px;" class="col-md-9">
                                      <div class="form-control" id="opsiGanda1"></div>
                                    </div>
                                    <div style="float:left">
                                      <i class="fa fa-trash"></i>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group" style="margin-top: 10px;margin-bottom: 10px;">
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
                                  <a href="view_ujian.html" class="button button2" style="text-decoration:none"> Simpan</a>
                                </div>                            
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            <?php 
            $query1 = mysqli_query($link, "SELECT * FROM `soal` WHERE `id_ujian`='$id' ");
            
            while ($soal = mysqli_fetch_array($query1)){
            echo '<div class="panel panel-default soal">';
            echo '<div class="panel-body">';
            echo     '<div class="row">';
            echo       '<div style="margin-left:10px; width:15px; float:left;">';
            echo        '<strong>';
            echo          $soal['nomor_soal'];
            echo        '.</strong>';
            echo       '</div>';
            echo       '<div style="margin-left:0px;">';
            echo        '<div class="col-md-12" style="width:96%">';
            echo          $soal['pertanyaan'];
                          $id_soal = $soal['id_soal'];
                          $query2 = mysqli_query($link, "SELECT * FROM `pilihan_jawaban` WHERE `id_soal`='$id_soal' ");
                          $huruf = array("A","B","C","D","E");
                          $i = 0;
                      echo    '<ul class="list-group" style="margin-top:10px;">';
                        while($pilihan = mysqli_fetch_array($query2)){
                          echo '<li class="list-group-item opsijawaban">';
                          echo     '<div style="margin-left:15px; width:50px; float:left; padding-right:10px;">';
                        //echo       '<i class="fa fa-circle-thin fa-2x setjawaban" style="color:#4ABDAC"></i>';
                          echo        '<div class="numberCircle">';
                          echo         $huruf[$i];
                          echo        '</div>'; 
                          echo     '</div>';
                          echo     '<div style="width:85%;  margin-left:-20px;">';
                          echo       '<div id="opsiGanda1" class="form-control">'.$pilihan['opsi_jawaban'].'</div>';
                          echo     '</div>';
                          echo '</li>';
                          $i++;
                        }
                          echo '</ul>';
                          echo '<div class="panel-footer">';
                          echo '<div class="row">';
                          echo   '<div class="col-md-3">Poin Benar: 10</div>';
                          echo   '<div class="col-md-3">Poin Salah: 0</div>';
                          echo   '<div class="col-md-3">Poin Kosong: 0</div>';
                          echo '</div>';
                        
                          echo  '<div class="form-group row" style="margin-top:10px;">';
                          echo    '<div class="col-md-6"></div>';
                          echo    '<a href="edit_soal.html" class="button button1 col-md-2" style="margin-left:80px; text-decoration:none"><span class="glyphicon glyphicon-pencil"></span> Edit</a>';
                          echo    '<button class="button button2 col-md-2" data-toggle="modal" data-target="#modalHapus" style="font-size:14px; margin-left:10px;"><span class="glyphicon glyphicon-trash"></span> Hapus</button>';
                          echo   '</div>';
                          echo '</div>';
                    echo '</div>';
                echo '</div>';
               echo '</div>';
              echo '</div>';
           echo '</div>';
           };
         ?>
         
         </div> 
    </div>
  </div>
    <footer class="text-center">
	  <p>2016 © Diah Fauziah. Ujian Online Template.</p>
    </footer>
     <!-- Modal Hapus -->
              <div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="modalHapusLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" arial-label="close"><span aria-hidden="true"></span>&times;</button>
                      <h4 class="modal-title" id=modalHapusLabel>Hapus Soal Ujian Deret Aritmetika</h4>
                    </div>
                    <div class="modal-body">
                      Apakah anda ingin menghapus Soal no.1?
                    </div>
                    <div class="modal-footer">
                      <button  class="btn btn-primary">Ya</button>
                      <button class="btn btn-default btn-abu" data-dismiss="modal">Tidak</button>
                    </div>
                  </div>
                </div>
              </div>
  </div>

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

    <script>
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


        $('#edit1').froalaEditor({
          toolbarButtons: ['insertImage', 'undo', 'redo', 'clearFormatting', 'clear', 'bold', 'italic', 'underline', 'subscript', 'superscript', 'highlight', 'strikeThrough', 'align', 'formatOL', 'formatUL', 'remove'],
          placeholderText: 'Ketik pertanyaan',
          charCounterCount: false,
          spellcheck: false
        });

        $(function(){
          $('div#opsiGanda1').froalaEditor({
            toolbarInline: true,
            charCounterCount: false,
            toolbarButtons: ['bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', '-', 'undo', 'redo', 'insertImage', 'paragraphFormat', 'formatOL', 'formatUL', '-', 'align', 'indent', 'outdent'],
            toolbarVisibleWithoutSelection: true,
            placeholderText: 'Ketik jawaban',
            spellcheck:false
          });
        });
      });
    </script>
  </body>
</html>