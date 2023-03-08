<?php
$page = $_GET['page'];
switch ($page) {
    case "login":
        include_once("./login.php");
        break;
    case "homepage":
        include_once("./homepage.php");
        break;
    case "mostra_uda":
        include_once("./showFormative.php");
        break;
    case "mostra_at":
        include_once('./showtables.php');
        break;
    case 4:
        echo "edit unità";
        break;
    default:
        include("content-404.php");
}
?>