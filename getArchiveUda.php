<?php
require_once('./connect.php');
header('Content-Type: application/json; charset=utf-8;');
    $db = new Database();
    $db_conn = $db->connect();

    $sql = "SELECT *
    from formativa_didattica fd
    inner join piano_di_studi pds on pds.codice = fd.didattica
    where 1=1;";
    $result = $db_conn->query($sql);
    $atf_get_all = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($atf_get_all, $row);
        }
    }

    echo json_encode($atf_get_all);
?>