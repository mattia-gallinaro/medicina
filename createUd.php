<?php
session_start();
require_once('./connect.php');

$db = new Database();
$db_conn = $db->connect();

if (isset($_POST['codice']) && isset($_POST['nome']) && isset($_POST['CFU']) && isset($_POST['settore']) && isset($_POST['lang'])) {
    $sql = sprintf(" INSERT INTO piano_di_studi (codice, nome, CFU, settore)
    VALUES('%s', '%s', %d, '%s')", $_POST['codice'], $_POST['nome'], $_POST['CFU'], $_POST['settore']);
    $db_conn->query($sql);

    unset($sql);

    $sql = sprintf("INSERT INTO formativa_didattica(formativa ,didattica)
     VALUES('%s', '%s')", $_POST['lang'], $_POST['codice']);

    $db_conn->query($sql);
    //echo json_encode($_POST['lang']);
}

header('Location:http://localhost/medicina/?page=mostra_uda');
?>