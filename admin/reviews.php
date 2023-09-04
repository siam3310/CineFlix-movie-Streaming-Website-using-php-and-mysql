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


            <!-- end header menu btn -->
        </div>
    </header>
    <!-- end header -->

    <!-- sidebar -->
    <div class="sidebar">
        <!-- sidebar logo -->
        <a href="index.php" class="sidebar__logo">
            <img src="img/123.png" alt="">
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
                <i class="icon ion-ios-log-out"></i>
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
                    <a href="comments.php" class="sidebar__nav-link "><i class="icon ion-ios-star-half"></i> <span>Comments</span></a>
                </li>


                <li class="sidebar__nav-item">
                    <a href="reviews.php" class="sidebar__nav-link sidebar__nav-link--active"><i class="icon ion-ios-star-half"></i> <span>Reviews</span></a>
                </li>


                <li class="sidebar__nav-item">
                    <a href="https://cineflix.volkovdesign.com/main/index.php" class="sidebar__nav-link"><i class="icon ion-ios-arrow-round-back"></i> <span>Back to CineFlix</span></a>
                </li>
            </ul>
        </div>
        <!-- end sidebar nav -->

        <!-- sidebar copyright -->
        <div class="sidebar__copyright">© CINEFLIX, 2019—2021. <br>Create by <a href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Dmitry Volkov</a></div>
        <!-- end sidebar copyright -->
    </div>
    <!-- end sidebar -->

    <!-- search -->

    <style>
        .results {
            margin-top: 20px;
            color: white;

        }

        .result {
            padding: 10px;
            background-color: #1a191f;
        }

        .no-results {
            color: red;
            font-weight: bold;
        }
    </style>

    <!-- main content -->
    <main class="main">
        <div class="container-fluid">
            <div class="row">
                <!-- main title -->
                <div class="col-12">
                    <div class="main__title">
                        <h2>Reviews</h2>
                        <?php
                        include('conn.php');

                        $sql9 = "SELECT COUNT(*) AS review_count FROM review_detail";
                        $result9 = mysqli_query($conn, $sql9);

                        if ($result9) {
                            $row9 = mysqli_fetch_array($result9);
                            $review_count = $row9["review_count"];
                            echo '<span class="main__title-stat">Total number of reviews: ' . $review_count . '</span>';
                        } else {
                            echo "Error in query: " . mysqli_error($conn);
                        }

                        mysqli_close($conn);
                        ?>
                        <div class="main__title-wrap">

                            <!-- search -->

                            <?php
                            include('conn.php');

                            if (isset($_POST['query'])) {
                                $search_query = $_POST['query'];

                                // Check if the search query is not empty
                                if (!empty($search_query)) {
                                    $sqls = "SELECT * FROM `review_detail` WHERE u_id LIKE '%$search_query%' OR u_name LIKE '%$search_query%' OR title LIKE '%$search_query%' OR review LIKE '%$search_query%'";
                                    $results = mysqli_query($conn, $sqls);

                                    if ($results->num_rows > 0) {
                                        echo '<div class="results">';
                                        while ($row = $results->fetch_assoc()) {
                                            echo '<div class="result">';
                                            echo '<strong>User ID:</strong> ' . $row['u_id'] . '<br>';
                                            echo '<strong>User Name:</strong> ' . $row['u_name'] . '<br>';
                                            echo '<strong>Title:</strong> ' . $row['title'] . '<br>';
                                            echo '<strong>Review:</strong> ' . $row['review'] . '<br>';
                                            echo '<strong>Rating:</strong> ' . $row['rating'] . '<br>';
                                            echo '</div>';
                                        }
                                        echo '</div>';
                                    } else {
                                        echo '<p class="no-results">No results found.</p>';
                                    }
                                } else {
                                    echo '<p class="no-results">Please enter a search query.</p>';
                                }
                            }
                            ?>

                            <form class="main__title-form" method="post">
                                <input type="text" name="query" placeholder="Find user...">
                                <button type="submit" name="submit">
                                    <i class="icon ion-ios-search"></i>
                                </button>
                            </form>
                            <!-- end search -->
                        </div>

                    </div>
                </div>
            </div>

            <!-- end main title -->

            <!-- reviews -->
            <div class="col-12">
                <div class="main__table-wrap">
                    <table class="main__table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>USERNAME</th>
                                <th>TITLE</th>
                                <th>REVIEW</th>
                                <th>RATING</th>
                                <th>CRAETED DATE</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            include('conn.php');
                            $sql = "SELECT * FROM `review_detail` ORDER BY u_id ASC;";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                                $review_id = $row['u_id'];
                            ?>

                                <tr>
                                    <td>
                                        <div class="main__table-text"><?php echo $row[0] ?></div>
                                    </td>
                                    <td>
                                        <div class="main__table-text"><?php echo $row[1] ?></a></div>
                                    </td>
                                    <td>
                                        <div class="main__table-text"><?php echo $row[2] ?></div>
                                    </td>
                                    <td>
                                        <div class="main__table-text"><?php echo $row[3] ?></div>
                                    </td>
                                    <td>
                                        <div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> <?php echo $row[4] ?></div>
                                    </td>
                                    <td>
                                        <div class="main__table-text"><?php echo $row[5] ?></div>
                                    </td>

                                    <td>
                                        <div class="main__table-btns">


                                            <a href="#modal-edit-<?= $review_id; ?>" class="main__table-btn main__table-btn--edit open-modal">
                                                <i class="icon ion-ios-create"></i>
                                            </a>
                                            <a href="#modal-delete-<?= $review_id; ?>" class="main__table-btn main__table-btn--delete open-modal">
                                                <i class="icon ion-ios-trash"></i>
                                            </a>
                                        <?php
                                    }
                                        ?>
                                        </div>

                                    </td>
                                </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end reviews -->


        </div>
        </div>
    </main>
    <!-- end main content -->


    <?php
    include('conn.php');

    $sqlss = "SELECT * FROM `review_detail`";
    $resultss = mysqli_query($conn, $sqlss);

    while ($rowsss = mysqli_fetch_array($resultss)) {
        $review_id = $rowsss['u_id'];

    ?>

        <!-- Modal delete for reviews with ID  -->
        <div id="modal-delete-<?php echo $review_id; ?>" class="zoom-anim-dialog mfp-hide modal">
            <h6 class="modal__title">Review delete</h6>
            <p class="modal__text">Are you sure you want to permanently delete this review?</p>
            <div class="modal__btns">
                <a href="delreview.php?id=<?php echo $review_id; ?>" class="modal__btn modal__btn--apply" type="button">Delete</a>
                <button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
            </div>
        </div>

        <div id="modal-edit-<?php echo $review_id; ?>" class="zoom-anim-dialog mfp-hide modal">
            <h6 class="modal__title">review edit</h6>
            <p class="modal__text">Are you sure you want to edit this review?</p>
            <div class="modal__btns">
                <a href="edit_reviews.php?id=<?php echo $review_id; ?>" class="modal__btn modal__btn--apply" type="button">Edit</a>
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