<?php
include('conn.php');
$catalog_id = $_GET['ID'];
$sql = "SELECT * FROM `admin_add_item_movies` WHERE id = $catalog_id";
$result = mysqli_query($conn, $sql);
$fetch = mysqli_fetch_array($result);

if (isset($_POST['sub'])) {
    $cover = $_FILES['pimg']['name'];
    $covert = $_FILES['pimg']['tmp_name'];
    $title = $_POST["title"];
    $director = $_POST["director"];
    $cast = $_POST["cast"];
    $description = $_POST["decs"];
    $releaseYear = $_POST["year"];
    $runtime = $_POST["runtime"];
    $quality = $_POST["quality"];
    $age = $_POST["Age"];
    $countries = $_POST["country"];
    $rating = $_POST["rating"];
    $genres = $_POST["genre"];
    $img2 = $_FILES['gallery']['name'];
    $img2t = $_FILES['gallery']['tmp_name'];
    $itemType = $_POST["item_Type"];

    $movie = $_FILES['movie']['name'];
    $moviet = $_FILES['movie']['tmp_name'];
    $movielink = $_POST["link"];
    $sql = "UPDATE `admin_add_item_movies` SET `cover`='$cover',`title`='$title',
    `director`='$director',`cast`='$cast',
    `description`='$description',`release_year`='$releaseYear',`runtime`='$runtime',
    `quality`='$quality',`age`='$age',`country`='$countries',
    `genre`='$genres',`upload_photos`='$img2',`item_type`='$itemType',
    `movie_file`='$movie',`link`='$movielink',`rating`='$rating' WHERE id = $catalog_id";

    mysqli_query($conn, $sql);

    move_uploaded_file($covert, "coverimages/" . $cover);
    move_uploaded_file($img2t, "uploadphotos/" . $img2);
    move_uploaded_file($moviet, "movieimg/" . $movie);
    header("Location: catalog.php");
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


    <!-- main content -->
    <main class="main">
        <div class="container-fluid">
            <div class="row">
                <!-- main title -->
                <div class="col-12">
                    <div class="main__title">
                        <h2>Add new item</h2>
                    </div>
                </div>
                <!-- end main title -->

                <!-- form -->
                <div class="col-12">
                    <form class="form" method="post" enctype="multipart/form-data">

                        <div class="col-12 col-md-5 form__cover">
                            <div class="row row--form">
                                <div class="col-12 col-sm-6 col-md-12">
                                    <div class="form__img">
                                        <label for="form__img-upload">Upload cover (270 x 400)</label>
                                        <input id="form__img-upload" name="pimg" type="file" accept=".png, .jpg, .jpeg">
                                        <img id="form__img" src="#"  value=" <?php echo $fetch[2] ?>">
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="col-12 col-md-7 form__content">
                            <div class="row row--form">
                                <div class="col-12">
                                    <input type="text" class="form__input" placeholder="Title" name="title" value="<?php echo $fetch[2] ?>">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form__input" placeholder="Director" name="director" value="<?php echo $fetch[3] ?>">
                                </div>
                                <div class="col-12">
                                    <textarea id="cast" name="cast" class="form__textarea" placeholder="Cast"><?php echo $fetch[4]; ?></textarea>
                                </div>

                                <div class="col-12">
                                    <textarea id="description" name="decs" class="form__textarea" placeholder="Description"><?php echo $fetch[5]; ?></textarea>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3">
                                    <input type="text" class="form__input" name="year" placeholder="Release year" value="<?php echo $fetch[6] ?>">
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3">
                                    <input type="text" class="form__input" name="runtime" placeholder="Running timed in minutes" value="<?php echo $fetch[7] ?>">
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3">
                                    <input type="text" class="form__input" name="quality" placeholder="Quality" value="<?php echo $fetch[8] ?>">
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3">
                                    <input type="text" class="form__input" name="Age" placeholder="Age" value="<?php echo $fetch[9] ?>">
                                </div>

                                <div class="col-12 col-lg-6">
                                    <input type="text" class="form__input" name="country" placeholder="country" value="<?php echo $fetch[10] ?>">

                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <input type="text" class="form__input" name="rating" placeholder="Rating" value="<?php echo $fetch[16]; ?>">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="text" class="form__input" name="genre" placeholder="Genre" value="<?php echo $fetch[11] ?>">
                                </div>



                                <div class="col-12">
                                    <input type="text" class="form__input" name="item_Type" placeholder="ItemType" value="<?php echo $fetch[13] ?>">
                                </div>


                                <div class="col-12">
                                    <input type="text" class="form__input" placeholder="Or add a link" name="link" value="<?php echo $fetch[15] ?>">
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="form__btn" name="sub">edit</button>
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