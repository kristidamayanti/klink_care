  <body>

    <div class="container">
		<div class="masthead">
            <div class="logo"><img alt="" src="./images/logo.png"> </div>
            <h3 class="muted"></h3>
			<div class="navbar">
	            <div class="navbar-inner">
					<?php include 'include/menu.php'; ?>
                </div>
			</div><!-- /.navbar -->

        </div>
      <!-- Jumbotron -->
      <!-- <div class="jumbotron">
        <h1 class='alex'>Marketing stuff!</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <a class="btn btn-large btn-success alex" href="#">Get started today</a>
      </div> -->

      <div id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">
          <?php 
		  
		  	if(isset($listImgHdr)){
				$no=0;
				foreach($listImgHdr as $datax)
				{   
				    if ($no==0){echo "<div class=\" active item\"><img alt=\"\" src=\"".base_url()."$datax->ImgName \"></div>";}
					echo "<div class=\"item\"><img alt=\"\" src=\"".base_url()."$datax->ImgName\"></div>";
					$no++;
				}
			}
		  ?>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
      </div>


      <hr>

      <!-- Example row of columns -->
      <div class="row-fluid">
        <div class="span4">          
          <h2 class='alex white'>Beasiswa</h2>
          <p><img class="img-circle img-icon" src="images/icon-anaksd.jpg"></img>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2 class='alex white'>Charity</h2>
          <p><img class="img-circle img-icon" src="images/icon-charity.jpg"></img>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2 class='alex white'>News</h2>
          
		  <!-- ambil NEWS dari database -->
		<?php 
			$i = 0;
			if(isset($listNews)){
				foreach($listNews as $data){
					$i++;
					$isiNews = $data->news_description;
					$isiNews = character_limiter($isiNews, 200);
					$urlNews = base_url('c_news/newsMore/'.$data->news_id);
					
					echo '<p><img height="140" width="140" class="img-circle img-icon" src="'.base_url().'./images/'.$data->news_img_url.'"></img>'.$isiNews.'</p>
          				  <p><a class="btn" href="'.$urlNews.'">Read More &raquo;</a></p>';
			}
			}
		?>
		<!-- END ambil NEWS dari database -->	
        </div>
      </div>

      <hr>      
    </div> <!-- /container -->
  </body>