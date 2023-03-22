<?php
require_once('./connect.php');

$db = new Database();
$db_conn = $db->connect();

$id = $_POST['test'];

$sql = sprintf("DELETE FROM utente WHERE id = %d", $id);
$db_conn->query($sql);

header("Location: http://localhost/medicina/index.php?page=mostra_utenti");
?>