<?php
	include 'app/general.php';
	include 'app/service.php';
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>Zeences Design</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
<link rel="stylesheet" type="text/css" media="screen" href="css/prettyPhoto.css"  />
<link rel="stylesheet" type="text/css" href="css/museo.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/ptsans.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/charis.css" media="all" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="css/ie7.css" media="all" />
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="css/ie8.css" media="all" />
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="css/ie9.css" media="all" />
<![endif]-->
<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="js/transify.js"></script>
<script type="text/javascript" src="js/jquery.aw-showcase.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="js/carousel.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.superbgimage.min.js"></script>
<script type="text/javascript" src="js/jquery.slickforms.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($){
	$('.forms').dcSlickForms();
});
</script>
<script type="text/javascript">

$(document).ready(function()
{
	$("#showcase").awShowcase(
	{
		content_width:			900,
		content_height:			400,
		auto:					true,
		interval:				3000,
		continuous:				false,
		arrows:					true,
		buttons:				true,
		btn_numbers:			true,
		keybord_keys:			true,
		mousetrace:				false, /* Trace x and y coordinates for the mouse */
		pauseonover:			true,
		stoponclick:			false,
		transition:				'fade', /* hslide/vslide/fade */
		transition_delay:		0,
		transition_speed:		500,
		show_caption:			'onload' /* onload/onhover/show */
	});
});

</script>

</head>
<body>

<div id="superbgimage">
	<div class="scanlines"></div>
