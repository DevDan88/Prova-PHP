<?php
//host(servidor), user, pass, bd
$host = "localhost";
$user = "root";
$pass = "";
$database = "atividade";

try {
	$connect = new PDO("mysql:host=". $host."; dbname=". $database, $user, $pass); 
	echo "Conexão realizada com sucesso!";
} catch (Exception $e) {
	echo "Erro: " .$e->getMessage(); //O erro não deve aparecer para o usuário!!
}

?>