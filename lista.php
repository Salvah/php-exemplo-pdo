<?php
include "options.php";

$pdo = new PDO("mysql:host=localhost;dbname=lista", "root", "");

$stm = $pdo->query("SELECT * FROM itens");

$rows = $stm->fetchAll(PDO::FETCH_ASSOC);

//sleep(1);
echo json_encode($rows);

?>