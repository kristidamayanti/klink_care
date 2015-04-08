<!DOCTYPE html>
<html>
<head>
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
		<h3><i class="fa fa-angle-right"></i> Edit Kategori</h3>
			<div class="row mt">
				<?php 
				$attributes = array("class" => "style-form", "name" => "updateCat");
				echo form_open('Adm_galeri/updateCat/'.$hasil->videocat_id,$attributes); ?>
					<div class="col-lg-6">
						<div class="form-panel">
							<div class="form-group">
								<label>Nama Kategori</label>
								<input type="text" name="namacat" class="form-control" placeholder="Nama Kategori" value="<?php echo $hasil->namecat; ?>">
								
							</div>
							<p align="right">
								<a href="<?php echo site_url('Adm_side_bar/video');?>" class="btn btn-danger" style="text-decoration:none;"><i class="fa fa-times"></i>&nbsp;Batal</a>
								&nbsp;<button type="submit" class="btn btn-success" name="ganti"><i class="fa fa-refresh"></i>&nbsp;Edit</button>
							</p>
						</div>
					</div>
				</form>
			</div>
	</section>
</section>	n>
		</section>

      <!--main content end-->
	  
      <?php
   include 'adm_footer.php';
   include 'js_req.php';
   ?>
  </body>
</html>