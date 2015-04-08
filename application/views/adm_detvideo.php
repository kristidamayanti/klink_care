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
				<h3><i class="fa fa-angle-right"></i> Galeri Video</h3>
				<div class="row mt">
					<form action="folder_gb.php" class="style-form" method="post">
						<div class="col-md-10 col-md-offset-1">
							<div class="form-panel">
								<div class="form-group">
									<label><h4>Dalam Kategori : </h4><h3><?php echo $hasil[0]->namecat;?></h3></label>
								</div>
								<div class="form-group">
									<table class="table table-striped table-advance table-hover">
										<thead>
											<tr>
												<th><div align="center">No</div></th>
												<th><i class="fa fa-folder-o"></i> Judul</th>
												<th><i class="fa fa-pencil"></i> Deskripsi Singkat</th>
												<th><i class="fa fa-globe"></i> Link</th>
												<th><i class="fa fa-cog"></i> Aktifitas</th>
											</tr>
										</thead>
										<tbody>	
										<?php
										$no=0;
										foreach ($hasil as $row) : 
										$no++;
										?>
										<td><div align="center"><?php echo $no;?></div></td>
										<td><?php echo $row->title;?></td>
										<td><?php echo $row->desc;?></td>
										<td><?php echo $row->link;?></td>
										<td>
											<a href="<?php echo site_url("Adm_video/delDet/").'/'.$row->vid_id;?>">
												<img src="<?php echo base_url(); ?>gambar/icon/del.png" alt="Hapus File?" width="15" height="15">
											</a>
											
										</td>
										</tbody>
										<?php endforeach; ?>
									</table>
								</div>
							</div>
						</div>
					</form>
				
			</section>
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <?php
   include 'adm_footer.php';
   include 'js_req.php';
   ?>
  </body>
</html>