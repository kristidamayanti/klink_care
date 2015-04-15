<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<body>
    <div class="container">
        <div class="masthead">
            <div class="logo"><a href="<?php echo site_url(); ?>"><img alt="" src="<?php echo base_url(); ?>images/logo.png"></a></div>
            <h3 class="muted"></h3>        
            <div class="navbar">
                <div class="navbar-inner">            
                    <ul class="nav">
                        <?php
                        if (count($mHeader) > 0):
                            foreach ($mHeader->result() as $hMenu):

                                if ($hMenu->menu_url == null):
                                    echo "<li>" . anchor($hMenu->menu_url, $hMenu->menu_title) . "\n";
                                else:
                                    echo "<li class='dropdown'>" . "\n";
                                    echo "<a class='dropdown-toggle' data-toggle='dropdown' href='#'>" . $hMenu->menu_title . " </a>" . "\n";
                                endif;

                                if (count($mChild) > 0):
                                    echo "<ul class='dropdown-menu'>" . "\n";
                                    foreach ($mChild->result() as $cMenu):
                                        if ($hMenu->menu_category == $cMenu->menu_category):
                                            echo "<li>" . anchor($cMenu->menu_url, $cMenu->menu_title) . "</li>" . "\n";
                                        endif;
                                    endforeach;
                                    echo "</ul>" . "\n";
                                endif;

                                echo "</li>" . "\n";
                            endforeach;
                        endif;
                        ?>                                                    
                    </ul>
                </div>          
            </div><!-- /.navbar -->
        </div>

        <div id="myCarousel" class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="carousel-inner">
                    <?php
                    if (isset($listImgHdr)) {
                        $no = 0;
                        foreach ($listImgHdr as $datax) {
                            if ($no == 0) {
                                echo "<div class=\" active item\"><img alt=\"\" src=\"" . base_url() . "$datax->ImgName \"></div>";
                            }
                            echo "<div class=\"item\"><img alt=\"\" src=\"" . base_url() . "$datax->ImgName\"></div>";
                            $no++;
                        }
                    }
                    ?>
                </div>
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
                <p><img class="img-circle img-icon" src="<?php echo base_url(); ?>images/icon-anaksd.jpg"></img>
				Salah satu program K-Link Care adalah membantu pengembangan pendidikan untuk anak-anak usia sekolah 
				dengan cara pemberian beasiswa pendidikan untuk siswa-siswa berprestasi dari keluarga kurang mampu. </p>
            </div>
            <div class="span4">
                <h2 class='alex white'>Children With Special Needs</h2>
                <p><img class="img-circle img-icon" src="<?php echo base_url(); ?>images/icon-charity.jpg"></img>
				Menyadari besarnya minat orang tua untuk mendaftarkan anak-anak berkebutuhan khusus mereka di K-Care Center, 
				namun karena tidak didukung oleh tempat yang lebih luas, mendorong Yayasan K-Link Care untuk membangun fasilitas baru 
				untuk sekolah dan terapi anak berkebutuhan khusus. </p>

            </div>
            <div class="span4">
                <h2 class='alex white'>Activities</h2>
                <?php
                $i = 0;
                if (isset($listNews)) {
                    foreach ($listNews as $data) {
                        $i++;
                        $imgNews = $data->image;
						$isi = $data->isi;
                        $isiNews = character_limiter($isi, 200);
                        $urlNews = base_url('news/detail/' . $data->id."/".url_title($data->title));

echo '<p><img height="140" width="140" class="img-circle img-icon" src="' . base_url() . 'assets/upload/img/news/'.$imgNews. '"></img>' . $isiNews . '</p>
          				  <p><a class="btn btn-mini btn-inverse" href="' . $urlNews . '">Read more</a></p>';
                    }
                }
                ?>
            </div>
        </div>

        <hr>      
    </div> <!-- /container -->
    <div class="footer">
        <p align="center">&copy; K-Link Care Foundation 2013 - 2015 | <a href="<?php echo site_url("adm_login");?>">Admin</a></p>
        <p align="center">K-Link Tower 11th Floor, Jl Gatot Subroto Kav 59A, Jakarta Selatan 12910</p>
    </div>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>bootstrap/js/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/jquery.backstretch.min.js"></script>
    <script type="text/javascript">
        $.backstretch("<?php echo base_url(); ?>images/bg.jpg",
                {centeredX: true, centeredY: true, fade: 1500});
    </script>
</body>
</html>


