<?php 
session_start();
require_once('./connect.php');

$db = new Database();
$db_conn = $db->connect();

$id = $_POST['test'];

$sql = sprintf("SELECT fd.formativa
FROM formativa_didattica fd 
inner join piano_di_studi pds on pds.codice = fd.didattica
where pds.codice = '%s'", $id);

$result =  $db_conn->query($sql);

if($result->num_rows > 0){
    unset($sql);
    $sql = sprintf("DELETE FROM formativa_didattica WHERE didattica = '%s'", $id);
    $db_conn->query($sql);
}

unset($sql);
$sql = sprintf("DELETE FROM piano_di_studi WHERE codice = '%s'", $id);
$db_conn->query($sql);

header("Location: http://localhost/medicina/index.php?page=mostra_uda");

?> 