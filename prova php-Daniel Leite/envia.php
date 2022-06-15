<?php

include "conn.php";

$title = $_POST['title'];
$description = $_POST['description'];


//preparar
$stmt = $connect->prepare("INSERT INTO posts (title, description) VALUES(:title, :description)");

//trocar
$stmt->bindParam(':title', $title);
$stmt->bindParam(':description', $description);

//executar
$stmt->execute();

header("Location: formulario.php");

?>