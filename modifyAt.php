<?php 
//finito
//session_start();
require_once('./connect.php');

$db =  new Database();
$db_conn = $db->connect();

if((isset($_POST['fruit']) && isset($_POST['nome_at']) && isset($_POST['CFU_at']) && isset($_POST['settore_at'])) && ( $_POST['fruit'] != "0" &&  ($_POST['nome_at'] != "" && $_POST['nome_at'] != null) && ($_POST['CFU_at'] != "" && $_POST['CFU_at'] != null) && ($_POST['settore_at'] != "" && $_POST['settore_at'] != null)) ){

    
    //echo $_POST['nome_at'] . $_POST['CFU_at'] . $_POST['settore_at']. $_POST['fruit'];
    $sql = sprintf("UPDATE piano_di_studi
    SET nome = '%s',
    CFU = %d,
    settore = '%s'
    WHERE codice = '%s'", $_POST['nome_at'], $_POST['CFU_at'], $_POST['settore_at'], $_POST['fruit']);

    $db_conn->query($sql);
}

header('Location: http://localhost/medicina/?page=mostra_at');

?>