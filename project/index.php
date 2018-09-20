<?php
	$pageTitle = 'Home';
	require_once 'includes/register-controller.php'; # lo requiere para validar session
	require_once 'includes/head.php';
	require_once 'includes/navbar.php';
?>

	<!-- Main-banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="content/images/banners/img-banner-01.jpg" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="content/images/banners/img-banner-02.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="content/images/banners/img-banner-03.jpg" alt="Third slide">
			</div>
		</div>

		<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		</a>
		<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
		</a>

		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
	</div>
	<!-- //Main-banner -->

<?php
	require_once "includes/footer.php";
?>
