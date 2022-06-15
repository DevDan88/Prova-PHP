<?php

include "conn.php";

$id = 2;
$title= "Dan";
$description= "sou eu";

//preparar
$stmt = $connect->prepare("UPDATE posts SET title= :TITLE, description= :DESCRIPTION WHERE id= :ID ");

//trocar
$stmt-> bindParam(":ID", $id);
$stmt-> bindParam(":TITLE", $title);
$stmt-> bindParam(":DESCRIPTION", $description);


//executar
$stmt-> execute();

echo "Atualizado com sucesso";

?>