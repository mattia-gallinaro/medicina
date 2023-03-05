<?php
session_start();
$page = null;
if(isset($_GET['page']))
    $page = $_GET['page'];

//if(isset($_SESSION['user_id']) || $page == null){
//    header('Location:http://localhost/medicina/index.php?page='. 'login');
//}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>BoilerPlate Registro Universitario</title>
</head>
<body>
    <div class="container-fluid" id="header">
        <?php require ("header.php")?>
        
    </div>
    <div class="container-fluid" id="main">
        <?php //require ("login.php")
        //echo json_encode(get_Attivita_Form());
        require ('./showFormative.php');
        ?>
    </div>
    <div class="container-fluid" id="footer">
        <?php require_once("footer.php");?>
    </div>
</body>
</html>