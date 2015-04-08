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
						<p align="right">
							<button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-lg">
								<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Tambah Berita
							</button>
						</p>
						<p>
							<?php
								echo 'Hari ini :  '.$tglsekarang.', '.date('H:i:s');
							?>
						</p>
						<table class="table table-hover">
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th>Aksi</th>
							</tr>
							<?php 
							$no=0;
							foreach ($hasil as $row) : 
							$no++;
							?>
							<tr>
								<td><?php echo $no;?></td>
								<td><?php echo $row->title;?></td>
								<td>
									<a href="<?php echo site_url("Adm_news/delNews/").'/'.$row->id;?>">
										<img src="<?php echo base_url(); ?>gambar/icon/del.png" alt="Hapus File?" width="15" height="15">
									</a>
									&nbsp;&nbsp;
									<a href="<?php echo site_url("Adm_news/editNews/").'/'.$row->id;?>">
										<img src="<?php echo base_url(); ?>gambar/icon/edit.png" alt="Edit File?" width="15" height="15">
									</a>
								</td>
							</tr>
						<?php endforeach;?>
						</table>
					</div>
					<!-- Button trigger modal -->

				</div><!-- col-lg-12-->      	
			</div><!-- /row -->   	
		</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
	  
		<!-- Modal -->
		<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Tambah Berita</h4>
				</div>
				<div class="modal-body">
					<?php echo form_open_multipart('Adm_news/save'); ?>
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Judul</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="title">
							</div>
						</div> <br><br><br>
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Upload Foto</label>
							<div class="col-sm-10">
								<input type="file" class="form-control" name="pic">
							</div>
						</div> <br><br>
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Isi Berita</label><br><br>
							<div class="col-lg-12">
								<textarea name="isi" cols="50"></textarea>
							</div>
						</div> 
				</div><br><br><br><br><br><br><br><br><br><br><br>
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
      <!--main content end-->
      <?php
   include 'adm_footer.php';
   include 'js_req.php';
   ?>
  </body>
</html>