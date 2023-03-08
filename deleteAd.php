<?php 
session_start();
require_once('./connect.php');

$db = new Database();
$db_conn = $db->connect();


?>