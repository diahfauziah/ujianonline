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
     <!-- Include Font Awesome. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
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
      .modal-dialog {
        height: 80% !important;
        padding-top:10%;
      }
      .modal-body {
        height: 80%;
        overflow: auto;
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
        border: 2px solid #4ABDAC;
      }
      .button1:hover {
        background-color: #ffffff;
        color: #4ABDAC;
        border: 2px solid #4ABDAC;
      }
      
      th {
        color: #ffffff;
        background-color: #F7B733;
        text-decoration: none;
        font-family: 'Didact Gothic', sans-serif;
      }
      .alert-success {
        color: #4abdac;
        background-color: #ecf8f6;
        border-color: #ecf8f6;
      }
      footer {
        position:absolute;
        bottom:0;
        width:100%;
      }
      .link2 a:link {
        color: rgba(186, 182, 182, 1);;
      }
      .link2 a:visited {
        color: #818181;
      }
      .link2 a:hover {
        color: #4ABDAC;
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
      
      .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
        background-color: #f8f8f8;
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
            <li><a href="index_guru.php"><span class="glyphicon glyphicon-home" style="font-size:13px"></span> Beranda</a></li>
            <li class="active"><a href="kategori.php"><span class="glyphicon glyphicon-cog" style="font-size:13px"></span> Kategori</a></li>
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
    
    <!-- Container -->
    <div class="container">
      <h2 style="color:#4ABDAC; font-family: 'Didact Gothic', sans-serif;">Kategori</h2>
      <p style="font-size:12px; margin-top:10px; color:#818181">Tambah/ubah <b>mata pelajaran</b> dan <b>kelas</b> yang tersedia</p>
      <br>
      <div  class="row">
        <div class="col-md-3" style="padding-right:0px"> <!-- required for floating -->
          <!-- Nav tabs -->
          <ul class="nav nav-tabs tabs-left sideways">
            <li class="active"><a href="#home-v" data-toggle="tab">Mata Pelajaran</a></li>
            <li><a href="#profile-v" data-toggle="tab">Kelas</a></li>
          </ul>
        </div>

        <div class="col-md-6" style="background-color:#f8f8f8">
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="home-v">
              <br>
              <a href="#" class="button button1" data-toggle="modal" data-target="#modalTambahKategori" style="margin-bottom:10px; text-decoration:none"><span class="glyphicon glyphicon-plus"></span> Tambah Mata Pelajaran</a>
              <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Berhasil!</strong> Mata Pelajaran Biologi berhasil dibuat.
              </div>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Nama Mata Pelajaran</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody style="background-color:#ffffff">
                  <tr>
                    <td>Matematika</td>
                    <td> <div style="font-size: 12px; color:#aba8a8;" class="link2"><a href="#">Edit</a> | <a href="#">Hapus</a></div></td>
                  </tr>
                  <tr>
                    <td>Fisika</td>
                    <td> <div style="font-size: 12px; color:#aba8a8;" class="link2"><a href="#">Edit</a> | <a href="#">Hapus</a></div></td>
                  </tr>
                  <tr>
                    <td>B. Indonesia</td>
                    <td> <div style="font-size: 12px; color:#aba8a8;" class="link2"><a href="#">Edit</a> | <a href="#">Hapus</a></div></td>
                  </tr>
                  <tr style="background-color:#ecf8f6;">
                  <td>Biologi</td>
                    <td> <div style="font-size: 12px; color:#aba8a8;" class="link2"><a href="#">Edit</a> | <a href="#">Hapus</a></div></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane" id="profile-v">
              <br>
              <a href="#" class="button button1" data-toggle="modal" data-target="#modalKelas" style="margin-bottom:10px; text-decoration:none"><span class="glyphicon glyphicon-plus"></span> Tambah Kelas</a>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Kelas</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody style="background-color:#ffffff">
                  <tr>
                    <td>X MIPA</td>
                    <td> <div style="font-size: 12px; color:#aba8a8;" class="link2"><a href="#">Edit</a> | <a href="#">Hapus</a></div></td>
                  </tr>
                  <tr>
                    <td>XI MIPA</td>
                    <td> <div style="font-size: 12px; color:#aba8a8;" class="link2"><a href="#">Edit</a> | <a href="#">Hapus</a></div></td>
                  </tr>
                  <tr>
                    <td>XII MIPA</td>
                    <td> <div style="font-size: 12px; color:#aba8a8;" class="link2"><a href="#">Edit</a> | <a href="#">Hapus</a></div></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <footer class="text-center">
        <p>2016 © Diah Fauziah. Ujian Online Template.</p>
      </footer>
    <!-- Modal Kategori -->
    <div class="modal fade" id="modalTambahKategori" tabindex="-1" role="dialog" aria-labelledby="modalTambahKategoriLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" arial-label="close"><span aria-hidden="true"></span>&times;</button>
            <h4 class="modal-title" id="modalTambahKategoriLabel">Kategori Baru</h4>
          </div>
          <div class="modal-body">
            <form class="form form-inline"> 
              <div class="form-group col-md-12">
                <label class="form-control-label col-md-3">Nama Kategori</label>
                <input type="text" class="form-control col-md-9" style="width:70%">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <a  href="kategori.php" class="button button1" id="simpan" style="text-decoration:none;">Simpan</a>
            <button class="btn btn-default" data-dismiss="modal" style="border-width:2px;">Batal</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Kelas -->
    <div class="modal fade" id="modalKelas" tabindex="-1" role="dialog" aria-labelledby="modalKelas">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" arial-label="close"><span aria-hidden="true"></span>&times;</button>
            <h4 class="modal-title" id="modalKelasLabel">Kelas Baru</h4>
          </div>
          <div class="modal-body">
            <form class="form form-inline"> 
              <div class="form-group col-md-12">
                <label class="form-control-label col-md-3">Nama Kelas</label>
                <input type="text" class="form-control col-md-9" style="width:70%">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <a  href="#" class="button button1" id="simpan" style="text-decoration:none;">Simpan</a>
            <button class="btn btn-default" data-dismiss="modal" style="border-width:2px;">Batal</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
