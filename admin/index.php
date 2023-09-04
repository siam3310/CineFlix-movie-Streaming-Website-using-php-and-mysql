<?php
session_start();
if (!isset($_SESSION['e'])) {
	header('Location: signin.php');
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
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/admin.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/cine.png">
	<link rel="apple-touch-icon" href="icon/cine.png">


	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>CineFlix – Online Movies, TV Shows & Cinema HTML Template</title>

</head>

<body>
	<!-- header -->
	<header class="header">
		<div class="header__content">
			<!-- header logo -->
			<a href="index.php" class="header__logo">
				<img src="img/123.png" alt="">
			</a>
			<!-- end header logo -->

			<!-- header menu btn -->
			<button class="header__btn" type="button">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<!-- end header menu btn -->
		</div>
	</header>
	<!-- end header -->

	<!-- sidebar -->
	<div class="sidebar">
		<!-- sidebar logo -->
		<a href="index.php" class="header__logo">
			<img src="img/123.png" alt="" style="padding-left: 20px;">
		</a>
		<!-- end sidebar logo -->

		<!-- sidebar user -->
		<div class="sidebar__user">
			<div class="sidebar__user-img">
				<img src="img/user.svg" alt="">
			</div>

			<div class="sidebar__user-title">
				<span>Admin</span>
				<?php if (isset($_SESSION['name'])) { ?>
					<p><?php echo $_SESSION['name']; ?></p>

				<?php
				}
				?>
			</div>

			<button class="sidebar__user-btn" type="button">
				<a href="logout.php" class="icon ion-ios-log-out"></a>
			</button>
		</div>
		<!-- end sidebar user -->

		<!-- sidebar nav -->
		<div class="sidebar__nav-wrap">
			<ul class="sidebar__nav">
				<li class="sidebar__nav-item">
					<a href="index.php" class="sidebar__nav-link sidebar__nav-link--active"><i class="icon ion-ios-keypad"></i> <span>Dashboard</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="catalog.php" class="sidebar__nav-link"><i class="icon ion-ios-film"></i> <span>Catalog</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="premiere_item.php" class="sidebar__nav-link sidebar__nav-link"><i class="icon ion-ios-film"></i> <span>Premiere Items</span></a>
				</li>
				<!-- collapse -->
				<li class="sidebar__nav-item">
					<a class="sidebar__nav-link" data-toggle="collapse" href="#collapseMenu" role="button" aria-expanded="false" aria-controls="collapseMenu"><i class="icon ion-ios-copy"></i> <span>Pages</span> <i class="icon ion-md-arrow-dropdown"></i></a>

					<ul class="collapse sidebar__menu" id="collapseMenu">
						<li><a href="add-item.php">Add item</a></li>
						<li><a href="add-premiereitem.php">Add Premiere Item</a></li>
						<li><a href="add_pricing_plan.php">Add Pricing Plan</a></li>
					</ul>
				</li>
				<!-- end collapse -->

				<li class="sidebar__nav-item">
					<a href="users.php" class="sidebar__nav-link"><i class="icon ion-ios-contacts"></i> <span>Users</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="comments.php" class="sidebar__nav-link sidebar__nav-link"><i class="icon ion-ios-star-half"></i> <span>Comments</span></a>
				</li>
				<li class="sidebar__nav-item">
					<a href="reviews.php" class="sidebar__nav-link"><i class="icon ion-ios-star-half"></i> <span>Reviews</span></a>
				</li>
				<li class="sidebar__nav-item">
					<a href="https://cineflix.volkovdesign.com/main/index.php" class="sidebar__nav-link"><i class="icon ion-ios-arrow-round-back"></i> <span>Back to cineFlix</span></a>
				</li>

			</ul>
		</div>
		<!-- end sidebar nav -->

		<!-- sidebar copyright -->
		<div class="sidebar__copyright">© CINEFLIX, 2019—2021. <br>Create by <a href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Dmitry Volkov</a></div>
		<!-- end sidebar copyright -->
	</div>
	<!-- end sidebar -->

	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row row--grid">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Dashboard</h2>

						<a href="add-item.php" class="main__title-link">add item</a>
					</div>
				</div>
				<!-- end main title -->

				<!-- stats -->
				<div class="col-12 col-sm-6 col-lg-3">
					<div class="stats">
						<span>New accouont this month</span>


						<?php
						include('conn.php');

						$sql9 = "SELECT COUNT(*) AS views FROM `signup`";;
						$result9 = mysqli_query($conn, $sql9);

						if ($result9) {
							$row9 = mysqli_fetch_array($result9);
							$views = $row9["views"];
							echo '<p> ' . $views . '</p>';
						} else {
							echo "Error in query: " . mysqli_error($conn);
						}

						mysqli_close($conn);
						?>
						<i class="icon ion-ios-stats"></i>
					</div>
				</div>
				<!-- end stats -->

				<!-- stats -->
				<div class="col-12 col-sm-6 col-lg-3">
					<div class="stats">
						<span>Items added this month</span>
						<?php
						include('conn.php');

						$sqla = "SELECT COUNT(*) AS movie_count FROM
						(SELECT * FROM `admin_add_item_movies`
						 UNION ALL
						 SELECT * FROM `admin_add_premiere_item`) AS combined";
						$resulta = mysqli_query($conn, $sqla);

						if ($resulta) {
							$rowa = mysqli_fetch_array($resulta);
							$movie_count = $rowa["movie_count"];
							echo '<p> ' . $movie_count . '</p>';
						} else {
							echo "Error in query: " . mysqli_error($conn);
						}

						mysqli_close($conn);
						?>
						<i class="icon ion-ios-film"></i>
					</div>
				</div>
				<!-- end stats -->

				<!-- stats -->
				<div class="col-12 col-sm-6 col-lg-3">
					<div class="stats">
						<span>New comments</span>
						<?php
						include('conn.php');

						$sqlb = "SELECT COUNT(*) AS comment_count FROM `comment`";
						$resultb = mysqli_query($conn, $sqlb);

						if ($resultb) {
							$rowb = mysqli_fetch_array($resultb);
							$comment_count = $rowb["comment_count"];
							echo '<p>' . $comment_count . '</p>';
						} else {
							echo "Error in query: " . mysqli_error($conn);
						}

						mysqli_close($conn);
						?>
						<i class="icon ion-ios-chatbubbles"></i>
					</div>
				</div>
				<!-- end stats -->

				<!-- stats -->
				<div class="col-12 col-sm-6 col-lg-3">
					<div class="stats">
						<span>New reviews</span>
						<?php
						include('conn.php');

						$sqlc = "SELECT COUNT(*) AS review_count FROM review_detail";
						$resultc = mysqli_query($conn, $sqlc);

						if ($resultc) {
							$rowc = mysqli_fetch_array($resultc);
							$review_count = $rowc["review_count"];
							echo '<p>' . $review_count . '</p>';
						} else {
							echo "Error in query: " . mysqli_error($conn);
						}

						mysqli_close($conn);
						?>
						<i class="icon ion-ios-star-half"></i>
					</div>
				</div>
				<!-- end stats -->

				<!-- dashbox -->
				<div class="col-12 col-xl-6">
					<div class="dashbox">
						<div class="dashbox__title">
							<h3><i class="icon ion-ios-film"></i> Latest Items</h3>

							<div class="dashbox__wrap">
								<!-- <a class="dashbox__refresh" href="#"><i class="icon ion-ios-refresh"></i></a> -->
								<a class="dashbox__more" href="catalog.php">View All</a>
							</div>
						</div>

						<div class="dashbox__table-wrap">
							<table class="main__table main__table--dash">
								<thead>
									<tr>
										<th>ID</th>
										<th>TITLE</th>
										<th>GENRE</th>
										<th>RATING</th>
									</tr>
								</thead>
								<tbody>
									<?php
									include('conn.php');
									$sql9 = "SELECT * FROM `admin_add_item_movies` ORDER BY id DESC LIMIT 5";
									$result9 = mysqli_query($conn, $sql9);
									while ($row9 = mysqli_fetch_array($result9)) {
									?>
										<tr>
											<td>
												<div class="main__table-text"><?php echo $row9['id'] ?></div>
											</td>
											<td>
												<div class="main__table-text"><a href="#"><?php echo $row9['title'] ?></a></div>
											</td>
											<td>
												<div class="main__table-text"><?php echo $row9['genre'] ?></div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i><?php echo $row9['rating'] ?></div>
											</td>
										</tr>

									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- end dashbox -->

				<!-- dashbox -->
				<div class="col-12 col-xl-6">
					<div class="dashbox">
						<div class="dashbox__title">
							<h3><i class="icon ion-ios-chatbubbles"></i> Latest Comment</h3>

							<div class="dashbox__wrap">
								<!-- <a class="dashbox__refresh" href="#"><i class="icon ion-ios-refresh"></i></a> -->
								<a class="dashbox__more" href="comments.php">View All</a>
							</div>
						</div>

						<div class="dashbox__table-wrap">
							<table class="main__table main__table--dash">
								<thead>
									<tr>
										<th>ID</th>
										<th>USERNAME</th>
										<th>COMMENT</th>
										<TH>TIME</TH>

									</tr>
								</thead>
								<tbody>
									<?php
									include('conn.php');
									$sql2 = "SELECT * FROM `comment` ORDER BY c_id DESC LIMIT 5";
									$result2 = mysqli_query($conn, $sql2);
									while ($roww = mysqli_fetch_array($result2)) {
									?>
										<tr>
											<td>
												<div class="main__table-text"><?php echo $roww['c_id'] ?></div>
											</td>
											<td>
												<div class="main__table-text"><a href="#"><?php echo $roww['c_username'] ?></a></div>
											</td>
											<td>
												<div class="main__table-text"><?php echo $roww['c_comment'] ?></div>
											</td>
											<td>
												<div class="main__table-text"><?php echo $roww['c_time'] ?></div>
											</td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- end dashbox -->

				<!-- dashbox -->
				<div class="col-12 col-xl-6">
					<div class="dashbox">
						<div class="dashbox__title">
							<h3><i class="icon ion-ios-contacts"></i> Latest users</h3>

							<div class="dashbox__wrap">
								<!-- <a class="dashbox__refresh" href="#"><i class="icon ion-ios-refresh"></i></a> -->
								<a class="dashbox__more" href="users.php">View All</a>
							</div>
						</div>

						<div class="dashbox__table-wrap">
							<table class="main__table main__table--dash">
								<thead>
									<tr>
										<th>ID</th>
										<th>USERNAME</th>
										<th>EMAIL</th>
										<th>PASSWORD</th>
									</tr>
								</thead>
								<tbody>
									<?php
									include('conn.php');
									$sql = "SELECT * FROM `signup` ORDER BY u_id DESC LIMIT 5";
									$result = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($result)) {
									?>
										<tr>
											<td>
												<div class="main__table-text"><?php echo $row['u_id'] ?></div>
											</td>
											<td>
												<div class="main__table-text"><a href="#"><?php echo $row['u_name'] ?></a></div>
											</td>
											<td>
												<div class="main__table-text main__table-text--grey"><?php echo $row['u_email'] ?></div>
											</td>
											<td>
												<div class="main__table-text"><?php echo $row['u_pass'] ?></div>
											</td>
										</tr>

									<?php
									}
									?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- end dashbox -->

				<!-- dashbox -->
				<div class="col-12 col-xl-6">
					<div class="dashbox">
						<div class="dashbox__title">
							<h3><i class="icon ion-ios-star-half"></i> Latest reviews</h3>

							<div class="dashbox__wrap">
								<!-- <a class="dashbox__refresh" href="#"><i class="icon ion-ios-refresh"></i></a> -->
								<a class="dashbox__more" href="reviews.php">View All</a>
							</div>
						</div>

						<div class="dashbox__table-wrap">
							<table class="main__table main__table--dash">
								<thead>
									<tr>
										<th>ID</th>
										<th>TITLE</th>
										<th>REVIEWS</th>
										<th>RATING</th>
									</tr>
								</thead>
								<tbody>
									<?php
									include('conn.php');
									$sql = "SELECT `u_id`, `title`, `review`, `rating` FROM `review_detail` ORDER BY u_id DESC LIMIT 5";
									$result = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($result)) {
									?>
										<tr>
											<td>
												<div class="main__table-text"><?php echo $row['u_id'] ?></div>
											</td>
											<td>
												<div class="main__table-text"><a href="#"><?php echo $row[1] ?></a></div>
											</td>
											<td>
												<div class="main__table-text"><?php echo $row[2] ?></div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> <?php echo $row[3] ?></div>
											</td>
										</tr>

									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- end dashbox -->
				<!-- dashbox -->
				<div class="col-12 col-xl-6">
					<div class="dashbox">
						<div class="dashbox__title">
							<h3><i class="icon ion-ios-contacts"></i> Premiere Item</h3>

							<div class="dashbox__wrap">
								<!-- <a class="dashbox__refresh" href="#"><i class="icon ion-ios-refresh"></i></a> -->
								<a class="dashbox__more" href="users.php">View All</a>
							</div>
						</div>

						<div class="dashbox__table-wrap">
							<table class="main__table main__table--dash">
								<thead>
									<tr>
										<th>ID</th>
										<th>TITTLE</th>
										<th>GENRE</th>
										<th>RATING</th>
									</tr>
								</thead>
								<tbody>
									<?php
									include('conn.php');
									$sql3 = "SELECT * FROM `admin_add_premiere_item` ORDER BY id DESC LIMIT 5";
									$result3 = mysqli_query($conn, $sql3);
									while ($row = mysqli_fetch_array($result3)) {
									?>
										<tr>
											<td>
												<div class="main__table-text"><?php echo $row['id'] ?></div>
											</td>
											<td>
												<div class="main__table-text"><a href="#"><?php echo $row['title'] ?></a></div>
											</td>
											<td>
												<div class="main__table-text main__table-text--grey"><?php echo $row['genre'] ?></div>
											</td>
											<td>
												<div class="main__table-text"><?php echo $row['rating'] ?></div>
											</td>
										</tr>

									<?php
									}
									?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- end dashbox -->

			</div>
		</div>
	</main>
	<!-- end main content -->

	<!-- JS -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/select2.min.js"></script>
	<script src="js/admin.js"></script>
</body>

<!-- Mirrored from hotflix.volkovdesign.com/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Aug 2023 21:47:34 GMT -->

</html>