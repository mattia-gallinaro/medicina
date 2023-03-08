<?php 
session_start();
require_once('./connect.php');

$db = new Database();
$db_conn = $db->connect();

$id = $_POST['test'];

$sql = sprintf("SELECT fd.didattica
FROM formativa_didattica fd 
inner join piano_di_studi pds on pds.codice = fd.formativa
where pds.codice = '%s'", $id);

$result =  $db_conn->query($sql);

if($result->num_rows > 0){
    unset($sql);
    $sql = sprintf("DELETE FROM formativa_didattica WHERE formativa = '%s'", $id);
    $db_conn->query($sql);
    while($row = $result->fetch_assoc()){
        unset($sql);
        $sql = sprintf("DELETE FROM piano_di_studi WHERE codice = '%s'", $row['didattica']);
        $db_conn->query($sql);
    }
}

unset($sql);
$sql = sprintf("DELETE FROM piano_di_studi WHERE codice = '%s'", $id);
$db_conn->query($sql);

header("Location: http://localhost/medicina/index.php?page=mostra_at")

?> 