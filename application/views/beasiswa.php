<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="row-fluid">
    <div class="span12 subnav">
        <div class="span4 alex menu"><h2>Programs</h2></div>
        <div class="span4 menu offset4 pull-right">
            <div class="btn-group">
                <button class="btn">Periode Pendaftaran Beasiswa</button>
                <button class="btn dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Tahun Ajaran 2014/2015</a></li>
                    <li><a href="#">Tahun Ajaran 2013/2014</a></li>
                    <li><a href="#">Tahun Ajaran 2012/2013</a></li>
                </ul>
            </div>
        </div>                    
    </div>
</div>

<div class="row-fluid">          
    <div class="span12">
	<br>
		<div class="thumbnail">
		  <img src="<?php echo base_url().'images/beasiswa-banner.jpg' ?>" alt="">
		</div>
	</br>
        </br>
        <div class="tabbable"> <!-- Only required for left/right tabs -->                      
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tab1" data-toggle="tab">Persyaratan</a>
                </li>
                <li>
                    <a href="#tab2" data-toggle="tab">Poster</a>
                </li>
                <li>
                    <a href="#tab3" data-toggle="tab">Download</a>
                </li>
                <li>
                    <a href="#tab4" data-toggle="tab">Penerima Beasiswa</a>
                </li>
            </ul>                      

            <div class="tab-content">
                <div class="tab-pane active" id="tab1">
				<?php foreach($hasilsyarat as $row) : ?>
                    <h2><?php echo $row->judul; ?></h2>
                    <?php echo $row->syarat; ?>
				<?php endforeach; ?>
                </div>

                <div class="tab-pane" id="tab2">
                    <div class="span2"></div>
                    <div class='span8'>
					<?php
					foreach($hasilposter as $pos) :
					?>
                        <div class="thumbnail">
                            <img src="<?php echo base_url().'assets/upload/img/poster/'.$pos->url;?>" alt="">
                        </div>
					<?php endforeach;?>
                    </div>
                    <div class="span2"></div>
                </div>

                <div class="tab-pane" id="tab3">
                    <div class="span4"></div>
                    <div class="span4">                        
                        <div class="caption">                    
                            <p>Download Formulir Disini</p>
                            <a href="<?php echo base_url();?>assets/upload/file/FORMULIR-beasiswa-k-link-care-final.doc" class="btn btn-success"><i class="icon-download-alt"></i> Download</a>
                        </div>
                    </div>
                    <div class="span4"></div>
                </div>

                <div class="tab-pane" id="tab4">                    
                    <style type="text/css">
                        table.tableizer-table {
                            border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;
                            font-size: 12px;
                        } 
                        .tableizer-table td {
                            padding: 4px;
                            margin: 3px;
                            border: 1px solid #ccc;
                        }
                        .tableizer-table th {
                            background-color: #9E330E; 
                            color: #FFF;
                            font-weight: bold;
                        }
                    </style>
					<center>
						<table class="tableizer-table">
							<tr class="tableizer-firstrow">
								<th>No</th>
								<th>Nama</th>
								<th>Tempat/Tgl lahir</th>
								<th>Jenis kelamin</th>
								<th>Kelas</th>
								<th>Nama Sekolah</th>
								<th>Alamat Sekolah</th>
							</tr>
							
							<?php
							$no=0;
							foreach($penerima as $data):
								$no++;
								echo
								'<tr>'.
									'<td>'.$no.'</td>'.
									'<td>'.$data->nama.'</td>'.
									'<td>'.$data->ttl.'</td>'.
									'<td>'.$data->jk.'</td>'.
									'<td>'.$data->kelas.'</td>'.
									'<td>'.$data->namasekolah.'</td>'.
									'<td>'.$data->alamatsekolah.'</td>'.
								'</tr>';
							endforeach;
							?>
						</table>
					</center>
                </div>

            </div>
        </div>
    </div> <!-- span12 -->
</div>

<hr>
