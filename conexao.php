<?php
	$servidor = "";
	$usuario = "";
	$senha = "";
	$dbname = "";

	$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname)or die ('Não foi possível conectar');
