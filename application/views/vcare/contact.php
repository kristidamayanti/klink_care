<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/style.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
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
        <div class="logo"><img alt="" src="./images/logo.png"> </div>
        <h3 class="muted"></h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="news.html">News</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="download.html">Download</a></li>
                <li><a href="about.html">Donate</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>
          
      <!-- Example row of columns -->
      <div class="row-fluid">
        <div class="span12 subnav">
          <div class="span4 alex menu"><h2>Contact</h2></div>
          <div class="span4 menu offset4 pull-right"><p>home > contact</p></div>          
        </div>
      </div>

      <div class="row-fluid">
       <div class="span4">
            <div class="widget">
              <h3 class="alex">Information</h3>
              <p>K-LINK CARE FOUNDATION adalah Yayasan yang bergerak dibidang sosial,
              bertujuan untuk membantu masyarakat yang kurang mampu.</p>
              <p>Anda dapat melakukan donasi ke Rek BCA NO 450.307.8816 A/N YAYASAN K-LINK PEDULI </p>
            </div>
            <div class="widget">
              <h4 class="alex">General Inquiries</h4>

              <ul>
                <li> <i class="icon-map-marker"></i> K-LINK Tower Lt. 11. </li>
                <li> Jl Gatot Subroto Kav.59A Jakarta Selatan 12950</li>
              </ul>

              <ul>
                <li><i class="icon-headphones"></i> <p>+62 21 29027000</p></li>
                <li><i class="icon-envelope "></i> <p> info@k-linkcare.com</p></li>
                <li><i class="icon-globe"></i> <p> www.k-linkcare.com</p></li>
              </ul>

            </div>

            <div class="widget">
              <h4 class="alex">Business Hours</h4>
              <ul>
                <li><i class="icon-time"></i> Monday - Friday <span class="hours">8 am to 4 pm</span></li>
                <li><i class="icon-time"></i> Saturday <span class="hours">9 am to 2 pm</span></li>
                <li><i class="icon-ban-circle"></i> Sunday <span class="hours">Closed</span></li>
              </ul>
            </div>
          </div>
        <div class="span7">
          <h3 class="alex">Our Location</h3>

      <br />

      <!-- Google Maps -->
      <section class="google-map-container">
        <div id="googlemaps" class="google-map google-map-full" style="padding-bottom:40%"></div>
        <script src="bootstrap/js/jquery-1.10.2.min.js"></script>
        <script src="bootstrap/js/jquery.gmap.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>

        <script type="text/javascript">
        jQuery('#googlemaps').gMap({
          maptype: 'ROADMAP',
          scrollwheel: false,
          zoom: 16,
          markers: [
            {
              address: 'Jakarta', // Your Adress Here
              html: '',
              popup: false,
            }
          ],
        });
        </script>
      </section>
      <!-- Google Maps / End -->
        </div>
      </div>

      <hr>

      <div class="footer">
        <p>&copy; K-Link Care Foundation 2013 - 2013</p>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="bootstrap/js/bootstrap.js"></script>    
    <script src="bootstrap/js/jquery.backstretch.min.js"></script>
     <script type="text/javascript">
      $.backstretch("http://localhost/klinkcare/images/bg.jpg");
     </script>
  </body>
</html>

