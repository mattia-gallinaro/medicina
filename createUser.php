<?php
//finito
session_start();
require_once('./connect.php');
require_once('./checkIfExists.php');

$db = new Database();
$db_conn = $db->connect();


if ((isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role'])) && (($_POST['email'] != "" && $_POST['email'] != null) && ($_POST['password'] != "" && $_POST['password'] != null) && $_POST['role'] != "0" )) {
        $sql = sprintf(" INSERT INTO utente (email, passwd, ruolo)
    VALUES('%s', '%s', %d)
     ", $_POST['email'], $_POST['password'], $_POST['role']);
        $db_conn->query($sql);
}

header("Location: http://localhost/medicina/index.php?page=mostra_utenti");
?>