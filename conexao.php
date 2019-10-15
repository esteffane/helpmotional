<?php
	$servidor = "localhost:3307";
	$usuario = "root";
	$password = "";
	$dbname = "cadastro";

	$conexao = mysqli_connect($servidor, $usuario, $password, $dbname);

if (mysqli_connect($servidor, $usuario, $password, $dbname)) {
    //echo "Conexão estabelicida";
}
else{
	echo "Não foi possível conectar ao banco de dados";
}

?>

