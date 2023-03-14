<?php 
require_once('./connect.php');

$db = new Database();
$db_conn = $db->connect();

$sql = sprintf("select *
from formativa_didattica
WHERE didattica= '%s'", $_POST['udfo']);

$result = $db_conn->query($sql);

unset($sql);

$sql = sprintf("UPDATE formativa_didattica
SET formativa = '%s'
WHERE didattica = '%s'", $_POST['atfo'], $_POST['udfo']);

$test = $db_conn->query($sql);

//echo json_encode($result->fetch_assoc());
//echo json_encode($test); 

header('Location: http://localhost/medicina/?page=mostra_uda');
?>