</div>
<!-- End Fullscreen backgrounds -->
<!-- Begin Wrapper -->
<div id="wrapper">
  <div id="header">
    <div class="logo opacity"><a href="index.html"><img src="images/logo.png" alt="" /></a></div>
    <div class="social">
      <ul>
        <li><a href="#"><img src="images/icon-rss.png" alt="RSS" /></a></li>
        <li><a href="#"><img src="images/icon-facebook.png" alt="Facebook" /></a></li>
        <li><a href="#"><img src="images/icon-twitter.png" alt="Twitter" /></a></li>
        <li><a href="#"><img src="images/icon-googleplus.png" alt="Google+" /></a></li>
        <li><a href="#"><img src="images/icon-dribble.png" alt="Dribble" /></a></li>
        <li><a href="#"><img src="images/icon-flickr.png" alt="Flickr" /></a></li>
        <li><a href="#"><img src="images/icon-tumblr.png" alt="Tumblr" /></a></li>
      </ul>
    </div>
  </div>
  <div class="clear"></div>
  <!-- Begin Menu -->
  <div id="menu" class="menu opacity">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="portfolio.html">Portfolio</a>
        <ul>
        	<li><a href="portfolio.html">Portfolio 5 Columns</a></li>
      	  <li><a href="portfolio-post.html">Portfolio Post</a></li>
        </ul>
      </li>
      <li><a href="blog.html">Blog</a>
        
      </li>
      <li><a href="fullwidth.html">Pages</a>
       
      </li>
      <li><a href="button-boxes-images.html">Styles</a>
      	
      </li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
    <br style="clear: left" />
  </div>
  <!-- End Menu --> 
  
  <!-- Begin Container -->
  <div id="container" class="opacity"> 
    
    <!-- Begin Showcase -->
    <div id="showcase" class="showcase"> 
      <!-- Each child div in #showcase represents a slide -->
      <div class="showcase-slide"> 
        <!-- Put the slide content in a div with the class .showcase-content. -->
        <div class="showcase-content"> <img src="images/art/s1.jpg" alt="1" /> </div>
      </div>
      
      <!-- Each child div in #showcase represents a slide -->
      <div class="showcase-slide"> 
        <!-- Put the slide content in a div with the class .showcase-content. -->
        <div class="showcase-content"> <img src="images/art/s2.jpg" alt="2" /> </div>
        <div class="showcase-caption">
				Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit.
		</div>
      </div>
      
      <div class="showcase-slide"> 
        <!-- Put the slide content in a div with the class .showcase-content. -->
        <div class="showcase-content"> <iframe src="http://player.vimeo.com/video/24243147?title=0&amp;byline=0&amp;portrait=0" width="900" height="400" frameborder="0"></iframe> </div>
      </div>
      
      <!-- Each child div in #showcase represents a slide -->
      <div class="showcase-slide"> 
        <!-- Put the slide content in a div with the class .showcase-content. -->
        <div class="showcase-content"> <img src="images/art/s3.jpg" alt="3" /> </div>
      </div>
      <!-- Each child div in #showcase represents a slide -->
      <div class="showcase-slide"> 
        <!-- Put the slide content in a div with the class .showcase-content. -->
        <div class="showcase-content"> <img src="images/art/s4.jpg" alt="4" /> </div>
         <div class="showcase-caption">
				Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
		</div>
      </div>
    </div>
    <!-- End Showcase -->
    
    <div class="intro">Aenean fringilla aliquam est, a porttitor arcu euismod et. Maecenas rutrum erat at arcu porta interdum. Cras convallis ligula ac risus imperdiet placerat.</div>
    <div class="hr2"></div>
    <!-- Divider --> 
    
    <!-- Begin Top Columns -->
    <h2>What We Do</h2>
    <div class="two-third">
      <p>Vivamus sodales pharetra libero, a tincidunt nisi condimentum a. Quisque non sodales nislero. Integer a tellus eget arcu fringilla molestie quis vel eros. Praesent fermentum vulputate purusa ornare. Vivamus imperdiet, quam et adipiscing placerat, nibh odio scelerisque risus, vitaere accumsan mi justo et quam. Pellentesque quis felis quis tortor porttitor lobortis nec ac risus.</p>
    </div>
    <div class="one-third last">
      <ul>
        <li>Vivamus at magna non ipsum.</li>
        <li>Etiam pharetra pretium eros.</li>
        <li>Curabitur porttitor ipsum nec magna.</li>
        <li>Maecenas cursus arcu a nulla tristique.</li>
      </ul>
    </div>
    <!-- End Top Columns -->
    
    <div class="clear"></div>
    <br />
    <br />
    <br />
    
    <!-- Begin 4 Columns -->
    
    <?php 
		$q = "SELECT * FROM services LIMIT 4";
		$select_services = mysqli_query($connection, $q);
		confirmQuery($select_services);
			$id = 0;
		while($row = mysqli_fetch_array($select_services)) {
			
			$title 			= $row['name'];
			$description	= $row['description'];
			$image 			= $row['image'];
			
			++$id;
			
			
	?>
	
	<div class="one-fourth <?php if($id==4){ echo "last"; } ?>"> <img src="uploads/<?php echo $image; ?>" alt="" class="center" /><br />
      <h4 class="center"><?php echo $title; ?></h4>
      <p class="center"><?php echo $description; ?></p>
    </div>
			<?php } ?>
    
    <div class="clear"></div>
    <div class="hr1"></div>
    <!-- Divider --> 
    
    <!-- Begin Latest Works -->
    <h2>Latest Works</h2>
    <div class="carousel">
      <div id="carousel-scroll"><a href="#" id="prev">Prev</a><a href="#" id="next">Next</a></div>
      <ul>
        <li> <a href="#"> <span class="overlay details"></span><img src="images/art/c1.jpg" alt="" /> </a> </li>
        <li> <a href="#"> <span class="overlay details"></span><img src="images/art/c2.jpg" alt="" /> </a> </li>
        <li> <a href="#"> <span class="overlay details"></span><img src="images/art/c3.jpg" alt="" /> </a> </li>
        <li> <a href="#"> <span class="overlay details"></span><img src="images/art/c4.jpg" alt="" /> </a> </li>
        <li> <a href="#"> <span class="overlay details"></span><img src="images/art/c5.jpg" alt="" /> </a> </li>
        <li> <a href="#"> <span class="overlay details"></span><img src="images/art/c6.jpg" alt="" /> </a> </li>
      </ul>
    </div>
    <!-- End Latest Works -->
    
    <div id="footer">
      <div class="footer-top"></div>
      <!-- Divider -->
      <div class="one-fourth">
        <h3>Latest Posts</h3>
        <ul class="latest-posts">
          <li><span class="date"><em class="day">22</em><em class="month">Jun</em></span> <a href="#">Vivamus soder pharetra libero atincidunt</a> </li>
          <li><span class="date"><em class="day">14</em><em class="month">May</em></span> <a href="#">Vivamus soder pharetra libero atincidunt</a> </li>
          <li><span class="date"><em class="day">11</em><em class="month">May</em></span> <a href="#">Vivamus soder pharetra libero atincidunt</a> </li>
          <li><span class="date"><em class="day">08</em><em class="month">Apr</em></span> <a href="#">Vivamus soder pharetra libero atincidunt</a> </li>
        </ul>
      </div>
      <div class="one-fourth">
        <h3>Flickr</h3>
        <ul class="flickr">
          <li><a href="#"><img src="images/art/f1.jpg" alt="" /></a></li>
          <li><a href="#"><img src="images/art/f2.jpg" alt="" /></a></li>
          <li><a href="#"><img src="images/art/f3.jpg" alt="" /></a></li>
          <li><a href="#"><img src="images/art/f4.jpg" alt="" /></a></li>
          <li><a href="#"><img src="images/art/f5.jpg" alt="" /></a></li>
          <li><a href="#"><img src="images/art/f6.jpg" alt="" /></a></li>
          <li><a href="#"><img src="images/art/f7.jpg" alt="" /></a></li>
          <li><a href="#"><img src="images/art/f8.jpg" alt="" /></a></li>
          <li><a href="#"><img src="images/art/f9.jpg" alt="" /></a></li>
        </ul>
      </div>
      <div class="one-fourth">
        <h3>Twitter</h3>
        <ul id="tweets">
			<li>Vivamus soder pharetra libero atincidunt Curabitur at ante sed nunc euismod sodales.</li>
			<li>Vivamus soder pharetra libero atincidunt Curabitur at ante sed nunc euismod sodales.</li>
			<li>Vivamus soder pharetra libero atincidunt Curabitur at ante sed nunc euismod sodales.</li>
		</ul>
      </div>
      <div class="one-fourth last">
        <h3>Get in Touch</h3>
        <!-- Form -->
        <div class="form-container">
          <form class="forms" action="contact.php" method="post">
            <fieldset>
              <ol>
                <li class="form-row text-input-row">
                  <label>Name*</label>
                  <input type="text" name="name" value="" class="text-input required" title="" />
                </li>
                <li class="form-row text-input-row">
                  <label>Email*</label>
                  <input type="text" name="email" value="" class="text-input required email" title="" />
                </li>
                <li class="form-row text-area-row">
                  <textarea name="message" class="text-area required"></textarea>
                </li>
                <li class="form-row hidden-row">
                  <input type="hidden" name="hidden" value="" />
                </li>
                <li class="button-row">
                  <input type="submit" value="Submit" name="submit" class="btn-submit" />
                </li>
              </ol>
              <input type="hidden" name="v_error" id="v-error" value="Required" />
              <input type="hidden" name="v_email" id="v-email" value="Enter a valid email" />
            </fieldset>
          </form>
          <div class="response"></div>
        </div>
        <!-- End Form --> 
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <!-- End Container -->
  
  <div id="copyright" class="opacity">
    <p>© 2011 Zeences Design. All Right Reserved.</p>
  </div>
</div>
<!-- End Wrapper --> 

<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>