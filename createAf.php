<?php
session_start();
require_once('./connect.php');

$db = new Database();
$db_conn = $db->connect();


if (isset($_POST['nome']) && isset($_POST['CFU']) && isset($_POST['settore'])) {
    $sql = sprintf(" INSERT INTO piano_di_studi (codice, nome, CFU, settore)
    VALUES('%s', '%s', %d, '%s')
     ", $_POST['codice'], $_POST['nome'], $_POST['CFU'], $_POST['settore']);
    $db_conn->query($sql);
}

header("Location: http://localhost/medicina/index.php?page=mostra_at");
?>