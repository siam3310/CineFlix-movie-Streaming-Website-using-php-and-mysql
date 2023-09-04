<?php
// session_start();
// if (!isset($_SESSION['id'])) {
// 	header("Location: signin.php");
// 	exit;
// }
session_start();

if (!isset($_SESSION['id'])) {
	header("Location: signin.php");
	exit;
}
var_dump($_SESSION);

include('conn.php');

$u_id = $_SESSION['id'];

// Check if the user has made a payment
$sql = "SELECT * FROM payment WHERE u_id = $u_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 0) {
	header("Location: pricing.php");
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
	<link rel="stylesheet" href="css/.carousel.min.css">
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
					<div class="header__content">
						<!-- header logo -->
						<a href="index.php" class="header__logo">
							<img src="img/123.png" alt="">
						</a>
						<!-- end header logo -->

						<!-- header nav -->
						<ul class="header__nav">
							<li class="header__nav-item">
								<a href="index.php" class="header__nav-link">Home</a>
							</li>

							<li class="header__nav-item">
								<a href="catalog.php" class="header__nav-link">Catalog</a>
							</li>
							<li class="header__nav-item">
								<a href="pricing.php" class="header__nav-link">Pricing plan</a>
							</li>

							<!-- dropdown -->
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

						<?php
						if (isset($_SESSION['id'])) {
						?>
							<a href="signout.php" class="header__sign-in">
								<i class="icon ion-ios-log-out"></i>
								<span>Log Out</span>
							</a>
						<?php
						}
						?>

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

	<!-- home -->
	<section class="home home--bg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="home__title"><b>NEW ITEMS</b> OF THIS SEASON</h1>

				</div>
			</div> <br><br>
			<div class="catalog">
				<div class="container">
					<div class="row row--grid">
						<?php
						include('conn.php');
						$sql = "SELECT * FROM `admin_add_item_movies` ORDER BY id DESC LIMIT 5";
						$result = mysqli_query($conn, $sql);
						while ($row = mysqli_fetch_array($result)) {
						?>
							<div class="col-4">
								<div class="card">
									<div class="card__cover" style="height:400px;  width:270px;">
										<img src="../admin/coverimages/<?php echo $row['cover']; ?>" alt="<?php echo $row['title']; ?>" class="card-img-top">
										<a href="details.php?movie_id=<?php echo $row['id']; ?>" class="card__play"><i class="icon ion-ios-play-circle"></i></a>
										<span class="card__rate card__rate--green"><?php echo $row['rating'] ?></span>
									</div>
									<div class="card__content">
										<h3 class="card__title"><a href="details.php?movie_id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h3>
										<span class="card__category">
											<a href="<?php echo $row['genre'] ?>"><?php echo $row['genre'] ?></a>
										</span>
									</div>
								</div>
							</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>



	</section>
	<!-- end home -->


	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="home__title">New items</h2><br><br>

			</div>
		</div>
		<div class="catalog">
			<div class="container">
				<div class="row row--grid">
					<?php
					include('conn.php');
					$sql = "SELECT * FROM `admin_add_item_movies`";
					$result = mysqli_query($conn, $sql);
					while ($row = mysqli_fetch_array($result)) {
					?>
						<div class="col-4">
							<div class="card">
								<div class="card__cover" style="height:400px;  width:270px;">
									<img src="../admin/coverimages/<?php echo $row['cover']; ?>" alt="<?php echo $row['title']; ?>" class="card-img-top">
									<a href="details.php?movie_id=<?php echo $row['id']; ?>" class="card__play"><i class="icon ion-ios-play-circle"></i></a>
									<span class="card__rate card__rate--green"><?php echo $row['rating'] ?></span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="details.php?movie_id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h3>
									<span class="card__category">
										<a href="<?php echo $row['genre'] ?>"><?php echo $row['genre'] ?></a>
									</span>
								</div>
							</div>
						</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>


		<!-- end card -->


	</div>
	</div>


	<!-- section -->
	<section class="section section--border">

		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="home__title">Expected Premiere</h2><br><br>

				</div>
			</div>
			<div class="catalog">
				<div class="container">
					<div class="row row--grid">
						<?php
						include('conn.php');
						$sqlww = "SELECT * FROM `admin_add_premiere_item`  ORDER BY id DESC LIMIT 5";
						$resultww = mysqli_query($conn, $sql);
						while ($rowe = mysqli_fetch_array($resultww)) {
						?>
							<div class="col-4">
								<div class="card">
									<div class="card__cover" style="height:400px;  width:270px;">
										<img src="../admin/coverimages/<?php echo $rowe['cover']; ?>" class="card-img-top">
										<a href="details.php?movie_id=<?php echo $rowe['id']; ?>" class="card__play"><i class="icon ion-ios-play-circle"></i></a>
										<span class="card__rate card__rate--green"><?php echo $rowe['rating'] ?></span>
									</div>
									<div class="card__content">
										<h3 class="card__title"><a href="details.php?movie_id=<?php echo $rowe['id']; ?>"><?php echo $rowe['title']; ?></a></h3>
										<span class="card__category">
											<a href="<?php echo $rowe['genre'] ?>"><?php echo $rowe['genre'] ?></a>
										</span>
									</div>
								</div>
							</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>

		</div>
		</div>
	</section>


	<!-- end section -->

	<!-- section -->
	<section class="section section--border">
		<div class="container">
			<div class="row">
				<div class="col-12 col-xl-10">
					<h2 class="section__title section__title--mb"><b>CineFlix</b> – Best Place for Movies</h2>

					<p class="section__text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of <b>using Lorem</b> Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>

					<p class="section__text">Content here, content here, making it look like <a href="#">readable</a> English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
				</div>
			</div>



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
							<div class="col-12 col-md-4">
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