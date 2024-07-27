<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aroma Shop - Home</title>
    <link rel="icon" href="view/img/Fevicon.png" type="image/png">
    <link rel="stylesheet" href="view/vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="view/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="view/vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="view/vendors/nice-select/nice-select.css">
    <link rel="stylesheet" href="view/vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="view/vendors/owl-carousel/owl.carousel.min.css">

    <link rel="stylesheet" href="view/css/style.css">
</head>

<body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand logo_h" href="index.php"><img src="view/img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                            <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item">
                                <a href="index.php?page=shop" class="nav-link">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?page=blog" class="nav-link">Blog</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="index.php?page=contact">Contact</a></li>
                        </ul>

                        <ul class="nav-shop">
                            <li class="nav-item"><button><i class="ti-search"></i></button></li>
                            <li class="nav-item"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">[<span id="numCart">0</span>]</span></button> </li>
                            <li class="nav-item"><a class="button button-header" href="index.php?page=login">Đăng nhập</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================ End Header Menu Area =================-->