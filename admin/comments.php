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
					<a href="index.php" class="sidebar__nav-link"><i class="icon ion-ios-keypad"></i> <span>Dashboard</span></a>
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
						<li><a href="add-premiereitem.php">Add Premiere item</a></li>
						<li><a href="add_pricing_plan.php">Add Pricing Plan</a></li>
					</ul>
				</li>
				<!-- end collapse -->

				<li class="sidebar__nav-item">
					<a href="users.php" class="sidebar__nav-link"><i class="icon ion-ios-contacts"></i> <span>Users</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="comments.php" class="sidebar__nav-link sidebar__nav-link--active"><i class="icon ion-ios-chatbubbles"></i> <span>Comments</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="reviews.php" class="sidebar__nav-link"><i class="icon ion-ios-star-half"></i> <span>Reviews</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="https://Cineflix.volkovdesign.com/main/index.php" class="sidebar__nav-link"><i class="icon ion-ios-arrow-round-back"></i> <span>Back to HotFlix</span></a>
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
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Comments</h2>

						<?php
						include('conn.php');

						$sql9 = "SELECT COUNT(*) AS comment_count FROM `comment`";
						$result9 = mysqli_query($conn, $sql9);

						if ($result9) {
							$row9 = mysqli_fetch_array($result9);
							$comment_count = $row9["comment_count"];
							echo '<span class="main__title-stat">Total number of comments: ' . $comment_count . '</span>';
						} else {
							echo "Error in query: " . mysqli_error($conn);
						}

						mysqli_close($conn);
						?>


					</div>
				</div>
			</div>
			<!-- end main title -->

			<!-- comments -->
			<div class="col-12">
				<div class="main__table-wrap">
					<table class="main__table">
						<thead>
							<tr>
								<th>ID</th>
								<th>USERNAME</th>
								<th>TITLE</th>
								<th>COMMENT</th>
								<th>CRAETED DATE</th>
								<th>ACTIONS</th>
							</tr>
						</thead>

						<tbody>
							<?php
							include('conn.php');
							$sql = "SELECT * FROM `comment` ORDER BY c_id DESC";
							$result = mysqli_query($conn, $sql);
							while ($row = mysqli_fetch_array($result)) {
								// $row=mysqli_fetch_array($result);
								$comment_id = $row['c_id'];
							?>

								<tr>
									<td>
										<div class="main__table-text"><?php echo $row[0] ?></div>
									</td>
									<td>
										<div class="main__table-text"><a href="#"><?php echo $row[1] ?></a></div>
									</td>
									<td>
										<div class="main__table-text"><?php echo $row[2] ?></div>
									</td>
									<td>
										<div class="main__table-text"><?php echo $row[3] ?></div>
									</td>

									<td>
										<div class="main__table-text"><?php echo $row[4] ?></div>
									</td>
									<td>
										<div class="main__table-btns">

											<a href="#modal-edit-<?= $comment_id; ?>" class="main__table-btn main__table-btn--edit open-modal">
												<i class="icon ion-ios-create"></i>
											</a>
											<a href="#modal-delete-<?= $comment_id; ?>" class="main__table-btn main__table-btn--delete open-modal">
												<i class="icon ion-ios-trash"></i>
											</a>

										</div>

									</td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
			<!-- end comments -->


		</div>
		</div>
	</main>
	<!-- end main content -->


	<?php
	include('conn.php');

	$sqlss = "SELECT * FROM `comment`";
	$resultss = mysqli_query($conn, $sqlss);

	while ($rowsss = mysqli_fetch_array($resultss)) {
		$comment_id = $rowsss['c_id'];

	?>

		<!-- Modal delete for comment with ID  -->
		<div id="modal-delete-<?php echo $comment_id; ?>" class="zoom-anim-dialog mfp-hide modal">
			<h6 class="modal__title">Comment delete</h6>
			<p class="modal__text">Are you sure you want to permanently delete this comment?</p>
			<div class="modal__btns">
				<a href="del.php?id=<?php echo $comment_id; ?>" class="modal__btn modal__btn--apply" type="button">Delete</a>
				<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
			</div>
		</div>

		<div id="modal-edit-<?php echo $comment_id; ?>" class="zoom-anim-dialog mfp-hide modal">
			<h6 class="modal__title">Comment edit</h6>
			<p class="modal__text">Are you sure you want to edit this comment?</p>
			<div class="modal__btns">
				<a href="editcoments.php?id=<?php echo $comment_id; ?>" class="modal__btn modal__btn--apply" type="button">Edit</a>
				<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
			</div>
		</div>

	<?php
	}
	?>



	<!-- end modal delete -->

	<!-- JS -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/select2.min.js"></script>
	<script src="js/admin.js"></script>
</body>


</html>