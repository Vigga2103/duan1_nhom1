<?php
ob_start();
session_start();
include("connection.php");
include("common.php");
include "view/modules/header.php";
// if(isset($_SESSION["loginCustomer"])){
//     header("location:index.php");
// }
if (isset($_GET["page"]) && ($_GET["page"] != "")) {
        $page = $_GET["page"];
        $page = $_GET["page"];
            $file = "view/modules/" . $page . ".php";
            include($file);
} else {
    include "view/modules/home.php";
}
include "view/modules/footer.php";
