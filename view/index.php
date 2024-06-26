<?php
include "../view/header.php";
if (isset($_GET["page"]) && ($_GET["page"] != "")) {
    $page = $_GET["page"];
    switch ($page) {
        case 'shop':
            include "../view/shop.php";
            break;
        case 'login':
            include "view/login.php";
            break;
        case 'register':
            include "view/register.php";
            break;
        case 'detail-product':
            include "view/detail-product.php";
            break;
        default:
            include "../view/home.php";
    }
} else {
    include "../view/home.php";
}
include "../view/footer.php";
