<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>K-Link Care Foundation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
    <link href="<?php echo "".base_url()."bootstrap/css/bootstrap.css"; ?>" rel="stylesheet">
    <link href="<?php echo "".base_url()."bootstrap/css/style.css"; ?>" rel="stylesheet">
    <link href="<?php echo "".base_url()."bootstrap/css/bootstrap-responsive.css"; ?>" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <div class="logo"><img alt="" src= <?php echo "".base_url()."images/logo.png" ?> > </div>
        <h3 class="muted"></h3>        
        <div class="navbar">
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
               
                <li><a href="news.html">News</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="download.html">Download</a></li>
                <li><a href="about.html">Donate</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </div>
          </div>
           <hr>
        </div><!-- /.navbar -->
      </div>
		
          <!-- Example row of columns -->
          <div class="row-fluid"> <!-- isi body galeri -->
          	<div class="divgal"	>
		 		<table class="tblgal" border="1">
                    <tr>
                    <?php	
                        $kolom = 5;
                        $i = 0;
                        
                        foreach($listGaleri as $datax){
                        if ($i >= $kolom) {
                            echo "<tr></tr>";
                            
                            $i = 0;
                        }
                        $i++;
                    ?>
                    <td><?php echo $datax->gallery_title; ?><br />
                      <a href="<?php echo base_url().$datax->gallery_title; ?>"><img src="<?php echo base_url().$datax->gallery_filename; ?>" align=left width=150px hspace='10' vspace='10'/> </a>
                    </td>
                    <?php
                    }
                    ?>
                    </tr>
                </table>
             </div>
          </div> <!-- isi body galeri/bottom -->
    <hr>        
    </div> <!-- /container -->
    
    <div class="footer">
        <p>&copy; K-Link Care Foundation 2013 - 2013</p>
    </div>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo "".base_url()."bootstrap/js/jquery-1.10.2.min.js"; ?>"></script>
    <script src="<?php echo "".base_url()."bootstrap/js/bootstrap.js"; ?>"></script>
    <script src="<?php echo "".base_url()."bootstrap/js/jquery.backstretch.min.js"; ?>"></script>
     <script type="text/javascript">
      $.backstretch("<?php echo base_url();?>/images/bg.jpg",
                    {centeredX:true, centeredY:true, fade:1500});
     </script>
  </body>
</html>

