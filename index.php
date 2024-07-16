<?php
include "view/modules/header.php";
if (isset($_GET["page"]) && ($_GET["page"] != "")) {
    $page = $_GET["page"];
    switch ($page) {
        case 'shop':
            include "view/modules/shop.php";
            break;
        case 'blog':
            include "view/modules/blog.php";
            break;
        case 'contact':
            include "view/modules/contact.php";
            break;
        case 'login':
            include "view/modules/login.php";
            break;
        case 'register':
            include "view/modules/register.php";
            break;
        case 'detail-product':
            include "view/modules/detail-product.php";
            break;
        case 'payment':
            include "view/modules/payment.php";
            break;
        default:
            include "view/modules/home.php";
    }
} else {
    include "view/modules/home.php";
}
include "view/modules/footer.php";
