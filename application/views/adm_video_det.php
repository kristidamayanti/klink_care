<!DOCTYPE html>
<html>
<head>
	<script src="<?php echo base_url(); ?>assets/js/tinymce/tinymce.min.js"></script>
	<script>tinymce.init({selector:'textarea'});</script>
</head>

<body>
<html lang="en">
<?php
include 'adm_header.php';
 ?>
<body>
<?php
include 'adm_side_bar.php';
?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
			<section class="wrapper site-min-height">
				<h3><i class="fa fa-angle-right"></i> Menambahkan Video Kategori</h3>
				<div class="row mt">
					<div class="col-md-12">
						<div class="content-panel">
							<?php echo  form_open_multipart('Adm_video/insertVid');?>
								<div class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3"><h4>Tentukan Kategori</h4></label>
										<div class="col-sm-3">
											<select class="form-control input-sm" name="album" required>
												<option value="">-- Pilih Kategori --</option>
												<?php
												foreach($hasil as $row) :
													echo
													'<option value="'.$row->videocat_id.'">'.$row->namecat.'</option>';
												endforeach;
												?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3"><h5>Gambar Video</h5></label>
										<div class="col-sm-8">
											<input type="file" class="form-control" name="pic">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3"><h5>Tautan Video</h5></label>
										<div class="col-sm-8">
											
											<input type="text" class="form-control" name="link" placeholder="http:// atau https://">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3"><h5>Judul</h5></label>
										<div class="col-sm-8">
											<input type="text" class="form-control" name="title">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3"><h5>Deskripsi Singkat</h5></label>
										<div class="col-sm-8">
											<textarea name="desc"></textarea>
										</div>
									</div>
									<p align="center">
										<button type="submit" class="btn btn-info">
											<span class="glyphicon glyphicon-save" aria-hidden="true"></span>&nbsp;Simpan
										</button>
									</p>
								</div>
							<?php echo form_close();?>
						</div>
					</div>
				</div>
			</section>
		</section>

      <!--main content end-->
      <?php
   include 'adm_footer.php';
   include 'js_req.php';
   ?>
  </body>
</html>