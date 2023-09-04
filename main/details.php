<?php
if (isset($_POST['sub2'])) {
	include('conn.php');
	$r_name = $_POST['r_name'];
	$r_title = $_POST['r_title'];
	$review = $_POST['review'];
	$rating = $_POST['rating'];
	$review_time = date("Y-m-d H:i:s");
	$sql2 = "INSERT INTO `review_detail`(`u_name`, `title`, `review`, `rating`, `review_time`) VALUES 
    ('$r_name','$r_title','$review','$rating','$review_time')";
	$r1 = mysqli_query($conn, $sql2);
}
?>
<?php
if (isset($_POST['sub1'])) {
	include('conn.php');
	$c_username = $_POST['c_name'];
	$c_title = $_POST['c_title'];
	$commentsss = $_POST['text'];
	$c_time = date("Y-m-d H:i:s");


	$sql1 = "INSERT INTO `comment`(`c_username`, `c_title`, `c_comment`, `c_time`) 
    VALUES ('$c_username','$c_title','$commentsss','$c_time')";

	$r2 = mysqli_query($conn, $sql1);
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
					<div class="header__content"  >
						<!-- header logo -->
						<a href="index.php" class="header__logo">
							<img src="img/123.png" alt="">
						</a>
						<!-- end header logo -->

						<!-- header nav -->
						<ul class="header__nav" >
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

									<!-- end dropdown -->

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
								</ul>
							</li>
						</ul>

					</div>
					<!-- end header auth -->

					<!-- header menu btn -->

					<!-- end header menu btn -->
				</div>
			</div>
		</div>
		</div>
	</header>
	<!-- end header -->

	<style>
		.card_trailer {
			align-items: center;
			box-sizing: border-box;
			box-sizing: inherit;
			background-color: rgba(0, 0, 0, 0);
			border-bottom-color: rgb(249, 171, 0);
			border-bottom-left-radius: 6px;
			border-bottom-right-radius: 6px;
			border-bottom-style: solid;
			border-bottom-width: 1.48148px;
			border-image-outset: 0;
			border-image-repeat: stretch;
			border-image-slice: 100%;
			border-image-source: none;
			border-image-width: 1;
			border-left-color: rgb(249, 171, 0);
			border-left-style: solid;
			border-left-width: 1.48148px;
			border-right-color: rgb(249, 171, 0);
			border-right-style: solid;
			border-right-width: 1.48148px;
			border-top-color: rgb(249, 171, 0);
			border-top-left-radius: 6px;
			border-top-right-radius: 6px;
			border-top-style: solid;
			border-top-width: 1.48148px;
			box-sizing: border-box;
			color: rgb(255, 255, 255);
			cursor: pointer;
			display: flex;
			flex-direction: row;
			font-family: "Source Sans Pro", sans-serif;
			font-size: 14px;
			font-weight: 400;
			height: 45.9954px;
			justify-content: center;
			line-height: 21px;
			margin-top: 20px;
			max-width: 250px;
			text-align: left;
			text-decoration-color: rgb(255, 255, 255);
			text-decoration-line: none;
			text-decoration-style: solid;
			text-decoration-thickness: auto;
			text-transform: uppercase;
			transition-delay: 0s;
			transition-duration: 0.4s;
			transition-property: color, background-color, border-color, opacity;
			transition-timing-function: ease;
			width: 210.012px;
			-webkit-font-smoothing: antialiased;
			-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
		}
	</style>

	<?php
	include('conn.php');

	if (isset($_GET['movie_id'])) {
		$movieId = $_GET['movie_id'];
		$sql = "SELECT * FROM `admin_add_item_movies` WHERE `id` = $movieId";
		$result = mysqli_query($conn, $sql);

		if ($row = mysqli_fetch_assoc($result)) {
	?>

			<section class="section section--details section--bg" data-bg="img/section/details.jpg">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h1 class="section__title section__title--mb"><?php echo $row['title']; ?></h1>
						</div>
						<div class="col-12 col-xl-6">
							<div class="card card--details">
								<div class="row">
									<div class="col-12 col-sm-5 col-md-4 col-lg-3 col-xl-5">
										<div class="card__cover">
											<!-- <img src="img/covers/cover1.jpg" alt=""> -->
											<img src="../admin/coverimages/<?php echo $row['cover']; ?>" class="card-img-top">
											<span class="card__rate card__rate--green"><?php echo $row['rating'] ?></span>
										</div>

										<a href="<?php echo $row['link']; ?>" class="card_trailer" style="color:white;"><i class="icon ion-ios-play-circle"></i> Watch trailer</a>
									</div>
									<div class="col-12 col-md-8 col-lg-9 col-xl-7">
										<div class="card__content">
											<ul class="card__meta">
												<li><span>Director:</span><?php echo $row['director']; ?></li>
												<li><span>Cast:</span><a href="<?php echo $row['cast']; ?>"><?php echo $row['cast']; ?></a></li>
												<li><span>Genre:</span><a href="<?php echo $row['genre']; ?>"><?php echo $row['genre']; ?></a></li>
												<li><span>Release year:</span><?php echo $row['release_year']; ?></li>
												<li><span>Running time:</span><?php echo $row['runtime']; ?></li>
												<li><span>Country:</span><a href="<?php echo $row['country']; ?>"><?php echo $row['country']; ?></a></li>
											</ul>
											<div class="card__description">
												<?php echo $row['description']; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-xl-6">
							<video controls crossorigin playsinline poster="../admin/coverimages/<?php echo $row['cover']; ?>" alt="<?php echo $row['title']; ?>" id="player">
								<source src="<?php echo "../admin/movieimg/" . $row['movie_file']; ?>" type="video/mp4">

								<a href="<?php echo $row['link']; ?>">Download</a>
							</video>
					<?php
				} else {
					echo 'Movie not found.';
				}
			} else {
				echo 'Invalid movie ID.';
			}
					?>
			</section>



			<!-- content -->
			<section class=" content">
				<div class="content__head">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<!-- content title -->
								<br><br>
								<h2 class="content__title">Discover</h2>
								<!-- end content title -->

								<!-- content tabs nav -->
								<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Comments</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Reviews</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Photos</a>
									</li>
								</ul>
								<!-- end content tabs nav -->

								<!-- content mobile tabs nav -->
								<div class="content__mobile-tabs" id="content__mobile-tabs">
									<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<input type="button" value="Comments">
										<span></span>
									</div>

									<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
										<ul class="nav nav-tabs" role="tablist">
											<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Comments</a></li>

											<li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Reviews</a></li>

											<li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Photos</a></li>
										</ul>
									</div>
								</div>
								<!-- end content mobile tabs nav -->
							</div>
						</div>
					</div>
				</div>




				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-8 col-xl-8">

							<!-- content tabs -->
							<div class="tab-content">
								<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
									<div class="row">
										<!-- comments -->
										<div class="col-12">
											<div class="comments">
												<ul class="comments__list">
													<?php
													include('conn.php');
													$sqlxx = "SELECT * FROM `comment`";
													$resultxx = mysqli_query($conn, $sqlxx);
													while ($rowxx = mysqli_fetch_array($resultxx)) {
													?>
														<li class="comments__item">
															<div class="comments__autor">
																<img class="comments__avatar" src="img/user.svg" alt="">
																<span class="comments__name">Username: <?php echo $rowxx['c_username']; ?></span>

																<span class="comments__title" style="color:white;"><?php echo $rowxx['c_title']; ?></span>
																<span class="comments__time"><?php echo $rowxx['c_time']; ?></span>
															</div>
															<p class="comments__text"><?php echo $rowxx['c_comment']; ?></p>

														</li>
													<?php
													}
													?>

												</ul>

												<form method="post">
													<input type="text" class="form__input" placeholder="Username" name="c_name">
													<input type="text" class="form__input" placeholder="Title" name="c_title">
													<textarea id="text" name="text" class="form__textarea" placeholder="Add comment"></textarea>
													<input type="submit" class="form__btn" name="sub1">Send
												</form>
											</div>
										</div>
										<!-- end comments -->
									</div>

								</div>

								<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
									<div class="row">
										<!-- reviews -->
										<div class="col-12">
											<div class="reviews">
												<ul class="reviews__list">
													<?php
													include('conn.php');
													$sqlx = "SELECT * FROM `review_detail`";
													$resultx = mysqli_query($conn, $sqlx);
													while ($rowx = mysqli_fetch_array($resultx)) {
													?>
														<li class="reviews__item">
															<div class="reviews__autor">
																<img class="reviews__avatar" src="img/user.svg" alt="">
																<span class="reviews__name">Movie Title : <?php echo $rowx['title']; ?></span>
																<span class="reviews__name" style="color:white">Username : <?php echo $rowx['u_name']; ?></span>

																<span class="reviews__time"><?php echo $rowx['review_time']; ?></span>

																<span class="reviews__rating reviews__rating--green"><?php echo $rowx['rating']; ?></span>
															</div>
															<p class="reviews__text"><?php echo $rowx['review']; ?></p>
														</li>
													<?php
													}
													?>
												</ul>
												<form method="post">
													<input type="text" class="form__input" placeholder="Name" name="r_name">
													<input type="text" class="form__input" placeholder="Title" name="r_title">
													<textarea class="form__textarea" placeholder="Review" name="review"></textarea>
													<div class="form__slider">
														<input type="range" class="form__slider-rating" id="slider__rating" name="rating" min="0" max="10" step="0.1" onchange="updateRatingValue()">
														<div class="form__slider-value" id="form__slider-value">0</div>
													</div>
													<!-- <input type="hidden" id="ratingValue" name="rating" value="0"> -->
													<input type="submit" class="form__btn" name="sub2">Send
												</form>

												<script>
													function updateRatingValue() {
														var slider = document.getElementById("slider__rating");
														var ratingDisplay = document.getElementById("form__slider-value");
														var ratingInput = document.getElementById("ratingValue");

														var rating = slider.value;
														ratingDisplay.textContent = rating;
														ratingInput.value = rating;
													}
												</script>


											</div>
										</div>
										<!-- end reviews -->
									</div>

								</div>


								<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
									<!-- project gallery -->
									<div class="gallery" itemscope>
										<div class="row row--grid">
											<?php
											$uploadDir = "../admin/uploadphotos"; // Replace with the correct path to your 'uploadphotos' folder

											// Check if the directory exists
											if (is_dir($uploadDir)) {
												// Get a list of all files in the directory
												$files = scandir($uploadDir);

												// Loop through the files and display them in the gallery
												foreach ($files as $file) {
													// Exclude "." and ".." directories
													if ($file !== "." && $file !== "..") {
											?>
														<!-- gallery item -->
														<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
															<a href="<?php echo $uploadDir . '/' . $file; ?>" itemprop="contentUrl" data-size="1920x1280">
																<img src="<?php echo $uploadDir . '/' . $file; ?>" alt="Image description" itemprop="thumbnail">
															</a>
															<figcaption itemprop="caption description">Image caption</figcaption>
														</figure>
														<!-- end gallery item -->
											<?php
													}
												}
											} else {
												echo 'Upload folder not found.';
											}
											?>
										</div>
									</div>
								</div>

								<!-- end project gallery -->
							</div>
						</div>
						<!-- end content tabs -->

						<!-- sidebar -->
						<div class="col-12 col-lg-4 col-xl-4">
							<div class="row row--grid">
								<!-- section title -->
								<div class="col-12">
									<h2 class="section__title section__title--sidebar">You may also like...</h2>
								</div>
								<!-- end section title -->

								<!-- card -->
								<div class="col-6 col-sm-4 col-lg-6">
									<?php
									include('conn.php');
									$sql = "SELECT * FROM `admin_add_premiere_item` LIMIT 3";
									$result = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($result)) {
									?>
										<div class="card">
											<div class="card__cover" style="height: 190px;  width:140px;">
												<img src="../admin/coverimages/<?php echo $row['cover']; ?>" class="card-img-top">

												<span class="card__rate card__rate--green"><?php echo $row['rating'] ?></span>
											</div>
											<div class="card__content">
												<h3 class="card__title"><a href="catalog.php?movie_id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h3>
												<span class="card__category">
													<a href="<?php echo $row['genre'] ?>"><?php echo $row['genre'] ?></a>
												</span>
											</div>
										</div>
								</div>
							<?php
									}
							?>
							<!-- end card -->

							</div>
						</div>
						<!-- end sidebar -->
					</div>
				</div>
			</section>
			<!-- end content -->

			<!-- footer -->
			<footer class="footer">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="footer__content">
								<a href="index.html" class="footer__logo">
									<img src="img/logo.svg" alt="">
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

			<!-- Root element of PhotoSwipe. Must have class pswp. -->
			<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

				<!-- Background of PhotoSwipe. 
		It's a separate element, as animating opacity is faster than rgba(). -->
				<div class="pswp__bg"></div>

				<!-- Slides wrapper with overflow:hidden. -->
				<div class="pswp__scroll-wrap">

					<!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
					<!-- don't modify these 3 pswp__item elements, data is added later on. -->
					<div class="pswp__container">
						<div class="pswp__item"></div>
						<div class="pswp__item"></div>
						<div class="pswp__item"></div>
					</div>

					<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
					<div class="pswp__ui pswp__ui--hidden">

						<div class="pswp__top-bar">

							<!--  Controls are self-explanatory. Order can be changed. -->

							<div class="pswp__counter"></div>

							<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

							<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

							<!-- Preloader -->
							<div class="pswp__preloader">
								<div class="pswp__preloader__icn">
									<div class="pswp__preloader__cut">
										<div class="pswp__preloader__donut"></div>
									</div>
								</div>
							</div>
						</div>

						<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

						<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

						<div class="pswp__caption">
							<div class="pswp__caption__center"></div>
						</div>
					</div>
				</div>
			</div>

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