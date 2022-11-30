<?php
include "options.php";

$pdo = new PDO("mysql:host=localhost;dbname=lista", "root", "");

$pdo->exec("DELETE FROM itens WHERE id = '{$_GET['id']}'");

echo json_encode((int)$_GET['id']);
?>
