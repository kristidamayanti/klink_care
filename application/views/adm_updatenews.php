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
<body onload="setInterval('displayServerTime()', 1000);">
<?php
include 'adm_side_bar.php';

date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(date("m"),date("d"),date("Y"));
$tglsekarang = date("d-m-Y", $tanggal);
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
						<h4 class="mb"><i class="fa fa-angle-right"></i>News</h4>
						<?php echo form_open_multipart('Adm_news/updateNews/'.$hasil->id); ?>
						<p>
							<?php
								echo 'Tanggal Update Berita :  '.$tglsekarang.', '.date('H:i:s');
							?>
						</p><br>
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Judul</label>
							<div class="col-sm-10">
								
								<input type="text" class="form-control" name="title" value="<?php echo $hasil->title;?>">
							</div>
						</div><br><br>
						<div class="form-group">
							<div class="col-sm-2 col-sm-2">
								<img src="<?php echo base_url().'assets/upload/img/news/'.$hasil->image;?>" class="img-responsive"><br>
								<?php echo $hasil->image;?>
							</div>
							
							<div class="col-sm-10">
								<label>Ganti gambar?</label>
								<input type="file" class="form-control" name="pic" value="<?php echo $hasil->image;?>">
							</div>
						</div><br><br><br><br><br><br><br><br>
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Isi Berita</label><br><br>
							<div class="col-lg-12">
								<textarea name="isi" cols="50"><?php echo $hasil->isi;?></textarea>
							</div>
						</div> <br><br><br><br><br><br><br><br><br><br><br><br>
						<p align="right">
							<button type="submit" class="btn btn-warning" name="update">
								<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>&nbsp;Update
							</button>
						</p>
						
					</div><!-- col-lg-12-->      	
			</div><!-- /row -->   	
		</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
	  
      <?php
   include 'adm_footer.php';
   include 'js_req.php';
   ?>
  </body>
</html>