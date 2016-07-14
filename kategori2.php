<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Home | Ujian Online</title>

    <!-- Bootstrap -->
    <link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
      
      .container {
        padding: 20px 20px;
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
        background-color: #ffffff;
        color: #F7b733;
        border: 2px solid #F7b733;
      }
      .breadcrumb {
        background: rgba(245, 245, 245, 1);
        background-color: #ffffff;
        display: block;
      }
      th, label {
        color: #777; 
      }
      .breadcrumb li {
        font-size: 12px;
      }
      .breadcrumb a {
        color: rgba(109, 116, 122, 1);
      }
      .breadcrumb a:hover {
        color: rgba(42, 100, 150, 1);
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
      label {
        color: #F7b733;
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

      .tabs-left, .tabs-right {
        border-bottom: none;
        padding-top: 2px;
      }
      .tabs-left {
        border-right: 1px solid #ddd;
      }
      .tabs-right {
        border-left: 1px solid #ddd;
      }
      .tabs-left>li, .tabs-right>li {
        float: none;
        margin-bottom: 2px;
      }
      .tabs-left>li {
        margin-right: -1px;
      }
      .tabs-right>li {
        margin-left: -1px;
      }
      .tabs-left>li.active>a,
      .tabs-left>li.active>a:hover,
      .tabs-left>li.active>a:focus {
        border-bottom-color: #ddd;
        border-right-color: transparent;
      }

      .tabs-right>li.active>a,
      .tabs-right>li.active>a:hover,
      .tabs-right>li.active>a:focus {
        border-bottom: 1px solid #ddd;
        border-left-color: transparent;
      }
      .tabs-left>li>a {
        border-radius: 4px 0 0 4px;
        margin-right: 0;
        display:block;
      }
      .tabs-right>li>a {
        border-radius: 0 4px 4px 0;
        margin-right: 0;
      }
      
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <!-- Navbar -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#myPage" style="padding-left:120px;">Ujian Online</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav menu">
            <li class="active"><a href="index_guru.php"><span class="glyphicon glyphicon-home" style="font-size:13px"></span> Beranda</a></li>
            <li><a href="kategori.php"><span class="glyphicon glyphicon-cog" style="font-size:13px"></span> Kategori</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right" style="padding-right:90px;">
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
            <li><a href="#"> Diah Fauziah </a></li>
            <li><a href="#"><u>Keluar</u></a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container">
    <h2 style="margin: 14px; margin-bottom: 0px; color:#4ABDAC; font-family:'didact gothic', sans-serif">Daftar Kategori dan Kelas</h2>
    <p style="margin-left:15px; font-size:12px; margin-top:10px; color:#818181">Tambah dan ubah kategori (mata pelajaran) dan kelas yang tersedia</p>
    <br>
      <div  class="row">
        <div class="col-md-3"> <!-- required for floating -->
          <!-- Nav tabs -->
          <ul class="nav nav-tabs tabs-left sideways">
            <li class="active"><a href="#home-v" data-toggle="tab">Kategori</a></li>
            <li><a href="#profile-v" data-toggle="tab">Kelas</a></li>
          </ul>
        </div>

        <div class="col-md-9">
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="home-v">
              <br>
              <a href="#" class="button button1" data-toggle="modal" data-target="#modalTambahKategori" style="margin-bottom:10px; text-decoration:none"><span class="glyphicon glyphicon-plus"></span> Tambah Kategori</a>
              <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Berhasil!</strong> Ujian Kesetimbangan berhasil dibuat.
              </div>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Nama Kategori</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Matematika<br> </td>
                  </tr>
                  <tr>
                    <td>Fisika</td>
                  </tr>
                  <tr>
                    <td>B. Indonesia</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane" id="profile-v">
              
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
  </body>
<script type="text/javascript"></script>
</html>
