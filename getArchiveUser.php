<?php
//finito
require_once('./connect.php');
header("Content-Type: application/json; charset=UTF-8;");
$db = new Database();
$db_conn = $db->connect();

$sql = "SELECT u.id, u.email, r.descr
FROM utente u 
INNER JOIN ruolo r on r.id = u.ruolo 
WHERE 1=1";

$result = $db_conn->query($sql);


$atf_get_all = array();
while ($row = $result->fetch_assoc()) {
    array_push($atf_get_all, $row);
}

echo json_encode($atf_get_all);
?>