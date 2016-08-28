<?php
	session_start();
	include("koneksi.php");
	$id = $_GET['id'];
	$query = mysqli_query($link, "SELECT * FROM `info_ujian` WHERE `id_ujian`='$id' ");
    $ujian = mysqli_fetch_array($query);
?>
		  <div class="panel panel-default" style="margin-top:20px;" id="informasiujian">
            <div class="panel-body">
              <div class="row">
                <h5 style="text-align:center" class="col-md-offset-1 col-md-10"><b>Informasi Ujian</b></h5>
                <button class="button button1" id="editinformasi" onclick="changeedit();" data-ujian="<?php echo $id; ?>" class="col-md-1"><i class="fa fa-pencil"></i></button>
              </div>
              <hr />
              <form class="form-horizontal">
                <div class="form-group">
                  <label class="col-md-2" style="text-align:right; padding-right:0px;">Judul:</label>
                    <div class="col-md-10" style="text-align:left"><?php echo $ujian['judul_ujian']; ?></div>
                </div>
                <div class="form-group">
                  <label class="col-md-2" style="text-align:right; padding-right:0px;">URL:</label>
                    <div class="col-md-10" style="text-align:left"><?php echo $ujian['url_ujian']; ?></div>
                </div>
                <div class="form-group">
                  <label class="col-md-2" style="text-align:right; padding-right:0px;">Waktu:</label>
                  <div class="col-md-3" style="text-align:left"><?php echo $ujian['lama_ujian']; ?> menit</div>
                  <label class="col-md-offset-1 col-md-2" style="text-align:right; padding-right:0px;">Jumlah soal:</label>
                  <div class="col-md-3" style="text-align:left"><?php echo $ujian['total_soal']; ?></div>
                </div>
                <div class="form-group">
                  <label class="col-md-2" style="text-align:right; padding-right:0px;">Perlu login:</label>
                  <div class="col-md-3" style="text-align:left">
				    <?php
					  if ($ujian['perlu_login']){
						  echo "Ya";
					  } else {
						  echo "Tidak";
					  }
					?>
				  </div>
                  <label class="col-md-offset-1 col-md-2" style="text-align:right; padding-right:0px;">Acak soal:</label>
                  <div class="col-md-3" style="text-align:left">
				    <?php
					  if ($ujian['acak_soal']){
						  echo "Ya";
					  } else {
						  echo "Tidak";
					  }
					?>
				  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2" style="text-align:right; padding-right:0px;">Kategori:</label>
                    <div class="col-md-10" style="text-align:left">
					  <?php
					    $idm = $ujian['mata_pelajaran'];
						$querynamamapel = "select * from mata_pelajaran where id_kategori=$idm";
						$qnm = mysqli_query($link, $querynamamapel);
						$namamp = mysqli_fetch_array($qnm);
						echo $namamp['nama'];
						echo " - ";
						$idk = $ujian['id_kelas'];
						$querynmk = "select * from kelas where id_kelas=$idk";
						$qnk = mysqli_query($link, $querynmk);
						$namak = mysqli_fetch_array($qnk);
						echo $namak['nama'];
					  ?>
					</div>
                </div>
                <div class="form-group">
                  <label class="col-md-2" style="text-align:right; padding-right:0px;">Petunjuk:</label>
                  <div class="col-md-10" style="text-align:left" rows="3">
					<?php
					  if ($ujian['petunjuk']!=null){
						echo $ujian['petunjuk'];
					  } else {
						echo "-";
					  }
					?>
				  </div>
                </div>
              </form>
            </div>
          </div>