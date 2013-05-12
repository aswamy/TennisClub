<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Alok's Tennis Club</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Alok's Tennis Club">
	<meta name="author" content="Alok">

	<?php include 'layout/main-style.html'; ?>

	<style type="text/css">
	.carousel-btn {
		margin: 5px;
	}
	.news-main {
		background-color: rgba(192,192,192,0.3);
		padding: 3px 3px;
		margin-bottom: 5px;
	}
	.events-main {
		background-color: rgba(192,192,192,0.3);
		padding: 3px 3px;
		margin-bottom: 5px;
	}
	.events-indent {
		padding-left: 10px;
	}
	</style>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="../assets/js/html5shiv.js"></script>
	  <![endif]-->
	</head>

	<body>
		<?php include 'layout/main-navbar.php'; ?>
		<div class="container">

			<?php include 'layout/main-header.php'; ?>
			
			<div id="homeCarousel" class="carousel slide">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<!-- Carousel items -->
				<div class="carousel-inner">
					<div class="active item">
						<img src="http://www.milnesportsmedicine.com/images/head_4.jpg" alt="" />
						<div class="carousel-caption">
							<h4>Welcome to Alok's Tennis Club!<a class="btn visible-phone pull-right" href="#">Join us!</a></h4>
							<p>Want to become a member?</p>
							<a class="btn hidden-phone carousel-btn" href="#">Join us!</a>
						</div>
					</div>
					<div class="item">
						<img src="img/tennis2.jpg" alt="" />
						<div class="carousel-caption">
							<h4>Have any questions?<a class="btn visible-phone pull-right" href="#">Read FAQ!</a></h4>
							<p>Send your questions or see FAQ page</p>
							<a class="btn hidden-phone carousel-btn" href="#">Read FAQ!</a>
						</div>
					</div>
					<div class="item">
						<img src="http://placehold.it/1200x480" alt="" />
						<div class="carousel-caption">
							<h4>About Alok's Tennis Club<a class="btn visible-phone pull-right" href="#">About us</a></h4>
							<p>Want to learn more about Alok's Tennis Club?</p>
							<a class="btn hidden-phone carousel-btn" href="#">About us</a>
						</div>
					</div>
				</div>
				<!-- Carousel nav -->
				<a class="carousel-control left" href="#homeCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#homeCarousel" data-slide="next">&rsaquo;</a>
			</div>

			<!-- Example row of columns -->
			<div class="row">
				
				<hr class="visible-phone">
				
				<div class="span7">
					<h2>Latest News</h2>
					<div class="tabbable tabs-left">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#newstab1_1" data-toggle="tab">Meeting Cancelled</a></li>
							<li><a href="#newstab1_2" data-toggle="tab">July Tournament</a></li>
							<li><a href="#newstab1_3" data-toggle="tab">Early Registration</a></li>
						</ul>
						<div class="tab-content news-main">
							<div class="tab-pane active" id="newstab1_1">
								<h4>Sunday Meeting Cancelled</h4>
								<h5>Posted by Admin on April 25, 2013</h5>
								<p>Meeting Cancelled next Sunday due to renovation. We will be meeting instead on Tuesday at 5:30pm.</p>
								<a href="#">More...</a>
							</div>
							<div class="tab-pane" id="newstab1_2">
								<h4>Tournament on July 10</h4>
								<h5>Posted by Tim B. on April 26, 2013</h5>
								<p>For all those who wish to participate in the upcoming tennis tournament (for advanced players) should contact Sarah Lefay.</p>
								<a href="#">More...</a>
							</div>
							<div class="tab-pane" id="newstab1_3">
								<h4>Register Early for Discout</h4>
								<h5>Posted by Admin on April 27, 2013</h5>
								<p>Become a member for the following year before August and get $10 off membership price.</p>
								<a href="#">More...</a>
							</div>
						</div>
					</div>
					<p><a class="btn pull-right" href="#">View All News &raquo;</a></p>
				</div>
				<br/>
				<hr class="visible-phone">
				
				<div class="span5">
					<h2>Upcoming Events</h2>
					<div class="events-main">
						<h4>Djokovic Visits ATC</h4>
						<p class="events-indent">July 12, 2013<a class="pull-right" href="#">Read article</a></p>
						<hr>
						<h4>Some Event 2</h4>
						<p class="events-indent">August 10, 2013<a class="pull-right" href="#">Read article</a></p>
						<hr>
						<h4>Some Event 3</h4>
						<p class="events-indent">August 12, 2013<a class="pull-right" href="#">Read article</a></p>	  
					</div>
					<p><a class="btn pull-right" href="#">View All Events &raquo;</a></p>
				</div>
			</div>

			<hr>

			<footer>
				<p>&copy; Alok's Tennis Club 2013</p>
			</footer>

		</div> <!-- /container -->

		<!-- JS -->
		<?php include 'layout/main-js.html'; ?>
		<script type="text/javascript">
		$(document).ready(function() {
			$(".carousel").carousel();
		});
		</script>
	</body>
	</html>