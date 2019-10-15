<?php
	$servidor = "localhost:3307";
	$usuario = "root";
	$password = "labinfo";
	$dbname = "cadastro";

	$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname)or die ('Não foi possível conectar');
?>
