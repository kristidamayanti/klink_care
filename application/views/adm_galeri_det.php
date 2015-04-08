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
				<h3><i class="fa fa-angle-right"></i> Menambahkan Foto Kategori</h3>
				<div class="row mt">
					<div class="col-md-8 col-md-offset-2">
						<div class="content-panel">
							<?php echo form_open_multipart('Adm_galeri/doUpload'); ?>
								<div class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3"><h4>Tentukan Kategori</h4></label>
										<div class="col-sm-3">
											<select class="form-control input-sm" name="kategori" required>
												<option value="">-- Pilih Kategori --</option>
												<?php
												foreach($hasil as $row) :
													echo
													'<option value="'.$row->gallerycat_id.'">'.$row->namecat.'</option>';
												endforeach;
												?>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<table class="table table-striped table-advance table-hover">
										<thead>
											<tr>
												<th><div align="center">No</div></th>
												<th><i class="fa fa-picture-o"></i> File Foto</th>
												<th><i class="fa fa-info"></i> Keterangan</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><div align="center">1.</div></td>
												<td><input name="gambar[]" type="file" id="exampleInputFile">&nbsp;</td>
												<td><input class="form-control input-sm" type="text" placeholder="Keterangan Gambar" name="ket[]" autocomplete="off" required></td>
											</tr>
											<tr>
												<td><div align="center">2.</div></td>
												<td><input name="gambar[]" type="file" id="exampleInputFile">&nbsp;</td>
												<td><input class="form-control input-sm" type="text" placeholder="Keterangan Gambar" name="ket[]" autocomplete="off"></td>
											</tr>
											<tr>
												<td><div align="center">3.</div></td>
												<td><input name="gambar[]" type="file" id="exampleInputFile">&nbsp;</td>
												<td><input class="form-control input-sm" type="text" placeholder="Keterangan Gambar" name="ket[]" autocomplete="off"></td>
											</tr>
											<tr>
												<td><div align="center">4.</div></td>
												<td><input name="gambar[]" type="file" id="exampleInputFile">&nbsp;</td>
												<td><input class="form-control input-sm" type="text" placeholder="Keterangan Gambar" name="ket[]" autocomplete="off"></td>
											</tr>
											<tr>
												<td><div align="center">5.</div></td>
												<td><input name="gambar[]" type="file" id="exampleInputFile">&nbsp;</td>
												<td><input class="form-control input-sm" type="text" placeholder="Keterangan Gambar" name="ket[]" autocomplete="off"></td>
											</tr>
											<tr>
												<td colspan="3"><button type="submit" class="btn btn-success btn-sm pull-right" name="kirim">
												<i class="fa fa-check"></i>  Tambah Foto</button></td>
											</tr>
										</tbody>
									</table>
								</div>
							<?php echo form_close();?>
						</div>
					</div>
				</div> <!-- end row -->
			</section>
		</section>

      <!--main content end-->
	  
      <?php
   include 'adm_footer.php';
   include 'js_req.php';
   ?>
  </body>
</html>