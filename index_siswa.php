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
    
    <title>Home | Ujian Online</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(function(){ 
          $("[data-nomor=1]").addClass("nomor-belum-diisi");
          $("[data-nomor=1]").addClass("nomor-sekarang");
          $("#hide").click(function(){
              $("#kotak").toggle();
              $("#kotakSoal").toggleClass("col-md-10 col-md-12");
              //$("#hide").text("Unhide daftar soal");
              $("#nomorSoal").toggle();
              if ($("#hide").text() == "Hide daftar soal"){
                $("#hide").html("<u>Unhide daftar soal</u>");
              }
              else{
                ($("#hide").html("<u>Hide daftar soal</u>"));
              }
          });
      });
    </script>

    <!-- Style -->
    <style>
      body {
        font:400 14px Lato, sans-serif;
        line-height: 1.8;
             background-color: #ffffff;
        /* color: #929292; */
      } 
      .navbar {
        margin-bottom: 0;
        z-index: 9999;
        font-size: 12px !important;
        border-radius: 0; 
            /*  border-bottom-width: 1px; 
              border-bottom-color: #e7e7e7; */
        background-color: #ffffff;
      } 

      .panel {
        margin-top: 5px;
            /*  border: 0px; */
      }
      
      .navbar-nav li a:hover, .navbar-nav li.active a {
        color: #30cbe8 !important;
      }
      .navbar-default {
          border-color: #e7e7e7;
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
      .list-group-item {
        padding-top: 5px;
        padding-bottom: 5px;
      }
      .nomor {
        margin-bottom: 5px; width: 40px; height: 32px; font-size:13px;
      }
      
      .nomor-belum-diisi {
        background-color:#f8f8f8; color:#000000; border-color:#f8f8f8;
      }

      /* shadow */
      .nomor-sekarang {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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
      .button1:link, .button1:visited {
        background-color: #ffbf30;
        color: #ffffff;
        border: 1px solid #ffbf30;
      }
      .button1, .btnreset, .btnreset:link, .btnreset:visited{
        background-color:#f8f8f8;
        color:#929292; 
        border: 1px solid #e1edef; 
      }

      .btncoret, .btncoret:link, .btncoret:visited {
        background-color:#ffffff;
        color:#30cbe8; 
        border: 1px solid #e1edef;  
      }

      .button1:hover, .btnreset:hover {
     /*   background-color: #ffffff;
        color: #ffbf30;
        border: 1px solid #ffbf30; */
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }
      .button2, .button2:link, .button2:visited {
        background-color: #ffbf30;
        color: #ffffff;
        border: 1px solid #f8f8f8;
        font-size: 14px;
      }
      .button2:hover, .kumpulkan, .btncoret:hover {
        background-color: #ffb000;
        color: #ffffff;
        border: 1px solid #f8f8f8;
      }

      .button4, .button4:link, .button4:visited {
        background-color: #adadad;
        color: #fff;
        border-radius: 0px;
        font-size: 14px;
        border: 1px solid #dadada;
      }
      .button4:hover{
        background-color: #929292;
      }
      .button3 {
        background-color: #f8f8f8;
        border-color: #f8f8f8;
        color: #000000;
        font-size: 13px;
        border: 1px solid #e1edef;
      }
      .buttonprev, .buttonprev:link, .buttonprev:visited {
        background-color: #adadad;
        color: #fff;
        border: 1px solid #f8f8f8;
        font-size: 14px;
      }
      .buttonprev:hover {
        color: #fff;
        background-color: #929292;
      }
      .panel {
        border-color: #e7e7e7;
        border-bottom-color: #ffffff;
      }
      .circle {
        width: 30px;
        height: 30px;
        border-radius: 30px;
        font-size: 14px;
        color: #ffffff;
        text-align: center;
        background: #30cbe8;
        line-height: 28px;
        border: 1px solid #30cbe8;
      }
      .tandai {
        background-color : #ffbf30;
        color : #ffffff;
        border-color: #ffbf30;
      }
      li.selected:hover, li.selected {
        background-color : #87e2f3;
        box-shadow: 0 1px #87e2f3;
        
      }
      .list-group-item:hover {
        background-color: #f8f8f8;
        cursor: pointer;
      }

      .hasAnswer {
        background-color : #87e2f3;
        color : #ffffff;
        border-color : #87e2f3;
      }
      
      .disabled, .disabled:hover, .disabled:visited, .disabled:focus{
        cursor: not-allowed;
        background-color: #f8f8f8;
        color: #dadada;
        border: 1px solid #dadada;
        font-size: 14px;
      }
      .numberCircle {
          border-radius: 50%;

          width: 32px;
          height: 32px;
          padding: 5px;
          
          background: #f8f8f8;
          border: 2px solid #e1edef;
          color: #30cbe8;
          text-align: center;
          
          font: 15px Arial, sans-serif;
      }
      .numberCheck {
          border-radius: 50%;

          width: 32px;
          height: 32px;
          padding: 5px;
          
          background: #30cbe8;
          border: 1px solid #30cbe8;
          color: #fff;
          text-align: center;
          
          font: 15px Arial, sans-serif; 
      }
      .opsijawaban {
        border: 1px solid #e1edef;
        border-radius: 4px;
        margin-bottom: 5px;
        box-shadow: 0 1px #e1edef;
        width: 91%;
        margin-left: 25px;
      }
      .opsicheckbox {
        border: 1px solid #e1edef;
        border-radius: 4px;
        margin-bottom: 5px;
        box-shadow: 0 1px #e1edef;
        width: 91%;
        margin-left: 25px;
      }
      .hasAnswer, .hasTandai, .hasAnswer:visited, .hasTandai:visited, .hasAnswer:hover , .hasTandai:hover {
        color: #ffffff;
      }
      .tercoret{
        text-decoration: line-through;
      }
      
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <?php include("koneksi.php");
      $id = $_GET['id'];
      $query3 = mysqli_query($link, "SELECT * FROM `info_ujian` WHERE `id_ujian`='$id' ");
      $ujian = mysqli_fetch_array($query3);
	  
	  if ($ujian['acak_soal']){
		$query = mysqli_query($link, "SELECT * FROM (SELECT * FROM soal WHERE id_ujian='$id' ORDER BY rand() LIMIT 200) T1 ORDER BY stage_id");
	  } else {
		$query = mysqli_query($link, "SELECT * FROM `soal` WHERE `id_ujian`='$id' ORDER BY nomor_soal");
	  }
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
      <div class="col-md-offset-1 col-md-10">
    	  <form id="form" method="post" action="hasil.php">
        	<input type="hidden" id="IDujian" name="IDujian" value="<?php echo $id; ?>" />
        	<input type="hidden" id="waktu" name="waktu" />
          <div id="kotakSoal" class="col-md-10">
            Waktu ujian tersisa: <b><span id="time"></span></b>
            <div id="panelsoal">
              <?php 
    		       $j = 1;
                while($soal = mysqli_fetch_array($query)){
                  echo '<div class="panel panel-default" style="border-radius:0px; margin-bottom:0px" id="kotak';
                  echo   $j;
                  echo   '" hidden>';
                  //echo   '<div class="panel-heading">Tes</div>';
                  echo   '<div class="panel-body" style="margin-bottom:-5px;">';
                  //echo   'Soal ini untuk nomor 1-3. <a href="#">Lewati bagian ini</a>';
                  //echo   '<b>Fisika</b>. <a href="#">Lewati bagian ini</a>';
                  echo     '<div class="row" style="margin-top:5px;">';
                  echo       '<div style="margin-left:10px; width:15px; float:left;">';
                  echo         '<strong id="nomor">';
                  echo         $j;
                  echo         '.';
                  echo         '</strong>';
                  echo       '</div>';
                  echo       '<div style="margin-left: 0px;">';
                  echo         '<div class="col-md-12" style="width:96%">';
                  
                  echo           '<div id="soal';
          			  echo 			  $j;
          			  echo 			 '" rows="3">';
                  echo             $soal['pertanyaan'];
                  echo           '</div>';
          			  echo			'<textarea id="soal';
          			  echo			  $j;
          			  echo			'" style="display:none; float:left">';
          			  echo             $soal['pertanyaan'];
          			  echo			'</textarea>';
    			  
          			  if($soal['kategori_pertanyaan']==2){
                          echo '<div style="margin-left:0px; display:inline-block">';
                            echo 'Jawaban:';
                            echo '<input class="form-control" style="width:100%" id="jawaban-';
          				  echo $soal['id_soal'];
          				  echo '" name="jawaban-';
          				  echo $soal['id_soal'];
          				  echo '"/>';
                          echo '</div>';
                        }
                        if($soal['kategori_pertanyaan']==3){
                          echo '<div style="margin-left:0px;">';
                            echo 'Jawaban:';
                            echo '<textarea id="jawaban-';
          				  echo $soal['id_soal'];
          				  echo '" name="jawaban-';
          				  echo $soal['id_soal'];
          				  echo '" class="form-control textessay" style="width:100%" rows="3"></textarea>';
                          echo '</div>';
                        }
                        if($soal['kategori_pertanyaan']==4){
                          echo '<ul class="list-group">';
                           echo '<div class="row col-md-12">';
                            echo '<li class="list-group-item opsijawaban col-md-6" data-idsoal="';
          				  echo $soal['id_soal'];
          				  echo '" style="float:left;">';
                              echo '<div style="text-align:center" class="opsiGanda">Benar</div>';
                            echo '</li>';
                            echo '<li class="list-group-item opsijawaban col-md-6" data-idsoal="';
          				  echo $soal['id_soal'];
          				  echo '" style="float:left">';
                              echo '<div style="text-align:center" class="opsiGanda">Salah</div>';
                            echo '</li>';
                            echo '</div>';
                            echo '</ul>';
          				  echo '<input type="hidden" id="jawaban-';
          			    echo $soal['id_soal'];
          			    echo '" name="jawaban-';
          			    echo $soal['id_soal'];
          			    echo '"/>';
                  }
                  
            
                  echo         '</div>';
                  echo       '</div>';
                  echo     '</div>';

                  echo     '<div class="row">';
                  echo     '<button type="button" class="button button1 pull-right btntandai" style="margin-top:8px; margin-right:17px; padding: 4px 18px; outline:none;" data-id="';
                  echo     $j;
                  echo     '" id="tandai';
                  echo     $j;
                  echo     '"><i class="fa fa-bookmark"></i> Tandai Soal</button>';

                  echo     '<button type="button" class="button btnreset pull-right" style="margin-top:8px; margin-right:10px; padding: 4px 18px; outline:none;" data-id="';
                  echo     $j;
                  echo     '" id="reset';
                  echo     $j;
                  echo     '"><i class="fa fa-refresh"></i> Atur Ulang Soal</button>';

                  echo     '</div>';
                  
        			  if($soal['kategori_pertanyaan']==1||$soal['kategori_pertanyaan']==7){
        				  echo    '<ul class="list-group" style="margin-top:10px;">';
        				  $id_soal = $soal['id_soal'];
        				  $query2 = mysqli_query($link, "SELECT * FROM `pilihan_jawaban` WHERE `id_soal`='$id_soal' ");
        				  $huruf = array("A","B","C","D","E","F","G","H","I");
        				  $i = 0;
        					while($pilihan = mysqli_fetch_array($query2)){
        					  echo '<div class="row">';
        					  echo '<li class="list-group-item opsijawaban" data-idsoal="';
        					  echo $soal['id_soal'];
        					  echo '" style="float:left">';
        					  echo   '<div class="row">';
        					  echo     '<div style="margin-left:15px; width:50px; float:left; padding-right:10px;">';
        					  //echo       '<i class="fa fa-circle-thin fa-2x setjawaban" style="color:#30cbe8"></i>';
        					  echo        '<div class="numberCircle">';
        					  echo         $huruf[$i];
        					  echo        '</div>'; 
        					  echo     '</div>';
        					  echo     '<div style="width:90%;  margin-left:-20px;" class="col-md-9">';
        					  echo       '<div class="opsiGanda">'.$pilihan['opsi_jawaban'].'</div>';
        					  echo     '</div>';
        					  echo    '</div>';
        					  echo '</li>';
        					  echo '<i class="fa fa-times-circle-o fa-lg coret" style="color:#929292; margin-left:5px; cursor:pointer;"></i>';
        					  echo '</div>';
        					  $i++;
        					}
        				  echo '<input type="hidden" id="jawaban-';
        				  echo $soal['id_soal'];
        				  echo '" name="jawaban-';
        				  echo $soal['id_soal'];
        				  echo '"/>';
        			  }
                if($soal['kategori_pertanyaan']==5){
                  echo    '<ul class="list-group" style="margin-top:10px;">';
                  $id_soal = $soal['id_soal'];
                  $query2 = mysqli_query($link, "SELECT * FROM `pilihan_jawaban` WHERE `id_soal`='$id_soal' ");
                  $i = 0;
                  while($pilihan = mysqli_fetch_array($query2)){
                    echo '<div class="row" style="margin-bottom:5px;">';
                    echo '<li class="list-group-item opsicheckbox" data-idsoal="';
                    echo $soal['id_soal'];
                    echo '" style="float:left">';
                    echo   '<div class="row">';
                    echo     '<div style="margin-left:15px; width:50px; float:left; padding-right:10px;">';
                    echo       '<i class="fa fa-square-o fa-lg setjawaban" style="color:#30cbe8"></i>';
                    echo     '</div>';
                    echo     '<div style="width:90%;  margin-left:-20px;" class="col-md-9">';
                    echo       '<div class="opsiGanda">'.$pilihan['opsi_jawaban'].'</div>';
                    echo     '</div>';
                    echo    '</div>';
                    echo '</li>';
                    //echo '<i class="fa fa-times-circle-o fa-lg coret" style="color:#30cbe8; margin-left:5px; cursor:pointer;"></i>';
                    echo '</div>';
                    $i++;
                  }
                  echo '<input type="hidden" id="jawaban-';
                  echo $soal['id_soal'];
                  echo '" name="jawaban-';
                  echo $soal['id_soal'];
                  echo '"/>';
                }
                  
                      echo    '</div>';
                      echo   '</div>';
        			  $j++;
                    }
              ?>
            </div>
            <div class="form-group">
              <a href="#" type="button" id="btnprev" class="button buttonprev col-md-6" style="border-radius:0px; text-decoration:none"><span class="glyphicon glyphicon-chevron-left"></span> Soal sebelumnya</a>
              <a href="#" type="button" id="btnnext" class="button button2 col-md-6" style="border-radius:0px; text-decoration:none">Soal berikutnya <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>  
          </div>
          <div class="col-md-2" style="padding-left:0px;">
            Daftar soal
            <div class="panel panel-default" style="width:233px;margin-bottom:5px;" id="nomorSoal">
              <div class="panel-body" style="padding-top: 5px; padding-left: 5px; padding-bottom:5px; padding-right:0px;">
        			  <?php
          				$query4 = mysqli_query($link, "SELECT COUNT(*) FROM soal where id_ujian='$id' ");
                  $arraynomor = mysqli_fetch_array($query4);
                  $nomormax = (int)$arraynomor[0];
          				
          				$querystage = mysqli_query($link, "SELECT DISTINCT stage_id FROM `soal` WHERE `id_ujian`='$id' ORDER BY stage_id ASC");
          				
          				if ($ujian['acak_soal']){
          					mysqli_data_seek($query,0);
          					$daftarst = mysqli_fetch_array($query);
          					$i = 1;
          					while ($stage = mysqli_fetch_array($querystage)){
          						if ($daftarst['stage_id']!=1){
          							echo '<p style="text-decoration:underline;margin-bottom:0px;">';
          							$idst = $daftarst['stage_id'];
          							$qqs = mysqli_query($link, "select * from stage where id_stage='$idst'");
          							$qqsr = mysqli_fetch_array($qqs);
          							echo $qqsr['nama_stage'];
          							echo '</p>';
          						}
          						echo '<div class="form-group">';
          						while ($daftarst['stage_id']==$stage['stage_id']){
          							echo '<a href="#" class="button button3 nomor" data-nomor="';
          							echo $i;
          							echo '" style="margin-right:5px; text-decoration:none;">';
          							echo $i;
          							echo '</a>';
          							$i++;
          							$daftarst = mysqli_fetch_array($query);
          						}
          						echo '</div>';
          					}
          				} else {
          					$querynorm = mysqli_query($link, "SELECT * FROM (SELECT * FROM soal WHERE id_ujian='$id' ORDER BY nomor_soal LIMIT 200) T1 ORDER BY stage_id");
          					$daftarst = mysqli_fetch_array($querynorm);
          					while ($stage = mysqli_fetch_array($querystage)){
          						if ($daftarst['stage_id']!=1){
          							echo '<p style="text-decoration:underline;margin-bottom:0px;">';
          							$idst = $daftarst['stage_id'];
          							$qqs = mysqli_query($link, "select * from stage where id_stage='$idst'");
          							$qqsr = mysqli_fetch_array($qqs);
          							echo $qqsr['nama_stage'];
          							echo '</p>';
          						}
          						echo '<div class="form-group">';
          						while ($daftarst['stage_id']==$stage['stage_id']){
          							echo '<a href="#" class="button button3 nomor" data-nomor="';
          							echo $daftarst['nomor_soal'];
          							echo '" style="margin-right:5px; text-decoration:none;">';
          							echo $daftarst['nomor_soal'];
          							echo '</a>';
          							$i++;
          							
          							$daftarst = mysqli_fetch_array($querynorm);
          						}
          						echo '</div>';
          					}
          				}
          				
          			?>
          		  <div class="row" style="padding-left:15px;">Terjawab: <p style="display:inline" id="soalterjawab">0</p> / <p style="display:inline" id="totalsoal"> </p>
                </div>
              </div>
            </div>
            <button type="submit" class="button button4 col-md-12" id="btnkumpulkan" style="width:233px;text-decoration:none;" >Kumpulkan</button>
          </div>
    		</form>
      </div>
    </div>
  	<footer class="text-center">
  	  <p>2016 © Diah Fauziah. Ujian Online Template.</p>
    </footer>
    
	<!-- Include jQuery. -->
    <script type="text/javascript" src="js/jquery1.11.min.js"></script>
    <script type="text/javascript" src="js/tooltipsy.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-tagsinput.min.js"></script>

    <!-- Include JS files. -->
    <script type="text/javascript" src="froala/js/froala_editor.min.js"></script>

    <!-- Include Code Mirror. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>

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
	<script languages="javascript">
		document.addEventListener("contextmenu", function(e){
			e.preventDefault();
		}, false);
	</script>
    <script>
      /* Froala Editor */
        $(function() {
            $.FroalaEditor.DefineIcon('clear', {NAME: 'refresh'});
            $.FroalaEditor.RegisterCommand('clear', {
              title: 'Hapus Semua',
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

            $(".fr-element").attr("contenteditable", false);
            /* $('div.opsi').froalaEditor({
              toolbarInline: true,
              charCounterCount: false,
              toolbarButtons: ['bold', 'italic', 'underline', 'strikeThrough', 'color', '-', 'undo', 'redo', 'align', 'formatOL', 'formatUL',  '-', 'insertImage', 'insertLink', 'indent', 'outdent', 'insertFile', 'insertVideo'],
              placeholderText: 'Ketik jawaban'
            }); */
        });
        
        $(function(){
		  $n = '<?php echo $nomormax ?>';
		  $instance = "";
		  
		  for (var $i = 1; $i <= $n; $i++){
			  $instance = $instance + "div#soal" + $i;
			  if ($i < $n){
				  $instance = $instance + ", ";
			  }
		  }
		  
          $($instance).froalaEditor({
            toolbarInline: true,
            charCounterCount: false,
            toolbarButtons: ['strikeThrough', 'highlight', 'undo', 'redo', 'clearFormatting'],
            spellcheck : false,
			      contenteditable : false
          });
		  $(".fr-element").keydown(function(e){
			  if (e.keyCode < 37  || e.keyCode > 40){
				  e.preventDefault();
			  }
		  });
        });

        $soal_sekarang = 1;
        $pertanyaan_sekarang = "";

        /* Tampilkan nomor sekarang */
        $(function(){
          $kotaksekarang = "#kotak"+$soal_sekarang;
          $($kotaksekarang).show();
          $($kotaksekarang).siblings().hide();

          $ini = ".nomor[data-nomor="+$soal_sekarang+"]";
          //$($ini).addClass("nomor-belum-diisi");
          $($ini).addClass("nomor-sekarang");

          $x = '<?php echo $nomormax ?>';
          $("#totalsoal").html($x);
        });

        

        /* Tombol selanjutnya */
        $("#btnnext").click(function(){
          if(($soal_sekarang <'<?php echo $nomormax ?>')){
            $soal_sekarang = $soal_sekarang + 1;
            $kotaknext = "#kotak"+$soal_sekarang;
            $($kotaknext).show();
            $($kotaknext).siblings().hide();

            
            $ini = ".nomor[data-nomor="+$soal_sekarang+"]";
            $($ini).addClass("nomor-belum-diisi");
            $($ini).addClass("nomor-sekarang");
           
            $soal_sebelumnya = $soal_sekarang - 1;
            $sebelumnya = ".nomor[data-nomor="+$soal_sebelumnya+"]";
            $($sebelumnya).removeClass("nomor-belum-diisi");
            $($sebelumnya).removeClass("nomor-sekarang");
          }          
          
          if(($soal_sekarang)==1){
            $("#btnprev").removeClass("buttonprev");
            $("#btnprev").addClass("disabled");
          }else{
            $("#btnprev").removeClass("disabled");
            $("#btnprev").addClass("buttonprev");
          }

          if(($soal_sekarang =='<?php echo $nomormax ?>')){
            $(this).removeClass("button2");
            $(this).addClass("disabled");
            $("#btnkumpulkan").removeClass("button4");
            $("#btnkumpulkan").addClass("button2");
          }else{
            $("#btnkumpulkan").removeClass("button2");
            $("#btnkumpulkan").addClass("button4");
          }
        });

        if(($soal_sekarang) == '<?php echo $nomormax ?>'){
          $("#btnnext").removeClass("button2");
          $("#btnnext").addClass("disabled");
        }

        /* Tombol sebelumnya */
        $("#btnprev").click(function(){
          if($soal_sekarang > 1){
            $soal_sekarang = $soal_sekarang - 1;
            $kotaknext = "#kotak"+$soal_sekarang;
            $($kotaknext).show();
            $($kotaknext).siblings().hide();
            
            $ini = ".nomor[data-nomor="+$soal_sekarang+"]";
            $($ini).addClass("nomor-belum-diisi");
            $($ini).addClass("nomor-sekarang");

            $soal_tadi = $soal_sekarang + 1;
            $tadi = ".nomor[data-nomor="+$soal_tadi+"]";
            $($tadi).removeClass("nomor-belum-diisi");
            $($tadi).removeClass("nomor-sekarang");
          }
          
          if(($soal_sekarang)==1){
            $(this).removeClass("buttonprev");
            $(this).addClass("disabled");
          }else{
            $(this).removeClass("disabled");
            $(this).addClass("buttonprev");
          }
          if($("#btnnext").hasClass("disabled")){
            $("#btnnext").removeClass("disabled");
            $("#btnnext").addClass("button2");
          }

          if(($soal_sekarang =='<?php echo $nomormax ?>')){
            $("#btnkumpulkan").removeClass("button4");
            $("#btnkumpulkan").addClass("button2");
          }else{
            $("#btnkumpulkan").removeClass("button2");
            $("#btnkumpulkan").addClass("button4");
          }

        });

        /* disabled button prev saat baru diload */
        if(($soal_sekarang)==1){
          $("#btnprev").removeClass("buttonprev");
          $("#btnprev").addClass("disabled");
        }else{
          $("#btnprev").removeClass("disabled");
          $("#btnprev").addClass("buttonprev");
        };

        /* Pilih opsi jawaban */
        $(".opsijawaban").click(function(){
          if($(this).hasClass("selected")){
            $(this).closest('ul').find('li.list-group-item').removeClass("selected");
            $(this).closest('ul').find('li.list-group-item').find('.numberCircle').css({"background":"fff","color":"#30cbe8", "border-color":"#e1edef"});
            $(this).css({"color":"#000000"});

            $ini = ".nomor[data-nomor="+$soal_sekarang+"]";
            $($ini).removeClass("hasAnswer");
            $($ini).css({"color":"#000000"});

            $x = $("#soalterjawab").text();
            $soalterjawab = parseInt($x);
            $soalterjawab = $soalterjawab - 1;
            if($soalterjawab <= 0){
              $soalterjawab = 0;
            }
            $("#soalterjawab").text($soalterjawab);
            $($ini).removeClass("tercatat");

            if($($ini).hasClass("hasTandai").toString() == "true"){
              $($ini).css({"color":"#ffffff"});              
            }else{
              $($ini).css({"color":"#000000"});
            }

            $(this).siblings('i.fa.coret').css({"display":"inline-block"});

          }else{
            $(this).closest('ul').find('li.list-group-item').removeClass("selected");
            $(this).closest('ul').find('li.list-group-item').css({"color":"#000000"});
            $(this).addClass("selected");
            $(this).closest('ul').find('i.fa.coret').css({"display":"inline-block"});

            $(this).closest('ul').find('li.list-group-item').find('.numberCircle').css({"background":"fff","color":"#30cbe8", "border-color":"#e1edef"});
            $(this).css({"color":"#fff"});
            $(this).find('.numberCircle').css({"background":"#87e2f3", "color":"#fff", "border-color":"#fff"});

            $ini = ".nomor[data-nomor="+$soal_sekarang+"]";
            $($ini).addClass("hasAnswer");
            $($ini).css({"color":"#ffffff"});


            $tomboltandai = "#tandai"+$soal_sekarang;
            if($($ini).hasClass("hasTandai").toString() == "true"){
              $($tomboltandai).html('<i class="fa fa-bookmark"></i> Tandai Soal');
            }
            
            if($(".opsijawaban").hasClass("selected").toString()=="true" && $($ini).hasClass("tercatat").toString()=="false"){
              $x = $("#soalterjawab").text();
              $soalterjawab = parseInt($x);
              $soalterjawab = $soalterjawab + 1;
              $("#soalterjawab").text($soalterjawab);
              $($ini).addClass("tercatat");
            }
            $(this).siblings('i.fa.coret').css({"display":"none"});
            if($(this).find('.opsiGanda').hasClass("tercoret")){
              $(this).find('.opsiGanda').removeClass("tercoret");
            }
          }
    		  $idsoal = $(this).attr("data-idsoal");
    		  $jwbn = $(this).find(".opsiGanda").html();
    		  $setj = "input[name='jawaban-"+$idsoal+"']";
    		  if($(".opsijawaban").hasClass("selected").toString()=="true" && $($ini).hasClass("tercatat").toString()=="true"){
    			$($setj).val($jwbn);
    		  } else {
    			$($setj).removeAttr("value");
    		  }
        });

        $(".opsicheckbox").click(function(){
    		  $ini = ".nomor[data-nomor="+$soal_sekarang+"]";
              if($(this).hasClass("selected")){
                //$(this).closest('ul').find('li.list-group-item').removeClass("selected");
                $(this).closest('li.list-group-item').removeClass("selected");
                $(this).closest('li.list-group-item').find("i").removeClass("fa-check-square-o").addClass("fa-square-o");
                $(this).closest('ul').find('li.list-group-item').find('.numberCircle').css({"background":"fff","color":"#30cbe8", "border-color":"#e1edef"});

                if(!$(this).closest('ul').find('li.list-group-item').hasClass("selected")){
                  $($ini).removeClass("hasAnswer");
                  $($ini).css({"color":"#000000"});

                  $x = $("#soalterjawab").text();
                  $soalterjawab = parseInt($x);
                  $soalterjawab = $soalterjawab - 1;
                  if($soalterjawab <= 0){
                    $soalterjawab = 0;
                  }
                  $("#soalterjawab").text($soalterjawab);
                  $($ini).removeClass("tercatat");
                }else{
                  $($ini).css({"color":"#ffffff"});
                }
                
                if($($ini).hasClass("hasTandai").toString() == "true" && !$(this).closest('ul').find('li.list-group-item').hasClass('selected')){
                  $($ini).css({"color":"#ffffff"});              
                }

                $(this).siblings('i.fa.coret').css({"display":"inline-block"});

              }else{
                //$(this).closest('ul').find('li.list-group-item').removeClass("selected");
                $(this).addClass("selected");
                $(this).closest('ul').find('i.fa.coret').css({"display":"inline-block"});
                $(this).closest('li.list-group-item').find("i").removeClass("fa-square-o").addClass("fa-check-square-o");

                $(this).closest('ul').find('li.list-group-item').find('.numberCircle').css({"background":"fff","color":"#30cbe8", "border-color":"#e1edef"});
                $(this).find('.numberCircle').css({"background":"#87e2f3", "color":"#fff", "border-color":"#fff"});

                $($ini).addClass("hasAnswer");
                $($ini).css({"color":"#ffffff"});


                $tomboltandai = "#tandai"+$soal_sekarang;
                if($($ini).hasClass("hasTandai").toString() == "true"){
                  $($tomboltandai).html('<i class="fa fa-bookmark"></i> Tandai Soal');
                }
                
                if($(".opsicheckbox").hasClass("selected").toString()=="true" && $($ini).hasClass("tercatat").toString()=="false"){
                  $x = $("#soalterjawab").text();
                  $soalterjawab = parseInt($x);
                  $soalterjawab = $soalterjawab + 1;
                  $("#soalterjawab").text($soalterjawab);
                  $($ini).addClass("tercatat");
                }
                $(this).siblings('i.fa.coret').css({"display":"none"});
              }
              $idsoal = $(this).attr("data-idsoal");
              $setj = "input[name='jawaban-"+$idsoal+"']";
    		  if($(".opsicheckbox").hasClass("selected").toString()=="true" && $($ini).hasClass("tercatat").toString()=="true"){
    			$jwbn = $(this).find(".opsiGanda").html();
    			$($setj).val($jwbn);
    		  } else {
    			$($setj).removeAttr("value");
    		  }
        });
		
        $(".coret").click(function(){
          $(this).toggleClass("fa-times-circle fa-times-circle-o");
          if($(this).closest('.row').find('.list-group-item').find('.opsiGanda').hasClass("tercoret")){
            $(this).closest('.row').find('.list-group-item').find('.opsiGanda').removeClass("tercoret");
          }else {
            $(this).closest('.row').find('.list-group-item').find('.opsiGanda').addClass("tercoret");
          }
        });
        
        /* Menandai soal */
        $(".btntandai").click(function(){
            $nomorini = ".nomor[data-nomor="+$soal_sekarang+"]";
            $ini = "#tandai"+$soal_sekarang;
            $kotakini = "#kotak"+$soal_sekarang;

            if ($($ini).html() == '<i class="fa fa-bookmark-o"></i> Batal Tandai'){
                // membatalkan:
                  $($ini).html('<i class="fa fa-bookmark"></i> Tandai Soal');
                  $($ini).css({"color":"#929292", "background-color":"#f8f8f8", "border-color":"#dadada"});
                  $($nomorini).removeClass("tandai");
                  $($nomorini).removeClass("hasTandai");
                  $($nomorini).css({"color":"#000000"});
                  if($($kotakini).find("li").hasClass("selected").toString() == "true"){
                    $($nomorini).addClass("hasAnswer"); 
                    $($nomorini).css({"color":"#ffffff"}); 
                  }
              }
              else{
                // menandai
                  $($ini).html('<i class="fa fa-bookmark-o"></i> Batal Tandai');
                  $($ini).css({"color":"#fff", "background-color":"#ffbf30", "border-color":"#ffbf30"});
                  $($nomorini).css({"color":"#ffffff"});
                  $($nomorini).removeClass("hasAnswer");
                  $($nomorini).addClass("tandai");
                  $($nomorini).addClass("hasTandai");
              }
        });
				
		/* Mengatur ulang soal */
		$(".btnreset").click(function(){
			$initext = "textarea#soal"+$soal_sekarang;
			$data = $($initext).val();
			$inieditor = "div#soal"+$soal_sekarang;
			$($inieditor).froalaEditor("undo.reset");
			$($inieditor).froalaEditor("html.set", $data);
		});

        $("input").blur(function(){
          $nomor = ".nomor[data-nomor="+$soal_sekarang+"]";
          if($(this).val() != ""){
            $($nomor).addClass("hasAnswer");
            $($nomor).css({"color":"#ffffff"});

            $x = $("#soalterjawab").text();
            $soalterjawab = parseInt($x);
            $soalterjawab = $soalterjawab + 1;
            $("#soalterjawab").text($soalterjawab);
            $($ini).addClass("tercatat");
          }else{
            $($nomor).removeClass("hasAnswer");
            $($nomor).css({"color":"#000000"});
            if($($nomor).hasClass("hasTandai")){
              $($nomor).css({"color":"#ffffff"});
            }
            $x = $("#soalterjawab").text();
            $soalterjawab = parseInt($x);
            $soalterjawab = $soalterjawab - 1;
            $("#soalterjawab").text($soalterjawab);
            $($ini).addClass("tercatat");
          }
        });

        $(".textessay").blur(function(){
          $nomortxt = ".nomor[data-nomor="+$soal_sekarang+"]";
          if($(this).val() != ""){
            $($nomortxt).addClass("hasAnswer");
            $($nomortxt).css({"color":"#ffffff"});

            $x = $("#soalterjawab").text();
            $soalterjawab = parseInt($x);
            $soalterjawab = $soalterjawab + 1;
            $("#soalterjawab").text($soalterjawab);
            $($ini).addClass("tercatat");
          }else{
            $($nomortxt).removeClass("hasAnswer");
            $($nomortxt).css({"color":"#000000"});
            if($($nomortxt).hasClass("hasTandai")){
              $($nomortxt).css({"color":"#ffffff"});
            }
            $x = $("#soalterjawab").text();
            $soalterjawab = parseInt($x);
            $soalterjawab = $soalterjawab - 1;
            $("#soalterjawab").text($soalterjawab);
            $($ini).addClass("tercatat");
          }
        });

        /* Navigasi daftar soal */
        $(".nomor").click(function(){
          $x = $(this).attr("data-nomor");
          $soal_sekarang = parseInt($x);
          $kotaksekarang = "#kotak" + $soal_sekarang;
          $($kotaksekarang).show();
          $($kotaksekarang).siblings().hide();
          $(".nomor").removeClass("nomor-sekarang");
          //$(this).siblings().removeClass("nomor-belum-diisi");
          $(this).addClass("nomor-sekarang");

          if(($soal_sekarang)==1){
            $("#btnprev").removeClass("buttonprev");
            $("#btnprev").addClass("disabled");
          }else{
            $("#btnprev").removeClass("disabled");
            $("#btnprev").addClass("buttonprev");
          };

          if(($soal_sekarang =='<?php echo $nomormax ?>')){
            $("#btnnext").removeClass("button2");
            $("#btnnext").addClass("disabled");
            $("#btnkumpulkan").removeClass("button4");
            $("#btnkumpulkan").addClass("button2");
          }else{
            $("#btnnext").removeClass("disabled");
            $("#btnnext").addClass("button2");
            $("#btnkumpulkan").removeClass("button2");
            $("#btnkumpulkan").addClass("button4");
          }
        });


        /* Timer */
        function startTimer(duration, display) {
            var timer = duration, hours, minutes, seconds;
			var secs = 0;
            setInterval(function () {
                hours = parseInt(timer / 3600, 10);
                minutes = parseInt(timer % 3600 / 60, 10)
                seconds = parseInt(timer % 60, 10);
				
				secs = secs + 1;

                hours = hours < 10 ? "0" + hours : hours;
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.text(hours + ":" + minutes + ":" + seconds);
				
				$("input[name='waktu'").val(secs);

                if (--timer < 0) {
                    $("#form").submit();
                }
            }, 1000);
        }
        jQuery(function ($) {
            var fiveMinutes = 60 * <?php echo $ujian['lama_ujian']; ?>,
                display = $('#time');
            startTimer(fiveMinutes, display);
        });
    </script>
  </body>
</html>