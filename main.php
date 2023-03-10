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
    case "modifica_uda":
        include_once('./form_add_ud.php');
        break;
    case "modifica_at":
        include_once('./form_add_ad.php');
        break;
    default:
        include_once("content-404.php");
        break;
}
?>