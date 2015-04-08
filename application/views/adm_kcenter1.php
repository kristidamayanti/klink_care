<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<?php 
	foreach($css_files as $file): ?>
		<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
	<?php endforeach; ?>
	<?php foreach($js_files as $file): ?>
		<script src="<?php echo $file; ?>"></script>
	<?php endforeach; ?>
	<style type='text/css'>
		body
		{
			font-family: Arial;
			font-size: 14px;
		}
		a {
			color: blue;
			text-decoration: none;
			font-size: 14px;
		}
		a:hover
		{
			text-decoration: underline;
		}
	</style>
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
								<div>
									<?php echo $output; ?>
								</div>
							  </div>
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
    </div>
</body>
</html>
