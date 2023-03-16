<?php
//finito
require_once('./connect.php');
$db = new Database();
$db_conn = $db->connect();

$sql = sprintf("DELETE FROM formativa_didattica WHERE didattica = '%s'", $_POST['cod_ud']);

$result = $db_conn->query($sql);

header("Location: http://localhost/medicina/?page=mostra_uda");
?>