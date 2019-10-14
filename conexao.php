<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "vazio";
	$dbname = "cadastro";

	$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname)or die ('Não foi possível conectar');
