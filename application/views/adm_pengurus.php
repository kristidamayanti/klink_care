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
						<h4 class="mb"><i class="fa fa-angle-right"></i>Pengurus</h4>
						<p align="right">
							<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalTambah">
								<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Tambah Pengurus
							</button>
						</p>
						<table class="table table-hover">
							<tr>
								<th>No</th>
								<th>Keterangan</th>
								<th>File Foto</th>
								<th>Aksi</th>
							</tr>
							<tr>
								<td>...</td>
								<td>...</td>
								<td>...</td>
								<td><img src="<?php echo base_url(); ?>gambar/icon/del.png" alt="Hapus File?" width="15" height="15"> </td>
							</tr>
						</table>
					</div>
					<!-- Button trigger modal -->

				</div><!-- col-lg-12-->      	
			</div><!-- /row -->   	
		</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
	  
		<!-- Modal -->
		<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
			  </div>
			  <div class="modal-body">
				<form class="form-horizontal style-form" method="get">
					<div class="form-group">
						<label class="col-sm-2 col-sm-2 control-label">Keterangan</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="ket">
						</div>
					</div> 
					<div class="form-group">
						<label class="col-sm-2 col-sm-2 control-label">Upload Foto</label>
						<div class="col-sm-10">
							<input type="file" class="form-control" name="pengurus">
						</div>
					</div> 
					<p align="right">
					
					</p>
				</form>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp;Close
				</button>
				<button type="submit" class="btn btn-warning">
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