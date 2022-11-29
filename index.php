<?php
include "options.php";

$pdo = new PDO("mysql:host=localhost;dbname=lista", "root", "");

$pdo->exec("INSERT INTO itens(nome) VALUES ('".$_POST['name']."')");

$id = $pdo->lastInsertId();

echo json_encode(["id" => $id, 'name'=> $_POST['name']]);
?>
