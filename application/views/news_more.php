<!-- Example row of columns -->
<div class="row-fluid">
    <div class="span12 subnav">
        <div class="alex menu"><h2>News Detail's</h2></div>                  
    </div>
</div>

<?php
$i = 0;
if (isset($newsData)) {
    foreach ($newsData as $data) {
        $i++;
        $isiNews = $data->isi;
        $urlNews = '#';

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
				                                <img src="' . base_url() . 'assets/upload/img/news/' . $data->image . '" alt="">
				                            </a>
				                        </div>	  
										<div class="span7">
				                            <p align="justify">' . $isiNews . '</p>
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
				            </div> <!--row--> ';
    }
}
?>
<hr>