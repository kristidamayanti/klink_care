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
          <section class="wrapper site-min-height">
				<h3><i class="fa fa-angle-right"></i> Galeri Video</h3>
				<div class="row mt">
					<form action="folder_gb.php" class="style-form" method="post">
						<div class="col-md-10 col-md-offset-1">
							<div class="form-panel">
								<p align="right"><a data-toggle="modal" href="#tambahkategori" class="btn btn-default">
								<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>   Tambah Kategori</a></p>
								<div class="form-group">
									<label><h4>Data Kategori</h4></label>
								</div>
								<div class="form-group">
									<table class="table table-striped table-advance table-hover">
										<thead>
											<tr>
												<th><div align="center">No</div></th>
												<th><i class="fa fa-folder-o"></i> Nama Kategori</th>
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
										<td><a href="<?php echo site_url("Adm_video/lookDet/").'/'.$row->videocat_id;?>">
												<?php echo $row->namecat;?>
											</a>
										</td>
										<td>
											<a href="<?php echo site_url("Adm_video/delCat/").'/'.$row->videocat_id;?>">
												<img src="<?php echo base_url(); ?>gambar/icon/del.png" onClick="return tanya()" width="15" height="15">
											</a>
											&nbsp;&nbsp;
											<a href="<?php echo site_url("Adm_video/editCat/").'/'.$row->videocat_id;?>">
												<img src="<?php echo base_url(); ?>gambar/icon/edit.png" alt="Edit File?" width="15" height="15">
											</a>
										</td>
										</tbody>
										<?php endforeach; ?>
									</table>
								</div>
							</div>
						</div>
					</form>
					<!-- Modal Tambah Folder-->
					<?php echo form_open('Adm_video/addKategori');?>
						<div class="modal fade" id="tambahkategori" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
										<h4 class="modal-title" id="myModalLabel">Tambah Kategori</h4>
									</div>
									<div class="modal-body">
										<div class="form-group">
											<label>Nama Kategori</label>
											<input type="text" name="album" class="form-control" placeholder="Masukkan Nama Kategori"><br>
											<p align="right">
											<button type="submit" class="btn btn-warning" name="simpan">
												<span class="glyphicon glyphicon-save" aria-hidden="true"></span>&nbsp;Simpan
											</button></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php echo form_close();?>
					<!-- End Modal -->
			</section>
      </section><!-- /MAIN CONTENT -->

	 <!-- js -->
	 <script language="javascript">
		function tanya() 
		{if (confirm ("Apakah Anda yakin akan menghapus album ini ? Semua foto dalam album ini akan di hapus.")) 
			{return true;
				} else 
				{return false;
			}
		}
	</script>
	 
      <!--main content end-->
      <?php
   include 'adm_footer.php';
   include 'js_req.php';
   ?>
  </body>
</html>