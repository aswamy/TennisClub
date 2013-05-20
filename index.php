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
							<?php
								require 'sql/main-connect.inc.php';
								$query = "SELECT IF( ISNULL( news_title ) OR LENGTH( news_title ) =0, CONCAT( substr( news_subject, 1, 20 ) , '...' ) , news_title ) AS news_title FROM news_table ORDER BY news_date DESC LIMIT 3";
						
								$query_result = mysqli_query($conn, $query);
								$news_counter = 1;

								while($query_row = mysqli_fetch_array($query_result)) {
									$news_title = $query_row['news_title'];
									if ($news_counter == 1) {
										$active_tab = 'class="active"';
									} else {
										$active_tab = null;
									}
									echo "<li $active_tab><a href=\"#newstab1_$news_counter\" data-toggle=\"tab\">$news_title</a></li>";
									$news_counter++;
								}
							?>
						</ul>
						<div class="tab-content news-main">
							<?php
								require 'sql/main-connect.inc.php';
								$query = "SELECT news_subject, news_content, news_date, staff_fname, staff_lname FROM news_table JOIN staff_info ON news_publisherID = staff_id ORDER BY news_date DESC LIMIT 3 ";
						
								$query_result = mysqli_query($conn, $query);
								$news_counter = 1;

								while($query_row = mysqli_fetch_array($query_result)) {
									$news_subject = $query_row['news_subject'];
									$news_content = $query_row['news_content'];
									$news_date = $query_row['news_date'];
									$staff_fname = $query_row['staff_fname'];
									$staff_lname = $query_row['staff_lname'];
									if ($news_counter == 1) {
										$active_tab = 'active';
									} else {
										$active_tab = null;
									}

									echo "<div class=\"tab-pane $active_tab\" id=\"newstab1_$news_counter\">
										<h4>$news_subject</h4>
										<h5>Posted by $staff_fname $staff_lname on $news_date</h5>
										<p>$news_content</p>
										<a href=\"#\">More...</a>
										</div>";
									$news_counter++;
								}
							?>
						</div>
					</div>
					<p><a class="btn pull-right" href="#">View All News &raquo;</a></p>
				</div>
				
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
			<?php include 'layout/footer.html';?>

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