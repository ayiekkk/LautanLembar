 <?php

    $page = isset($_GET['page']) ? $_GET['page'] : "home";

    if ($page == "home") {
        include "page/home.php";
    } elseif ($page == "catalog") {
        include "page/catalog.php";
    } 
    ?>
