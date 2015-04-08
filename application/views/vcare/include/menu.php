<?php



$menu_html='';
function render_menu($parent_id){
	global $menu_html;

	$sql="SELECT * FROM tbl_menu_web WHERE menu_parent ='$parent_id'";
	$result=mysql_query($sql);

	// echo $sql." <br/>";
	
	if(mysql_num_rows($result)==0) return;

	if($parent_id==0)
		$menu_html.="<ul id=\"nav\">";
	else
		$menu_html.="<ul >";

		while($row=mysql_fetch_array($result)){
			$url = $row['menu_url'] ;
			$strlen = strlen($url);
			if($strlen>=1){
				$url1 = "href=\"".base_url($row['menu_url'])."\"";	
				$sub  = "";			
			}else{
				$url1 = "";
				$sub  = ">>";
			}
			//#646b61
			$menu_html.="<li><a ".$url1."> <font color=\"black\"> {$row['menu_desc']}  $sub </font></a>";
		render_menu($row['menu_id']);
		$menu_html.="</li>";
	}
	$menu_html.="</ul>";
	return $menu_html;
}
$menu_html.="<nav>".$menu_html."</nav>";
echo render_menu(0);

/*

	echo '<div class="container">
                <ul class="nav">';
					$this->load->model('m_menu');

					$data['listMenu'] = $this->m_menu->getAllMenuHead();
					
                    foreach ($data['listMenu'] as $item){
						echo '<li><a href="'.base_url($item->menu_url).'">'.$item->menu_desc.'</a>';
*/
						/*
						if ($data['listMenuChild'] = $this->m_menu->getChildMenu($item->menu_id)) { 
							foreach($data['listMenuChild'] as $itemChild){
								echo '<ul><li><a href="'.base_url($item->menu_url).'">'.$item->menu_desc.'</a></li></ul>';	
							}     
					      	
					    }// end of if loop
					    */
/*					    echo "</li>\r\n";
					};
                '</ul>
            </div>';

*/








/*
	echo '                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="container">
                            <ul class="nav">
                                <li class="dropdown">
				                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Home</a>
				                  <ul class="dropdown-menu">
				                    <li><a href="#">Action</a></li>
				                    <li><a href="#">Another action</a></li>
				                    <li><a href="#">Something else here</a></li>                                
				                  </ul>
				                </li>
                                <li><a href="'.base_url('c_news').'">News</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="download.html">Download</a></li>
                                <li><a href="about.html">Donate</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.navbar -->';
			*/	
				
		
		/*		
			echo '<div class="navbar">
                    <div class="navbar-inner">
                        <div class="container">
                            <ul class="nav">';
							
			if(isset($listMenu)){
				foreach($listMenu as $data){
					$menu_desc = $data->menu_desc;
					$menu_url = base_url($data->menu_url);
					
					echo '
				             
                                <li><a href="'.$menu_url.'">'.$menu_desc.'</a></li>
                           ';
			}
			}
			
			echo ' </ul>
                        </div>
                    </div>
                </div><!-- /.navbar -->';
				*/
				
?>