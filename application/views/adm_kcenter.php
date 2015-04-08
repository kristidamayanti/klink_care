<!DOCTYPE html>
<html lang="en">
<?php
include 'adm_header.php';
 ?>
<body>
<?php
include 'adm_side_bar.php';
//var_dump($hasil);
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
							<p align="right">
								<button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-lg">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Tambah Gambar
								</button>
							</p>
							<div class="row">	
								<div class="col-md-12">
									<div class="row">
									<?php
									if(isset($hasil))
									{
										foreach($hasil as $row) :
									?>
										<div class="col-xs-8 col-md-2">
											<a href="#" class="thumbnail">
											  <img src="<?php echo base_url().$row->image;?>" alt="..." class="img-responsive">
											</a>
											<p align="center">
												<?php echo $row->title;?>
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
	  
	  <!-- Modal Tambah Gambar -->
		<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Tambah Gambar</h4>
				</div>
				<?php echo form_open_multipart('Adm_kcenter/save'); ?>
				<div class="modal-body">
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Upload Gambar</label>
							<div class="col-sm-10">
								<input type="file" class="form-control" name="pic">
							</div>
						</div> <br><br>
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Keterangan</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="title">
							</div>
						</div> 
				</div><br><br>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp;Close
					</button>
					<button type="submit" class="btn btn-info">
						<span class="glyphicon glyphicon-saved" aria-hidden="true"></span>&nbsp;Tambah
					</button>
				</div>
				
			</div>
		  </div>
		</div>
		  <!--modal end-->
      <?php
   include 'adm_footer.php';
   include 'js_req.php';
   ?>
  </body>
</html>