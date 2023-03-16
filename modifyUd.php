<?php
//finito
require_once('./connect.php');

$db =  new Database();
$db_conn = $db->connect();

if((isset($_POST['fruit']) && isset($_POST['nome_ud']) && isset($_POST['CFU_ud']) && isset($_POST['settore_ud'])) && ( $_POST['fruit'] != "0" &&  ($_POST['nome_ud'] != "" && $_POST['nome_ud'] != null) && ($_POST['CFU_ud'] != "" && $_POST['CFU_ud'] != null) && ($_POST['settore_ud'] != "" && $_POST['settore_ud'] != null))){

    echo $_POST['nome_ud'] . $_POST['CFU_ud'] .$_POST['settore_ud']. $_POST['fruit'];
    $sql = sprintf("UPDATE piano_di_studi
    SET nome = '%s',
    CFU = %d,
    settore = '%s'
    WHERE codice = '%s'", $_POST['nome_ud'], $_POST['CFU_ud'], $_POST['settore_ud'], $_POST['fruit']);

    $db_conn->query($sql);
}

header('Location: http://localhost/medicina/?page=mostra_uda');
?>