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
						<div class="alert alert-danger" role="alert"><b>Maaf!</b> File yang Anda inputkan salah</div>
						<div class="alert alert-warning" role="alert"><b>Informasi : </b><br>
						<ol>
							<li>Menu <span class="label label-danger">Download</span>, file yang dapat diuploadkan : .doc, dan .docx</li>
							<li>Menu <span class="label label-success">Penerima Beasiswa</span>, file yang dapat diuploadkan : .csv</li>
							<li>Menu <span class="label label-primary">K-Care Center</span>, file yang dapat diuploadkan : .png, .jpeg, .jpg, dan .gif</li>
						</ol>
						</div>
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
