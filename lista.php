<?php
include "options.php";

$pdo = new PDO("mysql:host=localhost;dbname=lista", "root", "");

$stm = $pdo->query("SELECT * FROM itens");

$rows = $stm->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($rows);

?>