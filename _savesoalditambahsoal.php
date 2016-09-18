<?php 
	include('koneksi.php'); 
    $id = $_GET['id'];
	if (isset($_GET['kat'])){
		$pertanyaan = $_GET['pertanyaan'];
		$stage = $_GET['stage'];
		$jwbbnr = $_GET['jwbbenar'];
		$poinbnr = $_GET['poinbnr'];
		$poinslh = $_GET['poinslh'];
		$poinksg = $_GET['poinksg'];
		
		$update = mysqli_query($link, "UPDATE soal SET pertanyaan='$pertanyaan', stage_id='$stage', jawaban_benar='$jwbbnr', poin_benar='$poinbnr', poin_kosong='$poinksg', poin_salah='$poinslh' WHERE id_soal='$id'");
		
		if ($update){
			$_SESSION['statuspesan'] = "sukses";
			$_SESSION['pesan'] = " Soal berhasil diperbaharui <i class='fa fa-check-circle'></i>";
		} else {
			$_SESSION['statuspesan'] = "gagal";
			$_SESSION['pesan'] = " Soal tidak berhasil diperbaharui";
		}
	}
	$query1 = mysqli_query($link, "SELECT * FROM `soal` WHERE `id_soal`='$id' ");

		while ($soal = mysqli_fetch_array($query1)){
            echo '<div id="soaltersimpan-';
			echo $soal['id_soal'];
			echo '">';
            echo '<div class="panel panel-default soaltersimpan" style="margin-top:10px; background-color:#ffffff; border:0px;">';
						if(!empty($_SESSION['statuspesan'])){
						  if (($_SESSION['statuspesan'] == "sukses")){
							echo '<div class="alert alert-success" style="margin-top:10px; margin-bottom:10px">';
							echo   '<strong>Berhasil!</strong> ';
							echo   $_SESSION['pesan'];
							echo '</div>';
							$_SESSION['statuspesan'] = "";
						  } else if ($_SESSION["statuspesan"]=="gagal") {
							echo '<div class="alert alert-danger" style="margin-top:10px;">';
							echo   '<strong>Gagal!</strong>';
							echo   $_SESSION['pesan'];
							echo '</div>';
						  }
						}
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
                  $huruf = array("A","B","C","D","E");
                  $i = 0;
                  $jawaban_benar = $soal['jawaban_benar'];
				  
				  // pilihan ganda
				  if ($soal['kategori_pertanyaan']==1||$soal['kategori_pertanyaan']==4||$soal['kategori_pertanyaan']==6||$soal['kategori_pertanyaan']==7){
  					echo '<ul class="list-group" style="margin-top:10px;">';
  					$query2 = mysqli_query($link, "SELECT * FROM `pilihan_jawaban` WHERE `id_soal`='$id_soal' ");
  					while($pilihan = mysqli_fetch_array($query2)){
              echo '<div class="row">';
  					  echo '<li class="list-group-item opsijawaban" style="margin-bottom:5px;">';
  					  echo     '<div style="margin-left:15px; width:50px; float:left; padding-right:10px;">';
  					  echo        '<div class="numberJawaban"';
  					  if ($jawaban_benar==$pilihan['opsi_jawaban']){
  						  echo 'style="background:#b4e3dc;color:#fff;border-color:#e7e7e7;"';
  					  }
  					  echo 		  '>'.$huruf[$i].'</div>'; 
  					  echo     '</div>';
  					  echo     '<div style="width:85%;  margin-left:-20px;">';
  					  echo       '<div id="opsiGanda1">'.$pilihan['opsi_jawaban'].'</div>';
  					  echo     '</div>';
  					  echo '</li>';
              echo '</div>';
  					  $i++;
  					}
					  echo '</ul>';
				  }
				  
				  // isian dan essai
				  if ($soal['kategori_pertanyaan']==2||$soal['kategori_pertanyaan']==3){
					echo '&nbsp; Jawaban: ';
					echo $jawaban_benar;
					
				  }
				  
				  // checkbox
				  if ($soal['kategori_pertanyaan']==5){
              echo    '<ul class="list-group" style="margin-top:10px;">';
              $query2 = mysqli_query($link, "SELECT * FROM `pilihan_jawaban` WHERE `id_soal`='$id_soal' ");
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
              echo '</ul>';
				  }
                          echo '<div class="panel-footer">';
                              echo '<div class="row">';
                              echo   '<div class="col-md-3" style="font-size:14px">Poin Benar: <b>'.$soal['poin_benar'].'</b></div>';
                              echo   '<div class="col-md-3" style="font-size:14px">Poin Salah: '.$soal['poin_salah'].'</div>';
                              echo   '<div class="col-md-3" style="font-size:14px">Poin Kosong: '.$soal['poin_kosong'].'</div>';
                              echo '</div>';
                            
                              echo  '<div class="form-group row" style="margin-top:10px;">';
                              echo    '<div class="col-md-6">';
                                
                                $stage = $soal['stage_id'];
                                $querypilstage = mysqli_query($link, "SELECT * FROM `stage` WHERE `id_stage`='$stage' ");
                                $stagesoal = mysqli_fetch_array($querypilstage);
                                
                                echo   'Kelompok soal: '.$stagesoal['nama_stage'].'</div>';
                                echo   '<button id="editsoal" onclick="editsoal(this);" class="button button1 col-md-2" style="margin-left:80px; text-decoration:none" data-ujian="';
                                  echo $soal['id_soal'];
                                  echo '"><span class="glyphicon glyphicon-pencil"></span> Edit</button>';
                              echo    '<button onclick="hapusSoalnya(this);" class="button button2 col-md-2 hapus" data-toggle="modal" data-target="#modalHapus" style="font-size:14px; margin-left:10px;"><span class="glyphicon glyphicon-trash"></span> Hapus</button>';
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



