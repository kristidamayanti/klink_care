<div class="container">
        <!-- Example row of columns -->
        <div class="row-fluid">
          <div class="span12 subnav">
            <div class="span4 alex menu"><h2>Videos</h2></div>       
          </div>
        </div>
        
        <div class="row-fluid">     
		
		    <div class="span2">
		        <div class="widget">
		            <h4 class="alex">Category</h4>
		            <ul>
					<?php
						if (isset($listCatVideo)) {
							$showCatVideo = '';
						    foreach ($listCatVideo as $dataCat) {
								$videocat_id 	= $dataCat->videocat_id;
								$catDesc 		= $dataCat->namecat;

		        				$urlCatGallery = base_url('video/category/'.$videocat_id);
								
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
						if (isset($listVideo)) 
						{
							$showGallery = '';
						    foreach ($listVideo as $data)
							{
						        $i++;
						        $video_id = $data->vid_id;
								$videocat_id = $data->videocat_id;
								$video_title = $data->title;
								$video_description = $data->desc;
								$video_filename = $data->link;
								$img = substr($data->vid_img, 24,100); // ngambil nama file
								$video_image = base_url('assets/upload/img/video/'.$img);
								$video_createdt = $data->datevid;
								$videoPath = base_url('assets/upload/img/video/'.$video_id);
								$imgPath = base_url('assets/upload/img/video/'.$video_image);
								
								echo '<ul class="amazingslider-slides" style="display:none;">
										<li>
											<img src="'.$video_image.'" alt="'.$video_title.'" data-description="'.$video_description.'" />
					                		<video preload="none" src="'.$video_filename.'" ></video>
					                 	</li>
									 </ul>
									 
									  <ul class="amazingslider-thumbnails" style="display:none;">
						                <li><img src="'.$video_image.'" alt="'.$video_title.'" /></li>
						             </ul>';
								
								
						    }
						}
					?>
					
	        </div>
    	</div>
		
		
		</div>
        </div> 
        <hr> 