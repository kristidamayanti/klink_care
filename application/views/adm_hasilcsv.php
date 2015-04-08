<!DOCTYPE html>
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
							<?php
							if(empty ($csvdata) && $myfile == FALSE):
							?>
								<div class="alert alert-danger" role="alert">Nothing to import</div>
							<?php 
							else:
								$count = count($csvdata);
								echo form_open('Adm_bea_penerima');
							?>
									<div class="alert alert-success" role="alert">
										<?php echo '( '.$count.' )'.' Records founds to Import';?>
									</div><br>
									<div class="form-group">
										<input type="submit" class="btn btn-search" name="submit" value="Proses">
									</div>
									<table class="table table-bordered">
										
										<?php
											      
											foreach ($csvdata as $data)
											{
											echo
											'<tr>';

												//nama
												if($data[0] == NULL)
												{
													echo 
													'<td>Null</td>';
												}
												else
												{
													echo 
													'<td>'.$data[0].'</td>';
												}
												//ttl
												if($data[1] == NULL)
												{
													echo 
													'<td>Null</td>';
												}
												else
												{
													echo 
													'<td>'.$data[1].'</td>';
												}
												//jk
												if($data[2] == NULL)
												{
													echo 
													'<td>Null</td>';
												}
												else
												{
													echo 
													'<td>'.$data[2].'</td>';
												}
												//kelas
												if($data[3] == NULL)
												{
													echo 
													'<td>Null</td>';
												}
												else
												{
													echo 
													'<td>'.$data[3].'</td>';
												}
												//namasekolah
												if($data[4] == NULL)
												{
													echo 
													'<td>Null</td>';
												}
												else
												{
													echo 
													'<td>'.$data[4].'</td>';
												}
												//alamatsekolah
												if($data[5] == NULL)
												{
													echo 
													'<td>Null</td>';
												}
												else
												{
													echo 
													'<td>'.$data[5].'</td>';
												}
											echo '</tr>';
											}
											?>
										
									</table>
								<?php 
								echo form_close();
								endif;
								?>
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