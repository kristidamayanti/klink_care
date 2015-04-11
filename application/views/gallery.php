<div class="container">
        <!-- Example row of columns -->
        <div class="row-fluid">
          <div class="span12 subnav">
            <div class="span4 alex menu"><h2>Gallery - Photo</h2></div>       
          </div>
        </div>
        
        <div class="row-fluid">     
		
		    <div class="span2">
		        <div class="widget">
		            <h4 class="alex">Category</h4>
		            <ul>
					<?php
						if (isset($listCatGallery)) 
						{
							$showCatGallery = '';
						    foreach ($listCatGallery as $dataCat) {
								$gallerycat_id 	= $dataCat->gallerycat_id;
								$catDesc 		= $dataCat->description;

		        				$urlCatGallery = base_url('assets/upload/img/galeri/'.$gallerycat_id);
								
								echo '<li><h4 class="alex"><a href="'.$urlCatGallery.'" class="hilal">'.$catDesc.'</a></h3></li>';
								}
							}
					?>
		            </ul>
		        </div>

		    </div>
				
		 <div >
        <br>
		    
			
	    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 700px; height: 456px; background: #191919; overflow: hidden;">

	        <!-- Loading Screen -->
	        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
	            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block; background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
	            </div>
	            <div style="position: absolute; display: block; background: url(http://k-linkcarefoundation.com/bootstrap/img/loading.gif) no-repeat center center; top: 0px; left: 0px;width: 100%;height:100%;">
	            </div>
	        </div>

	        <!-- Slides Container -->
	        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 700px; height: 356px; overflow: hidden;">
							    		
			<?php
			$i = 0;
			$j = 0;
			if (isset($listGallery)) {
				$showGallery = '';
			    foreach ($listGallery as $data) {
			        $i++;
			        $gallery_id = $data->gallery_id;
					$gallerycat_id = $data->gallerycat_id;
					//$gallery_title = $data->title;
					$gallery_description = $data->description;
					//$gallery_filename = $data->gallery_filename;
					$gallery_image = $data->images;
					$gallery_createdt = $data->galdate;		
					
			        $urlGallery = base_url('gallery/'.$gallery_id);
					
					$showGallery = '<div>
						                <img u="image" src="'.base_url().'images/galeri/'.$gallery_image.'" />
						                <img u="thumb" src="'.base_url().'images/galeri/thumb/'.$gallery_image.'" />
										<div u=caption t="*" class="captionOrange"  style="position:absolute; left:0px; top: 322px; width:300px; height:20px;">'.$gallery_title.'</div>
										<div u=caption t="*" class="captionBlack1"  style="position:absolute; left:0px; top: 341px; width:800px; height:15px;">'.$gallery_description.'</div>	
						            </div>';
					echo $showGallery;
					
			    }
			}
			?>
			
			
	        </div>
	        
			
	        <!-- Arrow Left -->
	        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 158px; left: 8px;">
	        </span>
	        <!-- Arrow Right -->
	        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 158px; right: 8px">
	        </span>
	        <!-- Arrow Navigator Skin End -->
	        
	        <!-- Thumbnail Navigator Skin Begin -->
	        <div u="thumbnavigator" class="jssort01" style="position: absolute; width: 700px; height: 100px; left:0px; bottom: 0px;">
	            <div u="slides" style="cursor: move;">
	                <div u="prototype" class="p" style="position: absolute; width: 72px; height: 72px; top: 0; left: 0;">
	                    <div class=w><thumbnailtemplate style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></thumbnailtemplate></div>
	                    <div class=c>
	                    </div>
	                </div>
	            </div>
	            <!-- Thumbnail Item Skin End -->
	        </div>
	    </div>
    <!-- Jssor Slider End -->
			
			
		
		</div>
        </div> 
        <hr>       
        