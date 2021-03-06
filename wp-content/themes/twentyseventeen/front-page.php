<head>
    <!-- template name:homepage -->
  <style>
    <?php include "allfonts.css"; ?>
    <?php include "homepage.css"; ?>

		#slide1 {
		    background: url("<?php echo get_template_directory_uri() . '/assets/images/movie1.jpg' ?>") center no-repeat;
		}

		#slide2 {
		    background: url("<?php echo get_template_directory_uri() . '/assets/images/movie2.jpg'; ?>") center no-repeat;
		}

		#slide3 {
		    background: url("<?php echo get_template_directory_uri() . '/assets/images/movie3.jpg'; ?>") center no-repeat;
		}

  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<header>
<?php
        get_header();
   ?>
</header>
<body>
<!--carousel-->

<div class = 'carousel' id='slider' data-ride='carousel'>
   <ol class="carousel-indicators">
       <li class="active" data-slide-to="0" data-target="#slider"></li>
       <li data-slide-to="1" data-target="#slider"></li>
       <li data-slide-to="2" data-target="#slider"></li>
   </ol>
   <div class = "carousel-inner">
        <div class="item active" id="slide1">
        <div class= "carousel caption">
              <h4> Jaha's Promise </h4>
          </div>
        </div>
        <div class="item" id="slide2">
        <div class= "carousel caption">
              <h4> After The Apology </h4>
          </div>
        </div>
        <div class="item" id="slide3">
        <div class= "carousel caption">
              <h4> Food Fighters </h4>
          </div>
        </div>
        <div class = "btn">
			<button class="button">View Event</button>
        </div>
   </div>
   <a class="left carousel-control" href="#slider" data-slide="prev" role="button"><span class="icon-prev"></span></a>
   <a class="right carousel-control" href="#slider" data-slide="next" role="button"><span class="icon-next"></span></a>
</div>
</body>
