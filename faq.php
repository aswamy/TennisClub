<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Alok's Tennis Club FAQ</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Alok's Tennis Club FAQ">
	<meta name="author" content="Alok">

	<!-- Le styles -->
	<?php include 'layout/main-style.html'; ?>

	<style type="text/css">
	.hero-unit {
		padding: 40px;
	}
	.faq_title > h1 {
		color: #002425;
		//text-decoration:underline;
		font-weight: bold;
	}
	.faq_section h3 {
		color: #028d79;
	}
	.faq_section p {
		margin-left: 30px;
		font-size: 120%;
	}
	.faq_section section {
		margin-bottom: 30px;
	}
	.faq_container {
		padding-left: 20px;
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
			<div class="hero-unit">
				<h1>Alok's Tennis Club's FAQs!</h1>
				<p>Here is a list of commonly asked questions about our club. If you cannot find your answers here, or would like more information on our club, <a href="<?php echo $contacts_link; ?>">contact us</a>!</p>
				<p> ... Or check out our club info page: </p>
				<p><a href="<?php echo $info_link; ?>" class="btn btn-primary btn-large">Club Info &raquo;</a></p>
			</div>

			<div class="row">
				<div class="span3">
					<div class="well sidebar-nav">
						<ul class="nav nav-list">
							<li class="nav-header">FAQ Help Bar</li>
							<?php
							require 'sql/main-connect.inc.php';
							$query = "SELECT faq_question, faq_answer FROM faq_list ORDER BY faq_order";

							$query_result = mysqli_query($conn, $query);

							$help_bar_counter = 1;
							while ($query_row = mysqli_fetch_array($query_result)) {

								$faq_question = $query_row['faq_question'];

								echo "<li><a href=\"#faq$help_bar_counter\">$help_bar_counter. $faq_question</a></li>";

								$help_bar_counter += 1;
							}
							?>
						</ul>
					</div><!--/.well -->
				</div><!--/span-->
				<div class="span8 faq_container">
					<div class="page-header faq_title">
						<h1>Frequently Asked Questions</h1>
					</div>

					<section class="faq_section">
						<?php
						$query_result = mysqli_query($conn, $query);
						$faq_counter = 1;
						while ($query_row = mysqli_fetch_array($query_result)) {

							$faq_question = $query_row['faq_question'];
							$faq_answer = $query_row['faq_answer'];

							echo "<section id=\"faq$faq_counter\">";
							echo "<h3>$faq_counter. $faq_question</h3>";
							echo "<p>$faq_answer</p>";
							echo "</section>";

							$faq_counter += 1;
						}
						?>
					</section>

				</div><!--/span-->
			</div><!--/row-->

			<hr>
			<?php include 'layout/footer.html';?>

		</div>
		<!-- Le javascript -->
		<?php include 'layout/main-js.html'; ?>
	</body>
	</html>