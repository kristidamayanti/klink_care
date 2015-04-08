<div class="container">
        <!-- Example row of columns -->
        <div class="row-fluid">
          <div class="span12 subnav">
            <div class="span4 alex menu"><h2>Youtube</h2></div>       
          </div>
        </div>
        
        <div class="row-fluid">     
		
		    <div class="span2">
		        <div class="widget">
		            <h4 class="alex">Category</h4>
		            <ul>
					<?php
						if (isset($listCatYoutube)) {
							$showCatYoutube = '';
						    foreach ($listCatYoutube as $dataCat) {
								$youtubecat_id 	= $dataCat->youtubecat_id;
								$catDesc 		= $dataCat->catDesc;

		        				$urlCatGallery = base_url('youtube/category/'.$youtubecat_id);
								
								echo '<li><h4 class="alex"><a href="'.$urlCatGallery.'" class="hilal">'.$catDesc.'</a></h3></li>';
								}
							}
					?>
		            </ul>
		        </div>

		    </div>
				
		 <div >
        <br>
		

		<div id="amazingslider-wrapper-1" style="display:block;position:relative;margin:0px auto 108px;width: 800px; height: 456px;">
	        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
				
					
					<?php
						$i = 0;
						$j = 0;
						if (isset($listYoutube)) {
							$showGallery = '';
						    foreach ($listYoutube as $data) {
						        $i++;
						        $youtube_id = $data->youtube_id;
								$youtubecat_id = $data->youtubecat_id;
								$youtube_title = $data->youtube_title;
								$youtube_description = $data->youtube_description;
								$youtube_filename = $data->youtube_filename;
								$youtube_image = $data->youtube_image;
								$youtube_createdt = $data->youtube_createdt;
								
								$youtubePath = base_url('youtube/'.$youtube_id);
								$imgPath = base_url('youtube/'.$youtube_image);
								//http://localhost/k-linkcarefoundation/youtube/thumb/k-linklogo-tn.gif
								echo '<ul class="amazingslider-slides" style="display:none;">
										<li>
											<img src="'.base_url($youtube_image).'" alt="'.$youtube_title.'" data-description="'.$youtube_description.'" />
					                		<video preload="none" src="'.base_url($youtube_filename).'" ></youtube>
					                 	</li>
									 </ul>
									 
									  <ul class="amazingslider-thumbnails" style="display:none;">
						                <li><img src="'.base_url($youtube_image).'" alt="'.$youtube_title.'" /></li>
						             </ul>';
								
								
						    }
						}
					?>
					
	        </div>
    	</div>
		
		</div>
        </div> 
        <hr> 