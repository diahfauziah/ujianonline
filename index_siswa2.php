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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Include Editor style. -->
    <link href="froala/css/froala_editor.min.css" rel="stylesheet" type="text/css" />
    <link href="froala/css/froala_style.min.css" rel="stylesheet" type="text/css" />

    <!-- Include Code Mirror style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
      .progress {
        margin-top: 5px;
        margin-bottom: 10px;
        border-radius: 0;
        overflow: visible;
      }
      .panel {
        margin-top: 5px;
      }
      span.highlight {
        background-color: yellow;
      }
      .btn-default{
        background-color: #f8f8f8;
        border-color: #f8f8f8;
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
        background-color:#e7e7e7; color:#000000; border-color:#e7e7e7;
      }

      /* shadow */
      .nomor-sekarang {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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
        background-color: #ffffff;
        color: #F7B733;
        border: 1px solid #F7B733;
      }
      .button1:hover {
        background-color: #F7B733;
        color: #ffffff;
        border: 1px solid #F7B733;
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
      .circle {
        width: 30px;
        height: 30px;
        border-radius: 30px;
        font-size: 14px;
        color: #ffffff;
        text-align: center;
        background: #4ABDAC;
        line-height: 28px;
        border: 1px solid #4ABDAC;
      }
      .tandai {
        background-color : #F7B733;
        color : #ffffff;
        border-color: #F7B733;
      }
      li.selected:hover, li.selected {
        background-color : #b4e3dc;
      }
      .list-group-item:hover {
        background-color: #f8f8f8;
        cursor: pointer;
      }
      .hasAnswer {
        background-color : #4ABDAC;
        color : #ffffff;
        border-color : #4ABDAC;
      }
      .disabled {
        cursor: not-allowed;
      }
      .disabled:hover{
        background: #f8f8f8;
        font-color: #f8f8f8;
      }
      .tooltip > .tooltip-inner {background-color: #eebf3f; padding: 5px 15px; color: rgb(23,44,66); font-weight: bold; font-size: 13px;}
      .popOver + .tooltip > .tooltip-arrow { border-left: 5px solid transparent; border-right: 5px solid transparent; border-top: 5px solid #eebf3f; }
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
        <div id="kotakSoal" class="col-md-10">
          Waktu ujian tersisa: <b><span id="time"></span></b>
      <!--    <a class="pull-right" href="#" id="hide"><u>Hide daftar soal</u></a> -->
          <div id="panelsoal">
          <?php 
            while($soal = mysqli_fetch_array($query)){
              echo '<div class="panel panel-default kotaksoal" style="border-radius:0px; margin-bottom:0px" id="kotak';
              echo   $soal['nomor_soal'];
              echo   '" hidden>';
              echo   '<div class="panel-body" style="margin-bottom:-5px;">';
              echo     '<div class="row">';
              echo       '<div style="margin-left:10px; width:15px; float:left;">';
              echo         '<strong id="nomor">';
              echo         $soal['nomor_soal'];
              echo         '.';
              echo         '</strong>';
              echo       '</div>';
              echo       '<div style="margin-left: 0px;">';
              echo         '<div class="col-md-12" style="width:96%">';
              echo           '<textarea id="edit1" class="form-control edit" rows="3">';
              echo             $soal['pertanyaan'];
              echo           '</textarea>';
              echo         '</div>';
              echo       '</div>';
              echo     '</div>';
              echo     '<button type="button" class="button button1 pull-right btntandai" style="margin-top:8px; margin-right:4px; padding: 4px 18px; outline:none;" data-id="';
              echo     $soal['nomor_soal'];
              echo     '" id="tandai';
              echo     $soal['nomor_soal'];
              echo     '"><i class="fa fa-bookmark"></i> Tandai</button>';
              echo    '</div>';

              echo    '<ul class="list-group">';
              $id_soal = $soal['id_soal'];
              $query2 = mysqli_query($link, "SELECT * FROM `pilihan_jawaban` WHERE `id_soal`='$id_soal' ");
                while($pilihan = mysqli_fetch_array($query2)){
                  echo '<li class="list-group-item opsijawaban">';
                  echo   '<div class="row">';
                  echo     '<div style="margin-left:50px; width:50px; float:left; padding-right:10px;">';
                  echo       '<i class="fa fa-circle-thin fa-2x setjawaban" style="color:#dadada"></i>';
                  echo     '</div>';
                  echo     '<div style="width:85%;  margin-left:-20px;" class="col-md-9">';
                  echo       '<div id="opsiGanda1">'.$pilihan['opsi_jawaban'].'</div>';
                  echo     '</div>';
                  echo    '</div>';
                  echo '</li>';
                }
              echo    '</ul>';
              echo   '</div>';
            }
          ?>
          </div>
          <div class="form-group">
            <a href="#" type="button" id="btnprev" class="button button2 col-md-6" style="border-radius:0px; text-decoration:none"><span class="glyphicon glyphicon-chevron-left"></span> Soal sebelumnya</a>
            <a href="#" type="button" id="btnnext" class="button button2 col-md-6" style="border-radius:0px; text-decoration:none">Soal berikutnya <span class="glyphicon glyphicon-chevron-right"></span></a>
          </div>  
        </div>
        <div class="col-md-2" style="padding-left:0px;">
          Daftar soal
          <div class="panel panel-default" style="width:190px;" id="nomorSoal">
            <div class="panel-body" style="padding-top: 5px; padding-left: 5px; padding-bottom:5px; padding-right:0px;">
              <div class="form-group">
                <?php 
                  $query4 = mysqli_query($link, "SELECT MAX(nomor_soal) FROM soal where id_ujian='$id' ");
                  $arraynomor = mysqli_fetch_array($query4);
                  $nomormax = (int)$arraynomor[0];

                  $i = 1;
                  while($i <= $nomormax){
                    echo '<a href="#" class="btn btn-default nomor" data-nomor="';
                    echo $i;
                    echo '" style="margin-right:5px;">';
                    echo $i;
                    echo '</a>';
                    $i++;
                  }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Include jQuery. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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
    <script>
      /* Froala Editor */
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
                  this.colors.background('#ffff00');
                  this.events.focus();
                }
              }
            });

            $('.edit').froalaEditor({
              toolbarButtons: ['undo', 'redo', 'clearFormatting', 'bold', 'italic', 'underline', 'strikeThrough', 'highlight', 'remove'],
              placeholderText: 'Ketik pertanyaan',
              charCounterCount: false,
              contenteditable: false,
              spellcheck : false
            });
            $(".fr-element").attr("contenteditable", false);
            $('div.opsi').froalaEditor({
              toolbarInline: true,
              charCounterCount: false,
              toolbarButtons: ['bold', 'italic', 'underline', 'strikeThrough', 'color', '-', 'undo', 'redo', 'align', 'formatOL', 'formatUL',  '-', 'insertImage', 'insertLink', 'indent', 'outdent', 'insertFile', 'insertVideo'],
              placeholderText: 'Ketik jawaban'
            });
        });
        
        $(function(){
          $('div#opsiGanda1, div#opsiGanda2, div#opsiGanda3, div#opsiGanda4, div#opsiGanda5, div#opsiIsian, textarea#opsiEssay, textarea#opsiGandaT1').froalaEditor({
            toolbarInline: true,
            charCounterCount: false,
            toolbarButtons: ['strikeThrough', 'highlight', 'bold', 'italic', 'underline', '-', 'undo', 'redo'],
            toolbarVisibleWithoutSelection: true,
            placeholderText: 'Ketik jawaban',
            spellcheck : false
          });
          //$(".fr-element").attr("contenteditable", false);
        });

        $soal_sekarang = 1;

        /* Tampilkan nomor sekarang */
        $(function(){
          $kotaksekarang = "#kotak"+$soal_sekarang;
          $($kotaksekarang).show();
          $($kotaksekarang).siblings().hide();
        });


        $("#btnnext").click(function(){
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
          $("#btnprev").removeClass("disabled");
        });

        $("#kotak1").show(function(){
          $("#btnprev").addClass("disabled");
        });

        $("#btnprev").click(function(){
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
        });


        /* Pilih opsi jawaban */
        $(".opsijawaban").dblclick(function(){
          $(this).siblings().removeClass("selected");
          $(this).addClass("selected");

          $(this).siblings().find('.setjawaban').removeClass("fa-circle-thin");
          $(this).siblings().find('.setjawaban').addClass("fa-circle-thin");
          $(this).siblings().find('.setjawaban').css({"color":"#dadada"});
          $(this).find('.setjawaban').removeClass("fa fa-circle-thin");
          $(this).find('.setjawaban').addClass("fa fa-circle");
          $(this).find('.setjawaban').css({"color" : "#4ABDAC"});

          $ini = ".nomor[data-nomor="+$soal_sekarang+"]";
          $($ini).addClass("hasAnswer");

          $tomboltandai = "#tandai"+$soal_sekarang;
          if($($ini).hasClass("hasTandai").toString() == "true"){
            $($tomboltandai).html('<i class="fa fa-bookmark"></i> Tandai');
          }
        });

        /* Pilih opsi jawaban: lingkaran dipiilih */
        $(".setjawaban").click(function(){
              $(".opsijawaban").removeClass("selected");
              $(this).closest(".opsijawaban").addClass("selected");
              $(".setjawaban").removeClass("fa fa-circle-thin");
              $(".setjawaban").addClass("fa fa-circle-thin");
              $(".setjawaban").css({"color":"#dadada"})
              $(this).removeClass("fa fa-circle-thin");
              $(this).addClass("fa fa-circle");
              $(this).css({"color" : "#4ABDAC"});

              $ini = ".nomor[data-nomor="+$soal_sekarang+"]";
              $($ini).css({"background-color":"#4ABDAC", "color":"#ffffff", "border-color":"#4ABDAC"}); 
        });

        /* Menandai soal */
        $(".btntandai") .click(function(){
            $nomorini = ".nomor[data-nomor="+$soal_sekarang+"]";
            $ini = "#tandai"+$soal_sekarang;

            if ($($ini).html() == '<i class="fa fa-bookmark-o"></i> Batal Tandai'){
                // membatalkan:
                  $($ini).html('<i class="fa fa-bookmark"></i> Tandai');
                  $($nomorini).removeClass("tandai");
                  if($("li").hasClass("selected").toString() == "true"){
                    $($nomorini).addClass("hasAnswer");  
                  }
              }
              else{
                // menandai
                  $($ini).html('<i class="fa fa-bookmark-o"></i> Batal Tandai');
                  $($nomorini).removeClass("hasAnswer");
                  $($nomorini).addClass("tandai");
                  $($nomorini).addClass("hasTandai");
              }
        });

        $(".nomor").click(function(){
          $x = $(this).attr("data-nomor");
          $soal_sekarang = parseInt($x);
          $kotaksekarang = "#kotak" + $soal_sekarang;
          $($kotaksekarang).show();
          $($kotaksekarang).siblings().hide();
          $(this).siblings().removeClass("nomor-sekarang");
          $(this).siblings().removeClass("nomor-belum-diisi");
          $(this).addClass("nomor-sekarang");
        });

        /* Timer */
        function startTimer(duration, display) {
            var timer = duration, hours, minutes, seconds;
            setInterval(function () {
                hours = parseInt(timer / 3600, 10);
                minutes = parseInt(timer % 3600 / 60, 10)
                seconds = parseInt(timer % 60, 10);

                hours = hours < 10 ? "0" + hours : hours;
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.text(hours + ":" + minutes + ":" + seconds);

                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
        }
        jQuery(function ($) {
            var fiveMinutes = 60 * 97.5,
                display = $('#time');
            startTimer(fiveMinutes, display);
        });
    </script>
  </body>
</html>