<?php
require_once('./connect.php');

function checkExistPds($code){
    global $db_conn;

    $sql = sprintf("SELECT *
    FROM piano_di_studi
    WHERE codice = '%s' ", $code);
    $result = $db_conn->query($sql);

    if($result->num_rows >0 ){
        return false;
    }else{
        return true;
    }
}
?>