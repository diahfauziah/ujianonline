<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Home | Ujian Online</title>

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
      .btn-primary, .btn-primary:active, .btn-primary:focus {
        background-color: #4ABDAC;  
        color: #ffffff;
        border-color: #4ABDAC; 
        border-width: 2px;
      }
      .btn-primary:hover {
        background-color: #ffffff;
        border-color: #4ABDAC;
        color: #4ABDAC;
        border-width: 2px;
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
      footer {
        position:relative;
        bottom:0;
        width:100%;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
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
            <li><a href="index_guru.php"><span class="glyphicon glyphicon-cog" style="font-size:13px"></span> Kategori</a></li>
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
            <li><a href="#"> Diah Fauziah </a></li>
            <li><a href="#"><u>Keluar</u></a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- Container -->
    <div class="container">
      <div class="col-md-offset-3 col-md-6">
          <div class="panel panel-default" id="panelSoal" style="margin-top: 0px;">
            <div class="panel-body">
              <h3 style="text-align:center; color:#4ABDAC; font-family:'didact gothic', sans-serif;">Buat Ujian Baru</h3>
              <hr>
            <form class="form-horizontal" action="input_ujian.php" method="post">
              <div class="form-group">
                <label class="col-md-3">Judul</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="Judul" name="Judul">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3">URL</label>
                <div class="col-md-9">
                  <a href="#" id="URL">https://www.onlineexambuilder.com/fisika/exam-53260</a>
                </div>  
              </div>
              <div class="form-group">
                <label class="col-md-3">Waktu</label>
                <div class="col-md-4">
                  <input type="text" class="form-control" id="Waktu" name="Waktu">
                </div>
                <div class="col-md-5">
                   Menit
                 </div>
              </div>
              <div class="form-group">
                <label class="col-md-3">Jumlah soal</label>
                <div class="col-md-9"  id="JumlahSoal" name="JumlahSoal">
                  0
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3">Acak soal</label>
                <div class="col-md-9">
                   <select class="form-control" id="AcakSoal" name="AcakSoal">
                    <option value="1">Ya</option>
                    <option value="0">Tidak</option>
                  </select>
                 </div>
              </div>
              <div class="form-group">
                <label class="col-md-3">Kategori</label>
                <div class="col-md-9">
                   <input type="text" class="form-control" aria-describedby="helpBlock" id="KategoriUjian" name="KategoriUjian">
                   <span id="helpBlock" class="help-block">Pisahkan dengan titik koma (;)</span>
                 </div>
              </div>
              <div class="form-group">
                  <label class="col-md-3">Peserta perlu login</label>
                  <div class="col-md-9">
                    <select class="form-control" id="PerluLogin" name="PerluLogin">
                      <option value="1">Ya</option>
                      <option value="0">Tidak</option>
                    </select>
                  </div>
                </div>
              <div class="form-group">
                <div class="col-md-offset-3 col md-9" style="padding-left:15px;">
              <!--    <a href="index_guru.php" type="button" class="btn btn-simpan" > Simpan</a> -->
                  <input type="submit" name="submit" value="Simpan" class="submit-button btn btn-simpan" >
                  <a href="index_guru.php" type="button" class="btn btn-default" style="border-width:2px;"> Kembali ke Beranda</a>
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
  </body>
</html>
