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
						<h4 class="mb"><i class="fa fa-angle-right"></i>History</h4>
							<?php
							$attributes = array("class" => "form-horizontal style-form", "name" => "history");
							echo form_open('adm_history/updateHis', $attributes);
							foreach ($result as $row) :
							?>
								<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label">Judul</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="judul" value="<?php echo $row->judul; ?>">
									</div>
								</div> 
								<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label">Isi</label><br><br>
									<div class="col-md-12">
										<textarea name="isi" rows="20"><?php echo $row->isi; ?></textarea>
									</div>
								</div> 
								<p align="right">
								<button type="submit" class="btn btn-info">
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
		</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <?php
   include 'adm_footer.php';
   include 'js_req.php';
   ?>
  </body>
</html>