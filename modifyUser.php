<?php
require ('./connect.php');

$db =  new Database();
$db_conn = $db->connect();

if((isset($_POST['usermod']) && isset($_POST['nomeuser'])) && ($_POST['usermod'] != "0" && ($_POST['nomeuser'] != "" && $_POST['nomeuser'] != null ))){
    $sql = sprintf("UPDATE utente
    SET email = '%s'
    WHERE id = %d", $_POST['nomeuser'], $_POST['usermod']);

    $db_conn->query($sql);
}
header('Location: http://localhost/medicina/?page=mostra_utenti');
?>