<?php 
	include('koneksi.php'); 
    $id = $_GET['id'];
	$query1 = mysqli_query($link, "SELECT * FROM `soal` WHERE `id_soal`='$id' ");

		while ($soal = mysqli_fetch_array($query1)){
            echo '<div id="soaltersimpan-';
			echo $soal['id_soal'];
			echo '">';
            echo '<div class="panel panel-default soaltersimpan" style="margin-top:10px; background-color:#ffffff; border:0px;">';
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
                          echo       '<div id="opsiGanda1">'.$pilihan['opsi_jawaban'].'</div>';
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
                          echo    '<button id="editsoal" onclick="editsoal(this);" class="button button1 col-md-2" style="margin-left:80px; text-decoration:none" data-ujian="';
						  echo $soal['id_soal'];
						  echo '"><span class="glyphicon glyphicon-pencil"></span> Edit</button>';
                          echo    '<button class="button button2 col-md-2" data-toggle="modal" data-target="#modalHapus" style="font-size:14px; margin-left:10px;"><span class="glyphicon glyphicon-trash"></span> Hapus</button>';
                          echo   '</div>';
                          echo '</div>';
                    echo '</div>';
                echo '</div>';
               echo '</div>';
              echo '</div>';
           echo '</div>';
		   echo '</div>';
           };	
?>



