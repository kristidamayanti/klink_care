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
						<h4 class="mb"><i class="fa fa-angle-right"></i>K-Link Care Center</h4>
							<div class="row">	
								<div class="col-md-12">
									<div class="row">
									<?php
									if(isset($hasil))
									{
										foreach($hasil as $row) :
										$img = '%20'.$row->images;
									?>
										<div class="col-xs-8 col-md-2">
											<a href="#" class="thumbnail">
											  <img src="<?php echo base_url().'assets/upload/img/galeri/'.$img;?>" alt="..." class="img-responsive">
											</a> 
											<p align="center">
												<?php echo $row->description;?>
												<a href="<?php echo site_url("Adm_galeri/delImg/").'/'.$row->gallery_id;?>">
													<img src="<?php echo base_url(); ?>gambar/icon/remove.png" alt="Hapus File?" width="18" height="18">
												</a>
											</p>
										</div>
									<?php 
										endforeach;
									}
									else
									{
										echo '<div class="col-xs-6 col-md-3">';
										echo 'no data';
										echo '</div>';
									}
									?>
									</div>
								</div><!-- col-md-12-->
							</div>
					</div>
				</div><!-- col-lg-12-->      	
			</div><!-- /row -->   	
		</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
      <!--main content end-->
	  

      <!--main content end-->
      <?php
   include 'adm_footer.php';
   include 'js_req.php';
   ?>
  </body>
</html>