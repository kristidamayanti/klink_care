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
          <section class="wrapper">  	
          	<!-- BASIC FORM ELELEMNTS -->
			<div class="row mt">
				<div class="col-lg-12">
					<div class="form-panel">
						<h4 class="mb"><i class="fa fa-angle-right"></i>Beasiswa</h4>
						<p align="center">
							<button class="btn btn-primary btn-xs" data-toggle="collapse" href="#persyaratan" aria-expanded="false" aria-controls="collapseExample">
								Persyartan
							</button>
							<button class="btn btn-warning btn-xs" type="button" data-toggle="collapse" data-target="#poster" aria-expanded="false" aria-controls="collapseExample">
								Poster
							</button>
							<button class="btn btn-danger btn-xs" type="button" data-toggle="collapse" data-target="#download" aria-expanded="false" aria-controls="collapseExample">
								Download
							</button>
							<button class="btn btn-success btn-xs" type="button" data-toggle="collapse" data-target="#beasiswa" aria-expanded="false" aria-controls="collapseExample">
								Penerima Beasiswa
							</button>
							<!-- isi persyaratan -->
							
							<div class="collapse" id="persyaratan">
								<div class="well">
									<div class="row mt">
										<div class="col-lg-12">
											<div class="form-panel">
												<h4 class="mb"><i class="fa fa-angle-right"></i>Persyaratan</h4>
													<?php
														$attributes = array("class" => "form-horizontal style-form", "name" => "syarat");
														echo form_open('adm_bea_syarat/updateSyr', $attributes);
														foreach ($hasilsyarat as $row) :
													?>
														<div class="form-group">
															<label class="col-sm-2 col-sm-2 control-label">Judul</label>
															<div class="col-sm-10">
																<input type="text" class="form-control" name="judul" value="<?php echo $row->judul; ?>">
															</div>
														</div> 
														<div class="form-group">
															<label class="col-sm-2 col-sm-2 control-label">Persyaratan</label><br><br>
															<div class="col-md-12">
																<textarea name="syarat" rows="20"><?php echo $row->syarat; ?></textarea>
															</div>
														</div> 
														<p align="right">
														<button type="submit" class="btn btn-primary">
															<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>&nbsp;Update
														</button>
														</p>	
													<?php
														endforeach;
														echo form_close();
													?>
											</div>
										</div><!-- col-lg-12-->      	
									</div><!-- /row -->   	
								</div>
							</div>
							
							<!-- isi poster -->
							<div class="collapse" id="poster">
								<div class="well">
									<div class="row mt">
										<div class="col-lg-12">
											<div class="form-panel">
												<h4 class="mb"><i class="fa fa-angle-right"></i>Poster</h4>
													<center>
														<a href="<?php echo site_url('adm_poster/insertPoster')?>" class="btn btn-success btn-lg">
															Lihat Data Poster?
														</a> 	
													</center>
											</div>
										</div><!-- col-lg-12-->      	
									</div><!-- /row -->   
								</div>
							</div>
							
							<!-- isi download -->
							<div class="collapse" id="download">
								<div class="well">
									<div class="row mt">
										<div class="col-lg-12">
											<div class="form-panel">
												<h4 class="mb"><i class="fa fa-angle-right"></i>Download</h4>
												<?php
													$attributes = array("class" => "form-horizontal style-form");
													 echo form_open_multipart('Adm_upload/uploadDoc',$attributes);
												?>
														<div class="form-group">
															<label class="col-sm-2 col-sm-2 control-label">Upload File (.doc, .docx)</label>
															<div class="col-sm-10">
																<input type="file" class="form-control" name="pic">
															</div> 
														</div>
													
															<p align="right">
																<button type="submit" class="btn btn-danger" name="submit">
																	<span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>&nbsp;Go
																</button>
															</p>
												<?php echo form_close();?>
											</div>
										</div><!-- col-lg-12-->      	
									</div><!-- /row -->  
								</div>
							</div>
							
							<!-- isi penerima beasiswa -->
							<div class="collapse" id="beasiswa">
								<div class="well">
									<div class="row mt">
										<div class="col-lg-12">
											<div class="form-panel">
												<h4 class="mb"><i class="fa fa-angle-right"></i>Penerima Beasiswa</h4>
												<?php 
													$attributes = array("class" => "form-horizontal style-form");
													echo form_open_multipart('Adm_bea_penerima/do_upload',$attributes); 
												?>
													<form class="form-horizontal style-form" method="get">
														<div class="form-group">
															<label class="col-sm-2 col-sm-2 control-label">Upload File (dalam bentuk .csv)</label>
															<div class="col-sm-10">
																<input type="file" class="form-control" name="userfile">
															</div> 
														</div><br><br><br>
														<p align="right">
														<button type="submit" class="btn btn-danger">
															<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>&nbsp;Update
														</button>
														</p>
													<?php echo form_close();?>
											</div>
										</div><!-- col-lg-12-->      	
									</div><!-- /row --> 
								</div>
							</div>
						</p>
					</div>
				</div><!-- col-lg-12-->      	
			</div><!-- /row -->   	
		</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <?php
   include 'adm_footer.php';
   include 'js_req.php';
   ?>
  </body>
</html>
