
  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="#" class="logo"><b>K-Link Care Admin</b></a>
            <!--logo end-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a href="<?php echo site_url("adm_login");?>" class="logout">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
		<aside>
			<div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
				<ul class="sidebar-menu" id="nav-accordion">
					<p class="centered"><a href="profile.html"><img src="<?php echo base_url();?>assets/img/klink.jpg" class="img-circle" width="60"></a></p>
					<h5 class="centered"> Admin K-Link Care
					<?php
					/*foreach($tampil as $result)
					{
						$result->username;
					}*/
					?>
				  </h5>
					<li class="sub-menu">
					  <a href="<?php echo site_url('adm_side_bar/beranda');?>">
						  <i class="fa fa-dashboard"></i>
						  <span>Beranda</span></a>
					  </a>
					</li>
					<li class="sub-menu">
						<a href="javascript:;" >
						  <i class="fa fa-users"></i>
						  <span>About Us</span>
						</a>
						<ul class="sub">
							<li><a  href="<?php echo site_url('adm_side_bar/foundation');?>">K-Link Care Foundation</a></li>
							<li><a href="<?php echo site_url('adm_side_bar/msg_founder');?>">Message From The Founder</a></li>
							<li><a  href="<?php echo site_url('adm_side_bar/history');?>">History</a></li>
							<li><a  href="<?php echo site_url('adm_side_bar/visimisi');?>">Visi & Misi</a></li>
							<li><a  href="<?php echo site_url('adm_side_bar/pengurus');?>">Pengurus</a></li>
						</ul>
					</li>

					<li class="sub-menu">
					  <a href="javascript:;" >
						  <i class="fa fa-desktop"></i>
						  <span>Press Room</span>
					  </a>
					  <ul class="sub">
						  <li><a  href="<?php echo site_url('adm_side_bar/news');?>">News & Events</a></li>
					  </ul>
					</li>

					<li class="sub-menu">
					  <a href="javascript:;" >
						  <i class="fa fa-picture-o"></i>
						  <span>Galery</span>
					  </a>
					  <ul class="sub">
						  <li><a  href="<?php echo site_url('adm_side_bar/galeri');?>">Add Category</a></li>
						  <li><a  href="<?php echo site_url('adm_side_bar/galeri_det');?>">Add Photos</a></li>
					  </ul>
					</li>
					<li class="sub-menu">
					  <a href="javascript:;" >
						  <i class="fa fa-file-video-o"></i>
						  <span>Video</span>
					  </a>
					  <ul class="sub">
						 <li><a  href="<?php echo site_url('adm_side_bar/video');?>">Add Category</a></li>
						  <li><a  href="<?php echo site_url('adm_side_bar/video_det');?>">Add Video</a></li>
					  </ul>
					</li>
					<li class="sub-menu">
						<a href="javascript:;" >
							<i class="fa fa-graduation-cap"></i>
							<span>Program</span>
						</a>
						<ul class="sub">
							<li><a  href="<?php echo site_url('adm_side_bar/beasiswa');?>">Beasiswa</a></li>
							<li><a  href="<?php echo site_url('adm_side_bar/kcenter');?>">K-Care Center</a></li>
						</ul>
					</li>
				</ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->