<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="row-fluid">
    <div class="span12 subnav">
        <div class="span4 alex menu"><h2>News</h2></div>                             
    </div>
</div>

<?php
$i = 0;
if (isset($listNews)) {
    foreach ($listNews as $data) {
        $i++;
        $isiNews = $data->isi;
        $isiNews = character_limiter($isiNews, 300);
        $urlNews = base_url('news/detail/' . $data->id."/".url_title($data->title));

        echo '
				            <div class="row">
				                <div class="span12">
				                    <div class="row">
				                        <div class="span8">
				                            <h3><strong><a href="' . $urlNews . '">' . $data->title . '</a></strong></h3>
				                        </div>
				                    </div>
				                    <div class="row">
				                        <div class="span3">
				                            <a href="' . $urlNews . '" class="thumbnail">
				                                <img height="180" width="260" src="' . base_url() . 'assets/upload/img/news/' . $data->image . '" alt="">
				                            </a>
				                        </div>	  
										<div class="span7">
				                            <p align="justify">' . $isiNews . '</p>
				                            <p><a class="btn btn-mini btn-inverse" href="' . $urlNews . '">Read more</a></p>
				                        </div>
				                    </div>
				                    <div class="row">
				                        <div class="span8">
				                            <p></p>
				                            <p>
				                                <i class="icon-user"></i> by <a href="#">Admin</a>
				                                | <i class="icon-calendar"></i>' . $data->dateNews . '
				                            </p>
				                        </div>
				                    </div>
				                </div> <!--span12-->                
				            </div> <!--row--> 
							<hr>';
    }
}
?>
<!-- END ambil NEWS dari database -->	

<div class="pagination pagination-small pagination-centered">
    <?php echo $pagination; ?>
</div>
