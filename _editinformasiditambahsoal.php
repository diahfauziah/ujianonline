<?php
	session_start();
	include("koneksi.php");
	$id = $_GET['id'];
	$query = mysqli_query($link, "SELECT * FROM `info_ujian` WHERE `id_ujian`='$id' ");
    $ujian = mysqli_fetch_array($query);
?>
		  <div class="panel panel-default col-md-offset-1 col-md-10" style="margin-top:20px;" id="informasiujian">
            <div class="panel-body">
              <div class="row">
                <h5 style="text-align:center" class="col-md-offset-2 col-md-8"><b>Informasi Ujian</b></h5>
                <button class="button button1" id="simpaninfo" onclick="changesave();" data-ujian="<?php echo $id; ?>" class="col-md-1">Simpan</button>
              </div>
              <hr />
              <form id="form" class="form-horizontal" action="save_editinformasi.php?id=<?php echo $id; ?>" method="post">
                <div class="form-group">
                  <label class="col-md-2" style="text-align:right; padding-right:0px;">Judul:</label>
				  <div class="col-md-8">
					<input type="text" class="form-control" id="Judul" name="Judul" value="<?php echo $ujian['judul_ujian'] ?>">
				  </div>
                </div>
                <div class="form-group" style="margin-bottom:5px;">
                  <label class="col-md-2" style="text-align:right; padding-right:0px;">URL:</label>
                    <div class="col-md-10" style="text-align:left"><?php echo $ujian['url_ujian']; ?></div>
                </div>
                <div class="form-group" style="margin-bottom:5px;">
                  <label class="col-md-2" style="text-align:right; padding-right:0px;">Waktu:</label>
                  <div class="col-md-3">
					<input type="number" class="form-control" id="Waktu" name="Waktu" value="<?php echo $ujian['lama_ujian'] ?>">
				  </div>
                  <label class="col-md-offset-1 col-md-2" style="text-align:right; padding-right:0px;">Jumlah soal:</label>
                  <div class="col-md-3" style="text-align:left"><?php echo $ujian['total_soal']; ?></div>
                </div>
                <div class="form-group" style="margin-bottom:5px;">
                  <label class="col-md-2" style="text-align:right; padding-right:0px;">Perlu login:</label>
                  <div class="col-md-3" style="text-align:left">
				    <?php if($ujian['perlu_login']==1){
							  echo '<select id="PerluLogin" name="PerluLogin" class="form-control">';
							  echo   '<option value="1" selected>Ya</option>';
							  echo   '<option value="0">Tidak</option>';
							  echo '</select>';
							} else {
							  echo '<select id="PerluLogin" name="PerluLogin" class="form-control">';
							  echo   '<option value="1">Ya</option>';
							  echo   '<option value="0" selected>Tidak</option>';
							  echo '</select>';
							}  
					  ?>
				  </div>
                  <label class="col-md-offset-1 col-md-2" style="text-align:right; padding-right:0px;">Acak soal:</label>
                  <div class="col-md-3" style="text-align:left">
				    <?php if($ujian['acak_soal']==1){
							  echo '<select id="AcakSoal" name="AcakSoal" class="form-control">';
							  echo   '<option value="1" selected>Ya</option>';
							  echo   '<option value="0">Tidak</option>';
							  echo '</select>';
							} else {
							  echo '<select id="AcakSoal" name="AcakSoal" class="form-control">';
							  echo   '<option value="1">Ya</option>';
							  echo   '<option value="0" selected>Tidak</option>';
							  echo '</select>';
							}  
					  ?>
				  </div>
                </div>
                <div class="form-group" style="margin-bottom:5px;">
                  <label class="col-md-2" style="text-align:right; padding-right:0px;">Kategori:</label>
                    
					  <div class="col-md-3">
						<select class="form-control" id="KategoriUjian" name="KategoriUjian" required>
						  <?php
						  $dibuat = $_SESSION['userid'];
						  $kat = mysqli_query($link, "SELECT * FROM `mata_pelajaran` WHERE `dibuat_oleh`=1 or `dibuat_oleh`=$dibuat");
						  
						  while($kate = mysqli_fetch_array($kat)){
							echo '<option value="';
							echo $kate['id_kategori'];
							echo '" ';
							if ($kate['id_kategori']==$ujian['mata_pelajaran']){
								echo 'selected';
							}
							echo '>';
							echo $kate['nama'];
							echo '</option>';
						  }
						?>
						</select>
					  </div>
					  <div class="col-md-2" style="margin-left:-20px;">
						<select class="form-control" id="KategoriKelas" name="KategoriKelas" required>
						  <?php
						  if ($_SESSION['kategori_guru']=="SMA"){
							$querykelas = "SELECT * FROM `kelas` WHERE id_kelas > 3 and (`dibuat_oleh`=1 or `dibuat_oleh`=$dibuat)";
						  } else {
							$querykelas = "SELECT * FROM `kelas` WHERE (id_kelas < 4 or id_kelas > 6) and (`dibuat_oleh`=1 or `dibuat_oleh`=$dibuat)";
						  }
						  $kel = mysqli_query($link, $querykelas);
						  
						  while($kate = mysqli_fetch_array($kel)){
							echo '<option value="';
							echo $kate['id_kelas'];
							echo '"';
							if ($kate['id_kelas']==$ujian['id_kelas']){
								echo 'selected';
							}
							echo '>';
							echo $kate['nama'];
							echo '</option>';
						  }
						?>
						</select>
					   </div>
					
                </div>
                <div class="form-group" style="margin-bottom:5px;">
                  <label class="col-md-2" style="text-align:right; padding-right:0px;">Petunjuk:</label>
                  <div class="col-md-10" style="text-align:left" rows="3">
					<textarea id="Petunjuk" name="Petunjuk" class="form-control" rows="15">
					  <?php echo $ujian['petunjuk']; ?>
					</textarea>
				  </div>
                </div>
              </form>
            </div>
          </div>
	