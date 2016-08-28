<?php
	include('koneksi.php'); 
    $id = $_GET['id'];
	$query1 = mysqli_query($link, "SELECT * FROM `soal` WHERE `id_soal`='$id' ");
	$soal = mysqli_fetch_array($query1);
	$nomor = $soal['nomor_soal'];
?>

        <div class="panel panel-default" id="formTambahSoal" style="margin-top:10px; background-color:#ffffff;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="panel-body">
              <div class="row" style="margin-left:5px;">
                <ul class="nav nav-pills">
                            <li <?php if ($soal['kategori_pertanyaan']==1) echo 'class="active"'; ?>>
                              <a data-toggle="pill" class="hashtip" href="#formPilihanGanda" title="<u><b>Contoh</b></u><br>Apa Ibukota Provinsi Jawa Barat?<br><i class='fa fa-circle-thin'></i></span> Jakarta<br><i class='fa fa-circle'></i> Bandung<br><i class='fa fa-circle-thin'></i> Surabaya<br><i class='fa fa-circle-thin'></i> Bogor<br>">Pilihan ganda</a>
                            </li>
                            <li <?php if ($soal['kategori_pertanyaan']==2) echo 'class="active"'; ?>>
                              <a data-toggle="pill" href="#formIsian" class="hashtip" title="<u><b>Contoh</b></u><br>Ibukota Provinsi Jawa Barat yaitu <input type=text class='form-control'>">Isian singkat</a>
                            </li>
                            <li <?php if ($soal['kategori_pertanyaan']==3) echo 'class="active"'; ?>>
                              <a data-toggle="pill" href="#formEssay" class="hashtip" title="<u><b>Contoh</b></u><br>Jelaskan sejarah kemerdekaan Indonesia! <textarea></textarea>">Essay</a>
                            </li>
                           <!-- <li>
                              <a data-toggle="pill" href="#formPencocokan" class="hashtip" title="<u><b>Contoh</b></u><br>Cocokkan provinsi dan ibukota provinsi yang sesuai!<br> Jawa Barat <span class='glyphicon glyphicon-resize-horizontal'></span> Bandung <br> Jawa Timur <span class='glyphicon glyphicon-resize-horizontal'></span> Surabaya">Pencocokan</a>
                            </li> -->
                            <li <?php if ($soal['kategori_pertanyaan']==4) echo 'class="active"'; ?>>
                              <a data-toggle="pill" href="#formBenarSalah" class="hashtip" title="<u><b>Contoh</b></u><br>Bandung adalah Ibukota Provinsi Jawa Barat<br><span class='glyphicon glyphicon-record'></span> Benar<br><span class='glyphicon glyphicon-record'></span> Salah">Benar/Salah</a>
                            </li>
                            <li <?php if ($soal['kategori_pertanyaan']==5) echo 'class="active"'; ?>>
                              <a data-toggle="pill" href="#formCheckbox" class="hashtip" title="<u><b>Contoh</b></u><br>Manakah yang berada di Provinsi Jawa Barat?<br> <span class='glyphicon glyphicon-unchecked'></span> Jakarta<br><span class='glyphicon glyphicon-check'></span> Bandung<br><span class='glyphicon glyphicon-check'></span> Depok<br><span class='glyphicon glyphicon-unchecked'></span> Banten">Checkbox</a>
                            </li>
                            <li <?php if ($soal['kategori_pertanyaan']==6) echo 'class="active"'; ?>>
                              <a data-toggle="pill" href="#formSebabAkibat" class="hashtip" title="<u><b>Contoh</b></u><br>Jelaskan sejarah kemerdekaan Indonesia! <textarea></textarea>">Sebab - akibat</a>
                            </li>
                            <li <?php if ($soal['kategori_pertanyaan']==7) echo 'class="active"'; ?>>
                              <a data-toggle="pill" href="#formPilihan123" class="hashtip" title="">Pilihan 1,2,3,4</a>
                            </li>
                </ul>
                <div class="tab-content" style="margin-top:10px;">
                    <div class="tab-pane fade <?php if ($soal['kategori_pertanyaan']==1) echo 'in active'; ?>" id="formPilihanGanda">
                      <div class="row">
                          <div style="margin-left:10px; width:15px; float:left;">
                            <strong id="nomor"><?php echo $nomor; ?>.</strong>
                          </div>
                          <div style="margin-left: 0px;">  
                            <div class="col-md-12" style="width:96%">
                              <form class="form-horizontal col-md-12" action="input_soal_pilihanganda.php?id=<?php echo $id ?>" method="post">
							    <input type="hidden" id="idujian1" name="idujian1" value="<?php echo $id; ?>" />
								<input type="hidden" id="jawabanbenar1" name="jawabanbenar1" />
								<input type="hidden" id="from1" name="from1" value="tambahsoal" />
                                <div class="form-group">
                                   <label class="form-control-label">Pertanyaan</label>
                                   <textarea id="pertanyaan1" name="pertanyaan1" class="form-control" rows="3">
								   <?php
								    if ($soal['kategori_pertanyaan']==1){
										echo $soal['pertanyaan'];
									}
								   ?>
                                   </textarea>
                                </div>
                                <p style="margin-left:-10px; font-size:12px; color:#f7b733; margin-top:10px;">Klik lingkaran untuk menetapkan jawaban yang benar</p>
                                 <?php 
								  if ($soal['kategori_pertanyaan']==1){
									$querypiljwb = mysqli_query($link, "SELECT * FROM `pilihan_jawaban` WHERE `id_soal`='$id'");
                                    $huruf = array("A","B","C","D","E","F","G","H");
                                    $i = 0; 
                                    while($piljwb = mysqli_fetch_array($querypiljwb)){
                                      echo '<div class="form-group" style="margin-bottom:10px">';
                                      echo   '<div class="row">';
                                            echo '<div style="float:left" style="width:15px">';
                                            echo '<i class="fa fa-check-circle fa-2x checklist" style="color:#ffffff;"></i>';
                                            echo '</div>';
                                            echo '<div style="margin-left:15px; width:50px; float:left; padding-right:10px;">';
                                              //echo '<i class="fa fa-circle-thin fa-2x setjawaban" style="color:#dadada"></i>';
                                              echo '<div class="numberCircle">';
                                              echo $huruf[$i];
                                              echo  '</div>';
                                            echo '</div>';
                                            echo '<div style="width:85%;  margin-left:-20px;" class="col-md-9">';
                                              echo '<div style="border:1px solid #ddd; padding:5px; background-color:#ffffff">';
                                              echo '<textarea class="form-control jawabanganda1" id="opsiGanda1-';
											  echo $i;
											  echo '" name="opsiGanda1-';
											  echo $i;
											  echo '" style="border:0px">';
											  echo $piljwb['opsi_jawaban'];
											  echo '</textarea>';
                                              echo '</div>';
                                            echo '</div>';
                                            echo '<div style="float:left">';
                                              echo '<i class="fa fa-trash"></i>';
                                            echo '</div>';
                                        echo '</div>';
                                      echo '</div>';
                                      $i++;
                                    }
								  } else {
									$huruf = array("A","B","C","D","E","F","G","H");
                                    $i = 0; 
                                    while($i < 4){
                                      echo '<div class="form-group" style="margin-bottom:10px">';
                                      echo   '<div class="row">';
                                            echo '<div style="float:left" style="width:15px">';
                                            echo '<i class="fa fa-check-circle fa-2x checklist" style="color:#ffffff;"></i>';
                                            echo '</div>';
                                            echo '<div style="margin-left:15px; width:50px; float:left; padding-right:10px;">';
                                              //echo '<i class="fa fa-circle-thin fa-2x setjawaban" style="color:#dadada"></i>';
                                              echo '<div class="numberCircle">';
                                              echo $huruf[$i];
                                              echo  '</div>';
                                            echo '</div>';
                                            echo '<div style="width:85%;  margin-left:-20px;" class="col-md-9">';
                                              echo '<div style="border:1px solid #ddd; padding:5px; background-color:#ffffff">';
                                              echo '<textarea class="form-control jawabanganda1" id="opsiGanda1-';
											  echo $i;
											  echo '" name="opsiGanda1-';
											  echo $i;
											  echo '" style="border:0px"></textarea>';
                                              echo '</div>';
                                            echo '</div>';
                                            echo '<div style="float:left">';
                                              echo '<i class="fa fa-trash"></i>';
                                            echo '</div>';
                                        echo '</div>';
                                      echo '</div>';
                                      $i++;
                                    } 
								  }
                                ?> 
                                
								<!--
                                <div class="form-group opsiGandaE" style="margin-bottom:10px" hidden>
                                  <div class="row">
                                      <div style="float:left" style="width:15px">
                                       <i class="fa fa-check-circle fa-2x checklist" style="color:#ffffff"></i> 
                                      </div>
                                      <div style="margin-left:15px; width:50px; float:left; padding-right:10px;">
                                        <div class="numberCircle">E</div>
                                      </div>
                                      <div style="width:85%;  margin-left:-20px;" class="col-md-9">
                                        <div style="border:1px solid #ddd; padding:5px; background-color:#ffffff">
                                          <textarea class="form-control" id="opsiGanda1-4" name="opsiGanda1-4" style="border:0px"></textarea>
                                        </div>
                                      </div>
                                      <div style="float:left">
                                        <i class="fa fa-trash"></i>
                                      </div>
                                  </div>
                                </div> -->
                                <div class="form-group" style="margin-top: 10px;margin-bottom: 10px;">
                                  <button class="button button1 tambahopsi" type="button" style="margin-left:20px; font-size:13px; background-color:#e7e7e7; border:0px; color:#777; border:1px solid #ddd; border-radius:20px; outline:none;"><span class="glyphicon glyphicon-plus"></span> Tambahkan opsi</button>
                                </div>
								<div class="form-group form-inline" style="margin-top: 10px;margin-bottom: 15px;">
								  <div class="col-md-6">
								    <label style="width:122px;" class="form-control-label">Kelompok Soal </label>
								    <select class="form-control" id="stage1" name="stage1" >
									  <option value="1">Tanpa Kelompok Soal</option>
									  <?php
									    $querystg = mysqli_query($link, "SELECT * FROM stage WHERE dibuat_oleh='$userid'");
										while ($stg = mysqli_fetch_array($querystg)){
											echo '<option value="';
											echo $stg['id_stage'];
											echo '">';
											echo $stg['nama_stage'];
											echo '</option>';
										}
									  ?>
								    </select>
								  </div>
								  <a href="#" class="button button1" style="font-size:13px; margin-left:-30px; border-radius:15px; color:#777; background-color:#e7e7e7; border-color:#e7e7e7"><i class="fa fa-plus"></i> Tambah Kelompok Soal</a>
								</div>
                                <div class="form-group form-inline" style="margin-bottom:10px;">
                                  <strong class="col-md-1">Poin:</strong>
                                  <div class="col-md-3">
                                    <label style="width:60px;" class="form-control-label">Benar </label>
                                    <input type="number" id="poinbenar1" name="poinbenar1" class="form-control" style="width:50%" value="<?php echo $soal['poin_benar'];?>">
                                  </div>
                                  <div class="col-md-3">
                                    <label style="width:60px;" class="form-control-label">Salah</label>
                                    <input type="number" id="poinsalah1" name="poinsalah1" class="form-control" style="width:50%" value="<?php echo $soal['poin_salah'];?>"> 
                                  </div>
                                  <div class="col-md-3">
                                    <label style="width:60px;" class="form-control-label">Kosong</label>
                                    <input type="number" id="poinkosong1" name="poinkosong1" class="form-control" style="width:50%" value="<?php echo $soal['poin_kosong'];?>"> 
                                  </div>
                                  <button id="simpansoal1" type="reset" onclick="savesoal(this);"  style="text-decoration:none" class="button button2" data-ujian="<?php echo $soal['id_soal']; ?>">Simpan</button>
                                </div>
                              </form>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="tab-pane fade <?php if ($soal['kategori_pertanyaan']==2) echo 'in active'; ?>" id="formIsian">
                      <div class="row">
                          <div style="margin-left:10px; width:15px; float:left;">
                            <strong id="nomor"><?php echo $nomor; ?>.</strong>
                          </div>
                          <div style="margin-left: 0px;">
                            <div class="col-md-12" style="width:96%">
                              <form class="form-horizontal col-md-12" action="input_soal_isian.php?id=<?php echo $id ?>" method="post">
							  <input type="hidden" id="from2" name="from2" value="tambahsoal" />
                                <div class="form-group">
                                  <label class="form-control-label">Pertanyaan</label>
                                  <textarea id="pertanyaan2" name="pertanyaan2" class="form-control" rows="3">
								  <?php
								    if ($soal['kategori_pertanyaan']==2){
										echo $soal['pertanyaan'];
									}
								   ?></textarea>
                                </div>
                                <div class="form-group" style="margin-bottom:10px;">
                                  <label class="form-control-label">Jawaban</label>
                                  <textarea id="jawaban2" placeholder="Ketik jawaban" name="jawaban2" class="form-control" id="opsiIsian"><?php
								    if ($soal['kategori_pertanyaan']==2){
										echo $soal['jawaban_benar'];
									}
								  ?></textarea>
                                </div>
								<div class="form-group form-inline" style="margin-top: 10px;margin-bottom: 15px;">
								  <div class="col-md-6">
								    <label style="width:122px;" class="form-control-label">Kelompok Soal </label>
								    <select class="form-control" id="stage2" name="stage2" >
									  <option value="1">Tanpa Kelompok Soal</option>
									  <?php
									    $querystg = mysqli_query($link, "SELECT * FROM stage WHERE dibuat_oleh='$userid'");
										while ($stg = mysqli_fetch_array($querystg)){
											echo '<option value="';
											echo $stg['id_stage'];
											echo '">';
											echo $stg['nama_stage'];
											echo '</option>';
										}
									  ?>
								    </select>
								  </div>
								  <a href="#" class="button button1" style="font-size:13px; margin-left:-30px; border-radius:15px; color:#777; background-color:#e7e7e7; border-color:#e7e7e7"><i class="fa fa-plus"></i> Tambah Kelompok Soal</a>
								</div>
                                <div class="form-group form-inline" style="margin-bottom:10px;">
                                  <strong class="col-md-1">Poin:</strong>
                                  <div class="col-md-3">
                                    <label style="width:60px;" class="form-control-label">Benar </label>
                                    <input type="number" id="poinbenar2" name="poinbenar2" class="form-control" style="width:50%" value="<?php echo $soal['poin_benar'];?>">
                                  </div>
                                  <div class="col-md-3">
                                    <label style="width:60px;" class="form-control-label">Salah</label>
                                    <input type="number" id="poinsalah2" name="poinsalah2" class="form-control" style="width:50%" value="<?php echo $soal['poin_salah'];?>"> 
                                  </div>
                                  <div class="col-md-3">
                                    <label style="width:60px;" class="form-control-label">Kosong</label>
                                    <input type="number" id="poinkosong2" name="poinkosong2" class="form-control" style="width:50%" value="<?php echo $soal['poin_kosong'];?>"> 
                                  </div>
                                  <button id="simpansoal2" type="reset" onclick="savesoal(this);"  style="text-decoration:none" class="button button2" data-ujian="<?php echo $soal['id_soal']; ?>">Simpan</button>
                                </div>
                              </form> 
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="tab-pane fade <?php if ($soal['kategori_pertanyaan']==3) echo 'in active'; ?>" id="formEssay">
                      <div class="row">
                          <div style="margin-left:10px; width:15px; float:left;">
                            <strong id="nomor"><?php echo $nomor; ?>.</strong>
                          </div>
                          <div style="margin-left: 0px;">
                            <div class="col-md-12" style="width:96%">
                              <form class="form-horizontal col-md-12" action="input_soal_essay.php?id=<?php echo $id; ?>" method="post">
							  <input type="hidden" id="from3" name="from3" value="tambahsoal" />
                                <div class="form-group">
                                   <label class="form-control-label">Pertanyaan</label>
                                   <textarea id="pertanyaan3" name="pertanyaan3" class="form-control" row="3">
								   <?php
								    if ($soal['kategori_pertanyaan']==3){
										echo $soal['pertanyaan'];
									}
								   ?></textarea>
                                </div>
                                <div class="form-group" style="margin-bottom:10px;">
                                  <label class="form-control-label">Jawaban</label>
                                  <div style="border:1px solid #ddd; padding:5px; background-color:#ffffff">
                                    <textarea id="jawaban3" name="jawaban3" class="form-control" row="3" placeholder="Ketik jawaban">
									<?php
								    if ($soal['kategori_pertanyaan']==3){
										echo $soal['jawaban_benar'];
									}
								  ?></textarea>
                                  </div>
                                </div>
								<div class="form-group form-inline" style="margin-top: 10px;margin-bottom: 15px;">
								  <div class="col-md-6">
								    <label style="width:122px;" class="form-control-label">Kelompok Soal </label>
								    <select class="form-control" id="stage3" name="stage3" >
									  <option value="1">Tanpa Kelompok Soal</option>
									  <?php
									    $querystg = mysqli_query($link, "SELECT * FROM stage WHERE dibuat_oleh='$userid'");
										while ($stg = mysqli_fetch_array($querystg)){
											echo '<option value="';
											echo $stg['id_stage'];
											echo '">';
											echo $stg['nama_stage'];
											echo '</option>';
										}
									  ?>
								    </select>
								  </div>
								  <a href="#" class="button button1" style="font-size:13px; margin-left:-30px; border-radius:15px; color:#777; background-color:#e7e7e7; border-color:#e7e7e7"><i class="fa fa-plus"></i> Tambah Kelompok Soal</a>
								</div>
                                <div class="form-group form-inline" style="margin-bottom:10px;">
                                  <strong class="col-md-1">Poin:</strong>
                                  <div class="col-md-3">
                                    <label style="width:65px;" class="form-control-label">Benar </label>
                                    <input type="number" id="poinbenar3" name="poinbenar3" class="form-control" style="width:50%" value="<?php echo $soal['poin_benar'];?>">
                                  </div>
                                  <div class="col-md-3">
                                    <label style="width:65px;" class="form-control-label">Salah</label>
                                    <input type="number" id="poinsalah3" name="poinsalah3" class="form-control" style="width:50%" value="<?php echo $soal['poin_salah'];?>"> 
                                  </div>
                                  <div class="col-md-3">
                                    <label style="width:65px;" class="form-control-label">Kosong</label>
                                    <input type="number" id="poinkosong3" name="poinkosong3" class="form-control" style="width:50%" value="<?php echo $soal['poin_kosong'];?>"> 
                                  </div>
                                  <button id="simpansoal3" type="reset" onclick="savesoal(this);"  style="text-decoration:none" class="button button2" data-ujian="<?php echo $soal['id_soal']; ?>">Simpan</button>
                                </div>
                              </form> 
                            </div>
                          </div>
                      </div>
                    </div>    
                    <!-- <div class="panel panel-default tab-pane fade" id="formPencocokan">
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
                    </div> -->
                    <div class="tab-pane fade <?php if ($soal['kategori_pertanyaan']==6) echo 'in active'; ?>" id="formSebabAkibat">
                      <div class="row">
                          <div style="margin-left:10px; width:15px; float:left;">
                            <strong id="nomor"><?php echo $nomor; ?>.</strong>
                          </div>
                          <div style="margin-left: 0px;">  
                            <div class="col-md-12" style="width:96%">
                              <form class="form-horizontal col-md-12" action="input_soal_sebab.php?id<?php echo$id; ?>" method="post">
							  <input type="hidden" id="from" name="from" value="tambahsoal" />
							  <input type="hidden" id="jawabanbenar6" name="jawabanbenar6" />
							  <input type="hidden" id="pertanyaan6" name="pertanyaan6" value="<?php
								    if ($soal['kategori_pertanyaan']==6){
										echo $soal['pertanyaan'];
									}
								   ?>"/>
                                <div class="form-group">
                                   <label class="form-control-label">Pernyataan</label>
                                   <textarea id="pernyataan6" name="pernyataan6" class="form-control" rows="2"></textarea>
                                </div>
                                <div class="form-group">
                                   <label class="form-control-label col-md-offset-5 col-md-6">SEBAB</label>
                                </div>
                                <div class="form-group">
                                   <label class="form-control-label">Alasan</label>
                                   <textarea id="alasan6" name="alasan6" class="form-control" rows="2"></textarea>
                                </div>
                                <div class="form-group">
                                  <div class="radio radio6">
                                    <label class="col-xs-12 col-md-12"><input type="radio" name="jawabansebab" value="Pernyataan benar, alasan benar, keduanya menunjukkan hubungan sebab akibat">Pernyataan benar, alasan benar, keduanya menunjukkan hubungan sebab akibat</label>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="radio radio6">
                                    <label class="col-xs-12 col-md-12"><input type="radio" name="jawabansebab" value="Pernyataan benar, alasan benar, tapi keduanya tidak menunjukkan hubungan sebab akibat">Pernyataan benar, alasan benar, tapi keduanya tidak menunjukkan hubungan sebab akibat</label>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="radio radio6">
                                    <label class="col-xs-12 col-md-12"><input type="radio" name="jawabansebab" value="Pernyataan benar, alasan salah">Pernyataan benar, alasan salah</label>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="radio radio6">
                                    <label class="col-xs-12 col-md-12"><input type="radio" name="jawabansebab" value="Pernyataan salah, alasan benar">Pernyataan salah, alasan benar</label>
                                  </div>    
                                </div>
                                <div class="form-group" style="margin-bottom: 10px;">
                                  <div class="radio radio6">
                                    <label class="col-xs-12 col-md-12"><input type="radio" name="jawabansebab" value="Pernyataan dan alasan salah">Pernyataan dan alasan salah</label>
                                  </div>    
                                </div>
								<div class="form-group form-inline" style="margin-top: 10px;margin-bottom: 15px;">
								  <div class="col-md-6">
								    <label style="width:122px;" class="form-control-label">Kelompok Soal </label>
								    <select class="form-control" id="stage6" name="stage6" >
									  <option value="1">Tanpa Kelompok Soal</option>
									  <?php
									    $querystg = mysqli_query($link, "SELECT * FROM stage WHERE dibuat_oleh='$userid'");
										while ($stg = mysqli_fetch_array($querystg)){
											echo '<option value="';
											echo $stg['id_stage'];
											echo '">';
											echo $stg['nama_stage'];
											echo '</option>';
										}
									  ?>
								    </select>
								  </div>
								  <a href="#" class="button button1" style="font-size:13px; margin-left:-30px; border-radius:15px; color:#777; background-color:#e7e7e7; border-color:#e7e7e7"><i class="fa fa-plus"></i> Tambah Kelompok Soal</a>
								</div>
                                <div class="form-group form-inline" style="margin-bottom:10px;">
                                  <strong class="col-md-1">Poin:</strong>
                                  <div class="col-md-3">
                                    <label style="width:60px;" class="form-control-label">Benar </label>
                                    <input type="text" id="poinbenar6" name="poinbenar6" class="form-control" style="width:50%" value="<?php echo $soal['poin_benar'];?>">
                                  </div>
                                  <div class="col-md-3">
                                    <label style="width:60px;" class="form-control-label">Salah</label>
                                    <input type="text" id="poinsalah6" name="poinsalah6" class="form-control" style="width:50%" value="<?php echo $soal['poin_salah'];?>"> 
                                  </div>
                                  <div class="col-md-3">
                                    <label style="width:60px;" class="form-control-label">Kosong</label>
                                    <input type="text" id="poinkosong6" name="poinkosong6" class="form-control" style="width:50%" value="<?php echo $soal['poin_kosong'];?>"> 
                                  </div>
                                  <button id="simpansoal6" type="reset" onclick="savesoal(this);"  style="text-decoration:none" class="button button2" data-ujian="<?php echo $soal['id_soal']; ?>">Simpan</button>
                                </div>
                              </form>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="tab-pane fade <?php if ($soal['kategori_pertanyaan']==7) echo 'in active'; ?>" id="formPilihan123">
                      <div class="row">
                          <div style="margin-left:10px; width:15px; float:left;">
                            <strong id="nomor"><?php echo $nomor; ?>.</strong>
                          </div>
                          <div style="margin-left: 0px;">  
                            <div class="col-md-12" style="width:96%">
                              <form class="form-horizontal col-md-12" action="input_soal_pil123.php?id=<?php echo $id; ?>" method="post">
							  <input type="hidden" id="from7" name="from7" value="tambahsoal" />
							  <input type="hidden" id="jawabanbenar7" name="jawabanbenar7" />
                                <div class="form-group">
                                   <label class="form-control-label">Pernyataan</label>
                                   <textarea id="pertanyaan7" name="pertanyaan7" class="form-control" rows="3">
								   <?php
								    if ($soal['kategori_pertanyaan']==7){
										echo $soal['pertanyaan'];
									}
								   ?></textarea>
                                </div>
                                <div class="form-group">
                                  <div class="radio radio7">
                                    <label class="col-xs-12 col-md-12"><input type="radio" name="jawaban123" value="(1), (2), dan (3) benar">(1), (2), dan (3) benar</label>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="radio radio7">
                                    <label class="col-xs-12 col-md-12"><input type="radio" name="jawaban123" value="(1) dan (3) benar">(1) dan (3) benar</label>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="radio radio7">
                                    <label class="col-xs-12 col-md-12"><input type="radio" name="jawaban123" value="(2) dan (4) benar">(2) dan (4) benar</label>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="radio radio7">
                                    <label class="col-xs-12 col-md-12"><input type="radio" name="jawaban123" value="Hanya (4) yang benar">Hanya (4) yang benar</label>
                                  </div>    
                                </div>
                                <div class="form-group" style="margin-bottom:10px;">
                                  <div class="radio radio7">
                                    <label class="col-xs-12 col-md-12"><input type="radio" name="jawaban123" value="Benar semua">Benar semua</label>
                                  </div>    
                                </div>
								<div class="form-group form-inline" style="margin-top: 10px;margin-bottom: 15px;">
								  <div class="col-md-6">
								    <label style="width:122px;" class="form-control-label">Kelompok Soal </label>
								    <select class="form-control" id="stage7" name="stage7" >
									  <option value="1">Tanpa Kelompok Soal</option>
									  <?php
									    $querystg = mysqli_query($link, "SELECT * FROM stage WHERE dibuat_oleh='$userid'");
										while ($stg = mysqli_fetch_array($querystg)){
											echo '<option value="';
											echo $stg['id_stage'];
											echo '">';
											echo $stg['nama_stage'];
											echo '</option>';
										}
									  ?>
								    </select>
								  </div>
								  <a href="#" class="button button1" style="font-size:13px; margin-left:-30px; border-radius:15px; color:#777; background-color:#e7e7e7; border-color:#e7e7e7"><i class="fa fa-plus"></i> Tambah Kelompok Soal</a>
								</div>
                                <div class="form-group form-inline" style="margin-bottom:10px;">
                                  <strong class="col-md-1">Poin:</strong>
                                  <div class="col-md-3">
                                    <label style="width:60px;" class="form-control-label">Benar </label>
                                    <input type="text" id="poinbenar7" name="poinbenar7" class="form-control" style="width:50%" value="<?php echo $soal['poin_benar'];?>">
                                  </div>
                                  <div class="col-md-3">
                                    <label style="width:60px;" class="form-control-label">Salah</label>
                                    <input type="text" id="poinsalah7" name="poinsalah7" class="form-control" style="width:50%" value="<?php echo $soal['poin_salah'];?>"> 
                                  </div>
                                  <div class="col-md-3">
                                    <label style="width:60px;" class="form-control-label">Kosong</label>
                                    <input type="text" id="poinkosong7" name="poinkosong7" class="form-control" style="width:50%" value="<?php echo $soal['poin_kosong'];?>"> 
                                  </div>
                                  <button id="simpansoal7" type="reset" onclick="savesoal(this);"  style="text-decoration:none" class="button button2" data-ujian="<?php echo $soal['id_soal']; ?>">Simpan</button>
                                </div>
                              </form>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="tab-pane fade <?php if ($soal['kategori_pertanyaan']==5) echo 'in active'; ?>" id="formCheckbox">
                      <div class="row">
                          <div style="margin-left:10px; width:15px; float:left;">
                            <strong id="nomor"><?php echo $nomor; ?>.</strong>
                          </div>
                          <div style="margin-left: 0px;">  
                            <div class="col-md-12" style="width:96%">
                              <form class="form-horizontal col-md-12" action="input_soal_checkbox.php?id=<?php echo $id; ?>" method="post">
							  <input type="hidden" id="from5" name="from5" value="tambahsoal" />
                                <div class="form-group">
                                   <label class="form-control-label">Pertanyaan</label>
                                   <textarea id="pertanyaan5" name="pertanyaan5" class="form-control" rows="3">
								   <?php
								    if ($soal['kategori_pertanyaan']==5){
										echo $soal['pertanyaan'];
									}
								   ?></textarea>
                                </div>
								<?php
								  $piljwb5 = mysqli_query($link, "SELECT * FROM pilihan_jawaban WHERE id_soal='$id'");
								  $data = mysqli_fetch_array($piljwb5);
								?>
                                <div class="form-group">
                                  <div class="checkbox">
                                    <label class="col-xs-12 col-md-12"><input type="checkbox" id="checkbox1" name="checkbox1"><input type="text" id="checkval1" name="checkval1" class="form-control" value="<?php echo $data['opsi_jawaban']; $data = mysqli_fetch_array($piljwb5); ?> "></label>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="checkbox">
                                    <label class="col-xs-12 col-md-12"><input type="checkbox" id="checkbox2" name="checkbox2"><input type="text" id="checkval2" name="checkval2" class="form-control" value="<?php echo $data['opsi_jawaban']; $data = mysqli_fetch_array($piljwb5); ?> "></label>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="checkbox">
                                    <label class="col-xs-12 col-md-12"><input type="checkbox" id="checkbox3" name="checkbox3"><input type="text" id="checkval3" name="checkval3" class="form-control" value="<?php echo $data['opsi_jawaban']; $data = mysqli_fetch_array($piljwb5); ?> "></label>
                                  </div>
                                </div>
                                <div class="form-group" style="margin-bottom: 10px;">
                                  <div class="checkbox">
                                    <label class="col-xs-12 col-md-12"><input type="checkbox" id="checkbox4" name="checkbox4"><input type="text" id="checkval4" name="checkval4" class="form-control" value="<?php echo $data['opsi_jawaban']; $data = mysqli_fetch_array($piljwb5); ?> "></label>
                                  </div>    
                                </div>
                                <div class="form-group" style="margin-bottom: 10px;">
                                  <button class="button button1 tambahopsi" type="button" style="margin-left:20px; font-size:13px; background-color:#e7e7e7; border:0px; color:#777; border:1px solid #ddd; border-radius:20px; outline:none;"><span class="glyphicon glyphicon-plus"></span> Tambahkan opsi</button>
                                </div>
								<div class="form-group form-inline" style="margin-top: 10px;margin-bottom: 15px;">
								  <div class="col-md-6">
								    <label style="width:122px;" class="form-control-label">Kelompok Soal </label>
								    <select class="form-control" id="stage5" name="stage5" >
									  <option value="1">Tanpa Kelompok Soal</option>
									  <?php
									    $querystg = mysqli_query($link, "SELECT * FROM stage WHERE dibuat_oleh='$userid'");
										while ($stg = mysqli_fetch_array($querystg)){
											echo '<option value="';
											echo $stg['id_stage'];
											echo '">';
											echo $stg['nama_stage'];
											echo '</option>';
										}
									  ?>
								    </select>
								  </div>
								  <a href="#" class="button button1" style="font-size:13px; margin-left:-30px; border-radius:15px; color:#777; background-color:#e7e7e7; border-color:#e7e7e7"><i class="fa fa-plus"></i> Tambah Kelompok Soal</a>
								</div>
                                <div class="form-group form-inline" style="margin-bottom:10px;">
                                  <strong class="col-md-1">Poin:</strong>
                                  <div class="col-md-3">
                                    <label style="width:60px;" class="form-control-label">Benar </label>
                                    <input type="text" id="poinbenar5" name="poinbenar5" class="form-control" style="width:32%" value="<?php echo $soal['poin_benar'];?>">
                                  </div>
                                  <div class="col-md-3">
                                    <label style="width:60px;" class="form-control-label">Salah</label>
                                    <input type="text" id="poinsalah5" name="poinsalah5" class="form-control" style="width:32%" value="<?php echo $soal['poin_salah'];?>"> 
                                  </div>
                                  <div class="col-md-3">
                                    <label style="width:60px;" class="form-control-label">Kosong</label>
                                    <input type="text" id="poinkosong5" name="poinkosong5" class="form-control" style="width:32%" value="<?php echo $soal['poin_kosong'];?>"> 
                                  </div>
                                  <button id="simpansoal5" type="reset" onclick="savesoal(this);"  style="text-decoration:none" class="button button2" data-ujian="<?php echo $soal['id_soal']; ?>">Simpan</button>
                                </div>
                              </form>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="tab-pane fade <?php if ($soal['kategori_pertanyaan']==4) echo 'in active'; ?>" id="formBenarSalah">
                      <div class="row">
                          <div style="margin-left:10px; width:15px; float:left;">
                            <strong id="nomor"><?php echo $nomor; ?>.</strong>
                          </div>
                          <div style="margin-left: 0px;">
                            <div class="col-md-12" style="width:96%">
                              <form class="form-horizontal col-md-12" action="input_soal_bs.php?id=<?php echo $id; ?>" method="post">
							  <input type="hidden" id="from4" name="from4" value="tambahsoal" />
							  <input type="hidden" id="jawabanbenar4" name="jawabanbenar4" />
                                <div class="form-group">
                                   <label class="form-control-label">Pertanyaan</label>
                                   <textarea id="pertanyaan4" name="pertanyaan4" class="form-control" row="3">
								   <?php
								    if ($soal['kategori_pertanyaan']==4){
										echo $soal['pertanyaan'];
									}
								   ?></textarea>
                                </div>
                                <p style="margin-left:-10px; font-size:12px; color:#f7b733; margin-top:10px;">Klik lingkaran untuk menetapkan jawaban yang benar</p>
                                <div class="form-group" style="margin-bottom:10px; margin-top:10px;">
                                  <div class="row">
                                    <div style="float:left" style="width:15px">
                                        <i class="fa fa-check-circle fa-lg" style="color:#f8f8f8"></i>
                                      </div>
                                      <div style="margin-left:15px; width:50px; float:left; padding-right:10px;">
                                        <i class="fa fa-circle-thin fa-2x setjawaban" style="color:#dadada"></i>
                                      </div>
                                      <div style="width:85%; margin-left:-20px;" class="col-md-9 jawab4">Benar</div>
                                  </div>
                                </div>
                                <div class="form-group" style="margin-bottom:10px; margin-top:10px;">
                                  <div class="row">
                                    <div style="float:left" style="width:15px">
                                        <i class="fa fa-check-circle fa-lg" style="color:#f8f8f8"></i>
                                      </div>
                                      <div style="margin-left:15px; width:50px; float:left; padding-right:10px;">
                                        <i class="fa fa-circle-thin fa-2x setjawaban" style="color:#dadada"></i>
                                      </div>
                                      <div style="width:85%; margin-left:-20px;" class="col-md-9 jawab4">Salah</div>
                                  </div>
                                </div>
								<div class="form-group form-inline" style="margin-top: 10px;margin-bottom: 15px;">
								  <div class="col-md-6">
								    <label style="width:122px;" class="form-control-label">Kelompok Soal </label>
								    <select class="form-control" id="stage4" name="stage4" >
									  <option value="1">Tanpa Kelompok Soal</option>
									  <?php
									    $querystg = mysqli_query($link, "SELECT * FROM stage WHERE dibuat_oleh='$userid'");
										while ($stg = mysqli_fetch_array($querystg)){
											echo '<option value="';
											echo $stg['id_stage'];
											echo '">';
											echo $stg['nama_stage'];
											echo '</option>';
										}
									  ?>
								    </select>
								  </div>
								  <a href="#" class="button button1" style="font-size:13px; margin-left:-30px; border-radius:15px; color:#777; background-color:#e7e7e7; border-color:#e7e7e7"><i class="fa fa-plus"></i> Tambah Kelompok Soal</a>
								</div>
                                <div class="form-group form-inline" style="margin-bottom:10px;">
                                  <strong class="col-md-1">Poin:</strong>
                                  <div class="col-md-3">
                                    <label style="width:60px;" class="form-control-label">Benar </label>
                                    <input type="text" id="poinbenar4" name="poinbenar4" class="form-control" style="width:50%" value="<?php echo $soal['poin_benar'];?>">
                                  </div>
                                  <div class="col-md-3">
                                    <label style="width:60px;" class="form-control-label">Salah</label>
                                    <input type="text" id="poinsalah4" name="poinsalah4" class="form-control" style="width:50%" value="<?php echo $soal['poin_salah'];?>"> 
                                  </div>
                                  <div class="col-md-3">
                                    <label style="width:60px;" class="form-control-label">Kosong</label>
                                    <input type="text" id="poinkosong4" name="poinkosong4" class="form-control" style="width:50%" value="<?php echo $soal['poin_kosong'];?>"> 
                                  </div>
                                  <button id="simpansoal4" type="reset" onclick="savesoal(this);"  style="text-decoration:none" class="button button2" data-ujian="<?php echo $soal['id_soal']; ?>">Simpan</button>
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