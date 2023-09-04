<?php
session_start();
if (!isset($_SESSION['e'])) {
    header('Location: signin.php');
}
?>
<?php
include('conn.php');
if (isset($_POST['sub'])) {
    $plan = $_POST['plan'];
    $price = $_POST['price'];
    $duration = $_POST['duration'];
    $resolution = $_POST['resolution'];
    $availibility = $_POST['availability'];
    $compatibilty = $_POST['compatibility'];
    $support = $_POST['support'];
    $sql = "INSERT INTO `add_pricing_plan`(`plan_name`, `price`, `duration`, `resolution`, `availability`, `compatibility`, `support`)  VALUES
   ('$plan','$price','$duration','$resolution','$availibility','$compatibilty','$support')";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "<script>alert('Failed to add new Pricing Plan. Please try again.');</script>";
    }
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
                    <a class="sidebar__nav-link" data-toggle="collapse" href="#collapseMenu" role="button" aria-expanded="true" aria-controls="collapseMenu"><i class="icon ion-ios-copy"></i> <span>Pages</span> <i class="icon ion-md-arrow-dropdown"></i></a>

                    <ul class="collapse show sidebar__menu" id="collapseMenu">
                        <li><a href="add-item.php">Add item</a></li>
                        <li><a href="add-premiereitem.php">Add premiere item</a></li>
                        <li><a class="active" href="add_pricing_plan.php">Add Pricing Plan</a></li>
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
                    <a href="https://Cineflix.volkovdesign.com/main/index.php" class="sidebar__nav-link"><i class="icon ion-ios-arrow-round-back"></i> <span>Back to CineFlix</span></a>
                </li>
            </ul>
        </div>
        <!-- end sidebar nav -->

        <!-- sidebar copyright -->
        <div class="sidebar__copyright">© HOTFLIX, 2019—2021. <br>Create by <a href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Dmitry Volkov</a></div>
        <!-- end sidebar copyright -->
    </div>
    <!-- end sidebar -->

    <!-- main content -->

    <main class="main">
        <div class="container">
            <div class="row">
                <!-- main title -->
                <div class="col-12">
                    <div class="main__title">
                        <h2><B>ADD PRICING PLAN</B></h2>
                    </div>
                </div>
                <!-- end main title -->

                <!-- form -->
                <div class="col-12">
                    <form class="form" method="post">
                        <div class="row row--form">


                            <div class="col-12 col-md-7 form__content">
                                <div class="row row--form">
                                    <div class="col-12">
                                        <input type="text" class="form__input" placeholder="Plan Name" name="plan">
                                    </div><br><br>


                                    <div class="col-12">
                                        <input type="text" class="form__input" name="price" placeholder="Price">
                                    </div>

                                    <div class="col-12 ">
                                        <input type="text" class="form__input" name="duration" placeholder="Duration">
                                    </div>

                                    <div class="col-12 ">
                                        <input type="text" class="form__input" name="resolution" placeholder="Resolution">
                                    </div>

                                    <div class="col-12 ">
                                        <input type="text" class="form__input" name="availability" placeholder="Availability">
                                    </div>

                                    <div class="col-12">
                                        <input type="text" class="form__input" name="compatibility" placeholder="Compatibility">
                                    </div>

                                    <div class="col-12 ">
                                        <input type="text" class="form__input" name="support" placeholder="Support">
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="form__btn" name="sub">publish</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end form -->
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


</html>