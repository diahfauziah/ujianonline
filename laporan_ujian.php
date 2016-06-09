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

      .btn-custom, .btn-custom:active, .btn-custom:focus {
        background-color: #4ABDAC;  
        color: #ffffff;
        border-color: #4ABDAC; 
      }

      .btn-custom:hover {
        background-color: #ffffff;
        border-color: #4ABDAC;
        color: #4ABDAC;
        border-width: 2px;
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
      th {
        color: #ffffff;
        background-color: #F7B733;
        text-decoration: none;
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
    
    <div class="container">
    <h2 style="margin: 14px; margin-bottom: 0px; color:#4ABDAC; font-family: 'didact gothic', sans-serif">Laporan Ujian Deret Aritmetika</h2>
     <div class="row">
      <div class="col-xs-6 col-md-9">
         <ol class="breadcrumb" style="margin-left:0px">
            <li><a href="index_guru.php">Home</a></li>
            <li class="active">Laporan Ujian Deret Aritmetika</li>
         </ol>
       </div>
       <div class="col-xs-6 col-md-3">
       </div>
     </div>
     <div class="col-md-offset-2 col-md-8">
     <table class="table table-hover">
        <thead>
          <tr>
            <th>Tanggal Akses</th>
            <th>Nama Peserta</th>
            <th>Skor</th>
            <th>Total waktu</th>
          </tr>
        </thead>
        <tbody>
          <?php include('koneksi.php'); 
            $id = $_GET['id'];
            $query = mysqli_query($link, "SELECT * FROM `laporan_ujian_guru` WHERE `id_ujian`='$id' ");
            while($laporan = mysqli_fetch_array($query)){
              echo '<tr>';
              echo  '<td>'. $laporan["tanggal_akses"] .'</td>';
              echo  '<td>'. $laporan["nama_peserta"] .'</td>';
              echo  '<td>'. $laporan["nilai"] .'</td>';
              echo  '<td>'. $laporan["total_waktu"] .'</td>';
              echo '<tr>';
            };
          ?>
        </tbody>
     </table>
    </div>
  </div>
  </body>
</html>