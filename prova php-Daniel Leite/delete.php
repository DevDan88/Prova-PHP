<?php

include "conn.php";

$id= 3;

//Preparar
$stmt = $connect->prepare("DELETE FROM posts WHERE id= :ID");

//Trocar
$stmt-> bindParam(":ID", $id);

//Executar
$stmt-> execute();

?>