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
				<div class="col-md-6">
					<div class="form-panel">
						<h4 class="mb"><i class="fa fa-angle-right"></i>Visi</h4>	
							<?php
							$attributes = array("class" => "form-horizontal style-form", "name" => "foundation");
							echo form_open('adm_visimisi/updateVs', $attributes);
							foreach ($hasil as $row) :
							?>
								<div class="form-group">
									<div class="col-md-12">
										<textarea name="visi" rows="20" ><?php echo $row->visi;?></textarea>
									</div>
								</div> 
								<p align="right">
								<button type="submit" class="btn btn-danger">
									<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>&nbsp;Update
								</button>
								</p>
							<?php 
							endforeach;
							echo form_close();
							?>
					</div>
				</div><!-- col-md-6-->
				<div class="col-md-6">
					<div class="form-panel">
						<h4 class="mb"><i class="fa fa-angle-right"></i>Misi</h4>	
							<?php
							$attributes = array("class" => "form-horizontal style-form", "name" => "foundation");
							echo form_open('adm_visimisi/updateMs', $attributes);
							foreach ($hasil as $row) :
							?>
								<div class="form-group">
									<div class="col-md-12">
										<textarea name="misi" rows="20"><?php echo $row->misi;?></textarea>
									</div>
								</div> 
								<p align="right">
								<button type="submit" class="btn btn-danger">
									<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>&nbsp;Update
								</button>
								</p>
							<?php
							endforeach;
							echo form_close();
							?>
					</div>
				</div><!-- col-md-6--> 
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