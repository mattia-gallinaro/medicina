<?php
//finito
require_once('./connect.php');
if ((isset($_POST['atfo']) && isset($_POST['udfo'])) && ($_POST['atfo'] != "0" && $_POST['udfo'] != "0")) {

    $db = new Database();
    $db_conn = $db->connect();

    $sql = sprintf("UPDATE formativa_didattica
SET formativa = '%s'
WHERE didattica = '%s'", $_POST['atfo'], $_POST['udfo']);

    $test = $db_conn->query($sql);
}

//echo json_encode($result->fetch_assoc());
//echo json_encode($test); 

header('Location: http://localhost/medicina/?page=mostra_uda');
?>