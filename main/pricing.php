<?php
session_start();
if (!isset($_SESSION['id'])) {
	header("Location: signin.php");
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/plyr.css">
	<link rel="stylesheet" href="css/photoswipe.css">
	<link rel="stylesheet" href="css/default-skin.css">
	<link rel="stylesheet" href="css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/cine.png">
	<link rel="apple-touch-icon" href="icon/cine.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>CineFlix – Online Movies, TV Shows & Cinema HTML Template</title>
</head>

<body class="body">
	<!-- header -->
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="header__content" style="margin-left: 150px;">
						<!-- header logo -->
						<a href="index.php" class="header__logo">
							<img src="img/123.png" alt="">
						</a>
						<!-- end header logo -->

						<!-- header nav -->
						<ul class="header__nav">
							<!-- dropdown -->

							<li class="header__nav-item" >
								<a href="index.php" class="header__nav-link">Home</a>
							</li>
							<li class="header__nav-item">
								<a href="catalog.php" class="header__nav-link">Catalog</a>
							</li>


							<li class="header__nav-item">
								<a href="pricing.php" class="header__nav-link">Pricing</a>
							</li>


							<li class="dropdown header__nav-item">
								<a class="dropdown-toggle header__nav-link header__nav-link--more" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-ios-more"></i></a>

								<ul class="dropdown-menu header__dropdown-menu scrollbar-dropdown" aria-labelledby="dropdownMenuMore">
									<li><a href="about.html">About</a></li>
									<li><a href="contacts.php">Contacts</a></li>
									<li><a href="faq.html">Help center</a></li>
									<li><a href="privacy.html">Privacy policy</a></li>


								</ul>
							</li>
							<!-- end dropdown -->
						</ul>
						<!-- end header nav -->

					


					<?php

					if (!isset($_SESSION['id'])) {
					?>
						<a href="signin.php" class="header__sign-in">
							<i class="icon ion-ios-log-in"></i>
							<span>Sign In</span>
						</a>
					<?php
					} else {
					?>
						<a href="signout.php" class="header__sign-in">
							<i class="icon ion-ios-log-out"></i>
							<span>Log Out</span>
						</a>
					<?php
					}
					?>
				</div></div>
			</div>
			<!-- end header auth -->

			<!-- header menu btn -->
			<button class="header__btn" type="button">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<!-- end header menu btn -->
		</div>
		</div>
		</div>
		</div>
	</header>
	<!-- end header -->

	<!-- page title -->
	<section class="section section--first section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title">Pricing plan</h2>
						<!-- end section title -->

						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="index.html">Home</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">Pricing plan</li>
						</ul>
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->


	<!-- pricing -->

	<div class="section section--top">
		<div class="container">
			<div class="row row--grid">

				<?php
				include('conn.php');
				$sql = "SELECT * FROM `add_pricing_plan`;";
				$result = mysqli_query($conn, $sql);
				while ($row = mysqli_fetch_array($result)) {
				?>
					<!-- price -->
					<div class="col-8 col-md-4">
						<form method="post">
							<div class="price">
								<div class="price__item price__item--first"><span> <?php echo $row['1']; ?></span></div>
								<div class="price__item"><span><i class="icon ion-ios-checkmark"></i> <?php echo $row['2']; ?></span></div>
								<div class="price__item"><span><i class="icon ion-ios-checkmark"></i> <?php echo $row['3']; ?></span></div>
								<div class="price__item price__item--none"><span><i class="icon ion-ios-close"></i> <?php echo $row['4']; ?></span></div>
								<div class="price__item price__item--none"><span><i class="icon ion-ios-close"></i> <?php echo $row['5']; ?></span></div>
								<div class="price__item price__item--none"><span><i class="icon ion-ios-close"></i> <?php echo $row['6']; ?></span></div>
								<!-- <a href="pricing.php?plan_id=1"class="price__btn" >Choose Plan</a> -->
								<a href="paymentform.php?pid=<?php echo $row['plan_id']; ?>" class="price__btn">Choose Plan</a>
							</div>
						</form>
					</div>
					<div></div>
				<?php
				}
				?>
			</div>
		</div>
	</div>
	<!-- end price -->


	<!-- features -->
	<section class="section section--border">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title section__title--mb0">Our Features</h2>
				</div>
				<!-- end section title -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="icon ion-ios-tv feature__icon"></i>
						<h3 class="feature__title">Ultra HD</h3>
						<p class="feature__text">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="icon ion-ios-film feature__icon"></i>
						<h3 class="feature__title">Film</h3>
						<p class="feature__text">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first.</p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="icon ion-ios-trophy feature__icon"></i>
						<h3 class="feature__title">Awards</h3>
						<p class="feature__text">It to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining.</p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="icon ion-ios-notifications feature__icon"></i>
						<h3 class="feature__title">Notifications</h3>
						<p class="feature__text">Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="icon ion-ios-rocket feature__icon"></i>
						<h3 class="feature__title">Rocket</h3>
						<p class="feature__text">It to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="icon ion-ios-globe feature__icon"></i>
						<h3 class="feature__title">Multi Language Subtitles </h3>
						<p class="feature__text">Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
					</div>
				</div>
				<!-- end feature -->
			</div>
		</div>
	</section>
	<!-- end features -->

	<!-- partners -->
	<section class="section section--border">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title section__title--mb">Our Partners</h2>
				</div>
				<!-- end section title -->

				<!-- section text -->
				<div class="col-12">
					<p class="section__text">It is a long <b>established</b> fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.</p>
				</div>
				<!-- end section text -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/themeforest-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/audiojungle-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/codecanyon-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/photodune-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/activeden-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/3docean-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->
			</div>
		</div>
	</section>
	<!-- end partners -->

	<!-- footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="footer__content">
						<a href="index.php" class="header__logo">
							<img src="img/123.png" alt="">
						</a>

						<span class="footer__copyright">© CINEFLIX, 2019—2021 <br> Create by <a href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Dmitry Volkov</a></span>

						<nav class="footer__nav">
							<a href="about.html">About Us</a>
							<a href="contacts.php">Contacts</a>
							<a href="privacy.html">Privacy policy</a>
						</nav>

						<button class="footer__back" type="button">
							<i class="icon ion-ios-arrow-round-up"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- end footer -->

	<!-- JS -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/wNumb.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/photoswipe.min.js"></script>
	<script src="js/photoswipe-ui-default.min.js"></script>
	<script src="js/main.js"></script>
</body>


</html>