<?php
//finito
session_start();
$page = null;
if(isset($_GET['page']))
    $page = $_GET['page'];
else
    $page = "index";

if((isset($_SESSION['user_id']) == false || $_SESSION['user_id'] <= 0) && $page != "login"){
    header("Location:http://localhost/medicina/index.php?page=login");
}else if($page== "index"){
    header("Location:http://localhost/medicina/index.php?page=homepage");
}



if(($page == "modifica_uda" || $page == "modifica_at" || $page == "mostra_utenti" || $page == "modifica_utenti") && $_SESSION['role_user'] != "admin"){
    header("Location: http://localhost/medicina/?page=homepage");
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>BoilerPlate Registro Universitario</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container-fluid" id="header">
        <?php
        if($page != "login"){ 
            require_once("header.php");
        }
        ?>
    </div>
    <div class="container-fluid row justify-content-center" id="main" style="padding-bottom:50px;">
        <?php 
        require ("./main.php");
        //require ("login.php")
        //echo json_encode(get_Attivita_Form());
        //require ('./showtables.php');
        ?>
    </div>
    <div class="container-fluid" id="footer">
        <?php if($page != "login"){ 
            require_once("footer.php");
        }?>
    </div>
</body>
</html>