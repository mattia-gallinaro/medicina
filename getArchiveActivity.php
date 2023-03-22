<?php
//finito
require_once('./connect.php');
header("Content-Type: application/json; charset=UTF-8;");
    $db = new Database();
    $db_conn = $db->connect();

    $sql = "SELECT *
    from piano_di_studi pds 
    where 1=1;";
    $result = $db_conn->query($sql);
    $atf_get_all = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($atf_get_all, $row);
        }
    }
    unset($sql);
    $sql = "SELECT didattica
FROM formativa_didattica
WHERE 1=1";
    $result_second = $db_conn->query($sql);
    while ($row = $result_second->fetch_assoc()) {
        for ($i = 0; $i < count($atf_get_all); $i++) {
            if ($atf_get_all[$i]['codice'] == $row['didattica']) {
                array_splice($atf_get_all, $i, 1);
                break;
            }
        }
    }
    echo  json_encode($atf_get_all);
?>