<?php
include('conn.php');

if (isset($_GET['ID'])) {
    $catalog_id = $_GET['ID'];
    $sql = "DELETE FROM `admin_add_item_movies` WHERE `id` = $catalog_id";
    $result = mysqli_query($conn, $sql);
   

    if ($result) {
       header("Location: catalog.php" );
    } 
}
