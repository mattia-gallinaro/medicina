<?php
require_once('./connect.php');

$db =  new Database();
$db_conn = $db->connect();

if(isset($_POST['fruit']) && isset($_POST['nome_ud']) && isset($_POST['CFU_ud']) && isset($_POST['settore_ud'])){

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