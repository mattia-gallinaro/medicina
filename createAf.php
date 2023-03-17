<?php
//finito
session_start();
require_once('./connect.php');
require_once('./checkIfExists.php');

$db = new Database();
$db_conn = $db->connect();


if ((isset($_POST['codice']) && isset($_POST['nome']) && isset($_POST['CFU']) && isset($_POST['settore'])) && (($_POST['codice'] != "" && $_POST['codice'] != null) && ($_POST['nome'] != "" && $_POST['nome'] != null) && ($_POST['CFU'] != "" && $_POST['CFU'] != null) && ($_POST['settore'] != "" && $_POST['settore'] != null))) {
    if (checkExistPds($_POST['codice'])) {
        $sql = sprintf(" INSERT INTO piano_di_studi (codice, nome, CFU, settore)
    VALUES('%s', '%s', %d, '%s')
     ", $_POST['codice'], $_POST['nome'], $_POST['CFU'], $_POST['settore']);
        $db_conn->query($sql);
    }
}

header("Location: http://localhost/medicina/index.php?page=mostra_at");
?>